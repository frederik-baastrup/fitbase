<?php
/**
 * Ny købsguide (8. nov. 2026): foldbare træningsbænke.
 * Fakta om produkterne kommer kun fra butikkernes produktdata (feed og produktside). Vi har ikke selv afprøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'foldbar-traeningsbaenk',
	'title'    => 'Foldbar træningsbænk: Vores bud på de 5 bedste',
	'excerpt'  => 'En foldbar træningsbænk giver dig styrketræning hjemme og kan stilles væk bagefter. Her er vores bud på de 5 bedste – og hvad du skal kigge efter.',
	'more_cat' => 'traeningsbaenk',
	'intro'    => <<<'HTML'
<p>En træningsbænk gør håndvægtene langt mere værd. Pludselig kan du lave bænkpres, skrå pres, rows med støtte og mavetræning. Men en almindelig bænk står i vejen, når du ikke træner. En foldbar træningsbænk klapper du sammen efter træningen og stiller op ad væggen, ind i skabet eller under sengen.</p>
<p>Herunder er vores bud på de 5 bedste foldbare træningsbænke fra de butikker, vi samarbejder med. Der er både flade og justerbare bænke, en til det helt lille budget og en, der næsten forsvinder under sofaen. Nederst finder du en købsguide.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5714237012273',
			'price'   => 1899,
			'name'    => 'Odin Justerbar og Foldbar Træningsbænk',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Justerbar ryg, sæde og benstøtte, stålstel og op til 300 kg belastning – og den kan foldes sammen.',
			'why'     => <<<'HTML'
<p>Odin Justerbar og Foldbar Træningsbænk er til dig, der vil have en rigtig allround-bænk uden at give afkald på gulvpladsen. Ryglænet har 8 positioner, sædet 4 og benstøtten 3. Så kan du gå fra flad bænk til skrå pres og over til mavetræning med støtte til benene – alt sammen på én bænk.</p>
<p>Stellet er i sort stål og tåler en belastning på op til 300 kg. Det giver ro i maven, når håndvægtene bliver tungere, og når du vil træne længe på den samme bænk.</p>
<p>Når træningen er slut, folder du bænken sammen og stiller den til side. Det gør den til et godt bud, hvis den skal stå i stuen eller soveværelset.</p>
HTML,
			'good'    => [ 'Dig, der vil have én bænk til det hele', 'Dig, der træner med tunge håndvægte', 'Mavetræning med benstøtte' ],
			'less'    => [ 'Dig, der kun skal bruge en enkel flad bænk – så kan du spare penge' ],
		],
		[
			'ean'     => '8029975990125',
			'price'   => 999,
			'name'    => 'Everfit WBK-400',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Justerbar og foldbar bænk med 10 ryglæns- og 3 sædepositioner, der kun vejer 12 kg.',
			'why'     => <<<'HTML'
<p>Everfit WBK-400 giver dig en justerbar bænk til en lav pris. Ryglænet kan stilles i 10 positioner og sædet i 3. Du kan altså finde præcis den vinkel, du vil have til skrå pres, skulderpres eller siddende curls.</p>
<p>Bænken vejer kun 12 kg. Det gør den let at folde sammen og flytte, også hvis den skal frem og tilbage fra skabet hver gang, du træner. Det er en stor fordel, hvis du træner i stuen og vil have den af vejen hurtigt.</p>
<p>Er du ny i styrketræning og vil i gang med håndvægte derhjemme, er det et godt sted at starte, før du ved, om du har brug for mere.</p>
HTML,
			'good'    => [ 'Begyndere med håndvægte', 'Dig, der flytter bænken ofte', 'Dig, der vil holde prisen nede' ],
			'less'    => [ 'Dig, der vil have benstøtte til mavetræning' ],
		],
		[
			'ean'     => '5714241010968',
			'price'   => 1199,
			'name'    => 'Gorilla Sports Sammenklappelig Fladbænk',
			'role'    => 'Bedste flade bænk',
			'reviews' => [],
			'verdict' => 'Flad bænk til op til 400 kg, der klappes ned til 21,5 cm og trilles væk på hjul.',
			'why'     => <<<'HTML'
<p>Gorilla Sports Sammenklappelig Fladbænk er for dig, der vil have en stabil flad bænk og ikke har brug for skrå positioner. Den er bygget til bænkpres, sit-ups og bulgarske squats, og stålstellet tåler en belastning på op til 400 kg. Det giver god margin, også når vægtene bliver tunge.</p>
<p>Sikkerhedsskruer giver ekstra stabilitet, mens du løfter, og polstringen er højdensitetsskum betrukket med PU-læder.</p>
<p>Klappet sammen er den kun 21,5 cm høj mod 43 cm i brug, og med håndtaget og transporthjulene triller du den let hen, hvor den skal stå. Den vejer 14 kg.</p>
HTML,
			'good'    => [ 'Bænkpres med vægtstang og tunge håndvægte', 'Dig, der vil have en enkel og stabil bænk', 'Dig, der flytter bænken på hjul' ],
			'less'    => [ 'Skrå pres – ryglænet kan ikke vippes op' ],
		],
		[
			'ean'     => '5714241016083',
			'price'   => 2999,
			'name'    => 'ATX Sammenklappelig Træningsbænk',
			'role'    => 'Bedst til under sengen',
			'reviews' => [],
			'verdict' => 'Justerbar bænk, der klappet sammen kun er 11,5 cm høj – den kan ligge under sofaen eller sengen.',
			'why'     => <<<'HTML'
<p>ATX Sammenklappelig Træningsbænk er svaret, hvis du vil have en fuld justerbar bænk, men slet ikke har plads til, at den står fremme. Klappet sammen er den kun 11,5 cm høj, så den kan ligge under sofaen eller sengen. Der er transporthjul, så du nemt får den frem.</p>
<p>Ryglænet har 8 trin og sædet 3. Det giver plads til bænkpres, skulderpres, flyes, triceps-dips, curls og core-øvelser. Lejer i drejeakslerne gør, at bænken justeres uden slør.</p>
<p>Stellet er af firkantede stålrør, tåler op til 200 kg og er certificeret efter EN 20957. Med en egenvægt på ca. 22 kg er den solid i brug.</p>
HTML,
			'good'    => [ 'Små lejligheder', 'Dig, der vil gemme bænken helt væk', 'Dig, der vil have både flad og skrå bænk' ],
			'less'    => [ 'Dig, der vil have en let bænk at bære rundt på' ],
		],
		[
			'ean'     => '8717842027868',
			'price'   => 1499,
			'name'    => 'Tunturi UB20',
			'role'    => 'Bedst til mave og decline',
			'reviews' => [],
			'verdict' => 'Foldbar bænk med ryglæn fra -25° til 90° og justerbar benrulle til decline og mavetræning.',
			'why'     => <<<'HTML'
<p>Tunturi UB20 er til dig, der vil have mere end bænkpres. Ryglænet har 7 positioner fra -25° til 90°. Den negative vinkel giver dig decline-pres og hårdere mavetræning, mens den lodrette stilling er god til skulderpres.</p>
<p>Benrullen kan justeres, så du får et fast greb om benene, når du ligger med hovedet nedad. Det gør bænken til et godt alternativ til en separat mavebænk.</p>
<p>Stålrammen står på skridsikre gummifødder, så bænken ikke glider på gulvet. Efter træningen folder du den sammen og stiller den væk, så rummet hurtigt er dit eget igen.</p>
HTML,
			'good'    => [ 'Mavetræning og decline-pres', 'Dig, der vil have mange vinkler på én bænk', 'Et kendt mærke til en mellempris' ],
			'less'    => [ 'Dig, der kun skal bruge en flad bænk' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige foldbare træningsbænk</h2>
<p>En foldbar bænk skal kunne to ting: være stabil, når du træner, og fylde lidt, når du ikke gør. Start med at tænke over, hvilke øvelser du vil lave, og hvor bænken skal stå, når den er foldet sammen. Se alle <a href="/styrketraening/styrke-baenke/traeningsbaenk/">træningsbænke</a> med aktuelle priser.</p>
<h3>Flad eller justerbar?</h3>
<p>En flad bænk er enkel, stabil og ofte billigst. Den er nok til bænkpres, rows med støtte, step-ups og mange core-øvelser. En justerbar bænk kan vippes op til skrå pres og skulderpres, og nogle kan også vippes ned til decline. Vil du træne hele overkroppen med håndvægte, giver en justerbar bænk dig flest muligheder.</p>
<h3>Stabilitet og maks. belastning</h3>
<p>Belastningen er din egen vægt plus vægtene. Tjek derfor altid den oplyste maksimale belastning på produktsiden og vælg en bænk med god margin. Kig også efter et bredt stel og skridsikre fødder, så bænken ikke vipper eller glider, når du presser tungt.</p>
<h3>Foldemekanisme og mål sammenklappet</h3>
<p>Bænke foldes på forskellige måder. Nogle klappes sammen på langs og bliver flade nok til at ligge under sengen; andre foldes, så de kan stå op ad væggen. Mål pladsen, hvor bænken skal opbevares, og sammenlign med bænkens mål sammenklappet. Tjek også, hvor nemt den foldes ud og låses igen – du skal gøre det hver gang.</p>
<h3>Ryglæn og sæde</h3>
<p>Jo flere positioner ryglænet har, jo mere præcist kan du ramme den vinkel, du vil træne i. Et justerbart sæde er vigtigt, så du ikke glider ned ad bænken, når ryglænet står skråt.</p>
<h3>Benholder</h3>
<p>En benrulle eller benstøtte holder benene fast, så du kan lave sit-ups, decline-pres og andre maveøvelser med hovedet lavere end hofterne. Skal bænken også erstatte en mavebænk, er det værd at kigge efter.</p>
<h3>Polstring</h3>
<p>Fast polstring giver bedre støtte under tunge løft end blødt skum. Et betræk af kunstlæder eller PU er nemt at tørre af efter træningen, og det er rart, når bænken står i et rum, I også bor i.</p>
<h3>Opbevaring og hjul</h3>
<p>Hjul og et håndtag gør en stor forskel, hvis bænken skal frem og tilbage flere gange om ugen. Er bænken tung, er hjulene næsten et must. Er den let, kan du bare bære den. Læs også vores guide til <a href="/viden/traening-i-lejlighed-stoejsvagt-udstyr/">træning i lejlighed</a>.</p>
<h3>Hvad skal du ellers bruge?</h3>
<p>En bænk bliver først rigtig god sammen med vægte. Se vores guide til <a href="/viden/hvor-tunge-haandvaegte-skal-du-koebe/">hvor tunge håndvægte du skal købe</a> og <a href="/viden/hjemmegym-paa-et-budget/">hjemmegym på et budget</a>. Vil du løfte tungt med vægtstang, så læs om <a href="/viden/power-rack-i-hjemmet/">power rack i hjemmet</a>.</p>
HTML,
	'faq'      => [
		[ 'Er en foldbar træningsbænk lige så stabil som en fast?', 'En god foldbar bænk er stabil nok til de fleste hjemmetrænende. Tjek den oplyste maksimale belastning, og sørg for, at bænken låses ordentligt, når den er foldet ud.' ],
		[ 'Skal jeg vælge en flad eller en justerbar bænk?', 'Træner du mest bænkpres og core, er en flad bænk nok. Vil du lave skrå pres, skulderpres og flere øvelser med håndvægte, så vælg en justerbar.' ],
		[ 'Kan en foldbar træningsbænk ligge under sengen?', 'Nogle kan. Det afhænger af højden sammenklappet. Mål afstanden under din seng eller sofa, og sammenlign med bænkens mål, før du køber.' ],
		[ 'Hvad er forskellen på en træningsbænk og en mavebænk?', 'En mavebænk er bygget til mavetræning med hovedet nedad. En justerbar træningsbænk med benrulle og decline-position kan dække begge dele.' ],
	],
];
