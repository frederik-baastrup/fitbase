<?php
/**
 * Overført fra det gamle fitbase.dk (/foldbar-romaskine/) og omskrevet.
 * Fakta om produkterne kommer kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'foldbar-romaskine',
	'title'    => 'Foldbar romaskine: Vores bud på de 5 bedste',
	'excerpt'  => 'En foldbar romaskine giver dig helkropstræning uden at optage gulvet hele dagen. Her er vores bud på de 5 bedste – og hvad du skal tjekke før køb.',
	'more_cat' => 'romaskine',
	'intro'    => <<<'HTML'
<p>Det største problem ved en romaskine er sjældent prisen – det er de cirka to meter gulv, den optager. En foldbar romaskine løser det: du folder skinnen op efter træningen og triller maskinen ind i et hjørne eller et skab.</p>
<p>Herunder er vores bud på de 5 bedste foldbare romaskiner hos de butikker, vi samarbejder med, lige nu – og en købsguide til, hvad du skal kigge efter, så du ikke ender med en maskine, der er besværlig at folde eller vakler under træning.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8029975995151',
			'slug'    => 'toorx-rwx-700-romaskine',
			'name'    => 'Toorx RWX 700',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Foldbar romaskine med 16 modstandsniveauer, pulsstyret træning og indbygget pulsmåler.',
			'why'     => <<<'HTML'
<p>Toorx RWX 700 kombinerer et pladsbesparende, foldbart design med mange muligheder i træningen. Har den 16 justerbare modstandsniveauer, en avanceret LCD-skærm med pulsstyret træning (HRC) og en indbygget pulsmåler.</p>
<p>Pulsstyret træning betyder, at maskinen justerer modstanden efter din puls, så du holder dig i den intensitet, du har valgt. Det er praktisk, hvis du vil træne kondition målrettet uden selv at skulle styre det hele undervejs.</p>
HTML,
			'good'    => [ 'Dig, der vil træne efter puls', 'Dig, der vil have mange modstandsniveauer i en foldbar maskine' ],
			'less'    => [ 'Dig, der vil have den naturlige følelse af vand' ],
		],
		[
			'ean'     => '8717842025734',
			'slug'    => 'tunturi-cardio-fit-r30-romaskine',
			'name'    => 'Tunturi Cardio Fit R30',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Foldbar med transporthjul og 8 modstandsniveauer – en enkel og billig vej til romaskine i en lille bolig.',
			'why'     => <<<'HTML'
<p>Tunturi er et af de gamle mærker inden for træningsudstyr til hjemmet, og Cardio Fit R30 er en enkel model til en lav pris. Den har 8 justerbare modstandsniveauer, et pladsbesparende foldbart design med transporthjul samt ergonomisk sæde og skridsikre pedaler.</p>
<p>Transporthjulene er vigtigere, end man tror: en romaskine, der er tung at flytte, ender med at blive stående fremme. Her folder og triller du den væk.</p>
HTML,
			'good'    => [ 'Dig, der skal flytte og gemme romaskinen efter hver træning', 'Begyndere og let til moderat brug' ],
			'less'    => [ 'Dig, der træner hårdt og vil have mange niveauer og programmer' ],
		],
		[
			'ean'     => '4044163025629',
			'slug'    => 'top-sport-colorado-foldbar-romaskine-med-vand',
			'name'    => 'Top Sport Colorado',
			'role'    => 'Bedst med vandmodstand',
			'reviews' => [],
			'verdict' => 'Foldbar romaskine med både vand- og magnetmodstand og Kinomap – lyden af vand uden at give afkald på pladsen.',
			'why'     => <<<'HTML'
<p>De fleste vandromaskiner kan ikke foldes. Top Sport Colorado kombinerer vand- og magnetisk modstand med en foldbar konstruktion, så du får den naturlige følelse og lyd af vand og samtidig kan rydde gulvet efter træning.</p>
<p>Den er Kinomap-kompatibel og har en Smart Control-computer, så du også kan ro virtuelle ruter.</p>
HTML,
			'good'    => [ 'Dig, der gerne vil have vandmodstand, men ikke har plads til en fast maskine', 'Dig, der vil træne med Kinomap' ],
			'less'    => [ 'Dig, der vil have den billigste løsning' ],
		],
		[
			'ean'     => '4044163017587',
			'price'   => 3299,
			'name'    => 'Top Sport Cambridge',
			'role'    => 'Enkel begyndermodel',
			'reviews' => [],
			'verdict' => 'Foldbar romaskine med 4 modstandsniveauer, glidelejet sæde og et overskueligt LCD-display – en enkel start på rotræning.',
			'why'     => <<<'HTML'
<p>Top Sport Cambridge er til dig, der gerne vil i gang med at ro derhjemme, men ikke vil have en stor maskine stående fremme. Den klapper sammen efter træningen, så gulvet er frit igen, når du er færdig.</p>
<p>Du vælger mellem 4 modstandsniveauer. Det er få, men nok til at komme i gang og skrue lidt op, efterhånden som formen bliver bedre. Sædet kører på glidelejede ruller, så bevægelsen føles jævn, og det er komfortabelt at sidde på, også på de lidt længere ture.</p>
<p>Det overskuelige LCD-display viser dine træningsdata, så du kan holde øje med, hvordan det går fra gang til gang. Er du ny med romaskine og vil holde det enkelt, er den et nemt sted at starte.</p>
HTML,
			'good'    => [ 'Begyndere', 'Dig, der vil have en enkel maskine uden mange knapper' ],
			'less'    => [ 'Dig, der vil have mange modstandsniveauer' ],
		],
		[
			'ean'     => '5704796045461',
			'price'   => 5999,
			'name'    => 'ASG Pace',
			'role'    => 'Billigere med vand og app',
			'reviews' => [],
			'verdict' => 'Vandromaskine med op til 14 liter vand, Bluetooth og Kinomap – og den kan foldes og trilles væk på transporthjul.',
			'why'     => <<<'HTML'
<p>ASG Pace er til dig, der drømmer om lyden og følelsen af vand, men ikke har plads til en vandromaskine, der står fremme hele tiden. Den kan foldes, og med transporthjulene triller du den nemt ind i et hjørne efter træningen. Den er et billigere bud på vand i en foldbar maskine end Top Sport Colorado.</p>
<p>Tanken rummer op til 14 liter vand. Modstanden følger dit tempo: jo hårdere du trækker, jo tungere føles vandet – præcis som i en rigtig båd.</p>
<p>Med Bluetooth kan du koble maskinen til Kinomap og ro virtuelle ruter rundt i verden. Det giver variation og gør det lettere at holde motivationen oppe uge efter uge.</p>
HTML,
			'good'    => [ 'Dig, der vil have vandmodstand i en foldbar maskine', 'Dig, der vil træne med Kinomap' ],
			'less'    => [ 'Dig, der vil have den mest stille romaskine' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en foldbar romaskine</h2>
<p>"Foldbar" kan betyde mange ting – fra en skinne, der klappes op, til en maskine, der kan stilles på højkant. Her er det, du skal kigge efter.</p>
<h3>Hvordan foldes den – og hvor meget fylder den bagefter?</h3>
<p>Tjek målene i sammenfoldet stand, ikke kun i brug. Kig også efter, om den kan stå stabilt sammenfoldet, og om der er transporthjul. En romaskine, der er tung at folde og flytte, ender ofte med at stå fremme alligevel.</p>
<h3>Stabilitet i brug</h3>
<p>Et foldeled er et ekstra samlingspunkt. På gode modeller mærker du det ikke, men på billige modeller kan det give lidt slør. Kig efter en solid låsemekanisme og en fornuftig maksimal brugervægt.</p>
<h3>Modstandstype</h3>
<p>De fleste foldbare romaskiner har magnetisk modstand eller en kombination af luft og magnet. Nogle få har vand. Magnet er mest stille, luft føles mest naturlig ved høj intensitet, og vand giver den klassiske rofølelse. Læs mere i <a href="/viden/romaskine-vand-luft-eller-magnet/">Romaskine med vand, luft eller magnet</a>.</p>
<h3>Skinne og højde</h3>
<p>Foldbare romaskiner er nogle gange lidt kortere end faste modeller. Er du høj, så tjek, at skinnen er lang nok til, at du kan strække benene helt.</p>
<h3>Hvor meget skal du give?</h3>
<p>Foldbare romaskiner koster fra ca. 2.000 kr. og op til omkring 10.000 kr. hos de butikker, vi samarbejder med. Under 4.000 kr. får du en enkel maskine til let brug; mellem 4.000 og 10.000 kr. får du flere niveauer, bedre skærm og et mere stabilt stel. Se alle <a href="/traeningsmaskiner/romaskiner-crosstrainere/romaskine/">romaskiner</a> med aktuelle priser, og brug filteret "Foldbar".</p>
HTML,
	'faq'      => [
		[ 'Er en foldbar romaskine lige så god som en fast?', 'En god foldbar romaskine kan sagtens bruges til almindelig hjemmetræning. Til meget hård og hyppig træning er en fast model ofte lidt mere stabil.' ],
		[ 'Hvor meget fylder en foldbar romaskine sammenfoldet?', 'Det varierer meget fra model til model. Tjek målene i sammenfoldet stand i produktbeskrivelsen, før du køber.' ],
		[ 'Kan en romaskine stå op ad væggen?', 'Mange romaskiner kan stilles op på højkant, også nogle, der ikke er foldbare. Tjek, om producenten anbefaler det for netop din model.' ],
	],
];
