<?php
namespace Playform\Feeds;

/**
 * Skriver produkttekster med Claude.
 *
 * Ejeren godkender ikke hver tekst. I stedet faktatjekkes teksten automatisk (check()): alle tal skal
 * stå i butikkens data, og der må ikke være reklamesuperlativer. Består den, udgives den med det samme.
 * Ellers venter den under "Tekster til godkendelse" med en forklaring.
 */
final class AiWriter {

	public const META_DRAFT  = '_pf_ai_draft';
	public const META_STATUS = '_pf_ai_status';   // pending | approved | rejected
	public const META_DATE   = '_pf_ai_date';
	public const META_VERSION = '_pf_ai_version'; // 2 = lang tekst med faste afsnit (nov. 2026)
	public const VERSION      = 2;

	private const SYSTEM = <<<TXT
Du skriver produkttekster på dansk til Fitbase, en side der samler fitnessudstyr fra flere danske webshops. Læseren overvejer at købe produktet til brug derhjemme og vil gerne forstå, om det passer til vedkommende.

Regler – de er vigtigere end alt andet:
1. Brug KUN fakta, der står i produktdataene. Opfind aldrig mål, vægt, hastighed, motorkraft, materialer, garanti, programmer eller andre specifikationer.
2. Står en oplysning ikke i dataene, så nævn den ikke som en egenskab ved produktet. Er dataene sparsomme, så fyld ud med generel, sand købsrådgivning for produkttypen – aldrig med gæt om netop dette produkt.
3. Generel købsrådgivning skal tydeligt være generel ("Når du vælger en romaskine, er det en god idé at …"), ikke en påstand om dette produkt. Brug ingen tal i den generelle rådgivning – kun tal, der står i produktdataene.
4. Ingen superlativer uden belæg ("markedets bedste", "perfekt"). Ingen priser, rabatter eller butiksnavne – dem viser siden selv.
5. Naturligt, venligt dansk. Du-form. Skriv konkret og nyttigt, ikke fyldtekst.

Opbygning af html (ca. 300–450 ord i alt):
- 1–2 indledende afsnit (<p>): hvad produktet er, og hvad det kan bruges til – ud fra navn, kategori og beskrivelse.
- <h3>Det får du</h3> og en punktliste (<ul><li>) med de egenskaber, der står i dataene. Udelad afsnittet, hvis dataene ikke nævner nogen egenskaber.
- <h3>Hvem passer den til?</h3> og 1 afsnit: hvem produktet egner sig til, ud fra dataene og produkttypen.
- <h3>Det skal du overveje</h3> og 1–2 afsnit med generel købsrådgivning for produkttypen (fx plads, støj, opbevaring, vedligeholdelse, komfort), så læseren kan vurdere, om produktet passer til netop dem.

Svar KUN med JSON:
{"html": "<p>…</p>…", "fordele": ["…"], "ulemper": ["…"]}
- html: kun <p>, <h3>, <ul>, <li>, <strong>.
- fordele/ulemper: 0–3 punkter hver, kun hvis dataene understøtter dem. Ellers tomme lister.
TXT;

	/** Loft over antal tekster pr. døgn, så et fejlbehæftet job aldrig kan løbe løbsk. */
	public const DAILY_CAP_DEFAULT = 200;

	public static function generate( int $product_id ): array {
		$cap   = (int) get_option( 'playform_ai_daily_cap', self::DAILY_CAP_DEFAULT );
		$today = current_time( 'Y-m-d' );
		$used  = (array) get_option( 'playform_ai_usage', [] );
		if ( ( $used[ $today ] ?? 0 ) >= $cap ) {
			throw new \RuntimeException( "Dagens loft på $cap tekster er nået." );
		}
		$product = wc_get_product( $product_id );
		if ( ! $product ) {
			throw new \RuntimeException( "Produkt $product_id findes ikke." );
		}
		$attrs = (array) get_post_meta( $product_id, ProductSync::META_ATTR, true );
		$cat   = (string) get_post_meta( $product_id, ProductSync::META_CATEGORY, true );
		$facts = [
			'navn'        => $product->get_name(),
			'mærke'       => (string) get_post_meta( $product_id, ProductSync::META_BRAND, true ),
			'kategori'    => Config::categories()[ $cat ]['name'] ?? $cat,
			'beskrivelse' => (string) get_post_meta( $product_id, ProductSync::META_FEED_DESC, true ),
			'egenskaber'  => $attrs,
			'kategorier'  => array_values( array_filter( (array) wp_get_post_terms( $product_id, 'product_cat', [ 'fields' => 'names' ] ) ) ),
		];
		$answer = Ai::json( Ai::ask( Ai::MODEL_WRITING, self::SYSTEM, "Produktdata:\n" . wp_json_encode( $facts, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ), 3000 ) );
		if ( ! is_array( $answer ) || empty( $answer['html'] ) ) {
			throw new \RuntimeException( 'Uventet svar fra Claude.' );
		}
		$draft = [
			'html'    => wp_kses( $answer['html'], [ 'p' => [], 'h3' => [], 'ul' => [], 'li' => [], 'strong' => [] ] ),
			'pros'    => array_slice( array_map( 'sanitize_text_field', (array) ( $answer['fordele'] ?? [] ) ), 0, 3 ),
			'cons'    => array_slice( array_map( 'sanitize_text_field', (array) ( $answer['ulemper'] ?? [] ) ), 0, 3 ),
			'sources' => $facts,
		];
		$draft['problems'] = self::check( $draft, $facts );
		update_post_meta( $product_id, self::META_DRAFT, $draft );
		update_post_meta( $product_id, self::META_STATUS, 'pending' );
		update_post_meta( $product_id, self::META_DATE, current_time( 'mysql' ) );
		update_post_meta( $product_id, self::META_VERSION, self::VERSION );
		$used = array_slice( [ $today => ( $used[ $today ] ?? 0 ) + 1 ] + $used, 0, 60, true );
		update_option( 'playform_ai_usage', $used, false );
		if ( ! $draft['problems'] && get_option( 'playform_ai_autopublish', '1' ) === '1' ) {
			self::approve( $product_id );
		}
		return $draft;
	}

	/**
	 * Automatisk faktatjek. Returnerer en liste med problemer (tom = teksten må udgives).
	 * - Hvert tal i teksten skal findes i produktdataene (ellers kan det være opfundet).
	 * - Ingen reklamesuperlativer.
	 */
	public static function check( array $draft, array $facts ): array {
		$text   = wp_strip_all_tags( ( $draft['html'] ?? '' ) . ' ' . implode( ' ', (array) ( $draft['pros'] ?? [] ) ) . ' ' . implode( ' ', (array) ( $draft['cons'] ?? [] ) ) );
		$source = wp_json_encode( $facts, JSON_UNESCAPED_UNICODE );
		$nums   = static function ( string $s ): array {
			preg_match_all( '/\d+(?:[.,]\d+)*/u', $s, $m );
			// "1.500" og "1500" er samme tal; "2,5" og "2.5" også.
			return array_unique( array_map( static fn( $n ) => preg_match( '/^\d{1,3}(\.\d{3})+$/', $n ) ? str_replace( '.', '', $n ) : str_replace( ',', '.', $n ), $m[0] ) );
		};
		$known    = array_flip( $nums( $source ) );
		$problems = [];
		foreach ( $nums( $text ) as $n ) {
			if ( ! isset( $known[ $n ] ) ) {
				$problems[] = "Tallet $n står ikke i butikkens data.";
			}
		}
		if ( preg_match( '/\b(markedets bedste|bedste på markedet|perfekt|perfekte|uovertruffen|verdens bedste|garanteret)\b/iu', $text, $m ) ) {
			$problems[] = 'Reklameord: "' . $m[1] . '".';
		}
		return $problems;
	}

	/** Godkender udkastet (evt. rettet af redaktøren) og viser det på siden. */
	public static function approve( int $product_id, ?string $html = null, ?array $pros = null, ?array $cons = null ): void {
		$draft = (array) get_post_meta( $product_id, self::META_DRAFT, true );
		$html  = $html ?? ( $draft['html'] ?? '' );
		wp_update_post( [ 'ID' => $product_id, 'post_content' => wp_kses_post( $html ) ] );
		update_post_meta( $product_id, '_pf_pros', array_values( array_filter( $pros ?? ( $draft['pros'] ?? [] ) ) ) );
		update_post_meta( $product_id, '_pf_cons', array_values( array_filter( $cons ?? ( $draft['cons'] ?? [] ) ) ) );
		update_post_meta( $product_id, self::META_STATUS, 'approved' );
	}

	public static function reject( int $product_id ): void {
		update_post_meta( $product_id, self::META_STATUS, 'rejected' );
	}

	/**
	 * Produkter, der skal have tekst: først dem uden tekst, derefter automatiske tekster i det gamle, korte
	 * format (uden META_VERSION). Vigtigste først (på lager, højeste pris).
	 */
	public static function queue( int $limit, string $category = '' ): array {
		$base = [
			'post_type'      => 'product',
			'post_status'    => 'publish',
			'fields'         => 'ids',
			'meta_key'       => '_price',
			'orderby'        => 'meta_value_num',
			'order'          => 'DESC',
		];
		if ( $category ) {
			$base['tax_query'] = [ [ 'taxonomy' => 'product_cat', 'field' => 'slug', 'terms' => $category ] ];
		}
		$in_stock = [ 'key' => ProductSync::META_IN_STOCK, 'value' => 1, 'type' => 'NUMERIC' ];
		$ids      = get_posts( $base + [ 'posts_per_page' => $limit, 'meta_query' => [ [ 'key' => self::META_STATUS, 'compare' => 'NOT EXISTS' ], $in_stock ] ] );
		if ( count( $ids ) < $limit ) {
			$old = get_posts(
				$base + [
					'posts_per_page' => $limit - count( $ids ),
					'meta_query'     => [
						[ 'key' => self::META_STATUS, 'value' => 'approved' ],
						[ 'key' => self::META_VERSION, 'compare' => 'NOT EXISTS' ],
						$in_stock,
					],
				]
			);
			$ids = array_merge( $ids, $old );
		}
		return $ids;
	}
}
