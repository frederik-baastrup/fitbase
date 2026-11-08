<?php
/**
 * Overført fra det gamle fitbase.dk (/spinningcykel-med-computer/) og omskrevet.
 * Fakta om produkterne kommer kun fra butikkernes produktdata. Anmeldelser er af samme model (Keiser M3i).
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'spinningcykel-med-computer',
	'title'    => 'Spinningcykel med computer: Vores bud på de 5 bedste',
	'excerpt'  => 'En spinningcykel med computer viser watt, puls og fremgang – og kan styres af apps. Her er vores bud på de 5 bedste og hvad du skal kigge efter.',
	'more_cat' => 'spinningcykel',
	'intro'    => <<<'HTML'
<p>En spinningcykel er bygget til hård træning: et tungt svinghjul, en sportslig siddestilling og modstand, der kan skrues helt op. Med en computer på styret får du data at træne efter – tid, distance, puls, kadence og på de bedste modeller watt – og ofte mulighed for at koble cyklen til apps som Zwift eller Kinomap.</p>
<p>Herunder er vores bud på de 5 bedste spinningcykler med computer hos de butikker, vi samarbejder med, lige nu. Den ene er grundigt anmeldt af uafhængige medier – links står ved produktet. Nederst finder du en købsguide.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7051944081085',
			'slug'    => 'm3i-ftms-display-spinningcykel',
			'name'    => 'Keiser M3i',
			'role'    => 'Bedst samlet',
			'reviews' => [
				[ 'Treadmill Review Guru', 'https://www.treadmillreviewguru.com/keiser-m3i-indoor-bike-review' ],
			],
			'verdict' => 'Professionel spinningcykel med wattmåling, 24 modstandsniveauer og Bluetooth – kendt fra træningscentre.',
			'why'     => <<<'HTML'
<p>Keiser M3i er en af de mest kendte spinningcykler i træningscentre og er anmeldt grundigt af blandt andre Garage Gym Reviews. Den er en spinningcykel til virksomhed og træningscenter med wattmåling, 24 modstandsniveauer, Bluetooth og understøttelse af træningsapps.</p>
<p>Wattmåling er det bedste mål for, hvor hårdt du arbejder, og det gør det muligt at træne præcist efter programmer. Prisen er høj, men den er bygget til mange års hård brug.</p>
HTML,
			'good'    => [ 'Dig, der træner hårdt og ofte', 'Dig, der vil træne efter watt', 'Familier, hvor flere skal bruge cyklen' ],
			'less'    => [ 'Dig med et begrænset budget' ],
		],
		[
			'ean'     => '5714237018510',
			'slug'    => 'odin-s1200-spinningcykel',
			'name'    => 'Odin S1200',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => '14 kg svinghjul, 32 elektroniske modstandsniveauer, 12 programmer og Bluetooth – til under 8.000 kr.',
			'why'     => <<<'HTML'
<p>Odin S1200 giver dig meget computer for pengene. Har den et 14 kg svinghjul, 32 elektroniske modstandsniveauer, 12 træningsprogrammer og Bluetooth-forbindelse.</p>
<p>Elektronisk modstand betyder, at programmer og apps kan styre modstanden for dig – praktisk til intervaller, hvor du ikke vil dreje på et håndtag midt i et sprint.</p>
HTML,
			'good'    => [ 'Dig, der vil træne efter programmer eller apps', 'Mellemklasse-budget' ],
			'less'    => [ 'Dig, der vil træne efter watt' ],
		],
		[
			'ean'     => '8029975998787',
			'slug'    => 'toorx-srx-500-spinningcykel',
			'name'    => 'Toorx SRX 500',
			'role'    => 'Tungt svinghjul for pengene',
			'reviews' => [],
			'verdict' => '24 kg svinghjul, 32 magnetiske niveauer og farve-LCD med app-kompatibilitet og pulsbælte.',
			'why'     => <<<'HTML'
<p>Toorx SRX 500 har et 24 kg svinghjul for en glat og lydsvag pedalfornemmelse, magnetisk bremsesystem med 32 modstandsniveauer, ergonomisk sæde og et justerbart styr med fin justering. Konsollen er en multifarvet LCD med app-kompatibilitet, og der følger et pulsbælte med.</p>
<p>Et tungt svinghjul giver typisk et mere jævnt og "rigtigt" cykelfølelse, og pulsbæltet gør pulsmålingen langt mere præcis end håndsensorer.</p>
HTML,
			'good'    => [ 'Dig, der vil have et jævnt, tungt træk', 'Dig, der vil træne efter puls' ],
			'less'    => [ 'Dig, der vil have elektronisk styret modstand fra apps' ],
		],
		[
			'ean'     => '5714605000024',
			'price'   => 8995,
			'name'    => 'Peak Fitness Racer Pro',
			'role'    => 'Computer med wattmåling',
			'reviews' => [],
			'verdict' => 'Indoor bike med wattmåling, op til 1000 W magnetisk modstand og et 15 kg svinghjul – klar til Zwift, Kinomap og iConsole+.',
			'why'     => <<<'HTML'
<p>Peak Fitness Racer Pro er til dig, der vil træne efter tal. Computeren viser watt, puls, kadence, hastighed, distance, tid og kalorier, og via Bluetooth kan du køre med Zwift, Kinomap eller iConsole+ på virtuelle ruter rundt i verden.</p>
<p>Modstanden er magnetisk og støjsvag med 16 niveauer og op til 1000 W. Svinghjulet på 15 kg og en gearing på 1:9 giver et tråd, der føles som et svinghjul på 25–30 kg. Kombistyret lader dig skifte mellem oprejst og aerostilling, og styr og sadel justeres både op/ned og frem/tilbage. Kombipedalerne passer til almindelige sko og SPD-klamper.</p>
<p>Cyklen tager brugere op til 150 kg, har transporthjul foran og 2 års garanti. Vil du måle pulsen, skal du bruge et Polar-pulsbælte.</p>
HTML,
			'good'    => [ 'Træning efter watt', 'Zwift og Kinomap', 'Dig, der kører med klikpedaler' ],
			'less'    => [ 'Pulsbælte følger ikke med' ],
		],
		[
			'ean'     => '5714237003776',
			'price'   => 1899,
			'name'    => 'Odin S700',
			'role'    => 'Billigst med computer',
			'reviews' => [],
			'verdict' => 'Kraftig og stabil spinningcykel med et 13 kg svinghjul og en brugervenlig computer – til en lav pris.',
			'why'     => <<<'HTML'
<p>Odin S700 er til dig, der vil prøve spinning derhjemme uden at bruge mange penge. Den er bygget til den private bruger, der gerne vil have en cykel, der kan give masser af udfordring, når der skal trædes igennem.</p>
<p>Svinghjulet vejer 13 kg og giver et glidende tråd, så bevægelsen føles rund og jævn. Stellet er kraftigt og stabilt, så du kan give den gas uden at tænke over det.</p>
<p>Den brugervenlige computer holder styr på træningen, uden at du skal bruge tid på at sætte den op. Er du ny med spinning og vil have en simpel cykel at starte på, er den et oplagt bud.</p>
HTML,
			'good'    => [ 'Begyndere', 'Lavt budget' ],
			'less'    => [ 'Dig, der vil have et svinghjul i den tunge klasse' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en spinningcykel med computer</h2>
<p>Computeren er det, der gør spinningcyklen til et træningsredskab frem for bare en cykel. Her er det, du skal kigge efter.</p>
<h3>Hvad skal computeren vise?</h3>
<p>Alle viser tid, distance og hastighed. Bedre computere viser også kadence (pedalomdrejninger i minuttet), puls og kalorier. De bedste måler watt, som er det mest præcise mål for din indsats.</p>
<h3>Bluetooth og apps</h3>
<p>Med Bluetooth kan cyklen sende data til apps som Zwift og Kinomap eller til dit ur. Kig efter "FTMS", som er en standard, mange apps understøtter. Har cyklen elektronisk modstand, kan appen også styre modstanden for dig.</p>
<h3>Svinghjul og modstand</h3>
<p>Et tungt svinghjul giver et jævnt træk. Magnetisk modstand er stille og slidfri; filtbremser er billigere, men slides. Elektronisk modstand gør programmer og app-træning langt bedre.</p>
<h3>Indstillinger</h3>
<p>Sadel og styr skal kunne justeres både op/ned og frem/tilbage, så cyklen passer til din krop. Det er afgørende for både komfort og for at undgå skader.</p>
<h3>Pedaler</h3>
<p>Mange spinningcykler har kombipedaler med stropper på den ene side og klik (SPD) på den anden. Kliksko giver et bedre greb og en mere effektiv pedalering.</p>
<h3>Hvor meget skal du give?</h3>
<p>Spinningcykler med computer koster fra ca. 4.000 kr. hos de danske butikker. Mellem 6.000 og 12.000 kr. får du typisk tungere svinghjul og elektronisk modstand; over 20.000 kr. er du i klassen af cykler til træningscentre. Se alle <a href="/traeningsmaskiner/motionscykler/spinningcykel/">spinningcykler</a> med aktuelle priser, eller læs vores guide <a href="/viden/spinningcykel-kondicykel-eller-airbike/">Spinningcykel, kondicykel eller airbike</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på en spinningcykel og en motionscykel?', 'En spinningcykel har et tungere svinghjul, en mere sportslig siddestilling og er bygget til hård træning, også stående. En motionscykel er mere komfortabel og bedst til rolig og moderat træning.' ],
		[ 'Hvad er FTMS?', 'FTMS er en Bluetooth-standard, der lader træningsmaskiner tale sammen med apps som Zwift og Kinomap.' ],
		[ 'Skal man have kliksko til en spinningcykel?', 'Nej, de fleste har pedaler med stropper. Kliksko giver dog et bedre greb og er populære til hård træning.' ],
	],
];
