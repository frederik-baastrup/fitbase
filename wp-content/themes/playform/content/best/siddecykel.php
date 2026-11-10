<?php
/**
 * Overført fra det gamle fitbase.dk (/siddecykel/ – og /mini-motionscykel/, der nu viderestiller hertil).
 * Omskrevet 10. nov. 2026 efter ejerens søgeintention: en siddecykel er en pedaltræner/minicykel uden sadel,
 * som man træder i fra sofaen eller en stol – ikke en liggecykel med sæde og ryglæn.
 * Fakta om produkterne kommer kun fra butikkernes produktdata. Vi har ikke selv afprøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'siddecykel',
	'keyword'  => 'siddecykel',
	'title'    => 'Siddecykel: Vores bud på de 5 bedste til sofaen og stolen',
	'excerpt'  => 'En siddecykel er en lille pedaltræner, du træder i fra sofaen, stolen eller kontorstolen. Her er vores bud på de 5 bedste – og hvad du skal kigge efter.',
	'more_cat' => 'siddecykel',
	'intro'    => <<<'HTML'
<p>Du sidder alligevel i sofaen. Eller ved skrivebordet. Så hvorfor ikke lade benene arbejde imens? En siddecykel er en lille pedaltræner uden sadel. Du stiller den på gulvet foran dig, sætter dig godt til rette og træder løs – mens du ser serier, læser mails eller taler i telefon.</p>
<p>Den fylder næsten ingenting, og når du er færdig, ryger den ind under bordet eller i skabet. Mange modeller kan også stå på bordet, så du kan træne armene.</p>
<p>Herunder er vores bud på de 5 bedste siddecykler fra de butikker, vi samarbejder med. Der er en til den lille pris, en til kontoret, en uden modstand til skånsom bevægelse og en med app og Bluetooth. Nederst finder du en købsguide.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8717842036716',
			'price'   => 1799,
			'name'    => 'Tunturi Cardio Fit M45',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Stabil pedaltræner med brede stabilisatorer, aftagelig skærm og Bluetooth – lille nok til at gemme væk.',
			'why'     => <<<'HTML'
<p>Tunturi Cardio Fit M45 er til dig, der vil have en siddecykel, der står fast. Den har brede stabilisatorer og skridsikre fødder. Det betyder meget, når den står på et glat gulv foran sofaen, og du træder til.</p>
<p>Skærmen kan tages af, og med Bluetooth kan du koble den til Tunturi Routes. Så kan du følge med i din træning og få lidt mere motivation til at holde gang i pedalerne, dag efter dag.</p>
<p>Den er let og kompakt. Du flytter den nemt fra stuen til kontoret og stiller den væk, når du er færdig. Vil du have én siddecykel, der kan lidt af det hele, er det her et godt sted at starte.</p>
HTML,
			'good'    => [ 'Daglig bevægelse foran tv eller computer', 'Dig, der vil følge træningen i en app', 'Glatte gulve, hvor den skal stå fast' ],
			'less'    => [ 'Dig, der vil have hård konditionstræning – vælg en almindelig motionscykel' ],
		],
		[
			'ean'     => '8717842029558',
			'price'   => 999,
			'name'    => 'Tunturi Cardio Fit M35',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Kompakt pedaltræner med magnetisk modstand til både arme og ben – og den kører på batteri.',
			'why'     => <<<'HTML'
<p>Tunturi Cardio Fit M35 giver dig magnetisk modstand uden at give mange penge. Magnetisk modstand giver en jævn og behagelig bevægelse. Det er rart, når du træder i lang tid ad gangen foran tv'et.</p>
<p>Du kan bruge den til både benene og armene. Stil den på gulvet foran sofaen, eller sæt den på bordet og tag en tur med armene i stedet. Så får du mere ud af den samme lille maskine.</p>
<p>Den er kompakt og batteridrevet. Du skal altså ikke lede efter en stikkontakt, men kan stille den lige der, hvor du sidder. Er du ny med en siddecykel og vil have modstand at skrue på, er den et oplagt valg.</p>
HTML,
			'good'    => [ 'Dig, der vil have modstand uden at give meget', 'Træning af både arme og ben', 'Steder uden stikkontakt i nærheden' ],
			'less'    => [ 'Hård konditionstræning – det er en lille pedaltræner, ikke en motionscykel' ],
		],
		[
			'ean'     => '8717842031612',
			'price'   => 1599,
			'name'    => 'Tunturi Cardio Fit D10',
			'role'    => 'Bedst under skrivebordet',
			'reviews' => [],
			'verdict' => 'Kompakt pedaltræner til kontoret og hjemmet med justerbar modstand og indbygget display.',
			'why'     => <<<'HTML'
<p>Tunturi Cardio Fit D10 er bygget til at stå under skrivebordet. Den er kompakt og lavet til både kontor og hjem, så den passer ind ved hjemmearbejdspladsen eller på kontoret.</p>
<p>Modstanden kan justeres til let og moderat træning. Det er netop det, du har brug for, når du arbejder samtidig. Benene skal være i gang, men du skal stadig kunne koncentrere dig om skærmen og tastaturet.</p>
<p>Det indbyggede display giver dig overblik over din aktivitet. Så kan du se, hvad dagens møder og mails egentlig blev til i pedaltråd. Sidder du meget stille i arbejdstiden, er den en nem måde at få mere bevægelse ind i hverdagen.</p>
HTML,
			'good'    => [ 'Hjemmearbejdsplads og kontor', 'Let bevægelse, mens du arbejder', 'Dig, der vil se din aktivitet på et display' ],
			'less'    => [ 'Hård konditionstræning – modstanden er lavet til let og moderat træning' ],
		],
		[
			'ean'     => '8029975970059',
			'price'   => 1299,
			'name'    => 'Everfit Welly E',
			'role'    => 'Bedst til genoptræning',
			'reviews' => [],
			'verdict' => 'Let siddecykel uden modstand til helt skånsom bevægelse af både ben og arme.',
			'why'     => <<<'HTML'
<p>Everfit Welly E er lavet til skånsom bevægelse og genoptræning. Den har ingen modstand. Det handler altså ikke om at blive forpustet, men om at holde led og muskler i gang i et roligt tempo.</p>
<p>Du kan bruge den på gulvet til benene eller sætte den på bordet og træne armene. Den vejer kun 6 kg og er kompakt, så den er nem at flytte og finde plads til, uanset hvor i hjemmet du sidder.</p>
<p>Er du i et genoptræningsforløb, så spørg din læge eller fysioterapeut, om en siddecykel uden modstand passer til dig. Får du grønt lys, er det en enkel måde at få daglig bevægelse fra stolen.</p>
HTML,
			'good'    => [ 'Genoptræning og meget skånsom bevægelse', 'Træning af både ben og arme', 'Dig, der vil have en let model at flytte' ],
			'less'    => [ 'Dig, der vil træne kondition og styrke – den har ingen modstand' ],
		],
		[
			'ean'     => '5701000201378',
			'price'   => 453,
			'name'    => 'Titan Life Circulation Trainer',
			'role'    => 'Billigste til sofaen',
			'reviews' => [],
			'verdict' => 'Enkel siddecykel til sofaen eller skrivebordet, som du kan træde i med fødderne eller dreje med hænderne.',
			'why'     => <<<'HTML'
<p>Titan Life Circulation Trainer er den nemme vej ind, hvis du bare vil i gang. Den er lavet til brug i hjemmet, og du kan træne mens du sidder i sofaen eller under skrivebordet på arbejdet.</p>
<p>Du kan bruge den med fødderne eller med hænderne. Stil den på gulvet, når benene skal arbejde, eller placer den foran dig på bordet, når armene skal have en tur.</p>
<p>Den er det billigste bud på listen og et godt sted at starte. Så finder du ud af, om en siddecykel bliver en fast del af din hverdag, før du giver mere for en model med skærm eller app.</p>
HTML,
			'good'    => [ 'Dig, der vil prøve en siddecykel for få penge', 'Bevægelse fra sofaen eller kontorstolen' ],
			'less'    => [ 'Dig, der vil koble træningen til en app – se Tunturi Cardio Fit M45' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige siddecykel</h2>
<p>En siddecykel er en lille pedaltræner. Den kaldes også minicykel, mini motionscykel eller under-desk bike. Den har ingen sadel. Du sidder i din egen sofa, lænestol eller kontorstol og træder i pedalerne foran dig. Derfor fylder den så lidt – og derfor kan du bruge den, mens du laver noget andet.</p>
<h3>Siddecykel eller liggecykel?</h3>
<p>Ordet "siddecykel" bruges af og til om liggecykler: store motionscykler med sæde og ryglæn. Det er en helt anden maskine, som kræver plads og er lavet til egentlig konditionstræning. Er det sådan en, du leder efter, så se vores udvalg af <a href="/traeningsmaskiner/motionscykler/liggecykel/">liggecykler</a>. Er det til ældre, kan du også kigge på vores bud på <a href="/koebsguide/motionscykel-til-aeldre/">den bedste motionscykel til ældre</a>.</p>
<h2>Manuel modstand eller ingen modstand?</h2>
<p>De fleste siddecykler har en <strong>modstandsknap</strong>. Skru ned, og du træder let og roligt. Skru op, og benene skal arbejde mere. Magnetisk modstand giver en jævn bevægelse og er et godt valg, hvis du vil kunne skrue op med tiden.</p>
<p>Andre modeller har <strong>ingen modstand</strong>. De er lavet til helt skånsom bevægelse, for eksempel i et genoptræningsforløb. Her handler det om at holde led og muskler i gang, ikke om at blive forpustet. Skal du bruge siddecyklen til genoptræning, så tal med din læge eller fysioterapeut om, hvilken type der passer til dig.</p>
<h2>Det skal du kigge efter</h2>
<h3>Stabilitet</h3>
<p>En siddecykel står løst på gulvet. Står den ikke fast, glider den væk fra dig, så snart du træder til. Kig efter brede fødder eller stabilisatorer med skridsikkert gummi. Står den på et glat trægulv, kan en måtte under gøre en stor forskel.</p>
<h3>Højde og plads</h3>
<p>Tænk over, hvor du skal sidde. Foran en lav sofa sidder du dybt, og knæene kommer højt op. Under et skrivebord skal der være plads til, at knæene ikke rammer bordpladen, når pedalerne er i toppen. Mål gerne afstanden fra gulv til bordplade, før du vælger.</p>
<h3>Støj</h3>
<p>Skal du bruge den foran tv'et eller på et kontor med kolleger, er en rolig gang vigtig. Magnetisk modstand er generelt mere afdæmpet end modstand med friktion.</p>
<h3>Display og app</h3>
<p>Et lille display viser typisk tid, omdrejninger og kalorier. Det er rart, hvis du vil kunne se, at du gør fremskridt. Nogle modeller har Bluetooth og kan kobles til en app, så du kan følge træningen over tid.</p>
<h3>Arme og ben</h3>
<p>Mange siddecykler kan stå på et bord, så du kan dreje pedalerne med hænderne. Det er en fordel, hvis du vil holde overkroppen i gang – eller hvis benene skal have en pause.</p>
<h2>Sådan får du mest ud af din siddecykel</h2>
<p>Stil den et sted, hvor du alligevel sidder hver dag. Så bliver den brugt. Start roligt, og skru langsomt op for modstanden. Træd hellere lidt hver dag end meget én gang om ugen. Og sid godt: fødderne skal ramme pedalerne, uden at du skal strække benene helt ud. Se alle <a href="/traeningsmaskiner/motionscykler/">motionscykler</a> med aktuelle priser.</p>
HTML,
	'faq'      => [
		[ 'Hvad er en siddecykel?', 'En siddecykel er en lille pedaltræner uden sadel. Du stiller den på gulvet foran dig og træder i pedalerne, mens du sidder i sofaen, en lænestol eller på kontorstolen. Mange kan også stå på et bord, så du kan træne armene.' ],
		[ 'Kan man bruge en siddecykel under skrivebordet?', 'Ja, mange er lavet til det. Tjek, at der er plads til knæene under bordpladen, når pedalerne er i toppen, og vælg en model med let modstand, så du kan koncentrere dig om arbejdet samtidig.' ],
		[ 'Er en siddecykel det samme som en liggecykel?', 'Nej. En liggecykel er en stor motionscykel med sæde og ryglæn. En siddecykel er en lille pedaltræner uden sæde, som du bruger fra din egen stol eller sofa.' ],
		[ 'Er en siddecykel god til genoptræning?', 'Den bruges ofte til skånsom bevægelse, og nogle modeller har slet ingen modstand. Ved sygdom, en operation eller et genoptræningsforløb bør du altid spørge din læge eller fysioterapeut, før du går i gang.' ],
		[ 'Kan man få kondition af en siddecykel?', 'En siddecykel giver mere bevægelse i hverdagen, men intensiteten er lav. Vil du træne hård kondition, er en almindelig motionscykel eller spinningcykel et bedre valg.' ],
	],
];
