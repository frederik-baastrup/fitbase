<?php
/**
 * Siden "Sådan fungerer {navn}" (/saadan-fungerer-det/): hvor produkterne kommer fra (butikkernes egne feeds via
 * Partner-ads), hvordan vi tjener penge, og hvad loven siger om at vise mærkevarer. Ejerens ønske 5. nov. 2026:
 * en side, han kan sende til butikker og leverandører, der spørger, om vi må vise produkterne.
 * Teksten ligger her i koden (ikke i databasen). Den er bevidst formuleret forskelligt på hvert site (samme fakta),
 * så søgemaskiner ikke ser dublet-indhold på tværs af domænerne. Ret fakta på alle sites, men kopiér ikke teksten.
 */

defined( 'ABSPATH' ) || exit;

const PLAYFORM_HOW_SLUG = 'saadan-fungerer-det';

function playform_how_url( string $anchor = '' ): string {
	return home_url( '/' . PLAYFORM_HOW_SLUG . '/' ) . ( $anchor !== '' ? '#' . $anchor : '' );
}

function playform_how_title(): string {
	return 'Sådan fungerer ' . playform_site( 'name' );
}

/** Opretter siden, hvis den mangler (kaldes efter hver udrulning). Indholdet skrives af skabelonen. */
function playform_ensure_how_page(): void {
	$page = get_page_by_path( PLAYFORM_HOW_SLUG );
	if ( ! $page ) {
		wp_insert_post(
			[
				'post_type'    => 'page',
				'post_status'  => 'publish',
				'post_name'    => PLAYFORM_HOW_SLUG,
				'post_title'   => playform_how_title(),
				'post_excerpt' => 'Hvor varerne stammer fra, hvordan siden tjener penge, og hvorfor vi må vise produkterne.',
				'post_content' => '',
			]
		);
	} else {
		$upd = [];
		if ( $page->post_title !== playform_how_title() ) {
			$upd['post_title'] = playform_how_title();
		}
		// Uddraget (bruges som metabeskrivelse) skiftes kun, hvis det stadig er den gamle fælles tekst.
		if ( $page->post_excerpt === 'Hvor produkterne kommer fra, hvordan vi tjener penge, og hvorfor vi må vise dem.' ) {
			$upd['post_excerpt'] = 'Hvor varerne stammer fra, hvordan siden tjener penge, og hvorfor vi må vise produkterne.';
		}
		if ( $upd ) {
			wp_update_post( [ 'ID' => $page->ID ] + $upd );
		}
	}
}

function playform_how_html(): string {
	$name   = esc_html( playform_site( 'name' ) );
	$niche  = esc_html( playform_site( 'niche' ) );
	$email  = sanitize_email( playform_site( 'email' ) );
	$mail   = '<a href="mailto:' . esc_attr( $email ) . '">' . esc_html( $email ) . '</a>';
	$shops  = function_exists( 'playform_shop_names' ) ? count( playform_shop_names() ) : 0;
	$shopsl = '<a href="' . esc_url( home_url( '/vores-butikker/' ) ) . '">' . ( $shops > 1 ? "$shops danske webshops" : 'danske webshops' ) . '</a>';
	$money  = esc_url( home_url( '/saadan-tjener-vi-penge/' ) );
	$co     = esc_html( playform_site( 'company' ) . ', CVR ' . playform_site( 'cvr' ) );

	return <<<HTML
<p class="lead">$name er ikke en webshop, men en tjeneste, der sammenligner $niche. Vi har hverken lager eller kasse, og vi importerer ikke selv varer. Hvert produkt på siden er et tilbud fra en af vores $shopsl. Klikker du på "Gå til butik", foregår handlen direkte mellem dig og butikken.</p>

<h2 id="feeds">Hvor stammer produkterne fra?</h2>
<p>Hver butik leverer selv sine produktdata i et produktfeed. Det er en fil med navn, pris, lagerstatus, billeder og beskrivelse af de varer, butikken gerne vil have markedsført. Filen går gennem Partner-ads, et dansk affiliate-netværk, og formålet med den er netop, at sider som $name kan vise varerne.</p>
<ul>
<li>En butik kommer kun med, hvis den har et affiliate-program med produktfeed og har godkendt $name som partner.</li>
<li>Vi viser udelukkende varer, som butikken selv har lagt i sit feed – med butikkens pris og lagerstatus.</li>
<li>Feedsne hentes morgen og aften. Når en butik ændrer en pris eller tager en vare ud af feedet, kan du se det her efter næste opdatering.</li>
<li>Produktdata og billeder kommer fra butikkens feed. Vi gemmer billederne på vores egen server – det gør siden hurtigere, og dine besøg deles ikke med andre.</li>
</ul>

<h2 id="penge">Sådan tjener vi penge</h2>
<p>Det er gratis at bruge $name. Handler du hos en butik efter at have klikket videre herfra, betaler butikken os en provision – du betaler ikke en krone mere. Alle links til butikkerne er derfor annoncer, og vi skriver tydeligt på siden, at den indeholder reklamelinks. Du kan læse mere på siden <a href="$money">Sådan tjener vi penge</a>.</p>
<p>Under tilbud viser vi kun tilbud, som butikkerne selv har lavet, og højst i 14 dage. Har vi fulgt butikkens pris i de 30 dage op til tilbuddet, bruger vi den laveste pris i den periode som førpris. Har vi ikke det, viser vi butikkens egen førpris og skriver tydeligt, at den er butikkens.</p>

<h2 id="leverandoerer">Til leverandører, distributører og mærkeejere</h2>
<p>Alt, hvad du ser på $name, er tilbud fra navngivne danske butikker, der selv har valgt at markedsføre varerne via deres feed. Vi handler ikke selv med varerne. Om en bestemt butik må sælge et bestemt produkt, er derfor et spørgsmål mellem leverandøren og butikken. Tager butikken varen ud af sit feed, er den også væk fra $name efter næste opdatering.</p>
<p>Vi kalder os aldrig forhandler, officiel partner eller autoriseret af et mærke. Et mærkenavn bruger vi kun til at beskrive, hvilken vare det drejer sig om.</p>

<h2 id="lovgivning">Hvad siger loven?</h2>
<p>Ind imellem bliver vi spurgt, om en importør eller distributør kan forhindre, at et mærke bliver vist eller solgt i Danmark. Kort sagt kan mærkeejeren ikke bestemme, hvem der sælger originale varer videre, når de først er solgt lovligt i EU. De vigtigste regler er disse:</p>
<h3>Videresalg af originale varer (konsumption)</h3>
<p>Varemærkeretten til den enkelte vare er udtømt, når varen er bragt i omsætning i EU/EØS af varemærkeindehaveren selv eller med dennes samtykke. Derefter kan mærkeejeren ikke bruge varemærket til at stoppe, at varen bliver solgt videre eller markedsført under mærkets navn. Reglen står i varemærkelovens § 10 a og i artikel 15 i EU's varemærkedirektiv. Der gælder en undtagelse, hvis der er en rimelig grund – for eksempel at varen er blevet ændret eller forringet.</p>
<h3>Fri bevægelighed i EU</h3>
<p>Udgangspunktet er, at varer, der er solgt lovligt i et EU-land, også må sælges i de øvrige (artikel 34 i Traktaten om Den Europæiske Unions Funktionsmåde). En aftale om eneforhandling i Danmark gælder kun mellem dem, der har indgået den. Distributøren får ikke gennem aftalen ret til at stoppe andre i at sælge varer, som er købt lovligt i et andet EU-land.</p>
<h3>Salg og annoncering online</h3>
<p>Efter EU's konkurrenceregler for leverandøraftaler (gruppefritagelsesforordningen for vertikale aftaler, forordning 2022/720) må en leverandør som udgangspunkt ikke forbyde sine forhandlere at sælge på nettet, og den må heller ikke helt afskære dem fra en hel annoncekanal, fx prissammenligningstjenester. Leverandøren må gerne stille krav til kvaliteten af præsentationen, men det aftales mellem leverandøren og butikken.</p>
<h3>Mærkenavne og billeder</h3>
<p>Man må gerne bruge et mærkenavn til at fortælle, hvilken vare der er til salg, når det sker efter god markedsføringsskik og ikke skaber indtryk af en forbindelse til mærkeejeren, som ikke eksisterer (artikel 14 i EU's varemærkedirektiv). Tekster og billeder stammer fra butikkens eget feed, som butikken stiller til rådighed netop til dette formål.</p>
<h3>Markedsføring og priser</h3>
<p>Vi overholder markedsføringslovens krav om, at reklame tydeligt skal fremstå som reklame, og prismærkningsreglerne, der siger, at førprisen i et tilbud skal være den laveste pris i de 30 dage før tilbuddet.</p>
<p class="note">Dette er en generel orientering, ikke juridisk rådgivning.</p>

<h2 id="kontakt">Hører et produkt ikke hjemme her?</h2>
<p>Repræsenterer du en butik, en leverandør eller en rettighedshaver, og mener du, at et produkt, et billede eller en tekst ikke skal vises på $name? Send en mail til $mail med et link til produktet og en kort forklaring. Vi vender hurtigt tilbage og fjerner indholdet, hvis der er grund til det. Butikker, der gerne vil have deres produkter med, er også velkomne til at skrive.</p>
<p>$name drives af $co.</p>
HTML;
}
