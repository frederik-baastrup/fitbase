<?php
/**
 * Overført fra det gamle fitbase.dk (/sammenklappelig-motionscykel/) og omskrevet.
 * Fakta om produkterne kommer kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'sammenklappelig-motionscykel',
	'title'    => 'Sammenklappelig motionscykel: Vores bud på de 4 bedste',
	'excerpt'  => 'En sammenklappelig motionscykel giver kondition hjemme og kan foldes væk bagefter. Her er vores bud på de 4 bedste til dig med sparsom plads.',
	'more_cat' => 'motionscykler',
	'intro'    => <<<'HTML'
<p>En sammenklappelig motionscykel – ofte kaldet en X-bike – er lavet til dig, der vil træne kondition hjemme, men ikke har plads til, at cyklen står fremme. Efter træningen folder du den sammen og triller den ind i et hjørne eller et skab.</p>
<p>Herunder er vores bud på de 4 bedste sammenklappelige motionscykler hos de butikker, vi samarbejder med, lige nu. De er alle billige, men der er forskel på komfort og funktioner. Nederst finder du en købsguide.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4044163025605',
			'price'   => 2499,
			'name'    => 'Top Sport S-Bike VeloFit',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Foldbar siddecykel med ryglæn, ergonomisk sæde og 14 niveauer støjsvag magnetisk modstand.',
			'why'     => <<<'HTML'
<p>Top Sport S-Bike VeloFit samler det, en sammenklappelig motionscykel skal kunne. Du sidder i et ergonomisk sæde med ryglæn, modstanden er magnetisk og kører stille, og når du er færdig, kan cyklen foldes sammen og stilles til side.</p>
<p>Med 14 modstandsniveauer har den flere trin end de fleste foldbare cykler, så der er plads til at skrue op, efterhånden som formen bliver bedre. Ryglænet gør en stor forskel for komforten, hvis du cykler længere ture eller har ondt i ryggen.</p>
HTML,
			'good'    => [ 'Små hjem', 'Dig, der vil have støtte i ryggen', 'Stille træning i stuen' ],
			'less'    => [ 'Hård intervaltræning – vælg en spinningcykel' ],
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
			'ean'     => '8717842028902',
			'slug'    => 'tunturi-cardio-fit-b20-foldbar-motionscykel',
			'price'   => 2199,
			'name'    => 'Tunturi Cardio Fit B20',
			'role'    => 'Kompakt til små hjem',
			'reviews' => [],
			'verdict' => 'Kompakt, foldbar motionscykel med 8 manuelle modstandsniveauer, batteridrevet display og tabletholder.',
			'why'     => <<<'HTML'
<p>Tunturi Cardio Fit B20 er en kompakt og foldbar motionscykel, lavet til små hjem. Når du er færdig, folder du den sammen, så den ikke skal stå fremme i stuen eller soveværelset.</p>
<p>Du justerer modstanden manuelt i 8 niveauer, så den kan bruges af både begyndere og dig, der har trænet lidt. Displayet kører på batteri, så du ikke er afhængig af en stikkontakt, når du vælger, hvor cyklen skal stå.</p>
<p>Der er også en tabletholder, så du kan se en serie eller følge et træningsprogram, mens du cykler. Det er en enkel cykel uden mange finesser – til gengæld er den nem at gå til.</p>
HTML,
			'good'    => [ 'Små boliger', 'Dig, der vil se serier eller video, mens du cykler', 'Steder uden stikkontakt i nærheden' ],
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
