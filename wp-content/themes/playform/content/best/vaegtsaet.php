<?php
/**
 * Ny købsguide: vægtsæt (vægtstang + vægtskiver). Fakta om produkterne kommer kun fra butikkernes produktdata.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'vaegtsaet',
	'keyword'  => 'vægtsæt',
	'title'    => 'Vægtsæt: Vores bud på de 5 bedste',
	'excerpt'  => 'Et vægtsæt med stang og skiver er grundstenen i et hjemmegym. Her er vores bud på de 5 bedste vægtsæt – og hvad du skal vælge mellem, før du løfter.',
	'more_cat' => 'vaegtstaenger',
	'intro'    => <<<'HTML'
<p>Ingen anden træningsform har så lang en rejse bag sig som den simple vægtstang med skiver på. Du kan squatte, dødløfte, presse og række – og du kan gøre det tungere, hver gang du er klar, ved at sætte en skive mere på. Et komplet vægtsæt giver dig stang, skiver og låse i ét køb, så du slipper for at sætte sættet sammen af mange dele.</p>
<p>Her er vores bud på de 5 bedste vægtsæt hos de butikker, vi samarbejder med lige nu – fra det enkle og billige begyndersæt til olympiske sæt og bumper plates, der tåler at blive sluppet. Nederst finder du en købsguide til stangtype, skiver og vægt.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5714237007941',
			'price'   => 2699,
			'name'    => 'Odin Olympic Vægtstangssæt 55 kg',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Olympisk vægtstang på 220 cm med nubret overflade og skiver, der er lette at skifte mellem – et sæt til seriøs hjemmetræning.',
			'why'     => <<<'HTML'
<p>Odin Olympic Vægtstangssæt i 55 kg-udgaven er et sæt til dig, der vil have den rigtige standard. Stangen er en olympisk vægtstang på 220 cm med nubret overflade, så dine hænder ikke glider, og du kan nemt skifte mellem skiver eller sætte mere vægt på.</p>
<p>Det er en god base for et hjemmegym og det sæt, du kan vokse ind i, når begyndersættene ikke længere er nok. Kombinér det med et power rack og en bænk, og du har grundstenen til et rigtigt styrkerum.</p>
HTML,
			'good'    => [ 'Squat, dødløft og bænkpres derhjemme', 'Dig, der vil have en olympisk stang', 'Hjemmegym, der skal vokse over tid' ],
			'less'    => [ 'Nybegyndere, der blot vil have lidt let vægt' ],
		],
		[
			'ean'     => '5714237010569',
			'price'   => 1999,
			'name'    => 'Odin Olympic Bumper Plates Vægtstangssæt 50 kg',
			'role'    => 'Bedst med bumper plates',
			'reviews' => [],
			'verdict' => 'Olympisk vægtstang på 220 cm med bumper plates – gummiskiver, der er gode til løft fra gulvet.',
			'why'     => <<<'HTML'
<p>Odin Olympic Bumper Plates Vægtstangssæt på 50 kg kombinerer en olympisk stang på 220 cm med bumper plates. Bumper plates er skiver i gummi, som er lavet til løft fra gulvet og til øvelser som dødløft og clean, hvor stangen af og til bliver sat hårdt fra sig.</p>
<p>Stangen har nubret overflade, og du kan nemt skifte skiver eller lægge mere vægt på. Det er et godt valg til dig, der vil træne med fokus på gulvløft, og som vil have skiver, der er mere blide mod underlaget end almindelige jernskiver.</p>
HTML,
			'good'    => [ 'Dødløft og gulvløft', 'Dig, der vil have skiver, der er skånsomme mod gulvet', 'Crossfit-inspireret træning' ],
			'less'    => [ 'Dig, der vil have det billigste sæt til lette øvelser' ],
		],
		[
			'ean'     => '5714241016656',
			'price'   => 349,
			'name'    => 'Wohlstand Vægtstangssæt 20 kg',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Komplet 20 kg sæt med 140 cm stang (30 mm) – et billigt sted at starte hjemmetræningen.',
			'why'     => <<<'HTML'
<p>Wohlstand Vægtstangssæt er et komplet sæt på 20 kg med en 140 cm lang stang på 30 mm. Det er det mest overkommelige sæt i udvalget og en god første stang, hvis du er ny i styrketræning derhjemme.</p>
<p>Sættet passer til øvelser som curl, skulderpres og lette roøvelser. Vil du løfte tungt med squat og bænkpres, skal du bruge en længere olympisk stang og flere skiver – men som start er det en billig og enkel løsning.</p>
HTML,
			'good'    => [ 'Nybegyndere og dem med lille budget', 'Let styrketræning og aerobic', 'Små rum, hvor en lang stang ikke kan være' ],
			'less'    => [ 'Tunge løft som squat og dødløft' ],
		],
		[
			'ean'     => '5714237010668',
			'price'   => 799,
			'name'    => 'Odin Basic Vægtstangssæt 44,5 kg',
			'role'    => 'Bedst til flere kilo',
			'reviews' => [],
			'verdict' => 'Basissæt med skiver i kraftig plastik – effektiv træning af overkroppen derhjemme og mere vægt end de mindste sæt.',
			'why'     => <<<'HTML'
<p>Odin Basic Vægtstangssæt på 44,5 kg er et skridt op fra de mindste sæt. Vægtskiverne er produceret i kraftig plastik og er beregnet til hjemmetræning, og sættet er velegnet til effektiv træning af overkroppen, fx biceps og triceps.</p>
<p>Du får mere vægt at arbejde med, og skiverne er lette at håndtere. Det er et fornuftigt valg, hvis du vil have et sæt, der kan vokse med dig i et par år, uden at du skal over i den olympiske klasse med det samme.</p>
HTML,
			'good'    => [ 'Dig, der vil have flere kilo i et enkelt sæt', 'Overkropstræning derhjemme', 'Dig, der vil have mellemvej mellem billigt og olympisk' ],
			'less'    => [ 'Dig, der vil have en olympisk stang til tunge grundøvelser' ],
		],
		[
			'ean'     => '5704519002696',
			'price'   => 1299,
			'name'    => 'POWR.4 PRO Studio Pump Vægtstangssæt',
			'role'    => 'Bedst til studiotræning',
			'reviews' => [],
			'verdict' => 'Komplet pumpsæt med gulvvenlige, farvekodede skiver og quick release-låse.',
			'why'     => <<<'HTML'
<p>POWR.4 PRO Studio Pump er et komplet pumpsæt med skiver, der ikke skader gulvet og er behagelige at håndtere. Skiverne er farvekodede, så du hurtigt kan se, hvor meget du har på stangen, og sættet har quick release-låse, som gør det hurtigt at skifte vægt.</p>
<p>Det er et sæt til dig, der træner i hold, i studiet eller derhjemme og vil have en nem og pæn løsning. Passer til pump- og styrkepas, hvor tempoet er højt, og vægtskiftene sker ofte.</p>
HTML,
			'good'    => [ 'Pumppas og holdtræning', 'Dig, der skifter vægt tit', 'Dig, der vil have skiver, der er skånsomme mod gulvet' ],
			'less'    => [ 'Dig, der vil have meget tung vægt til grundøvelser' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du det rigtige vægtsæt</h2>
<p>Et vægtsæt består af en stang, skiver og låse. Kvaliteten og typen af hver del afgør, hvad du kan bruge sættet til.</p>
<h3>Aerobic-stang eller olympisk stang?</h3>
<p>Aerobic- og pumpsæt har en kortere og tyndere stang (typisk 25–30 mm) og passer til lettere træning. Olympiske stænger er længere (ofte 220 cm), tykkere i enden og tåler langt mere vægt. Vil du squatte, dødløfte og bænkpresse tungt, er olympisk stang det rigtige valg – og skiverne skal passe til den, med 50 mm hul.</p>
<h3>Skivetyper</h3>
<p>Jern- og støbejernsskiver er klassikere og fylder lidt. Plastik- eller betonskiver er billigere. Bumper plates er gummi og tåler at blive sluppet, hvilket er en fordel ved dødløft og gulvløft. Vælg efter, hvor du træner og hvilke øvelser du laver.</p>
<h3>Hvor mange kilo skal du have?</h3>
<p>Som begynder er 20–40 kg ofte nok, men du vil hurtigt vokse ud af det. Tænk over, om du vil købe mere senere, og vælg et sæt, hvor du kan sætte flere skiver på. Se også vores guide til <a href="/koebsguide/justerbare-haandvaegte/">justerbare håndvægte</a> for lettere træning.</p>
<h3>Låse og sikkerhed</h3>
<p>Brug altid låse, så skiverne ikke glider af stangen. Quick release-låse er hurtige, mens skruelåse sidder fast. Tjek, at de passer til din stang. Til tunge løft bør du bruge et <a href="/koebsguide/power-rack/">power rack</a> og en <a href="/koebsguide/foldbar-traeningsbaenk/">træningsbænk</a>, så du kan løfte sikkert alene.</p>
<h3>Gulv og opbevaring</h3>
<p>Tunge skiver og stænger kan skade gulvet. Brug gummimåtter og opbevar stang og skiver i et stativ eller på stangens ender. Se alle <a href="/styrketraening/vaegte-kettlebells/vaegtstaenger/">vægtstænger</a> og <a href="/styrketraening/vaegte-kettlebells/vaegtskiver/">vægtskiver</a> med aktuelle priser.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på en olympisk og en almindelig vægtstang?', 'Olympiske stænger er længere, tykkere og tåler mere vægt. De har 50 mm hul til skiverne, mens almindelige stænger typisk er 25–30 mm.' ],
		[ 'Hvad er bumper plates?', 'Skiver lavet af gummi, der kan sluppes fra gulvet uden at gå i stykker. De bruges ofte til dødløft og olympiske løft.' ],
		[ 'Hvor meget bør jeg købe til at starte med?', 'Det afhænger af dit niveau. Begyndere kan nøjes med 20–40 kg, men vælg et sæt, hvor du kan tilføje mere vægt senere.' ],
		[ 'Kan jeg bruge et vægtsæt uden rack?', 'Ja, til lettere øvelser som curl, pres og roning. Til squat og bænkpres bør du bruge et rack for at træne sikkert.' ],
		[ 'Hvordan beskytter jeg gulvet?', 'Brug gummimåtter eller hestemåtter under træningsområdet, og undgå at tabe vægten fra stor højde.' ],
	],
];
