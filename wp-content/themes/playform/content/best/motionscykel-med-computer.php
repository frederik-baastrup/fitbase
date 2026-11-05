<?php
/**
 * Overført fra det gamle fitbase.dk (/motionscykel-med-computer/) og omskrevet.
 * Fakta om produkterne kommer kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'motionscykel-med-computer',
	'title'    => 'Motionscykel med computer: Vores bud på de 3 bedste',
	'excerpt'  => 'En god træningscomputer gør motionscyklen langt mere motiverende. Her er vores bud på de 3 bedste motionscykler med computer – og hvad den skal kunne.',
	'more_cat' => 'kondicykel',
	'intro'    => <<<'HTML'
<p>Næsten alle motionscykler har et display, men der er stor forskel på, hvad det kan. En enkel skærm viser tid og distance. En rigtig træningscomputer har programmer, pulsstyret træning og måling af watt – så du kan følge din fremgang og træne mere målrettet.</p>
<p>Herunder er vores bud på de 3 bedste motionscykler med computer hos danske butikker lige nu. Nederst finder du en købsguide til, hvad computeren bør kunne.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8029975999128',
			'slug'    => 'toorx-brx-300-ergometercykel',
			'name'    => 'Toorx BRX 300 Ergometercykel',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => '32 elektroniske modstandsniveauer, 16 kg svinghjul og programmer efter puls (HRC) og watt – med app og trådløs pulsmåling.',
			'why'     => <<<'HTML'
<p>Toorx BRX 300 er en ergometercykel, hvor computeren er i centrum. Har den 32 elektroniske modstandsniveauer og et 16 kg svinghjul, måleprogrammer som HRC (pulsstyret) og watt, app-integration og trådløs pulsmåling. Den har komfortable justeringsmuligheder og er let at flytte.</p>
<p>Med watt-programmer holder cyklen en bestemt belastning, uanset hvor hurtigt du træder – det er den mest præcise måde at træne kondition på.</p>
HTML,
			'good'    => [ 'Dig, der vil træne efter puls eller watt', 'Målrettet konditionstræning' ],
			'less'    => [ 'Dig, der bare vil have en simpel cykel' ],
		],
		[
			'ean'     => '4044163110721',
			'slug'    => 'top-sport-al-2-ergometercykel-sort',
			'name'    => 'Top Sport AL 2 Ergometercykel',
			'role'    => 'Mange programmer for pengene',
			'reviews' => [],
			'verdict' => '17 programmer inkl. pulsstyring, 24 modstandsniveauer og LCD med wattindikator – plus holder til telefon eller tablet.',
			'why'     => <<<'HTML'
<p>Top Sport AL 2 giver dig mange programmer til prisen. Har den et 9 kg svinghjul og 24 modstandsniveauer, 17 programmer inklusive pulsstyring, et LCD-display med wattindikator og enhedsholder samt justerbar sadel og styr og transporthjul.</p>
<p>Computeren alene giver masser af variation.</p>
HTML,
			'good'    => [ 'Dig, der vil have programmer uden app', 'Pulsstyret træning' ],
			'less'    => [ 'Dig, der vil træne med Zwift eller Kinomap' ],
		],
		[
			'ean'     => '7051943746602',
			'slug'    => 'abilica-winmag-cruise-bt-motionscykel',
			'name'    => 'Abilica WinMag Cruise BT',
			'role'    => 'Billigst',
			'reviews' => [],
			'verdict' => '32 modstandsniveauer, 14 træningsprogrammer og understøttelse af iConsole+ og Kinomap – til under 4.000 kr.',
			'why'     => <<<'HTML'
<p>Abilica WinMag Cruise BT er den billigste af de tre. Den er en motionscykel til hjemmetræning med 32 modstandsniveauer, 14 træningsprogrammer, justerbar siddestilling og understøttelse af iConsole+ og Kinomap.</p>
<p>Det er mange niveauer og programmer for prisen, og app-understøttelsen giver mulighed for mere end computeren alene.</p>
HTML,
			'good'    => [ 'Lavere budget', 'Dig, der vil have både programmer og app' ],
			'less'    => [ 'Dig, der vil træne efter watt' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Hvad skal computeren på en motionscykel kunne?</h2>
<p>Computeren er det, du kigger på under hele træningen. Her er det, der gør en forskel.</p>
<h3>Basisdata</h3>
<p>Alle viser tid, distance, hastighed og et skøn over forbrændte kalorier. Kadence (omdrejninger i minuttet) er nyttigt, hvis du vil træde i et bestemt tempo.</p>
<h3>Programmer</h3>
<p>Faste programmer skifter modstanden for dig, fx intervaller eller bakker. Det kræver elektronisk modstand – på cykler med manuel modstand justerer du selv.</p>
<h3>Pulsstyret træning (HRC)</h3>
<p>Med HRC justerer cyklen modstanden, så du holder en bestemt puls. Det er en god måde at træne kondition på, og det kræver typisk et pulsbælte for at være præcist.</p>
<h3>Watt</h3>
<p>Watt er det mest præcise mål for, hvor hårdt du arbejder. På en ergometercykel kan du træne efter en fast belastning, uanset tempo.</p>
<h3>Ergometercykel eller motionscykel?</h3>
<p>En ergometercykel er en motionscykel, der kan styre belastningen i watt. Det er den rigtige type, hvis du vil teste og følge din kondition.</p>
<h3>Hvor meget skal du give?</h3>
<p>Motionscykler med programmer og elektronisk modstand koster typisk fra ca. 4.000 kr. hos de danske butikker; ergometercykler med watt-programmer ligger typisk fra 6.000 kr. Se alle <a href="/traeningsmaskiner/motionscykler/kondicykel/">kondicykler</a> med aktuelle priser, eller se vores bud på <a href="/koebsguide/motionscykel-med-bluetooth/">den bedste motionscykel med Bluetooth</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er en ergometercykel?', 'En motionscykel, der kan styre belastningen i watt, så du kan træne efter en fast belastning og følge din kondition præcist.' ],
		[ 'Er kalorietallet på computeren præcist?', 'Det er et skøn. Tallet bliver mere retvisende, hvis du indtaster din vægt og bruger pulsbælte.' ],
		[ 'Skal computeren have strøm?', 'Cykler med elektronisk modstand skal i stikkontakten. Enkle cykler med manuel modstand har ofte en batteridrevet skærm.' ],
	],
];
