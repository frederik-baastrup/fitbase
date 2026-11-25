<?php
/**
 * Ny købsguide: justerbare håndvægte. Fakta om produkterne kommer kun fra butikkernes produktdata.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'justerbare-haandvaegte',
	'keyword'  => 'justerbare håndvægte',
	'title'    => 'Justerbare håndvægte: Vores bud på de 5 bedste',
	'excerpt'  => 'Justerbare håndvægte giver mange vægte i ét sæt og fylder næsten ingenting. Her er vores bud på de 5 bedste justerbare håndvægte – og hvad du skal tænke over.',
	'more_cat' => 'haandvaegte',
	'intro'    => <<<'HTML'
<p>Hvis du har prøvet at samle et helt sæt faste håndvægte, kender du problemet: De fylder, de koster, og du skal alligevel have flere vægte, når du bliver stærkere. Justerbare håndvægte løser det ved at lade dig skrue skiver af og på, så ét par kan blive til mange forskellige vægte – og det hele kan stå i et hjørne.</p>
<p>Her er vores bud på de 5 bedste justerbare håndvægte hos de butikker, vi samarbejder med lige nu: et enkelt par til de fleste øvelser, et billigt sæt med flere træningsformer, en kompakt let model, et 3-i-1-sæt med både kettlebell og vægtstang og et større sæt til tungere træning. Nederst finder du en købsguide til vægt, lås og sikkerhed.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5714241003175',
			'price'   => 449,
			'name'    => 'Wohlstand Justerbart Håndvægtssæt 20 kg',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'To justerbare håndvægte, hver op til cirka 10 kg inklusive stang og lås – et enkelt og prisvenligt sæt til hjemmetræning.',
			'why'     => <<<'HTML'
<p>Wohlstand-sættet består af to håndvægte, som hver kan sammensættes op til cirka 10 kg inklusive håndvægtstang og lås. Skiverne er løse, så du kan starte let og bygge vægten op, efterhånden som du bliver stærkere.</p>
<p>Det er et sæt, der dækker mange af de klassiske øvelser: curls, skulderpres, roning og mere. Du får et par i stedet for en enkelt, så du kan træne begge sider på samme tid, og prisen er lav i forhold til, hvad du får.</p>
HTML,
			'good'    => [ 'Dig, der vil have to håndvægte i stedet for én', 'Nybegyndere og dem, der starter hjemmegymmet', 'Dig, der vil holde prisen nede' ],
			'less'    => [ 'Dig, der allerede løfter tungt – 10 kg pr. hånd er til begyndere og let til middel træning' ],
		],
		[
			'ean'     => '5704796037992',
			'eans'    => [ '5704796039309', '5704796039316', '5704796039323', '5704796040046' ],
			'price'   => 299,
			'name'    => 'Active Sports Gear Justerbart Vægtsæt 20 kg',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => '20 kg sæt til hjemmetræning med aftagelige vægtskiver, der kan bruges som håndvægte, vægtstang, kettlebell og push-up.',
			'why'     => <<<'HTML'
<p>Active Sports Gear Justerbart Vægtsæt er et af de billigste sæt, du kan komme i gang med. Sættet på 20 kg har aftagelige vægtskiver, så du kan justere belastningen, og det kan bruges som både håndvægte, vægtstang, kettlebell og push-up-håndtag.</p>
<p>Det er en enkel og alsidig løsning, hvis du vil have mange træningsformer ud af ét køb. Regn dog med, at sættet er til let og middel belastning – skal du løfte tungt, er de større sæt i guiden et bedre valg.</p>
HTML,
			'good'    => [ 'Dig, der vil prøve justerbare vægte for lidt', 'Dig, der vil have håndvægte, kettlebell og stang i ét', 'Små rum og få penge' ],
			'less'    => [ 'Dig, der vil træne tungt og ofte' ],
		],
		[
			'ean'     => '5714237018923',
			'price'   => 489,
			'name'    => 'Odin Justerbar Håndvægt 5,5 kg',
			'role'    => 'Bedst til let træning',
			'reviews' => [],
			'verdict' => 'Pladsbesparende 5-i-1 håndvægt med maks. 5,5 kg og et praktisk justeringssystem.',
			'why'     => <<<'HTML'
<p>Odin Justerbar Håndvægt kombinerer fem vægtindstillinger i én kompakt løsning, med en maksimal vægt på 5,5 kg. Du kan nemt tilpasse belastningen med justeringssystemet, så den samme håndvægt kan bruges til både lette og lidt tungere øvelser.</p>
<p>Den passer til let styrketræning, genoptræning, pilates og øvelser, hvor teknikken betyder mere end vægten. Du får et godt valg, hvis du leder efter en lille, enkel håndvægt, der ikke fylder.</p>
HTML,
			'good'    => [ 'Let styrketræning og genoptræning', 'Pilates og øvelser med små vægte', 'Dig, der vil have noget kompakt, der kan stå fremme' ],
			'less'    => [ 'Dig, der skal bruge tungere vægte' ],
		],
		[
			'ean'     => '5714237011641',
			'price'   => 1649,
			'name'    => 'Odin Justerbar Håndvægt 24 kg 3-i-1',
			'role'    => 'Bedst som 3-i-1',
			'reviews' => [],
			'verdict' => '24 kg sæt, hvor du får en håndvægt, en kettlebell og en vægtstang i ét.',
			'why'     => <<<'HTML'
<p>Odin Justerbar Håndvægt 24 kg er et 3-i-1-sæt, hvor du får en håndvægt, en kettlebell og en vægtstang i samme kasse. Det giver dig mulighed for at vælge mellem tre træningsformer uden at købe tre sæt.</p>
<p>Det er et alsidigt valg til dig, der gerne vil have mere end bare håndvægte – og som vil kunne skifte mellem øvelser. Skal du bruge sættet meget tungt, er den højere model på 40 kg et skridt op.</p>
HTML,
			'good'    => [ 'Dig, der vil have kettlebell og stang i samme sæt', 'Alsidig træning i hjemmegymmet', 'Dig, der vil have højere vægt end begyndersættene' ],
			'less'    => [ 'Dig, der leder efter en enkel og billig løsning' ],
		],
		[
			'ean'     => '5714237011658',
			'price'   => 2299,
			'name'    => 'Odin Justerbar Håndvægt 40 kg 2-i-1',
			'role'    => 'Bedst til tungere træning',
			'reviews' => [],
			'verdict' => '40 kg sæt, hvor du får både justerbar håndvægt og vægtstang.',
			'why'     => <<<'HTML'
<p>Odin Justerbar Håndvægt 40 kg 2-i-1 er det største sæt i udvalget. Du får både fleksibiliteten fra en justerbar håndvægt og funktionen fra en vægtstang, og samlet vægt på 40 kg giver plads til rigtig styrketræning.</p>
<p>Det er til dig, der er vokset ud af de lettere sæt, og som vil have mere vægt at arbejde med uden at fylde hjemmegymmet op med mange faste vægte. Sættet kan både bruges til enarmsøvelser og til længere stangøvelser.</p>
HTML,
			'good'    => [ 'Dig, der vil løfte tungere derhjemme', 'Håndvægte og vægtstang i ét sæt', 'Dig, der vil have plads til at vokse' ],
			'less'    => [ 'Nybegyndere, der ikke har brug for så mange kilo' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du de rigtige justerbare håndvægte</h2>
<p>Justerbare håndvægte er en smart løsning, men der er forskel på, hvordan de justeres, hvor meget de kan veje, og hvor sikre de er.</p>
<h3>Hvor tunge skal de være?</h3>
<p>Det afhænger af, hvad du træner. Til curls, skulderøvelser og genoptræning er lette vægter nok, mens roning og tunge presseøvelser kræver mere. Læs vores guide til <a href="/viden/hvor-tunge-haandvaegte-skal-du-koebe/">hvor tunge håndvægte du skal købe</a>, hvis du er i tvivl. Husk, at du skal have plads til at stige i vægt, når du bliver stærkere.</p>
<h3>Skiver og lås</h3>
<p>Billige sæt har løse skiver, du skruer på og af. Det er billigt og enkelt, men kan tage tid og kræver, at du tjekker låsen, før du løfter. Dyrere modeller har hurtige justeringssystemer, hvor du vælger vægt med en drejning eller et klik. Uanset system skal låsen sidde fast, så skiverne ikke kan løsne sig under øvelserne.</p>
<h3>Greb og stang</h3>
<p>Standarden er 25 mm eller 30 mm stang. Kig efter et godt greb, der ikke glider, og som ligger behageligt i hånden. Nogle sæt har gummierede eller riflede håndtag.</p>
<h3>Plads og opbevaring</h3>
<p>Det er en af de store fordele: Ét par justerbare håndvægte erstatter mange faste. De kan stå i en kasse eller på et stativ og fylder meget lidt. Er pladsen knap, er justerbare håndvægte ofte det bedste valg.</p>
<h3>Justerbare håndvægte eller vægtsæt med stang?</h3>
<p>Justerbare håndvægte er til enhåndsøvelser og fleksibel træning. Vil du have en lang stang til squat og bænkpres, så se vores guide til <a href="/koebsguide/vaegtsaet/">vægtsæt med vægtstang</a>. Mange sæt kombinerer begge dele. Se også alle <a href="/styrketraening/vaegte-kettlebells/haandvaegte/">håndvægte</a> med aktuelle priser, og læs mere om <a href="/viden/kettlebell-hvilken-vaegt-skal-du-vaelge/">kettlebells</a>, hvis du overvejer en.</p>
HTML,
	'faq'      => [
		[ 'Er justerbare håndvægte bedre end faste?', 'De fylder mindre og er billigere, hvis du vil have mange vægte. Faste håndvægte er hurtigere at skifte mellem og nemmere at bruge, når du træner i flow.' ],
		[ 'Er justerbare håndvægte sikre?', 'Ja, hvis låsen sidder fast. Tjek altid, at skiverne er spændt, før du løfter, og undgå at tabe vægtene.' ],
		[ 'Hvor mange kilo har jeg brug for?', 'Det afhænger af dine øvelser og din styrke. Start let og stig gradvist. Nybegyndere kan nøjes med 5–10 kg pr. hånd, mens øvede ofte har brug for mere.' ],
		[ 'Kan jeg bruge dem til benøvelser?', 'Ja, som vægt i hånden ved lunges, goblet squat eller romanian deadlift – men vægten skal ofte være højere end til overkroppen.' ],
		[ 'Hvordan opbevarer jeg dem?', 'I en kasse, på et stativ eller i et hjørne. Skiverne kan tages af, så sættet fylder mindre.' ],
	],
];
