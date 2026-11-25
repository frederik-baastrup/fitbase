<?php
/**
 * Ny købsguide: crosstrainer. Fakta om produkterne kommer kun fra butikkernes produktdata.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'crosstrainer',
	'keyword'  => 'crosstrainer',
	'title'    => 'Crosstrainer: Vores bud på de 5 bedste',
	'excerpt'  => 'En crosstrainer giver dig puls og helkropstræning uden stød i leddene. Her er vores bud på de 5 bedste hjemmecrosstrainere – og hvad du skal kigge efter, før du vælger.',
	'more_cat' => 'crosstrainer',
	'intro'    => <<<'HTML'
<p>Der er en grund til, at crosstrainere står i så mange stuer og kælderrum: Fødderne forlader aldrig pedalerne, så der er ingen hårde nedslag, men pulsen kommer alligevel hurtigt op. Og fordi armene arbejder med, får du ryg, skuldre og arme med i regnestykket – ikke kun lår og baller.</p>
<p>Her har vi samlet vores bud på de 5 bedste crosstrainere til hjemmet hos de butikker, vi samarbejder med lige nu. Der er en enkel model til dig, der vil i gang uden at bruge meget, en kompakt og støjsvag til lejligheden, en alsidig allrounder, en med fokus på apps og en robust maskine til dig, der skal træne hver uge i mange år. Nederst finder du en købsguide til skridtlængde, modstand og svinghjul.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8717842036693',
			'price'   => 5999,
			'name'    => 'Tunturi Signature C20-R',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Baghjulsdrevet crosstrainer med 28 kg svinghjul, justerbare pedaler og både faste og bevægelige håndtag.',
			'why'     => <<<'HTML'
<p>Tunturi Signature C20-R har det, en god hjemmecrosstrainer skal have: et tungt svinghjul på 28 kg, der giver en rund og jævn bevægelse, og en baghjulsdrevet konstruktion, som giver mere intens træning end de simpleste modeller.</p>
<p>Pedalerne kan justeres, og du kan vælge mellem faste og bevægelige håndtag. Træner du kun benene, holder du fast i de faste; vil du have overkroppen med, tager du de bevægelige. Maksimal brugervægt er 150 kg, så den kan bruges af de fleste i en husstand.</p>
HTML,
			'good'    => [ 'Dig, der vil have én crosstrainer til hele familien', 'Dig, der vil kunne vælge mellem ben- og helkropstræning', 'Dig, der leder efter en solid mellemklasse' ],
			'less'    => [ 'Dig, der ikke har plads til en maskine med fuld størrelse' ],
		],
		[
			'ean'     => '5714237003660',
			'price'   => 1399,
			'name'    => 'Odin C200',
			'role'    => 'Bedst til lille budget',
			'reviews' => [],
			'verdict' => 'Enkel og kompakt crosstrainer med computer, der viser tid, distance, kalorier, puls og hastighed.',
			'why'     => <<<'HTML'
<p>Odin C200 er til dig, der gerne vil prøve crosstrainertræning, men ikke vil bruge en stor sum, før du ved, om du holder fast. Maskinen er kompakt og bygget til nybegyndere og let hjemmetræning.</p>
<p>Computeren viser tid, distance, kalorier, puls og hastighed, så du kan følge med i dine egne fremskridt fra første uge. Forvent ikke samme tyngde og stabilitet som i de dyrere modeller – men som første skridt ind i cardiotræning derhjemme er den et godt og overskueligt sted at starte.</p>
HTML,
			'good'    => [ 'Nybegyndere og let motion', 'Dig, der vil holde investeringen lille', 'Små rum, hvor en stor maskine ikke kan stå' ],
			'less'    => [ 'Dig, der vil træne hårdt og ofte, eller som er meget høj eller tung' ],
		],
		[
			'ean'     => '4044163025438',
			'price'   => 3999,
			'name'    => 'Top Sport CT5',
			'role'    => 'Bedst til lille plads',
			'reviews' => [],
			'verdict' => 'Kompakt og støjsvag crosstrainer med magnetisk modstand, 15 niveauer og bevægelige grebarme.',
			'why'     => <<<'HTML'
<p>Top Sport CT5 er bygget til hjemmet, hvor både pladsen og lydniveauet tæller. Modstanden er magnetisk, hvilket giver en støjsvag drift, og designet er kompakt, så maskinen ikke æder hele stuen.</p>
<p>Du kan vælge mellem 15 modstandsniveauer og bruge de bevægelige grebarme til at få overkroppen med. Træningen er skånsom mod leddene, så den passer både til dig, der bygger kondition op, og til dig, der kommer tilbage efter en pause.</p>
HTML,
			'good'    => [ 'Lejligheder og rum, hvor der skal være ro', 'Dig, der vil have en skånsom helkropstræning', 'Dig, der vil have en mellemvej mellem pris og kvalitet' ],
			'less'    => [ 'Dig, der vil have mange programmer og app-styring' ],
		],
		[
			'ean'     => '7051943736092',
			'price'   => 8999,
			'name'    => 'Abilica Journey BT',
			'role'    => 'Bedst til app-træning',
			'reviews' => [],
			'verdict' => 'Crosstrainer med 32 modstandsniveauer, 40 cm skridtlængde og Bluetooth til iConsole+, Kinomap og Zwift.',
			'why'     => <<<'HTML'
<p>Abilica Journey BT er valget, hvis du hellere vil træne med en app end stirre på et lille display. Maskinen har Bluetooth og er kompatibel med iConsole+, Kinomap og Zwift, så du kan køre virtuelle ruter og følge med i din træning på skærmen.</p>
<p>Med 32 modstandsniveauer kan du dosere intensiteten meget præcist, og skridtlængden på 40 cm passer til de fleste voksne. Det er en crosstrainer, der gør hjemmetræningen mindre ensformig – og dermed nemmere at holde ved over tid.</p>
HTML,
			'good'    => [ 'Dig, der vil træne med Zwift eller Kinomap', 'Dig, der kan lide at finjustere modstanden', 'Dig, der bliver hurtigt træt af at træne uden afveksling' ],
			'less'    => [ 'Meget høje brugere, der gerne vil have en længere skridtlængde' ],
		],
		[
			'ean'     => '7051943736115',
			'price'   => 12999,
			'name'    => 'Abilica Premium FC BT',
			'role'    => 'Mest robuste',
			'reviews' => [],
			'verdict' => 'Robust crosstrainer til hjemme- og erhvervsbrug med 51 cm skridtlængde, 32 modstandsniveauer og justerbare skinner.',
			'why'     => <<<'HTML'
<p>Abilica Premium FC BT er den crosstrainer, du vælger, når du vil have en maskine, der tåler hyppig brug. Den er robust bygget og passer både til hjemmet og til virksomheder.</p>
<p>Skridtlængden på 51 cm giver en lang og naturlig bevægelse, og de justerbare skinner gør, at du kan variere, hvilke muskler der arbejder mest. Med 32 modstandsniveauer og Bluetooth har du både finjustering og mulighed for at koble en app på.</p>
HTML,
			'good'    => [ 'Høje brugere og alle, der vil have lange skridt', 'Dig, der træner flere gange om ugen', 'Dig, der vil have en maskine, der skal holde i mange år' ],
			'less'    => [ 'Dig med et stramt budget eller meget lidt gulvplads' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige crosstrainer</h2>
<p>En crosstrainer ligner en trappemaskine og en skiløber i ét. Det vigtigste er, at bevægelsen føles naturlig for netop din krop, og at maskinen er stabil nok til den måde, du træner på.</p>
<h3>Skridtlængde</h3>
<p>Skridtlængden er afstanden, dine fødder bevæger sig frem og tilbage. Er den for kort, bliver bevægelsen hakkende; er den for lang, kommer du til at strække hoften unaturligt. Som tommelfingerregel passer en kortere skridtlængde til mindre brugere, mens højere personer får mest ud af en længde omkring 50 cm eller mere. Prøv den gerne, hvis du kan, eller sammenlign med de mål, du kender fra crosstrainere i fitnesscentre.</p>
<h3>Svinghjul og drivsystem</h3>
<p>Et tungt svinghjul giver en jævn og rund bevægelse uden rykvis modstand. Kigger du på en model med et svinghjul på omkring 20 kg eller mere, kan du forvente en mere stabil oplevelse end med de helt lette modeller. Baghjulsdrevne maskiner har ofte en mere naturlig løbebevægelse, mens forhjulsdrevne typisk er mere kompakte.</p>
<h3>Modstand</h3>
<p>Magnetisk modstand er næsten lydløs og vedligeholdelsesfri, og den er derfor det mest almindelige valg til hjemmet. Hvor mange niveauer du får, afgør, hvor præcist du kan styre intensiteten. For en nybegynder er 8–16 niveauer rigeligt; vil du finjustere intervaller, er 24 eller 32 niveauer en fordel.</p>
<h3>Håndtag, pedaler og justering</h3>
<p>Bevægelige håndtag giver armene arbejde, mens faste håndtag giver dig noget at holde fast i, når du kun vil træne benene. Justerbare pedaler eller skinner gør det muligt at ændre vinklen, så du kan skifte mellem mere eller mindre fokus på lår og baller. Kig også på maks. brugervægt – den fortæller meget om, hvor kraftigt maskinen er bygget.</p>
<h3>Computer og apps</h3>
<p>En enkel computer med tid, distance, kalorier og puls er nok for mange. Vil du have afveksling, så kig efter Bluetooth og kompatibilitet med apps som Zwift, Kinomap og iConsole+, hvor du kan følge ruter eller deltage i virtuelle hold.</p>
<h3>Crosstrainer eller noget andet?</h3>
<p>Er du i tvivl om, om en crosstrainer er det rigtige for dig, så læs vores sammenligning af <a href="/viden/crosstrainer-eller-lobebaand/">crosstrainer og løbebånd</a>. Vil du hellere have en maskine, der træner ryg og arme kraftigere, kan <a href="/koebsguide/romaskine-med-vand/">en romaskine</a> være et godt alternativ. Se også alle <a href="/traeningsmaskiner/romaskiner-crosstrainere/crosstrainer/">crosstrainere</a> med aktuelle priser.</p>
<h3>Hvor stor skal budgettet være?</h3>
<p>De billigste crosstrainere er enkle maskiner til let motion. I mellemklassen får du tungere svinghjul, flere modstandsniveauer og bedre stabilitet, og i den dyre ende kommer robust konstruktion, lang skridtlængde og app-forbindelse. Træner du et par gange om ugen i mange år, er det ofte de ekstra kroner til en mere stabil maskine, der betaler sig.</p>
HTML,
	'faq'      => [
		[ 'Hvad træner man på en crosstrainer?', 'Du træner hele kroppen: lår, baller og lægge med benene og bryst, ryg, skuldre og arme, hvis du bruger de bevægelige håndtag. Samtidig får du pulsen op, så det er også god konditionstræning.' ],
		[ 'Er en crosstrainer skånsom mod leddene?', 'Ja, fordi fødderne bliver på pedalerne hele tiden, er der ingen stød ved nedslag som under løb. Derfor vælger mange en crosstrainer, når knæ eller hofter skal skånes.' ],
		[ 'Kan man tabe sig på en crosstrainer?', 'En crosstrainer kan hjælpe, fordi den bruger mange muskler på én gang, men vægttab afhænger af din samlede kost og træning. Vælg en maskine, du faktisk får brugt regelmæssigt.' ],
		[ 'Hvor meget plads fylder en crosstrainer?', 'De fleste fylder cirka som en motionscykel i længden, men er højere og bredere. Mål både gulvplads og loftshøjde, især hvis du står på pedalerne, så hovedet ikke rammer loftet.' ],
		[ 'Larmer en crosstrainer?', 'Magnetiske modeller er næsten lydløse. Det, du hører, er mest bevægelsen og dine egne skridt. Står maskinen på en måtte, dæmper du lyden yderligere.' ],
	],
];
