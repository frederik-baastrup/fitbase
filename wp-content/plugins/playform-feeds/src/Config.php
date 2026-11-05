<?php
namespace Playform\Feeds;

/**
 * Al opsætning ét sted: shops, kategoritræ og sorteringsregler.
 * En ny niche (fx hvidevarer) er en ny udgave af denne fil.
 */
final class Config {

	/** Sitets navn og kontaktoplysninger. Bruges af temaet (playform_site(), fx i kampagnerne). */
	public static function site(): array {
		return [
			'name'    => 'Fitbase',
			'domain'  => 'fitbase.dk',
			'email'   => 'kontakt@fitbase.dk',
			'niche'   => 'fitnessudstyr',
			'tagline' => 'Fitnessudstyr fra flere danske webshops samlet ét sted',
			'company' => 'Mondae',
			'cvr'     => '37208329',
			'address' => 'Rønnevej 19 B, kl., 5270 Odense N',
			'owner'   => 'Frederik Baastrup',
			'accent'  => '#23D200',
		];
	}

	/** Partner-ads feeds. Kan overstyres med option 'playform_shops'. */
	public static function shops(): array {
		$base     = 'https://www.partner-ads.com/dk/feed_udlaes.php?partnerid=14854';
		$defaults = [
			'apuls'                 => [ 'name' => 'Apuls.dk',              'url' => "$base&bannerid=46187&feedid=637" ],
			'fitnessshoppen'        => [ 'name' => 'Fitnessshoppen.dk',     'url' => "$base&bannerid=74933&feedid=1680" ],
			'traeningspartner'      => [ 'name' => 'Træningspartner',       'url' => "$base&bannerid=67325&feedid=1378" ],
			'den-intelligente-krop' => [ 'name' => 'Den Intelligente Krop', 'url' => "$base&bannerid=38097&feedid=400" ],
			'optimasport'           => [ 'name' => 'OptimaSport.dk',        'url' => "$base&bannerid=83091&feedid=2014" ],
			// Tilføjet 5. nov. 2026 (godkendte programmer; testet mod kategorierne – tøj, kosttilskud m.m. holdes ude af reglerne).
			'ascendic'              => [ 'name' => 'Ascendic.dk',           'url' => "$base&bannerid=94094&feedid=2506" ],
			'billig-fitness'        => [ 'name' => 'Billig-fitness.dk',     'url' => "$base&bannerid=90815&feedid=2352" ],
			'fitnessfree'           => [ 'name' => 'FITNESSFREE.DK',        'url' => "$base&bannerid=118836&feedid=4509" ],
			'fitnessgruppen'        => [ 'name' => 'Fitnessgruppen.dk',     'url' => "$base&bannerid=106349&feedid=3301" ],
			'kinetik'               => [ 'name' => 'KINETIK',               'url' => "$base&bannerid=107033&feedid=3362" ],
			'workwalk'              => [ 'name' => 'WorkWalk.dk',           'url' => "$base&bannerid=111924&feedid=3772" ],
			'mysports'              => [ 'name' => 'MySports',              'url' => "$base&bannerid=112544&feedid=3845" ],
			// Kun dame- og herrecykler (til købsguiderne om citybikes). Hver størrelse er en række i feedet,
			// så rækker med samme navn samles til ét produkt ('group_variants').
			'cykelexperten'         => [
				'name'           => 'Cykelexperten.dk',
				'url'            => "$base&bannerid=35898&feedid=345",
				'category_map'   => [ 'cykler > damecykler' => 'damecykler', 'cykler > herrecykler' => 'herrecykler' ],
				'group_variants' => true,
			],
		];
		$custom = get_option( 'playform_shops' );
		return is_array( $custom ) && $custom ? $custom : $defaults;
	}

	/**
	 * Playforms kategorier. 'match' testes først mod produktnavnet, derefter mod butikkens kategori.
	 * Rækkefølgen betyder noget: den første kategori, der matcher, vinder.
	 */
	public static function categories(): array {
		return [
			'trampoliner'        => [ 'name' => 'Trampoliner', 'match' => 'trampolin|mini-?tramp|rebounder' ],
			'lobebaand'          => [ 'name' => 'Løbebånd', 'match' => 'løbebånd|gåbånd|walking ?pad|curve runner|treadmill' ],
			'motionscykler'      => [ 'name' => 'Motionscykler', 'match' => 'siddecykel|spinningcykel|spinning ?bike|spin ?bike|motionscykel|kondicykel|liggecykel|air ?bike|assault ?bike|ergometercykel|indoor ?cycle|indendørscykel|pedaltræner' ],
			'romaskiner-crosstrainere' => [ 'name' => 'Romaskiner & crosstrainere', 'match' => 'romaskine|rower|rowing|roergometer|ski ?erg|crosstrainer|cross ?trainer|elliptical' ],
			'vaegte-kettlebells' => [ 'name' => 'Vægte & kettlebells', 'match' => 'bodypump|ez ?curl|curl ?bar|weight ?bar|vægtstænger|kettlebell|håndvægt|dumbbell|vægtskive|bumper|vægtstang|barbell|vægtstativ|stativ til håndvægt|curlstang|olympisk stang|vægtvest|ankelvægt' ],
			'styrke-baenke'      => [ 'name' => 'Bænke & racks', 'match' => 'multi træningsmaskine|træningsmaskine|stack|lat[- ]?attachment|træningsbænk|vægtbænk|\bbænk\b|\bbench\b|\brack\b|racks|power ?cage|squat|smith|multigym|home ?gym|styrkemaskine|kabeltræk|lat ?pull|leg ?press|benpres|pulley|keiser|plate loaded|pull[- ]?up|dip ?station|chin[- ]?up|vægtstak' ],
			'yoga-pilates'       => [ 'name' => 'Yoga & pilates', 'match' => 'yoga|pilates|reformer|meditation' ],
			'restitution'        => [ 'name' => 'Restitution', 'match' => 'sauna|jacknobber|ekoroll|rygstrækker|backflex|massage|foam ?roller|foamroller|recovery|kuldeterapi|varmeterapi|isbad|ice ?bath|triggerpunkt|massagepistol' ],
			'damecykler'         => [ 'name' => 'Damecykler', 'match' => 'damecykel|damecykler' ],
			'herrecykler'        => [ 'name' => 'Herrecykler', 'match' => 'herrecykel|herrecykler' ],
			'tilbehor'           => [ 'name' => 'Tilbehør', 'match' => 'fitnessbold|træningsbold|\\bbold\\b|grips|løftekæde|hammer|wallbar|ribbe|slyngetræner|push-?up|parallettes|stepbænk|vægtvest|weight ?vest|power ?bags?|timer|pegboard|hand ?grip|flexbar|hand ?wraps|håndbind|\\bmma\\b|boksehjelm|benskinne|shin ?guard|skridtbeskytter|tandbeskytter|løftebælte|træningsbælte|fjederlås|\\bgreb\\b|attachment|hoppetræning|vibrationstræner|chalk|magnesia|kinesio|sportstape|\\btape\\b|boksehandske|boksesæk|boksebold|boksning|sandsæk|træningsmåtte|gulvmåtte|underlag|gulv\b|måtte|elastik|træningsbånd|loop ?band|modstandsbånd|sjippetov|springreb|ab ?wheel|mavehjul|medicinbold|slam ?ball|wall ?ball|gymball|balancebold|balance|stepbræt|træningshandske|løftestropper|vægtløfterbælte|greb og håndtag|håndtag|kalk|sandbag|battle ?rope|plyo|agility|træningsudstyr|core|boldtræning|suspension|trx|ringe|vægtløftning' ],
		];
	}

	/**
	 * Underkategorier = egne landingssider, fx /kategori/lobebaand/foldbart-lobebaand/.
	 * 'match' testes mod produktnavnet, 'desc' mod butikkens beskrivelse, 'attr' mod udtrukne egenskaber,
	 * og 'not' udelukker ud fra navnet. Et produkt kan ligge i flere. En underkategori kan selv have
	 * underkategorier (fx Romaskine → Romaskine med vand).
	 * Navnene er valgt efter, hvad folk søger på (ental, som i Google).
	 */
	public static function subcategories(): array {
		return [
			'lobebaand' => [
				'foldbart-lobebaand'          => [ 'name' => 'Foldbart løbebånd', 'match' => 'foldbar|sammenklappelig|folding', 'attr' => [ 'foldable' => true ] ],
				'gaabaand'                    => [ 'name' => 'Gåbånd', 'match' => 'gåbånd|walking ?pad|gå/løbebånd|walkingpad' ],
				'lobebaand-med-incline'       => [ 'name' => 'Løbebånd med incline', 'attr' => [ 'incline' => true ] ],
				'manuelt-lobebaand'           => [ 'name' => 'Manuelt løbebånd', 'match' => 'manuel|curve|curved|uden strøm|non-?motor' ],
				'lobebaand-til-tunge-brugere' => [ 'name' => 'Løbebånd til tunge brugere', 'attr' => [ 'max_weight' => [ 150, null ] ] ],
			],
			'motionscykler' => [
				'spinningcykel' => [ 'name' => 'Spinningcykel', 'match' => 'spinning|spin ?bike|indoor ?cycl|indendørscykel' ],
				'kondicykel'    => [ 'name' => 'Kondicykel', 'match' => 'motionscykel|kondicykel|ergometer|exercise ?bike|upright' ],
				'liggecykel'    => [ 'name' => 'Liggecykel', 'match' => 'liggecykel|recumbent|siddecykel' ],
				'airbike'       => [ 'name' => 'Airbike', 'match' => 'air ?bike|assault|fan ?bike|echo bike' ],
			],
			'romaskiner-crosstrainere' => [
				'romaskine'     => [ 'name' => 'Romaskine', 'match' => 'romaskine|rower|rowing|roergometer|ski ?erg' ],
				'crosstrainer'  => [ 'name' => 'Crosstrainer', 'match' => 'crosstrainer|cross ?trainer|elliptical' ],
			],
			'vaegte-kettlebells' => [
				'kettlebell'    => [ 'name' => 'Kettlebells', 'match' => 'kettlebell' ],
				'haandvaegte'   => [ 'name' => 'Håndvægte', 'match' => 'håndvægt|dumbbell|hexagon|dumbell' ],
				'vaegtskiver'   => [ 'name' => 'Vægtskiver', 'match' => 'vægtskive|bumper|\bplates?\b|skive' ],
				'vaegtstaenger' => [ 'name' => 'Vægtstænger', 'match' => 'vægtstang|vægtstænger|barbell|curl ?bar|ez[- ]?bar|weight ?bar|olympisk stang' ],
				'vaegtstativ'   => [ 'name' => 'Vægtstativ', 'match' => 'stativ|dumbbell ?rack|vægtrack|opbevaring' ],
			],
			'styrke-baenke' => [
				'traeningsbaenk' => [ 'name' => 'Træningsbænk', 'match' => 'bænk|bench' ],
				'power-rack'     => [ 'name' => 'Power rack', 'match' => '\brack\b|power ?cage|squat ?stand|squat ?rack|half ?rack' ],
				'multigym'       => [ 'name' => 'Multigym', 'match' => 'multigym|multi ?gym|home ?gym|multistation|funktionel træner|cable' ],
				'pull-up-stang'  => [ 'name' => 'Pull-up-stang', 'match' => 'pull[- ]?up|chin[- ]?up|dip' ],
			],
			'yoga-pilates' => [
				'yogamaatte'       => [ 'name' => 'Yogamåtte', 'match' => 'yogamåtte|yoga ?mat|yoga ?måtte' ],
				'pilates-reformer' => [ 'name' => 'Pilates reformer', 'match' => 'reformer' ],
				'yogatilbehor'     => [ 'name' => 'Yogatilbehør', 'match' => 'yogablok|yoga ?blok|yogastrop|strop|meditationspude|bolster' ],
			],
			'restitution' => [
				'massagepistol' => [ 'name' => 'Massagepistol', 'match' => 'massagepistol|massage ?gun|theragun|percussion' ],
				'foam-roller'   => [ 'name' => 'Foam roller', 'match' => 'foam ?roller|foamroller|massagerulle|\broll\b|blackroll' ],
				'recovery-boots' => [ 'name' => 'Recovery boots', 'match' => 'recovery boots|kompressionsstøvle' ],
				'kuldeterapi'   => [ 'name' => 'Kuldeterapi og isbad', 'match' => 'kulde|isbad|ice ?bath|cold' ],
			],
			'trampoliner' => [
				'havetrampolin'       => [ 'name' => 'Havetrampolin', 'match' => 'ø ?\\d{3}|\\d,\\d{1,2} ?m\\b|sikkerhedsnet|premium|flexi|oval|rektangul|inground' ],
				'nedgravet-trampolin' => [ 'name' => 'Nedgravet trampolin', 'match' => 'inground|nedgrav' ],
				'fitnesstrampolin'    => [ 'name' => 'Fitnesstrampolin', 'match' => 'fitness|mini-?tramp|rebounder|\\b(8\\d|9\\d|1[0-4]\\d) ?cm' ],
			],
			'tilbehor' => [
				'traeningsmaatte' => [ 'name' => 'Træningsmåtte', 'match' => 'træningsmåtte|gulvmåtte|måtte|gulv' ],
				'elastikker'      => [ 'name' => 'Træningselastik', 'match' => 'elastik|band\b|bands\b|loop' ],
				'boksning'        => [ 'name' => 'Boksning', 'match' => 'boks|mma|hand ?wraps|håndbind|sandsæk|punching' ],
				'traeningsbolde'  => [ 'name' => 'Træningsbolde', 'match' => 'bold\b|ball\b|gymball|medicinbold|slam ?ball|wall ?ball' ],
				'sjippetov'       => [ 'name' => 'Sjippetov', 'match' => 'sjippetov|springreb|jump ?rope' ],
			],
			// Under Romaskine. 'desc' testes mod butikkens beskrivelse, 'not' udelukker ud fra navnet.
			'romaskine' => [
				'romaskine-vand'               => [ 'name' => 'Romaskine med vand', 'match' => 'vandromaskine|vand-romaskine|water|aqua', 'desc' => 'vandmodstand|vand-?modstand|vandtank|vandbeholder|water ?resistance|water ?tank|vandfyldt|fyldt med vand|vandets modstand|modstand fra vand|vand som modstand', 'not' => 'ski ?erg' ],
				'romaskine-luftmodstand'       => [ 'name' => 'Romaskine med luftmodstand', 'match' => '\bair\b|airmag|air ?rower|luftromaskine', 'desc' => 'luftmodstand|luft-?modstand|air ?resistance|vindmodstand|luft som modstand|blæsermodstand|ventilatorhjul|vifte', 'not' => 'ski ?erg|vand|water|aqua' ],
				'romaskine-magnetisk'          => [ 'name' => 'Magnetisk romaskine', 'match' => 'magnet|airmag', 'desc' => 'magnetisk modstand|magnetmodstand|magnet-?modstand|magnetic resistance|magnetisk bremse|magnetbremse|magnetsystem|magnetiske modstand', 'not' => 'ski ?erg|vand|water|aqua' ],
				'romaskine-til-hjemmetraening' => [ 'name' => 'Romaskine til hjemmetræning', 'desc' => 'hjemmetræning|til hjemmet|i hjemmet|hjemmebrug|hjemme-?gym|home ?gym|derhjemme|hjemmefitness|til private|privat brug', 'not' => 'ski ?erg' ],
			],
		];
	}

	/** Produkter, der aldrig skal med (navn eller butikkens kategori). */
	public static function exclude(): array {
		return [
			'gavekort',
			'produktgaranti|udvidet garanti|garantiforlængelse',
			// Trampoliner er med, men ikke tilbehøret (stige, cover, elastik, forankring, sikring m.m.).
			'\\b(stige|cover|elastik|forankring\\w*|stormsikring|basketkurv|opbevaringslommer|rutchebane|fjedre?|kantbeklædning|betræk|net)\\b[^,]{0,40}trampolin|trampolin[^,]{0,25}\\b(stormsikring|basketkurv|opbevaringslommer|rutchebane|stige|cover)\\b|tilbehør til trampolin',
			'konnector|connector kit|\\bkit for\\b|spare ?part|replacement part|\\bsn ?[<>]',
			'\bguide\b|guides til|tips og tricks|de bedste|de \d bedste|vedligeholder du',
			'kosttilskud|protein|kreatin|\bbcaa\b|vitamin|mad og drikke|drikkeflask|termokop',
			'\bsko\b|sneaker|t-shirt|tights|shorts|bukser|jakke|hættetrøje|sportstøj|træningstøj|fritidstøj|tøj & sko|kompressionsbeklædning|strømpe|sokker|undertøj|nederdel|kjole',
			'løbesko|leggins|leggings|termokrus|camping|grill|flåt|næsestrip|basketstander|netgarniture|skudtræner|shine & protect|bandage|sleeve|\\bbrace\\b|albuebeskytter|knæbeskytter|smerteplaster|plaster\\b|træningssko|pulsmåling|pleje|hygiejne|bøger|\bbog\b|skærmbrille|computer-|søvn|udlejning|\bdemo\b|reservedel|håndbold|fodbold|basketball|volleyball|svøm|padel|tennis|golf|kampsport|graviditet|sanser|børn|ergonomi|funktionelle møbler|\bnav\b|fokus|lyd &|måleapparat|åndedræt|bækkenbund|støttebind|hårtilbehør|\btens\b|hydrogen',
		];
	}

	/** Butikskategorier, hvor kun vores egne regler må afgøre placeringen (de siger intet om produktet). */
	public static function meaningless_shop_categories(): array {
		return [ 'brands', 'træningsudstyr a-z', 'tilbud', 'nyheder', 'sport', 'wellness', 'tilbehør', 'fødder', 'ryg', 'mave', 'hænder', 'træning' ];
	}

	public static function uncategorized_slug(): string {
		return 'ukategoriseret';
	}
}
