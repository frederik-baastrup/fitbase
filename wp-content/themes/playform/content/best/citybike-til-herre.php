<?php
/**
 * Overført fra det gamle fitbase.dk (/citybike-til-herre/) og omskrevet.
 * Produkter fra Cykelexperten.dk. Fakta kun fra butikkens produktdata. Anmeldelser er af samme model (Sirrus X 3.0).
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'citybike-til-herre',
	'title'    => 'Bedste citybike til herre: Vores bud på de 3 bedste',
	'excerpt'  => 'En god citybike til herre skal være robust, komfortabel og klar til hverdagen. Her er vores bud på de 3 bedste – og hvad du skal kigge efter.',
	'more_cat' => 'herrecykler',
	'intro'    => <<<'HTML'
<p>En citybike er cyklen, du bruger hver dag: til arbejde, i byen og til indkøb – året rundt. Den skal være robust, komfortabel at sidde på og kræve så lidt vedligeholdelse som muligt. Vil du hurtigere frem, findes der også sportslige citybikes med lettere stel og flere gear.</p>
<p>Herunder er vores bud på de 3 bedste citybikes til herre hos danske butikker lige nu. Den ene er anmeldt af uafhængige medier – links står ved produktet. Nederst finder du en købsguide.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5712701017755',
			'slug'    => 'centurion-le-mans-herre-7g-sort',
			'name'    => 'Centurion Le Mans Herre 7g',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Klassisk citybike med 7 gear og det praktiske udstyr, du skal bruge til daglig pendling.',
			'why'     => <<<'HTML'
<p>Centurion Le Mans er en klassisk citybike, der er designet og bygget til dig, der pendler, og pakket med de praktiske egenskaber, en citybike skal have. Med 7 gear har du nok til både bakker og modvind i byen.</p>
<p>Centurion er et af de mest udbredte mærker i danske cykelbutikker, så det er nemt at få service og reservedele.</p>
HTML,
			'good'    => [ 'Daglig pendling', 'Dig, der vil have en klassisk citybike' ],
			'less'    => [ 'Lange, hurtige ture – se Sirrus X længere nede' ],
		],
		[
			'ean'     => '5712701025187',
			'slug'    => 'centurion-basic-herre-7g-2026-mat-bla',
			'name'    => 'Centurion Basic Herre 7g',
			'role'    => 'Mindst vedligeholdelse',
			'reviews' => [],
			'verdict' => 'Pålidelig citybike med 7 indvendige Shimano-gear – til dig, der bare vil have en cykel, der virker.',
			'why'     => <<<'HTML'
<p>Centurion Basic er en klassisk citybike, der gør hverdagen enkel og pålidelig, til dig, der vil have en cykel, som bare fungerer dag efter dag. Den har 7 indvendige Shimano-gear.</p>
<p>Indvendige gear (navgear) sidder beskyttet inde i baghjulets nav. Det gør dem mindre følsomme over for regn og snavs end udvendige gear, og du kan skifte gear, mens du holder stille.</p>
HTML,
			'good'    => [ 'Lidt vedligeholdelse', 'Kørsel året rundt' ],
			'less'    => [ 'Dig, der vil have mange gear' ],
		],
		[
			'ean'     => '0888818775637',
			'slug'    => 'specialized-sirrus-x-3-0-gra-solv',
			'name'    => 'Specialized Sirrus X 3.0',
			'role'    => 'Bedst til fart og længere ture',
			'reviews' => [
				[ 'BikeRadar', 'https://www.bikeradar.com/reviews/bikes/hybrid-bikes/specialized-sirrus-x-3-0-review' ],
				[ 'road.cc', 'https://road.cc/review/specialized-sirrus-x-30-292923' ],
			],
			'verdict' => 'Sportslig citybike med aluminiumsstel, skivebremser og 18 gear – til dig, der vil hurtigere frem.',
			'why'     => <<<'HTML'
<p>Specialized Sirrus X 3.0 er en sportslig hybrid mellem citybike og racer. Er det 2023-modellen med aluminiumsstel, skivebremser fra Tektro og 18 udvendige gear. Modellen er anmeldt af blandt andre BikeRadar og road.cc.</p>
<p>Skivebremser bremser sikkert også i regn, og de mange gear gør den god til længere ture og bakker. Til gengæld kræver udvendige gear lidt mere pleje, og der følger ikke nødvendigvis skærme og bagagebærer med – tjek udstyret hos butikken.</p>
HTML,
			'good'    => [ 'Lang pendling og weekendture', 'Dig, der vil køre hurtigt' ],
			'less'    => [ 'Dig, der vil have en fuldt udstyret, vedligeholdelsesfri citybike' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige citybike til herre</h2>
<p>Den rigtige citybike afhænger af, hvordan du bruger den. Her er det vigtigste at tage stilling til.</p>
<h3>Klassisk eller sportslig?</h3>
<p>En <strong>klassisk citybike</strong> har oprejst siddestilling, navgear og fuldt udstyr – perfekt til korte ture i byen. En <strong>sportslig citybike</strong> (hybrid) har lettere stel, flere gear og en mere fremadbøjet stilling – bedre til længere pendling.</p>
<h3>Gear: indvendige eller udvendige?</h3>
<p><strong>Indvendige gear</strong> (navgear) er robuste og kræver lidt vedligeholdelse. <strong>Udvendige gear</strong> giver flere og større spring mellem gearene, men skal smøres og justeres oftere.</p>
<h3>Bremser</h3>
<p>Fodbremse og fælg- eller rullebremse er enkelt og billigt. Skivebremser bremser bedst i regn og på lange nedkørsler.</p>
<h3>Udstyr til hverdagen</h3>
<p>Skærme, kædeskærm, bagagebærer, støtteben og lys gør cyklen klar til hverdagen. Tjek, hvad der følger med – især på sportslige modeller.</p>
<h3>Størrelse</h3>
<p>Stelstørrelsen skal passe til din højde og benlængde. Brug butikkens størrelsesguide, og prøv gerne cyklen, før du køber.</p>
<h3>Hvor meget skal du give?</h3>
<p>En god citybike til herre koster typisk fra ca. 4.000 kr. Sportslige modeller med skivebremser og flere gear ligger typisk fra 6.000 kr. Se alle <a href="/cykler/herrecykler/">herrecykler</a> med aktuelle priser, eller se vores bud på <a href="/koebsguide/bedste-citybike-til-dame/">den bedste citybike til dame</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er en citybike?', 'En cykel til hverdagsbrug i byen med oprejst siddestilling og praktisk udstyr som skærme, bagagebærer og lys.' ],
		[ 'Er indvendige gear bedst til en citybike?', 'Til byen er de et godt valg, fordi de er robuste og kræver lidt vedligeholdelse. Til længere ture og bakker kan udvendige gear være bedre.' ],
		[ 'Hvad er forskellen på en citybike og en hybridcykel?', 'En hybridcykel er en sportslig citybike med lettere stel og flere gear, ofte uden fuldt udstyr.' ],
	],
];
