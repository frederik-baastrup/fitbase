<?php
/**
 * Siden "Sådan vælger vi produkter" (metode for købsguides), skrevet til Fitbase.
 * Formuleringen er bevidst en anden end på søstersitesne.
 */

defined( 'ABSPATH' ) || exit;

return [
	'title'   => 'Sådan vælger vi produkter',
	'excerpt' => 'Kriterierne bag vores købsguides til træningsudstyr: hvad en maskine skal leve op til, hvordan vi vægter, og hvor grænsen for vores vurdering går.',
	'html'    => <<<'HTML'
<p class="lead">Når vi anbefaler et løbebånd, en romaskine eller et sæt håndvægte, har vi ikke selv trænet på det. Vores bud bygger på en systematisk gennemgang af produktdata, pris og – hvor de findes – uafhængige anmeldelser. Her er metoden.</p>

<h2>Før et produkt overhovedet bliver vurderet</h2>
<ul>
<li>Det sælges af en af <a href="/vores-butikker/">de træningsbutikker, Fitbase samarbejder med</a>. Modeller, der kun findes andre steder, kan vi ikke tage med.</li>
<li>Det var på lager og havde billede, da guiden blev lavet – pris og lagerstatus følger vi derefter automatisk morgen og aften.</li>
<li>Det svarer til guidens emne: en guide om romaskiner med vand indeholder kun vandromaskiner.</li>
<li>En guide har højst fem modeller.</li>
</ul>

<h2>Sådan vægter vi</h2>
<p><strong>Kategoriens vigtigste egenskaber.</strong> For træningsmaskiner er det typisk maks. brugervægt, motor eller modstandssystem, løbeflade eller skinnelængde og om maskinen kan foldes. For frie vægte er det vægtspring, greb og materiale. Vi kigger efter den model, der dækker de vigtigste behov bedst – den bliver "bedst samlet".</p>
<p><strong>Pris over for indhold.</strong> Har en billigere maskine næsten de samme tal, får den rollen som bud til prisen.</p>
<p><strong>Producent og garanti.</strong> Mærker med et solidt ry inden for netop den type udstyr og en længere garanti, især på motor og stel, trækker op.</p>
<p><strong>Hvem den er til.</strong> En kompakt, foldbar model kan være det rigtige valg i en lejlighed, selv om en større maskine har bedre tal. Derfor står der ved hvert valg, hvad det passer godt og dårligt til.</p>

<h2>Uafhængige anmeldelser</h2>
<p>Har et andet medie anmeldt præcis den model, linker vi til anmeldelsen, og den tæller meget. Hvor vi ikke har fundet nogen, er produktet mærket "Vores vurdering".</p>

<h2>Det tæller ikke</h2>
<p>Hvor meget provision vi får, hvilken butik der sælger, og om nogen gerne vil betale for en plads. Placeringer kan ikke købes. Læs mere om, <a href="/saadan-tjener-vi-penge/">hvordan Fitbase tjener penge</a>.</p>

<h2>Grænsen for vores vurdering</h2>
<p>Tal på papiret fortæller ikke, hvordan en maskine føles at træne på, hvor meget den støjer, eller hvordan den holder efter et par hundrede timer. Læs gerne anmeldelser fra andre brugere, før du beslutter dig, og tjek altid pris og levering hos butikken.</p>

<p>Mener du, at vi har overset en model, eller er der en fejl i en guide? Skriv til os – guiderne bliver opdateret løbende.</p>
HTML,
];
