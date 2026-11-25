<?php
/**
 * Ny købsguide: massagepistol. Fakta om produkterne kommer kun fra butikkernes produktdata. Ingen sundhedsløfter.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'massagepistol',
	'keyword'  => 'massagepistol',
	'title'    => 'Massagepistol: Vores bud på de 5 bedste',
	'excerpt'  => 'En massagepistol giver dig en hurtig massage af spændte muskler efter træning. Her er vores bud på de 5 bedste massagepistoler – og hvad du bør kigge efter.',
	'more_cat' => 'massagepistol',
	'intro'    => <<<'HTML'
<p>Efter en hård træning eller en lang dag ved skrivebordet er der få ting, der føles så godt som en massage – og en massagepistol giver dig den, når det passer dig. Den virker ved hurtige, dybe slag mod musklen, og du styrer selv tryk, tempo og sted. Mange bruger den som en del af opvarmningen før træning og som afslutning bagefter.</p>
<p>Her er vores bud på de 5 bedste massagepistoler hos de butikker, vi samarbejder med lige nu: fra en billig mini til en kraftig model med drejeligt hoved. Nederst finder du en købsguide til hastigheder, massagehoveder, batteri og kraft.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8717842033005',
			'price'   => 799,
			'name'    => 'Tunturi Massagepistol',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Massagepistol med 20 hastigheder, fire massagehoveder, 5–11 timers batteritid, LED-touchdisplay og taske.',
			'why'     => <<<'HTML'
<p>Tunturi Massagepistol rammer et fint midtpunkt mellem pris og funktioner. Du får 20 hastigheder, så du kan skrue fra blid til hård massage, og fire massagehoveder til forskellige muskelgrupper og områder.</p>
<p>Batteriet holder i 5–11 timer afhængigt af den valgte hastighed, så du sjældent skal tænke på opladning. LED-touchdisplayet gør det let at skifte tempo, og tasken følger med, så pistolen er nem at tage med i fitnesstasken.</p>
HTML,
			'good'    => [ 'Dig, der vil have en alsidig pistol til alle muskler', 'Dig, der vil tage den med i tasken', 'Dig, der vil have god batteritid' ],
			'less'    => [ 'Dig, der vil have den mest kraftfulde model' ],
		],
		[
			'ean'     => '5704796035301',
			'eans'    => [ '5704796051660' ],
			'price'   => 199,
			'name'    => 'Active Sports Gear Mini Massagepistol',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Kompakt mini på 570 g med seks hastigheder og fire massagehoveder – billig og let at have med.',
			'why'     => <<<'HTML'
<p>Active Sports Gear Mini Massagepistol er den billigste måde at prøve en massagepistol på. Den vejer 570 g og er kompakt, så den er let at have med i tasken eller i skrivebordsskuffen.</p>
<p>Der er seks hastigheder og fire massagehoveder, og opladningen tager 2,5–3 timer. Den passer til dig, der gerne vil have en enkel pistol til let massage af skuldre, lår og baglår – men som ikke forventer samme kraft som i de dyrere modeller.</p>
HTML,
			'good'    => [ 'Dig, der vil prøve en massagepistol for første gang', 'Dig, der vil have noget kompakt til rejsen', 'Dig, der vil holde prisen helt i bund' ],
			'less'    => [ 'Dig, der vil have dyb og kraftig massage' ],
		],
		[
			'ean'     => '5704796027405',
			'price'   => 599,
			'name'    => 'Active Sports Gear Pro Massagepistol',
			'role'    => 'Bedst med mange hoveder',
			'reviews' => [],
			'verdict' => 'Massagepistol med 30 hastigheder, otte massagehoveder, genopladeligt batteri og opbevaringstaske.',
			'why'     => <<<'HTML'
<p>Active Sports Gear Pro Massagepistol har flest muligheder i sin prisklasse. Der er hele 30 hastigheder og otte massagehoveder, så du kan finde den rette kombination til både store muskler, mindre områder og følsomme steder.</p>
<p>Batteriet er genopladeligt og giver 2–4 timers drift, og der er en AI-chip og en opbevaringstaske med. Det er et godt valg, hvis du vil kunne tilpasse massagen meget præcist og gerne vil have et stort udvalg af hoveder at vælge mellem.</p>
HTML,
			'good'    => [ 'Dig, der vil have mange hastigheder og hoveder', 'Dig, der vil eksperimentere med forskellige massagetyper', 'Dig, der vil have taske med' ],
			'less'    => [ 'Dig, der vil have meget lang batteritid' ],
		],
		[
			'ean'     => '03010001',
			'price'   => 899,
			'name'    => 'Optima-Go Mini Massagepistol med varme',
			'role'    => 'Bedst med varmefunktion',
			'reviews' => [],
			'verdict' => 'Kompakt og let massagepistol på 420 g og 14,9 cm med varmefunktion og 2200–3000 rpm.',
			'why'     => <<<'HTML'
<p>Optima-Go Mini Massagepistol er en kompakt løsning til spændte muskler. Den er kun 14,9 cm lang og vejer 420 g, så den er nem at have i tasken, og hastigheden ligger på 2200–3000 omdrejninger i minuttet.</p>
<p>Det særlige er varmefunktionen, som mange sætter pris på ved kolde muskler før træning eller efter en lang dag. Det er en mini, der kombinerer lille format med lidt ekstra komfort.</p>
HTML,
			'good'    => [ 'Dig, der kan lide varme', 'Dig, der vil have noget, der er let og kompakt', 'Rejser og kontoret' ],
			'less'    => [ 'Dig, der vil have mange hoveder og hastigheder' ],
		],
		[
			'ean'     => '8717842035443',
			'price'   => 1799,
			'name'    => 'Tunturi Pro MG70',
			'role'    => 'Bedst til kraftig massage',
			'reviews' => [],
			'verdict' => 'Kraftig massagepistol med drejeligt hoved i fem positioner, 12 mm amplitude, 25 kg stallkraft og seks massagehoveder.',
			'why'     => <<<'HTML'
<p>Tunturi Pro MG70 er pistolen til dig, der vil have kraften. Amplituden er 12 mm, og stallkraften er 25 kg, hvilket betyder, at pistolen kan trykke dybt ind i musklen uden at gå i stå.</p>
<p>Hovedet kan drejes i fem positioner, så du kan nå de svære steder som ryggen og skuldrene. Der er seks massagehoveder og fire massagetilstande, så du kan tilpasse massagen til muskelgruppen og dagsformen.</p>
HTML,
			'good'    => [ 'Dig, der træner hårdt og vil have kraftig massage', 'Dig, der skal nå ryg og skuldre', 'Dig, der vil have en solid pistol til hverdagen' ],
			'less'    => [ 'Dig, der vil have en lille og billig model' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige massagepistol</h2>
<p>Massagepistoler ligner hinanden, men forskellene i kraft, batteri og hoveder mærkes, når du bruger dem.</p>
<h3>Kraft og amplitude</h3>
<p>Amplituden er, hvor langt hovedet bevæger sig frem og tilbage. En større amplitude giver dybere massage. Stallkraften fortæller, hvor meget tryk du kan lægge, før motoren går i stå. Til almindelig brug er en mellemkraftig pistol rigeligt; vil du have dyb massage af store muskler, er en model med højere amplitude og stallkraft en fordel.</p>
<h3>Hastigheder og tilstande</h3>
<p>Flere hastigheder lader dig finjustere. Start altid på lav hastighed og skru op efter behov. Nogle pistoler har forskellige tilstande, fx kombinerede mønstre. For de fleste er 5–6 hastigheder nok, men 20–30 giver ekstra kontrol.</p>
<h3>Massagehoveder</h3>
<p>Kugleformede hoveder passer til store muskler som lår og balder, flade hoveder til brede områder, mens små, spidse hoveder bruges til punkter. Et par hoveder er nok for de fleste; flere giver mulighed for at eksperimentere.</p>
<h3>Batteri og vægt</h3>
<p>Batteritiden afhænger af hastigheden. En mini på cirka et halvt kilo er let at have med, mens større pistoler er tungere, men ofte mere kraftfulde. Tjek, hvordan opladningen sker, og om der følger en taske med.</p>
<h3>Støj</h3>
<p>Massagepistoler laver lyd. Kraftige modeller larmer typisk mere, så tænk på, om du bruger den foran tv eller sammen med andre.</p>
<h3>Massagepistol eller foam roller?</h3>
<p>En massagepistol er hurtig og nem, mens en foam roller bruger din egen kropsvægt og er billigere. Mange bruger begge dele. Læs vores guide til <a href="/viden/massagepistol-saadan-bruger-du-den/">sådan bruger du en massagepistol</a>, og se alle <a href="/restitution/massagepistol/">massagepistoler</a> og <a href="/restitution/foam-roller/">foam rollere</a> med aktuelle priser.</p>
HTML,
	'faq'      => [
		[ 'Hvor længe skal jeg bruge en massagepistol?', 'Mange bruger den i et til to minutter pr. muskelgruppe. Hold pistolen i bevægelse over musklen, og undgå at presse direkte på knogler, led og følsomme områder.' ],
		[ 'Kan jeg bruge massagepistol før træning?', 'Ja, mange bruger den som en del af opvarmningen. Brug lav hastighed og kort tid, så musklen bliver varm uden at blive for slap.' ],
		[ 'Er en massagepistol farlig?', 'Brugt rigtigt er den en almindelig træningsgenstand, men læs vejledningen, og undgå hals, ansigt og skader. Har du en sygdom eller skade, så tal med din læge, før du bruger den.' ],
		[ 'Hvor kraftig skal en massagepistol være?', 'Til hverdagen er en mellemkraftig model fint. Træner du hårdt og vil have dyb massage, kan en model med høj amplitude og stallkraft passe bedre.' ],
		[ 'Hvor ofte kan jeg bruge den?', 'Mange bruger den dagligt i korte omgange. Lyt til kroppen, og hold pause, hvis det gør ondt.' ],
	],
];
