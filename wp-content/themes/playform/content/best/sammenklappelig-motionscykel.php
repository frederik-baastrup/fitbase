<?php
/**
 * Overført fra det gamle fitbase.dk (/sammenklappelig-motionscykel/) og omskrevet.
 * Fakta om produkterne kommer kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'sammenklappelig-motionscykel',
	'title'    => 'Sammenklappelig motionscykel: Vores bud på de 5 bedste',
	'excerpt'  => 'En sammenklappelig motionscykel giver kondition hjemme og kan foldes væk bagefter. Her er vores bud på de 5 bedste til dig med sparsom plads.',
	'more_cat' => 'motionscykler',
	'intro'    => <<<'HTML'
<p>En sammenklappelig motionscykel – ofte kaldet en X-bike – er lavet til dig, der vil træne kondition hjemme, men ikke har plads til, at cyklen står fremme. Efter træningen folder du den sammen og triller den ind i et hjørne eller et skab.</p>
<p>Herunder er vores bud på de 5 bedste sammenklappelige motionscykler hos de butikker, vi samarbejder med, lige nu. De er alle billige, men der er forskel på komfort og funktioner. Nederst finder du en købsguide.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8029975970349',
			'slug'    => 'toorx-brx-compact-multi-fit-motionscykel',
			'name'    => 'Toorx BRX-Compact Multi Fit',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Foldbar motionscykel med ryglæn, magnetisk modstand i 8 niveauer og transporthjul.',
			'why'     => <<<'HTML'
<p>Toorx BRX-Compact Multi Fit samler det, en sammenklappelig motionscykel skal kunne. Har den magnetisk bremsesystem med 8 modstandsniveauer, et komfortabelt sæde med ryglæn og justeringsmuligheder, et LCD-display med de vigtigste træningsdata – og den kan foldes og flyttes på transporthjul.</p>
<p>Ryglænet gør en stor forskel for komforten, hvis du cykler længere ture eller har ondt i ryggen.</p>
HTML,
			'good'    => [ 'Små hjem', 'Dig, der vil have støtte i ryggen', 'Let og moderat konditionstræning' ],
			'less'    => [ 'Hård intervaltræning – vælg en spinningcykel' ],
		],
		[
			'ean'     => '8717842028919',
			'slug'    => 'tunturi-b25-x-bike-foldbar-motionscykel',
			'name'    => 'Tunturi B25 X-Bike',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Klassisk X-bike med ryglæn, 8 magnetiske niveauer og transporthjul – til en lav pris.',
			'why'     => <<<'HTML'
<p>Tunturi B25 X-Bike er bygget efter samme opskrift: har den et ergonomisk sæde med ryglæn, foldbart design med transporthjul og 8 magnetiske modstandsniveauer med et LCD-display, der viser de relevante træningsdata.</p>
<p>Den er et godt valg, hvis du vil have et kendt mærke til en lav pris og primært skal bruge cyklen til motion et par gange om ugen.</p>
HTML,
			'good'    => [ 'Dig, der vil holde prisen nede', 'Små hjem og let motion' ],
			'less'    => [ 'Høje eller tunge brugere – tjek mål og maksimal brugervægt' ],
		],
		[
			'ean'     => '5714237003691',
			'slug'    => 'odin-b100-foldbar-motionscykel-sort',
			'name'    => 'Odin B100',
			'role'    => 'Billigst',
			'reviews' => [],
			'verdict' => 'Pladsbesparende foldbar motionscykel med 8 modstandsniveauer til under 1.000 kr.',
			'why'     => <<<'HTML'
<p>Odin B100 er den billigste vej til en foldbar motionscykel. Den er pladsbesparende og brugervenlig med 8 modstandsniveauer, som du let indstiller.</p>
<p>Den passer til dig, der vil prøve at cykle hjemme uden at bruge mange penge. Bruger du den meget, eller vejer du meget, er det værd at vælge en mere solid model.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Let motion og nybegyndere' ],
			'less'    => [ 'Daglig, hård træning', 'Dig, der vil have ryglæn' ],
		],
		[
			'ean'     => '5714237003714',
			'price'   => 1999,
			'name'    => 'Odin B200 Sunfitter',
			'role'    => 'Foldbar med fuld computer',
			'reviews' => [],
			'verdict' => 'Sammenklappelig motionscykel, hvor computeren holder styr på tid, distance, hastighed og puls – og 8 niveauer modstand.',
			'why'     => <<<'HTML'
<p>Odin B200 Sunfitter er til dig, der gerne vil kunne se, hvad du præsterer, selv om cyklen skal foldes sammen bagefter. Den klapper sammen, så den let kan gemmes væk, når træningen er overstået.</p>
<p>Displayet giver dig de vigtigste tal: tid, distance, hastighed og puls. Scan-funktionen viser dem på skift, så du ikke skal fumle med knapper, mens du træder. Det gør det nemt at sætte sig små mål, fx at cykle lidt længere end sidst.</p>
<p>Modstanden stilles manuelt i 8 niveauer – enkelt og ligetil. Den er en god cykel til dig, der vil holde konditionen ved lige hjemme.</p>
HTML,
			'good'    => [ 'Dig, der vil følge din puls og distance', 'Små boliger' ],
			'less'    => [ 'Dig, der vil styre modstanden elektronisk' ],
		],
		[
			'ean'     => '8029975970134',
			'price'   => 2499,
			'name'    => 'Toorx BRX Compact',
			'role'    => 'Stille magnetisk modstand',
			'reviews' => [],
			'verdict' => 'Foldbar motionscykel med støjsvag magnetisk modstand i 8 trin, LCD-display og transporthjul.',
			'why'     => <<<'HTML'
<p>Toorx BRX Compact er til dig, der vil cykle uden at forstyrre resten af husstanden. Modstanden er magnetisk og støjsvag, så du kan træne, mens andre ser tv eller sover. Du skruer op og ned i 8 trin.</p>
<p>LCD-displayet er overskueligt og viser de træningsdata, du har brug for, uden at gøre det kompliceret. Det er nemt at gå til, også hvis du ikke har haft en motionscykel før.</p>
<p>Når du er færdig, klapper du cyklen sammen og triller den væk på transporthjulene. Den er dermed et godt bud til lejligheden eller soveværelset, hvor cyklen ikke skal stå fremme.</p>
HTML,
			'good'    => [ 'Stille træning', 'Lejligheder', 'Dig, der flytter cyklen efter brug' ],
			'less'    => [ 'Dig, der vil have avancerede træningsdata' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en sammenklappelig motionscykel</h2>
<p>Sammenklappelige motionscykler er billige og praktiske, men de er bygget lettere end almindelige motionscykler. Her er det vigtigste at tjekke.</p>
<h3>Stabilitet og brugervægt</h3>
<p>Fordi cyklen kan foldes, er stellet lettere. Tjek den maksimale brugervægt, og vælg en model med god margin, hvis du er tung eller høj. Det giver en mere stabil cykel.</p>
<h3>Ryglæn eller ej</h3>
<p>Mange X-bikes har et ryglæn, så du sidder mere tilbagelænet. Det skåner ryggen og gør det nemmere at cykle længe – en fordel, hvis cyklen også skal bruges af ældre.</p>
<h3>Modstand</h3>
<p>De fleste har magnetisk modstand i 8 trin, som du justerer på et hjul. Det er nok til motion og kondition; vil du træne hårdt, så se på en <a href="/traeningsmaskiner/motionscykler/spinningcykel/">spinningcykel</a>.</p>
<h3>Mål sammenfoldet</h3>
<p>Tjek målene, når cyklen er foldet sammen, og om den kan stå stabilt i den stilling. Transporthjul gør det meget nemmere at få den af vejen.</p>
<h3>Hvor meget skal du give?</h3>
<p>Sammenklappelige motionscykler koster typisk mellem 1.000 og 3.000 kr. hos de butikker, vi samarbejder med. Se alle <a href="/traeningsmaskiner/motionscykler/">motionscykler</a> med aktuelle priser, eller se vores bud på <a href="/koebsguide/siddecykel/">den bedste siddecykel</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er en X-bike?', 'X-bike er et populært navn for en sammenklappelig motionscykel, hvor stellet folder sig sammen som et X.' ],
		[ 'Er en foldbar motionscykel god nok?', 'Til motion og let til moderat kondition, ja. Til hård og daglig træning er en fast motionscykel eller spinningcykel mere stabil.' ],
		[ 'Hvor meget plads fylder den sammenfoldet?', 'Det varierer, men mange fylder kun omtrent halvdelen sammenfoldet. Tjek målene for den konkrete model.' ],
	],
];
