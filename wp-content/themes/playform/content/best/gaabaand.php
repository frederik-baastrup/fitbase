<?php
/**
 * Ny købsguide: gåbånd (walking pad). Fakta om produkterne kommer kun fra butikkernes produktdata.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'gaabaand',
	'keyword'  => 'gåbånd',
	'title'    => 'Gåbånd: Vores bud på de 5 bedste',
	'excerpt'  => 'Et gåbånd gør hverdagen mere aktiv – også mens du arbejder eller ser tv. Her er vores bud på de 5 bedste gåbånd og walking pads, og hvad du skal tjekke før køb.',
	'more_cat' => 'gaabaand',
	'intro'    => <<<'HTML'
<p>Hvad hvis flere tusinde ekstra skridt om dagen ikke krævede en gåtur i regnvejr? Et gåbånd – ofte kaldet en walking pad – gør det muligt at gå, mens du ringer, læser mails eller ser serier. Det er lavt, fladt og støjsvagt, så det kan stå under et hæve-sænke-bord eller glide ind under sofaen, når dagen er slut.</p>
<p>Her er vores bud på de 5 bedste gåbånd hos de butikker, vi samarbejder med lige nu: et til dig, der vil have det billigste, et ultraflad med app-styring, et med foldbart håndtag, et 2-i-1 til både gang og let løb og et, der er let at gemme væk. Nederst finder du en købsguide til hastighed, løbeflade og støj.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4044163024257',
			'eans'    => [ '4044163024264' ],
			'price'   => 2499,
			'name'    => 'Top Sport 4.1 Gåbånd',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Ultraflad model på kun 11 cm med fjernbetjening, appstyring i trin på 0,1 km/t og Kinomap, Zwift og FitHome.',
			'why'     => <<<'HTML'
<p>Top Sport 4.1 er et gåbånd, der gør det meste rigtigt. Det er ultrafladt – kun 11 cm højt – og kan opbevares stående, så det ikke fylder, når du ikke bruger det. Den lave højde gør også, at det ofte kan gemmes væk under en seng eller sofa.</p>
<p>Hastigheden styres med fjernbetjening eller app i trin på 0,1 km/t, så du kan finjustere tempoet, mens du arbejder. Gåbåndet er kompatibelt med Kinomap, Zwift og FitHome, så du kan gå virtuelle ruter, hvis du får lyst til afveksling.</p>
HTML,
			'good'    => [ 'Dig, der vil gå, mens du arbejder eller ser tv', 'Dig, der vil have app-styring og små hastighedstrin', 'Dig, der vil kunne stille det på højkant, når det ikke er i brug' ],
			'less'    => [ 'Dig, der vil løbe – gåbånd er lavet til gang' ],
		],
		[
			'ean'     => '5704796046222',
			'price'   => 999,
			'name'    => 'ASG Smartwalker 200',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Kompakt gåbånd fra 1 til 6 km/t med 6 programmer, manuel hældning på 1–3 grader og kun 11,5 cm højde.',
			'why'     => <<<'HTML'
<p>ASG Smartwalker 200 er den billigste måde at komme i gang på. Gåbåndet kører fra 1 til 6 km/t, har 6 programmer og en manuel hældning på 1–3 grader, så du kan variere gangtræningen lidt, selv om modellen er enkel.</p>
<p>Det er kun 11,5 cm højt og vejer 16 kg, så du kan løfte det op og flytte det rundt uden hjælp. Skal du bruge gåbåndet til lange, hurtige ture eller til en tung bruger, bør du kigge i en højere prisklasse.</p>
HTML,
			'good'    => [ 'Dig, der vil prøve et gåbånd uden stor investering', 'Rolig gang i små rum', 'Dig, der vil kunne flytte det rundt nemt' ],
			'less'    => [ 'Dig, der vil gå hurtigt eller vil have stor løbeflade' ],
		],
		[
			'ean'     => '5714237013980',
			'price'   => 2999,
			'name'    => 'Odin W600 WalkingPad',
			'role'    => 'Bedst med foldbart håndtag',
			'reviews' => [],
			'verdict' => 'Walking pad til hjemmetræning og kontorfitness med et smart foldbart håndtag.',
			'why'     => <<<'HTML'
<p>Odin W600 er et walking pad til dig, der vil bevæge dig mere i hverdagen uden at gå på kompromis med arbejde, afslapning eller plads. Det særlige er et foldbart håndtag, som giver dig noget at støtte dig til, når du har brug for det – og som kan klappes ned, når båndet skal gemmes.</p>
<p>Et håndtag giver mange en tryghed, især hvis du er usikker på balancen eller bruger gåbåndet sammen med andre. Det er et godt kompromis mellem et helt fladt gåbånd og et klassisk løbebånd med faste håndtag.</p>
HTML,
			'good'    => [ 'Dig, der vil have noget at støtte dig til', 'Kontorfitness og hjemmetræning', 'Dig, der vil kunne klappe håndtaget ned og gemme båndet' ],
			'less'    => [ 'Dig, der vil have app-styring og stor løbeflade' ],
		],
		[
			'ean'     => '4044163024400',
			'price'   => 4499,
			'name'    => 'Top Sport Walk Run Pro',
			'role'    => 'Bedst til gang og let løb',
			'reviews' => [],
			'verdict' => '2-i-1 walking pad og løbebånd med pladsbesparende design, Bluetooth og Kinomap.',
			'why'     => <<<'HTML'
<p>Top Sport Walk Run Pro er to maskiner i én: et walking pad til hverdagsgang og et løbebånd til dig, der også vil have pulsen op. Designet er pladsbesparende, så det er nemt at opbevare, og Bluetooth og Kinomap gør det muligt at træne med virtuelle ruter.</p>
<p>Det er et godt valg, hvis du vil have det bedste fra begge verdener: den rolige dagligdags gang, når du arbejder, og et par rigtige træningspas i ugen. Tjek tophastigheden, før du køber, hvis du regner med at løbe meget.</p>
HTML,
			'good'    => [ 'Dig, der vil både gå og løbe lidt', 'Dig, der vil træne med Kinomap', 'Små boliger, hvor én maskine skal kunne det hele' ],
			'less'    => [ 'Seriøse løbere – vælg et rigtigt løbebånd' ],
		],
		[
			'ean'     => '6430062514490',
			'price'   => 6407,
			'name'    => 'Gymstick Walking Pad Pro',
			'role'    => 'Bedst til let opbevaring',
			'reviews' => [],
			'verdict' => 'Slankt og sammenfoldeligt gåbånd, der let flyttes hen til tv og gemmes i skabet eller under sofaen.',
			'why'     => <<<'HTML'
<p>Gymstick Walking Pad Pro er til dig, der vil kunne glemme, at du har et gåbånd, når du ikke bruger det. Det er slankt, lille og sammenfoldeligt, så du nemt kan flytte det hen til tv'et og efter brug sætte det tilbage i skabet eller under sofaen.</p>
<p>Det er et gåbånd til dem, der ved, at de skal bevæge sig mere i hverdagen, selvom de ikke har tid eller overskud til at tage i fitnesscenter. Prisen er højere end de enkleste modeller, men til gengæld får du en slank og gennemtænkt løsning.</p>
HTML,
			'good'    => [ 'Dig, der vil gemme båndet væk efter brug', 'Små lejligheder', 'Dig, der vil gå foran tv eller skærm' ],
			'less'    => [ 'Dig med et lille budget' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du det rigtige gåbånd</h2>
<p>Et gåbånd er ikke et løbebånd i lille format. Det er bygget til at gå på, og derfor gælder lidt andre regler, når du skal vælge.</p>
<h3>Hastighed</h3>
<p>De fleste gåbånd kører op til omkring 6 km/t, nogle til 8 km/t eller mere. Det er nok til både rolig gang og rask gang. Vil du jogge, er et klassisk løbebånd eller en 2-i-1-model mere passende. Se vores guide til <a href="/koebsguide/foldbart-loebebaand/">foldbare løbebånd</a>, hvis du vil have begge dele.</p>
<h3>Løbeflade</h3>
<p>Selv når du går, skal du have plads til dine skridt. Er fladen for kort eller for smal, kommer du til at gå utrygt. Kig efter en længde og bredde, der passer til din skridtlængde, og tjek, hvor meget du kan bevæge dig fra side til side.</p>
<h3>Højde og opbevaring</h3>
<p>Det lave design er gåbåndets styrke. Måler det omkring 11–13 cm, kan det komme under de fleste senge, skabe og sofaer. Nogle kan også stå på højkant. Tænk over, hvordan du vil gemme det, og om du kan løfte det – tjek vægten.</p>
<h3>Håndtag og stigning</h3>
<p>Et foldbart håndtag giver støtte, hvis du har brug for det, men kan klappes ned, når du vil have et helt fladt bånd. Stigning gør gåturen hårdere uden at øge tempoet. Nogle gåbånd har manuel hældning, andre elektronisk. Vil du have meget stigning, så se vores guide til <a href="/koebsguide/loebebaand-med-stigning/">løbebånd med stigning</a>.</p>
<h3>Støj og underlag</h3>
<p>Gåbånd er typisk stille, men dine skridt kan høres, især i en lejlighed. En måtte under båndet dæmper lyden og beskytter gulvet. Tjek, at motoren har god kraft i forhold til din vægt, så båndet ikke hakker.</p>
<h3>Gåbånd til kontoret</h3>
<p>Vil du bruge gåbåndet under et hæve-sænke-bord, så tænk på bordets højde, og om du kan skrive og tale roligt, mens du går. Læs mere i vores guide til <a href="/viden/gaabaand-til-kontoret/">gåbånd til kontoret</a>. Se også alle <a href="/traeningsmaskiner/lobebaand/gaabaand/">gåbånd</a> med aktuelle priser.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på et gåbånd og et løbebånd?', 'Et gåbånd er fladt og lavt, har typisk lavere tophastighed og mangler ofte håndtag. Et løbebånd har større motor, længere løbeflade og er bygget til løb.' ],
		[ 'Kan man løbe på et gåbånd?', 'Nogle gåbånd kan køre hurtigt nok til let jogging, men de er lavet til gang. Skal du løbe regelmæssigt, er et løbebånd eller en 2-i-1-model bedre.' ],
		[ 'Hvor mange skridt får man på et gåbånd?', 'Det afhænger af hastighed og tid. Går du rolig en time, er det typisk flere tusinde skridt. Brug gåbåndet i små bidder over dagen, hvis det passer bedre.' ],
		[ 'Er et gåbånd støjsvagt?', 'De fleste er støjsvage, men skridtene kan høres. En måtte under båndet hjælper meget, især hvis der bor nogen under dig.' ],
		[ 'Kan jeg bruge et gåbånd under et hæve-sænke-bord?', 'Ja, mange gør. Vælg et lavt, fladt gåbånd, og tjek, at bordet kan hæves nok til, at du kan skrive komfortabelt, mens du går.' ],
	],
];
