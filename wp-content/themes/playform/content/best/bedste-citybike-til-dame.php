<?php
/**
 * Overført fra det gamle fitbase.dk (/bedste-citybike-til-dame/) og omskrevet.
 * Produkter fra Cykelexperten.dk. Fakta kun fra butikkens produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-citybike-til-dame',
	'title'    => 'Bedste citybike til dame: Vores bud på de 3 bedste',
	'excerpt'  => 'En god citybike til dame skal være nem at stige på, komfortabel og klar til hverdagen. Her er vores bud på de 3 bedste – og hvad du skal kigge efter.',
	'more_cat' => 'damecykler',
	'intro'    => <<<'HTML'
<p>En citybike er hverdagens arbejdshest: den skal tage dig til arbejde, i byen og til indkøb i al slags vejr – uden at kræve meget vedligeholdelse. Til dame har de fleste citybikes en lav indstigning, så det er nemt at komme op og ned, også i nederdel eller med fyldt kurv.</p>
<p>Herunder er vores bud på de 3 bedste citybikes til dame hos danske butikker lige nu – fra den prisvenlige hverdagscykel til den klassiske retromodel. Nederst finder du en købsguide.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5712701017816',
			'slug'    => 'centurion-le-mans-dame-7g-sort',
			'name'    => 'Centurion Le Mans Dame 7g',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Klassisk citybike med 7 gear og det praktiske udstyr, du skal bruge til daglig pendling.',
			'why'     => <<<'HTML'
<p>Centurion Le Mans er ifølge butikken en klassisk citybike, der er designet og bygget til dig, der pendler, og pakket med de praktiske egenskaber, en citybike skal have. Med 7 gear har du nok til både bakker og modvind i byen.</p>
<p>Centurion er et af de mest udbredte mærker i danske cykelbutikker, så det er nemt at få service og reservedele.</p>
HTML,
			'good'    => [ 'Daglig pendling', 'Dig, der vil have en klassisk citybike' ],
			'less'    => [ 'Lange, hurtige ture – vælg en sportscykel' ],
		],
		[
			'ean'     => '5712701025200',
			'slug'    => 'centurion-basic-dame-7g-2026-mat-turkis-gron',
			'name'    => 'Centurion Basic Dame 7g',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Driftssikker citybike med 7 indvendige Shimano-gear – uden unødige detaljer.',
			'why'     => <<<'HTML'
<p>Centurion Basic er ifølge butikken en klassisk citybike skabt til hverdagen, til dig, der vil have en driftssikker cykel uden unødige detaljer. Den har 7 indvendige Shimano-gear.</p>
<p>Indvendige gear (navgear) sidder beskyttet inde i baghjulets nav. Det gør dem mindre følsomme over for regn og snavs end udvendige gear, og du kan skifte gear, mens du holder stille – fx ved et lyskryds.</p>
HTML,
			'good'    => [ 'Dig, der vil holde prisen nede', 'Lidt vedligeholdelse' ],
			'less'    => [ 'Dig, der vil have et særligt design' ],
		],
		[
			'ean'     => '5711278013689',
			'slug'    => 'norden-ellen-7g-dame-sort',
			'name'    => 'Norden Ellen 7g Dame',
			'role'    => 'Bedst til retrostil',
			'reviews' => [],
			'verdict' => 'Moderne retrocykel med aluminiumsstel og kædeskærm i cyklens farve.',
			'why'     => <<<'HTML'
<p>Norden Ellen er ifølge butikken Nordens moderne retrocykel, der forener et nostalgisk design med et moderne look. Den har et aluminiumsstel og en kædeskærm i cyklens lakering, og den fås i mange farver.</p>
<p>Et aluminiumsstel er lettere end et klassisk stålstel, hvilket mærkes, når cyklen skal bæres op ad trapper eller ind i en kælder.</p>
HTML,
			'good'    => [ 'Dig, der vil have en cykel med stil', 'Mange farvevalg' ],
			'less'    => [ 'Dig, der vil have den billigste løsning' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige citybike til dame</h2>
<p>De fleste citybikes ligner hinanden på afstand, men små forskelle betyder meget i hverdagen.</p>
<h3>Indstigning</h3>
<p>En lav indstigning gør det nemt at stige på og af – i nederdel, med fyldt kurv eller ved mange stop i byen. Det er standard på de fleste damecykler.</p>
<h3>Gear: indvendige eller udvendige?</h3>
<p><strong>Indvendige gear</strong> (navgear, typisk 3 eller 7) er robuste, kræver lidt vedligeholdelse og kan skiftes, mens du holder stille. De passer til de fleste byture. <strong>Udvendige gear</strong> giver flere gear og passer til længere ture og bakker, men kræver mere pleje.</p>
<h3>Bremser</h3>
<p>Mange citybikes har fodbremse (kontrapedal) bag og håndbremse foran. Fælg- og rullebremser er enkle og billige at vedligeholde; skivebremser bremser bedst i regn.</p>
<h3>Udstyr til hverdagen</h3>
<p>Skærme, kædeskærm, bagagebærer, støtteben og lys er standard på en god citybike. Tjek, at lygterne er med, og om der er plads til en kurv eller cykeltasker.</p>
<h3>Størrelse</h3>
<p>Stelstørrelsen skal passe til din højde. De fleste butikker har en størrelsesguide – og står du mellem to størrelser, er den mindste ofte den mest komfortable på en citybike.</p>
<h3>Hvor meget skal du give?</h3>
<p>En god citybike til dame koster typisk fra ca. 4.000 kr. Mellem 5.000 og 7.000 kr. får du ofte bedre komponenter, et lettere stel og mere design. Se alle <a href="/cykler/damecykler/">damecykler</a> med aktuelle priser, eller se vores bud på <a href="/koebsguide/citybike-til-herre/">den bedste citybike til herre</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på en citybike og en damecykel?', 'En damecykel er en cykel med lav indstigning. De fleste citybikes til dame er damecykler med praktisk udstyr som skærme, bagagebærer og lys.' ],
		[ 'Hvor mange gear skal en citybike have?', 'Til byen er 7 indvendige gear et godt valg. Kører du længere ture eller i kuperet terræn, kan flere gear være en fordel.' ],
		[ 'Hvilken størrelse cykel skal jeg have?', 'Det afhænger af din højde og benlængde. Brug butikkens størrelsesguide, og prøv gerne cyklen, før du køber.' ],
	],
];
