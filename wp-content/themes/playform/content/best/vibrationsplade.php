<?php
/**
 * Ny købsguide: vibrationsplade. Fakta om produkterne kommer kun fra butikkernes produktdata. Ingen sundhedsløfter.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'vibrationsplade',
	'keyword'  => 'vibrationsplade',
	'title'    => 'Vibrationsplade: Vores bud på de 5 bedste',
	'excerpt'  => 'En vibrationsplade giver dig en kompakt og afvekslende træningsform derhjemme. Her er vores bud på de 5 bedste vibrationsplader – og hvad du skal vide, før du køber.',
	'more_cat' => 'tilbehor',
	'intro'    => <<<'HTML'
<p>Du står på pladen, vælger et program, og så begynder den at vibrere. Musklerne skal hele tiden justere sig for at holde balancen, og det kan føles overraskende hårdt, selv i simple stillinger som squat, planke og udfald. Det er netop derfor, at vibrationspladen er blevet populær hos dem, der vil have et kompakt træningsredskab, der ikke fylder meget.</p>
<p>Her er vores bud på de 5 bedste vibrationsplader hos de butikker, vi samarbejder med lige nu – fra det mest overkommelige til modeller med flere programmer og særlige funktioner. Nederst finder du en købsguide til hastigheder, programmer, motor og plads. Husk, at pladen er et supplement til din øvrige træning og ikke en genvej.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4044163019703',
			'price'   => 1499,
			'name'    => 'Top Sport Vibro 3000',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Vibrationstræner med 200 W motor, 99 hastighedsniveauer, 9 programmer, display og fjernbetjening.',
			'why'     => <<<'HTML'
<p>Top Sport Vibro 3000 har en kraftig 200 W motor i et kompakt design, så den har kræfter nok til de fleste brugere og stadig kan opbevares let. Du kan vælge mellem 99 hastighedsniveauer og 9 programmer, så du kan finjustere intensiteten og skifte, hvis du kommer til at kede dig.</p>
<p>Display og fjernbetjening gør det nemt at betjene pladen, mens du står på den, og det er en stor fordel, når du skal skifte program midt i øvelsen. Det er en velafbalanceret model, hvis du vil have både styrke og fleksibilitet.</p>
HTML,
			'good'    => [ 'Dig, der vil have mange hastigheder og programmer', 'Dig, der vil betjene pladen med fjernbetjening', 'Hjemmetræning i kompakt format' ],
			'less'    => [ 'Dig, der vil have den billigste model' ],
		],
		[
			'ean'     => '5704796046093',
			'price'   => 699,
			'name'    => 'ASG V30',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Vibrationstræner med 99 hastighedsniveauer, 9 automatiske programmer og fjernbetjening – kompakt og nem at opbevare.',
			'why'     => <<<'HTML'
<p>ASG V30 er den billigste vibrationsplade i vores udvalg, men den kan overraskende meget. Du får 99 hastighedsniveauer og 9 automatiske programmer, så du ikke selv skal planlægge hvert pas, og en praktisk fjernbetjening.</p>
<p>Designet er kompakt, så pladen er nem at stille væk, og det gør den til et godt valg i små boliger. Den er et godt sted at starte, hvis du vil prøve vibrationstræning uden at binde mange penge.</p>
HTML,
			'good'    => [ 'Dig, der vil prøve vibrationstræning billigt', 'Små boliger', 'Dig, der vil have automatiske programmer' ],
			'less'    => [ 'Dig, der vil have display og meget stærk motor' ],
		],
		[
			'ean'     => '5704796045812',
			'price'   => 1299,
			'name'    => 'ASG V50',
			'role'    => 'Bedst til enkel betjening',
			'reviews' => [],
			'verdict' => 'Vibrationstræner med 9 træningsprogrammer, kompakt design og fjernbetjening.',
			'why'     => <<<'HTML'
<p>ASG V50 giver dig 9 træningsprogrammer, der skaber variation i din vibrationstræning, og en enkel fjernbetjening, så du kan styre pladen uden at bøje dig ned. Designet er kompakt og passer til hjemmet.</p>
<p>Den er et fint valg til dig, der vil have en simpel og overskuelig plade med god variation, men uden et væld af indstillinger at tage stilling til. Mellemklassen passer til de fleste hjemmetrænende.</p>
HTML,
			'good'    => [ 'Dig, der vil have enkel betjening', 'Variation med forskellige programmer', 'Kompakt opbevaring' ],
			'less'    => [ 'Dig, der vil have mange finjusteringer og ekstra funktioner' ],
		],
		[
			'ean'     => '8717842033135',
			'price'   => 1799,
			'name'    => 'Tunturi V10',
			'role'    => 'Bedst til skånsom træning',
			'reviews' => [],
			'verdict' => 'Vibrationstræner med 30 hastigheder, 3 programmer, skånsomt svingningssystem med lav rygbelastning og aftagelig stol.',
			'why'     => <<<'HTML'
<p>Tunturi V10 har et skånsomt svingningssystem med lav rygbelastning, hvilket gør den interessant for dig, der vil have en blid start. Du kan vælge mellem 30 hastigheder og 3 programmer og dosere intensiteten efter dagsformen.</p>
<p>Designet er kompakt, og den aftagelige stol giver ekstra variation: Du kan sidde på den og bruge pladen på en anden måde. Det er et godt bud til dig, der vil have en enkel plade med fokus på komfort.</p>
HTML,
			'good'    => [ 'Dig, der vil have en blid og skånsom plade', 'Dig, der vil kunne sidde på stolen', 'Dig, der vil have en plade med fokus på komfort' ],
			'less'    => [ 'Dig, der vil have mange programmer' ],
		],
		[
			'ean'     => '5714241016229',
			'price'   => 1099,
			'name'    => 'Helkrops Vibrationstræningsplade',
			'role'    => 'Bedst til helkropstræning',
			'reviews' => [],
			'verdict' => 'Kraftig helkrops-vibrationsplade til hjemmet, der kan bruges til øvelser for hele kroppen.',
			'why'     => <<<'HTML'
<p>Helkrops Vibrationstræningsplade er en kraftig plade til hele kroppen. Den er lavet til at træne hele kroppen hjemme, og du kan bruge den til øvelser som squat, planke og udfald, hvor du står eller støtter dig på pladen.</p>
<p>Pladen er et godt valg, hvis du vil have en enkel løsning uden for mange indstillinger. Husk at tjekke produktets mål, vægtgrænse og indstillinger, før du bestiller.</p>
HTML,
			'good'    => [ 'Dig, der vil træne hele kroppen derhjemme', 'Dig, der vil have en enkel plade', 'Dig, der vil have en pris midt i feltet' ],
			'less'    => [ 'Dig, der vil have mange programmer og fjernbetjening' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige vibrationsplade</h2>
<p>Vibrationsplader ligner hinanden, men der er forskel på motor, programmer og komfort. Her er det, der gør forskellen.</p>
<h3>Hvordan virker en vibrationsplade?</h3>
<p>Pladen vibrerer hurtigt op og ned eller i en svingende bevægelse. Musklerne skal reagere på bevægelsen for at holde dig stabil, og det giver en ekstra udfordring, når du laver øvelser som squat eller planke. Pladen supplerer almindelig træning og erstatter hverken løb, styrketræning eller kost.</p>
<h3>Hastigheder og programmer</h3>
<p>Flere hastighedsniveauer giver mulighed for at finjustere intensiteten. Programmer, der ændrer hastigheden automatisk, er en fordel, hvis du ikke vil styre det selv. Til nybegyndere er det en god idé at starte lavt og bygge op over flere uger.</p>
<h3>Motor og vægtgrænse</h3>
<p>Kig på motorens effekt og på maks. brugervægt. En stærk motor klarer højere vægt uden at miste kraft. Tjek også, at pladen er stabil og ikke vipper.</p>
<h3>Komfort og svingning</h3>
<p>Nogle plader vibrerer lodret, andre i en svingende bevægelse. Svingende plader opleves af mange som mere skånsomme for rygge og led. Prøv at starte i en let stilling med bøjede knæ.</p>
<h3>Størrelse og opbevaring</h3>
<p>En vibrationsplade fylder cirka som en badevægt eller lidt mere. Mange kan stilles på højkant eller under sofaen. Er du i en lille bolig, så læs vores artikel om <a href="/viden/traening-i-lejlighed-stoejsvagt-udstyr/">træning i lejlighed med støjsvagt udstyr</a>.</p>
<h3>Sikkerhed</h3>
<p>Har du en sygdom, er gravid, har implantater eller skader, så tal med din læge, før du bruger en vibrationsplade. Følg altid producentens vejledning, og hold træningstiden kort i begyndelsen. Se alle vores <a href="/tilbehor/">tilbehør</a> med aktuelle priser.</p>
HTML,
	'faq'      => [
		[ 'Hvad bruger man en vibrationsplade til?', 'Du står eller laver øvelser på pladen, mens den vibrerer. Den bruges som supplement til almindelig træning, fx til squat, planke og udstrækning.' ],
		[ 'Hvor længe skal man stå på en vibrationsplade?', 'Mange starter med 5–10 minutter og øger gradvist. Følg producentens vejledning, og stop, hvis det ikke føles rart.' ],
		[ 'Kan en vibrationsplade erstatte almindelig træning?', 'Nej, den er et supplement. Den kan ikke erstatte konditionstræning og styrketræning med vægte.' ],
		[ 'Er en vibrationsplade støjende?', 'Den laver lyd, især ved høje hastigheder. En måtte under pladen dæmper støj og vibrationer i gulvet.' ],
		[ 'Er en vibrationsplade sikker for alle?', 'Nej. Er du gravid, har implantater eller kroniske sygdomme, så tal med din læge først.' ],
	],
];
