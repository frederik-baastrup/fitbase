<?php
/**
 * Ny købsguide: airbike. Fakta om produkterne kommer kun fra butikkernes produktdata.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'airbike',
	'keyword'  => 'airbike',
	'title'    => 'Airbike: Vores bud på de 5 bedste',
	'excerpt'  => 'En airbike giver hård intervaltræning med både arme og ben på få minutter. Her er vores bud på de 5 bedste airbikes – og hvad du bør vide, før du vælger.',
	'more_cat' => 'airbike',
	'intro'    => <<<'HTML'
<p>Der er cykler, der lader dig tage det roligt – og så er der airbiken. Her er modstanden en ventilator, og reglen er simpel: Jo hårdere du presser på, jo hårdere bliver det. Der er ingen knap, der kan snyde dig til en let tur. Armene skubber og trækker i takt med benene, så hele kroppen er i gang fra første minut.</p>
<p>Derfor er airbiken blevet en favorit til HIIT, intervaller og crossfit-inspirerede træningspas, hvor 15–20 minutter kan føles som en hel time. Her er vores bud på de 5 bedste airbikes hos de butikker, vi samarbejder med lige nu – fra den prisvenlige indgang til den mest udstyrede model. Nederst finder du en købsguide til modstand, stabilitet og display.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8029975999746',
			'price'   => 7999,
			'name'    => 'Toorx BRX-AIR 300',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Solid airbike på 41 kg med automatisk luftmodstand, LCD-display og pedaler med straps.',
			'why'     => <<<'HTML'
<p>Toorx BRX-AIR 300 rammer en god balance mellem pris og kvalitet. Konstruktionen er solid og stabil med en vægt på 41 kg, så den bliver stående, når du giver den alt, hvad du har i intervallerne.</p>
<p>Luftmodstanden er automatisk og passer sig til de intervalpas, du kører, og LCD-displayet viser de træningsdata, du har brug for. Pedalerne har straps, så fødderne bliver siddende, når tempoet stiger. Det er en airbike, der klarer både korte HIIT-pas og længere udholdenhedsture.</p>
HTML,
			'good'    => [ 'Dig, der vil have en robust airbike uden at gå efter det dyreste', 'HIIT og intervaltræning', 'Dig, der vil have overskuelige træningsdata' ],
			'less'    => [ 'Dig, der vil have app-styring og mange digitale funktioner' ],
		],
		[
			'ean'     => '5714237013850',
			'price'   => 2799,
			'name'    => 'Odin A800',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Airbike med luftmodstand til intens helkropstræning hjemme – den billigste vej ind i genren.',
			'why'     => <<<'HTML'
<p>Odin A800 er en airbike til dig, der vil prøve den hårde, ærlige luftmodstand uden at bruge mange penge. Den passer til både hjemmet, fitnesscentret og arbejdspladsen, og princippet er det samme som på de dyre: Ventilatoren giver modstand efter din indsats.</p>
<p>Prisen gør den oplagt som første airbike eller som supplement til din øvrige hjemmetræning. Regn dog med, at de dyrere modeller byder på mere stabilitet og flere funktioner, hvis du skal træne meget tungt og ofte.</p>
HTML,
			'good'    => [ 'Dig, der vil prøve en airbike for første gang', 'Dig, der vil holde prisen nede', 'Hjemmetræning og kontorfitness' ],
			'less'    => [ 'Tunge brugere og dig, der vil køre med maksimal kraft hver dag' ],
		],
		[
			'ean'     => '5704796045492',
			'price'   => 3999,
			'name'    => 'ASG Airbike Pro',
			'role'    => 'Bedst med app',
			'reviews' => [],
			'verdict' => 'Airbike med luftmodstand, der følger din indsats, justerbar sadel og Bluetooth til Kinomap og Zwift.',
			'why'     => <<<'HTML'
<p>ASG Airbike Pro giver dig luftmodstand, der vokser med din indsats, og en sadel, der kan justeres både i højden og frem og tilbage. Det gør det lettere at finde en siddestilling, der passer til din krop – og det betyder noget, når du presser dig selv.</p>
<p>Bluetooth til Kinomap og Zwift åbner for virtuelle ruter og løb mod andre, hvilket kan gøre træningen mere motiverende end at kigge på tallene alene. Det er en godt udstyret airbike i den lavere prisklasse.</p>
HTML,
			'good'    => [ 'Dig, der vil træne med Kinomap eller Zwift', 'Brugere i forskellige højder, der deler maskinen', 'Dig, der vil have mere end det helt basale til prisen' ],
			'less'    => [ 'Dig, der har brug for en meget tung og stabil konstruktion' ],
		],
		[
			'ean'     => '5714605000086',
			'price'   => 9995,
			'name'    => 'Sportop Airbike The Beast',
			'role'    => 'Bedst til HIIT',
			'reviews' => [],
			'verdict' => 'Airbike bygget til høj intensitet, hvor du kan få et hårdt HIIT-pas på kort tid.',
			'why'     => <<<'HTML'
<p>Sportop Airbike The Beast er bygget til korte, hårde træningspas. Den passer til HIIT, hvor du skifter mellem maksimal indsats og hvile og får en hel workout på meget kort tid.</p>
<p>Navnet siger det meste: Det er en airbike til dig, der kan lide at presse dig selv, og som vil have en maskine, der er mere seriøs end indgangsmodellerne.</p>
HTML,
			'good'    => [ 'Dig, der kører intervaller og HIIT', 'Dig, der har travlt og vil have effektive pas', 'Dig, der vil have en kraftigere maskine end begyndermodellerne' ],
			'less'    => [ 'Dig, der kun vil motionere roligt – en almindelig motionscykel er billigere' ],
		],
		[
			'ean'     => '8029975809670',
			'price'   => 12999,
			'name'    => 'Toorx BRX 5000',
			'role'    => 'Mest avancerede',
			'reviews' => [],
			'verdict' => 'Airbike med automatisk og justerbar luftmodstand, fuld datavisning, app-integration og justering i to akser.',
			'why'     => <<<'HTML'
<p>Toorx BRX 5000 er topmodellen i udvalget. Luftmodstanden er både automatisk og justerbar, du får fuld datavisning, og maskinen kan kobles til apps. Det giver dig mulighed for at følge din udvikling tæt og planlægge dine intervaller præcist.</p>
<p>Ergonomien er også i fokus: Du kan tilpasse maskinen i to akser, så den passer til din krop, og designet er robust med høj brugervægt. Det er en airbike til dig, der træner meget og vil have en maskine, der kan følge med.</p>
HTML,
			'good'    => [ 'Dig, der træner seriøst og ofte', 'Dig, der vil følge data og bruge apps', 'Brugere, der kræver en robust maskine med høj brugervægt' ],
			'less'    => [ 'Dig, der blot vil prøve konceptet af' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige airbike</h2>
<p>Airbikes ligner hinanden på overfladen: en stor ventilator foran, sadel bagved og to bevægelige håndtag. Forskellene ligger i stabilitet, justeringsmuligheder og digitale funktioner.</p>
<h3>Hvordan virker luftmodstand?</h3>
<p>Når du træder og skubber, drejer en ventilator rundt, og luften giver modstand. Jo hurtigere du kører, jo hårdere bliver det – helt uden bremse eller knap. Det giver en træning, der automatisk tilpasser sig din kondition, og som er svær at snyde. Til gengæld kan du ikke hvile på en let indstilling, så vælg airbike, hvis du er klar til at blive udfordret.</p>
<h3>Stabilitet og vægt</h3>
<p>En tung ramme bliver stående, når du kører intervaller med fuld kraft. Kig på maskinens vægt og på, om den har regulerbare fødder, så den ikke vipper på et skævt gulv. Til rolig træning kan en let model være nok, men vil du give den hele armen, er en solid konstruktion pengene værd.</p>
<h3>Sadel og ergonomi</h3>
<p>Du skal kunne justere sadlen i højden, og gerne også frem og tilbage. Det gør, at du får en god siddestilling og undgår unødigt pres på knæ og lænd. Er I flere i husstanden med forskellig højde, er det ekstra vigtigt.</p>
<h3>Display og apps</h3>
<p>Et enkelt LCD-display med tid, distance og puls er rigeligt til mange. Vil du have virtuelle ruter og løb, så kig efter Bluetooth og kompatibilitet med apps som Kinomap og Zwift. Intervalprogrammer kan være en hjælp, hvis du hurtigt vil i gang.</p>
<h3>Airbike, spinningcykel eller motionscykel?</h3>
<p>En <a href="/koebsguide/spinningcykel/">spinningcykel</a> er bygget til lange ture med fokus på benene, mens en airbike også bruger armene og passer til korte, hårde pas. Læs vores guide <a href="/viden/spinningcykel-kondicykel-eller-airbike/">spinningcykel, kondicykel eller airbike</a>, hvis du er i tvivl. Se også alle <a href="/traeningsmaskiner/motionscykler/airbike/">airbikes</a> med aktuelle priser.</p>
<h3>Hvad må en airbike koste?</h3>
<p>Indgangsmodellerne er billige og gør det, de skal. I mellemklassen får du mere stabilitet og bedre justering, og i den dyre ende kommer fuld datavisning, apps og høj brugervægt. Træner du få gange om ugen, er mellemklassen ofte det sted, hvor pris og kvalitet mødes bedst.</p>
HTML,
	'faq'      => [
		[ 'Hvad er en airbike?', 'En airbike er en stationær cykel med en stor ventilator som modstand og bevægelige håndtag. Du bruger både arme og ben, og modstanden stiger, jo hårdere du presser på.' ],
		[ 'Er en airbike god til at tabe sig?', 'Den bruger mange muskler på én gang og får pulsen højt op, så den er effektiv til konditions- og intervaltræning. Vægttab afhænger dog af din samlede kost og træning.' ],
		[ 'Larmer en airbike?', 'Ja, ventilatoren laver en susende lyd, som bliver højere, jo hurtigere du kører. Den er derfor mest velegnet til et træningsrum, kælder eller garage frem for en lejlighed med nabo under dig.' ],
		[ 'Hvor længe skal man træne på en airbike?', 'Mange nøjes med 10–20 minutter, fordi træningen er så intens. Prøv fx intervaller på 20–30 sekunders hård indsats efterfulgt af hvile, og byg langsomt op.' ],
		[ 'Kan nybegyndere bruge en airbike?', 'Ja, du styrer selv intensiteten med din indsats. Start roligt, og lad kroppen vænne sig til belastningen, før du kører intervaller.' ],
	],
];
