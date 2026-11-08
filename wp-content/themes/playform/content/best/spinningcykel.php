<?php
/**
 * Ny købsguide (8. nov. 2026): spinningcykler til hjemmet (det brede søgeord).
 * Fakta om produkterne kommer kun fra butikkernes produktdata (feed og produktside). Vi har ikke selv afprøvet produkterne.
 * Ingen af modellerne går igen i guiden spinningcykel-med-computer.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'spinningcykel',
	'title'    => 'Spinningcykel: Vores bud på de 5 bedste til hjemmet',
	'excerpt'  => 'En spinningcykel i stuen giver dig hård konditionstræning, når det passer dig. Her er vores bud på de 5 bedste til hjemmet – og hvad du skal kigge efter.',
	'more_cat' => 'spinningcykel',
	'intro'    => <<<'HTML'
<p>En spinningcykel derhjemme fjerner alle undskyldninger. Ingen holdtider, ingen regnvejr og ingen transport – du sætter dig op, når du har tid, og kører et hårdt interval eller en lang, rolig tur. Men en cykel, der skal stå i et hjem, skal kunne mere end at give modstand. Den skal være stille nok til, at resten af husstanden kan være der, passe til din krop og være til at flytte, når der skal gøres rent.</p>
<p>Herunder er vores bud på de 5 bedste spinningcykler til hjemmet fra de butikker, vi samarbejder med. Der er både en enkel cykel til et mindre budget, modeller med tungt svinghjul og stille magnetisk modstand og en, som apps kan styre. Nederst finder du en købsguide.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7051943747814',
			'price'   => 8999,
			'name'    => 'Abilica Premium Racer 90',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Støjsvag magnetisk modstand, wattvisning, Bluetooth til Zwift og Kinomap, transporthjul og plads til brugere op til 150 kg.',
			'why'     => <<<'HTML'
<p>Abilica Premium Racer 90 samler det meste af det, du ønsker dig af en spinningcykel til hjemmet. Modstanden er magnetisk med 10 niveauer, så cyklen kører støjsvagt – også når du giver den fuld gas en sen aften. Svinghjulet vejer 16 kg, og computeren viser både watt, puls, kadence, tid, distance, hastighed og kalorier.</p>
<p>Med Bluetooth kobler du cyklen til iConsole+, Zwift eller Kinomap, og holderen giver plads til tablet eller telefon. Pulsen kan måles med et Bluetooth- eller 5,3 kHz-pulsbælte, som du skal købe for sig.</p>
<p>Multigrebsstyret og sædet justeres både op/ned og frem/tilbage, og cyklen passer til en personhøjde på 155–195 cm. Den tager brugere op til 150 kg og har transporthjul foran, så du nemt kan rulle den til side.</p>
HTML,
			'good'    => [ 'Træning i stuen eller lejligheden', 'Dig, der vil køre med Zwift eller Kinomap', 'Husstande, hvor flere skal bruge cyklen' ],
			'less'    => [ 'Dig, der vil have modstanden styret automatisk af apps' ],
		],
		[
			'ean'     => '7051943728295',
			'price'   => 3499,
			'name'    => 'Abilica Racer 2.1',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Klassisk spinningcykel med 22 kg svinghjul, fastnav og støjsvag remdrift – til en lav pris.',
			'why'     => <<<'HTML'
<p>Abilica Racer 2.1 giver dig den rigtige spinningfølelse uden at sprænge budgettet. Svinghjulet vejer 22 kg og sidder på et fastnav, så pedalerne kører rundt i ét jævnt træk – præcis som på holdtimerne. Modstanden skruer du trinløst op og ned med en manuel friktionsbremse.</p>
<p>Cyklen har remdrift, som holder lyden nede, og det er en stor fordel, når naboen bor på den anden side af væggen. Sæde og styr justeres både vandret og lodret, og sædehøjden passer til en indvendig benlængde på 82–105 cm.</p>
<p>Computeren viser RPM, tid, kalorier, distance og hastighed, og du kan koble et 5,3 kHz-pulsbælte på. SPD-kombipedalerne passer både til cykelsko og almindelige træningssko. Den tager brugere op til 130 kg og fylder 120 x 55 cm på gulvet.</p>
HTML,
			'good'    => [ 'Dig, der vil i gang med spinning derhjemme', 'Et tungt svinghjul til prisen', 'Dig med kliksko' ],
			'less'    => [ 'Dig, der vil træne med apps eller efter watt' ],
		],
		[
			'ean'     => '8029975999623',
			'price'   => 5999,
			'name'    => 'Toorx SRX-80EVO',
			'role'    => 'Tungt svinghjul og pulsbælte',
			'reviews' => [],
			'verdict' => 'Spinningcykel med 24 kg afbalanceret svinghjul, remtræk med trinløs modstand og pulsbælte med i kassen.',
			'why'     => <<<'HTML'
<p>Toorx SRX-80EVO er til dig, der vil have en cykel, der føles som en rigtig landevejscykel. Det afbalancerede svinghjul på 24 kg giver et tungt og jævnt træk, så du kan holde farten oppe i lange intervaller uden hakken i pedalerne.</p>
<p>Remtrækket er godt nyt for alle, der træner derhjemme, fordi en rem kører mere stille end en kæde. Modstanden justeres trinløst, og en integreret sikkerhedsbremse stopper svinghjulet hurtigt, hvis du har brug for det.</p>
<p>Sadel og styr har mikrometrisk justering, så du kan finde en siddestilling, der passer præcist til din krop. Et pulsbælte følger med, så du kan træne efter puls fra første tur uden at skulle købe ekstra udstyr.</p>
HTML,
			'good'    => [ 'Dig, der vil træne efter puls', 'Dig, der vil have et tungt og jævnt træk', 'Mellemklasse-budget' ],
			'less'    => [ 'Dig, der vil køre med træningsapps' ],
		],
		[
			'ean'     => '7051944094481',
			'price'   => 6999,
			'name'    => 'Abilica SP 900',
			'role'    => 'Bedst til apps',
			'reviews' => [],
			'verdict' => 'Motoriseret magnetisk modstand med 32 niveauer og Bluetooth FTMS, så apps som Zwift og Kinomap kan styre modstanden.',
			'why'     => <<<'HTML'
<p>Abilica SP 900 er cyklen til dig, der hellere vil følge en virtuel rute end stirre ind i væggen. Den har Bluetooth FTMS og kan kobles til iConsole+, Kinomap, Zwift, Rouvy og Wahoo. Med kompatible apps justeres modstanden automatisk efter ruten eller træningspasset – du skal bare træde.</p>
<p>Modstanden er motoriseret og magnetisk med 32 niveauer, og der er 18 indbyggede programmer, blandt andet pulsstyrede og wattbaserede. LED-computeren viser tid, distance, hastighed, RPM, kalorier, puls og estimeret watt.</p>
<p>Styret har flere grebspositioner, og både styr og sæde justeres vandret og lodret til en indvendig benlængde på 80–108 cm. Cyklen tager op til 150 kg og har transporthjul. Husk, at den skal sluttes til strøm, så den skal stå tæt på en stikkontakt.</p>
HTML,
			'good'    => [ 'Zwift, Kinomap og Rouvy', 'Dig, der vil have modstanden styret for dig', 'Træning efter programmer' ],
			'less'    => [ 'Dig, der vil placere cyklen langt fra en stikkontakt' ],
		],
		[
			'ean'     => '8029975996394',
			'price'   => 12999,
			'name'    => 'Toorx SRX 3500',
			'role'    => 'Premium til hjemmet',
			'reviews' => [],
			'verdict' => 'Magnetisk bremse med 32 elektroniske niveauer, 24 kg svinghjul, app-kompatibel farvekonsol og pulsbælte.',
			'why'     => <<<'HTML'
<p>Toorx SRX 3500 er til dig, der træner tit og vil have en spinningcykel med stille, elektronisk styret modstand. Svinghjulet på 24 kg giver et glat og lydsvagt pedaltråd, og det magnetiske bremsesystem har 32 elektroniske modstandsniveauer, så du kan skrue præcist op og ned for belastningen.</p>
<p>Racersædet og styret har mikrometrisk justering, så du kan finjustere siddestillingen, til den sidder helt rigtigt – vigtigt, hvis du kører lange pas eller deler cyklen med andre i husstanden.</p>
<p>Den multifarvede LCD-konsol er app-kompatibel, og der følger et pulsbælte med. Er du klar til at investere i en cykel, der er stille nok til stuen og stærk nok til hårde intervaller, er den et oplagt bud.</p>
HTML,
			'good'    => [ 'Dig, der træner flere gange om ugen', 'Stille træning i stuen', 'Dig, der vil træne efter puls' ],
			'less'    => [ 'Dig, der kun skal cykle en gang imellem' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige spinningcykel til hjemmet</h2>
<p>En spinningcykel til hjemmet skal give dig god træning – men den skal også fungere i et rum, hvor du bor. Tænk over, hvor den skal stå, hvem der skal bruge den, og hvor meget lyd der må være. Se alle <a href="/traeningsmaskiner/motionscykler/spinningcykel/">spinningcykler</a> med aktuelle priser.</p>
<h3>Plads og placering</h3>
<p>Mål gulvpladsen, før du køber, og husk plads omkring cyklen, så du kan stige af og på og bevæge dig frit. Sammenlign med cyklens mål opstillet på produktsiden. Står cyklen på et trægulv eller i en lejlighed, er en underlagsmåtte en god idé: den beskytter gulvet og dæmper vibrationer. Skal cyklen have strøm, skal den også stå tæt på en stikkontakt.</p>
<h3>Støj: magnetisk modstand og remtræk</h3>
<p>Der er to ting, der afgør, hvor meget en spinningcykel larmer. Den ene er bremsen: magnetisk modstand rører ikke svinghjulet og kører næsten lydløst, mens en friktionsbremse med filt er billigere, men giver lidt lyd og skal skiftes med tiden. Den anden er drevet: et remtræk er mere stille end en kæde. Bor du i lejlighed eller træner, mens andre sover, så kig efter begge dele. Læs også vores guide til <a href="/viden/traening-i-lejlighed-stoejsvagt-udstyr/">træning i lejlighed med støjsvagt udstyr</a>.</p>
<h3>Svinghjul</h3>
<p>Et tungt svinghjul giver et jævnt og rundt træk, især når du kører med høj kadence eller står op i pedalerne. Et lettere svinghjul kan dog også føles godt, hvis cyklen har en høj gearing – kig derfor på helheden og ikke kun på kiloene.</p>
<h3>Justering af sæde og styr</h3>
<p>Sæde og styr skal kunne justeres både op/ned og frem/tilbage. Det er afgørende for komforten og for at undgå ondt i knæ og ryg. Skal flere i husstanden bruge cyklen, så tjek, hvilken benlængde eller personhøjde den passer til, og om justeringen er nem at ændre fra gang til gang.</p>
<h3>Maks. brugervægt og stabilitet</h3>
<p>Vælg en cykel med en maksimal brugervægt, der giver god margin over din egen vægt. En kraftig ramme og en høj maksimal brugervægt betyder typisk også en mere stabil cykel, når du står op og sprinter.</p>
<h3>Transporthjul</h3>
<p>Spinningcykler er tunge. Transporthjul foran gør det nemt at vippe cyklen og rulle den til side, når der skal støvsuges, eller når stuen skal bruges til noget andet.</p>
<h3>Computer, app og Bluetooth</h3>
<p>En enkel computer med tid, distance, kadence og puls er nok for mange. Vil du køre virtuelle ruter eller hold i apps som Zwift og Kinomap, så kig efter Bluetooth – og gerne FTMS, så appen kan styre modstanden. Læs mere i vores guide til <a href="/koebsguide/spinningcykel-med-computer/">den bedste spinningcykel med computer</a>.</p>
<h3>Spinningcykel eller noget andet?</h3>
<p>En spinningcykel er bygget til hård træning med en sportslig siddestilling. Vil du hellere sidde mere oprejst og køre roligt, kan en motionscykel passe bedre. Læs vores guide <a href="/viden/spinningcykel-kondicykel-eller-airbike/">spinningcykel, kondicykel eller airbike</a>.</p>
HTML,
	'faq'      => [
		[ 'Larmer en spinningcykel?', 'Det afhænger af bremsen og drevet. Magnetisk modstand og remtræk er de mest støjsvage løsninger, mens en filtbremse og kædetræk giver mere lyd. Er du bekymret for naboerne, så brug også en underlagsmåtte.' ],
		[ 'Hvor meget plads kræver en spinningcykel?', 'Tjek cyklens mål opstillet på produktsiden, og læg plads til, at du kan stige af og på. Med transporthjul kan cyklen rulles til side, når du ikke træner.' ],
		[ 'Skal jeg vælge magnetisk modstand eller filtbremse?', 'Magnetisk modstand er stille og slides næsten ikke. En filtbremse er billigere og giver en klassisk spinningfølelse, men den giver lidt mere lyd, og bremseklodsen skal skiftes med tiden.' ],
		[ 'Kan jeg bruge Zwift på en spinningcykel?', 'Ja, hvis cyklen har Bluetooth og understøtter appen. Med FTMS kan appen også styre modstanden på cykler med elektronisk eller motoriseret modstand.' ],
		[ 'Skal man have kliksko til en spinningcykel?', 'Nej. De fleste har kombipedaler med stropper på den ene side og SPD-klik på den anden, så du kan bruge almindelige træningssko.' ],
	],
];
