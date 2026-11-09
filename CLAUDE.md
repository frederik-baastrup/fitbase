# Fitbase – projektnoter til Claude

Fitbase (fitbase.dk, tidligere Playform) er en affiliate-side, der ligner en webshop. Den samler fitnessudstyr fra flere danske shops via Partner-ads-produktfeeds. Man køber ikke på siden: "Gå til butik" sender brugeren videre til shoppen via et affiliate-link.

Ejer: Frederik Baastrup. Al tekst på siden er på dansk.

Siden hed Playform. Synlige tekster og logo siger nu Fitbase (`playform_rebrand()` i `inc/setup.php` rettede databasen én gang). Kodenavne er bevidst bevaret: mappenavne `playform`/`playform-feeds`, namespace `Playform\Feeds`, funktioner `playform_*`, metafelter `_pf_*` og shortcoden `[playform_produkter]` – omdøb dem ikke, det bryder udrulning og data.

## Opbygning

- `wp-content/plugins/playform-feeds/` – importen (PHP 8.1+, kræver WooCommerce)
  - `src/Config.php` – shops (feed-URL'er), kategoritræ og sorteringsregler. **En ny niche = en ny Config.**
  - `src/FeedReader.php` – læser feeds som strøm (XMLReader). Feeds er iso-8859-1; XMLReader giver korrekt UTF-8.
  - `src/Normalizer.php` – ensretter felter (lager, levering, pris, EAN, billed-URL).
  - `src/Classifier.php` – placerer produkter i vores kategorier (regler; AI-fallback kommer).
  - `src/Attributes.php` – udtrækker filtre (foldbar, incline, km/t, maks. brugervægt, vægt i kg) fra tekst. Intet gættes.
  - `src/Offers.php` – tabel `wp_pf_offers`: ét tilbud pr. produkt pr. butik. Produkter matches på tværs af shops via EAN.
  - `src/PriceHistory.php` – tabel `wp_pf_price_history`: dagens laveste pris pr. produkt pr. butik.
  - `src/Sales.php` – butikkernes tilbud (højst 14 dage gamle) → `_pf_shop_sale`. Genberegnes efter hver import.
  - `src/ProductSync.php` – opretter/opdaterer WooCommerce "eksterne produkter".
  - `src/Subcategories.php` – underkategorier (landingssider) ud fra regler i `Config::subcategories()`.
  - `src/ImageCache.php` – produktbilleder gemmes på egen server (GDPR + hastighed).
  - `src/LinkCheck.php` – efter hver import tjekkes 300 tilbud (længst utjekkede først), om butikkens produktside findes. 404/410 eller viderestilling til forsiden → `link_dead_url`, og tilbuddet tæller ikke med i `Offers::for_product()` (ingen "Gå til butik" til døde sider). 403/429/5xx er ikke bevis.
  - `src/Ai.php`, `src/AiClassifier.php`, `src/AiWriter.php`, `src/AdminTexts.php` – AI-sortering og -tekster med godkendelse.
  - `src/Importer.php`, `src/Cron.php`, `src/Cli.php`, `src/Admin.php`, `src/Frontend.php`
- `wp-content/themes/playform/` – temaet, bygget ud fra designet (forside, kategoriside, produktside).
  - `inc/navigation.php` – menuen (`playform_menu_spec()`): Træningsmaskiner, Styrketræning, Yoga & pilates, Restitution, Tilbehør, Tilbud. Træningsmaskiner og Styrketræning er grupperingskategorier med oversigtsside.
  - `template-parts/mobile-menu.php` – mobilmenuen (≤1080 px): skuffe med lag, menupunkt → kategori (underkategorier, pris, tilbud). Bygges ud fra `playform_menu()` ligesom mega-menuen.
  - `inc/permalinks.php` – flade kategori-URL'er (`/traeningsmaskiner/lobebaand/gaabaand/`) og `/…/tilbud/`-sider. WooCommerce' præfiks `kategori` bruges kun til gamle links, som omdirigeres.
  - `inc/authors.php` – forfattere (E-E-A-T): navn i byline, forfatterside `/viden/forfatter/navn/`, forfatterboks under artikler, JSON-LD (Article, ProfilePage/Person). Ingen Gravatar – profilbillede via feltet `pf_photo`. Påstå aldrig kvalifikationer, ejeren ikke selv har skrevet i sin profil.
  - `template-parts/guides-index.php` – Viden & guides (`/viden/`) og emnesider (`/viden/emne/<emne>/`): emnefaner, fremhævet guide, gitter. Emner = WordPress-kategorier.
  - `assets/img/articles/<slug>.jpg` – artikelbilleder fra Pexels (fri licens, 1800 px). `playform_article_images()` sætter dem på indlæg uden billede eller med for lille billede. Brug aldrig produktbilleder som artikelbilleder.
  - `inc/best.php` + `content/best/<slug>.php` – købsguides "Vores bud på de 3 bedste X" overført fra det gamle fitbase.dk. Ligger under `/koebsguide/<slug>/` (`PLAYFORM_GUIDE_BASE`, `playform_guide_url()`); oversigten er `/koebsguide/` (emnet `kobsguide`). Gamle adresser direkte under roden (`/romaskine-med-vand/`, som på det gamle site), `/viden/<slug>/` og `/viden/emne/kobsguide/` viderestilles med 301 (`playform_root_posts()`). Top 3 med links til rigtige anmeldelser af præcis samme model, ellers markeret "vores vurdering". Aldrig påstand om egen test. Levende pris/lager via shortcodes. Gamle URL'er, der ikke findes mere, viderestilles i `playform_legacy_redirects()` (fravalgte emner → forsiden).
  - `inc/campaigns.php` – automatiske sæsonkampagner (ejerens ønske 4. nov. 2026: ingen opsætning i WordPress). Black Friday (hele november; baren skifter fra Black Month til nedtælling, Black Friday, Black Weekend og Cyber Monday), januarudsalg (1.–31. jan), sommerudsalg (25. jun–10. aug), efterårstilbud (15. sep–31. okt). Sort bar under menuen i perioden; fast side pr. kampagne (`/black-friday/` osv.), der viser butikkernes tilbud med samme regler som `/tilbud/` og står hele året med en note om næste gang. Lov aldrig mere, end tilbuddene holder.
  - `inc/search.php` – søgeforslag (`/wp-json/playform/v1/search`).
- `dev/setup-local.sh` – lokal WordPress med SQLite i `.local/` (ignoreres af git).

## Vigtige regler

1. **Tilbud = butikkernes egne tilbud, højst 14 dage gamle.** Et produkt er på tilbud, når den billigste butik på lager selv har markeret det med en førpris (`glpris` > pris), og netop det tilbud højst er 14 dage gammelt (Forbrugerombudsmandens to-ugers-regel). Se `Sales` (`Sales::DAYS`) og kolonnen `sale_since` i `wp_pf_offers`. Vi viser "Tilbud hos [butik]", prisen, en overstreget førpris og rabat i % (`playform_save_pct()`). **Førprisen:** helst *kontrolleret førpris* (`Sales::reference()` → `_pf_sale_ref`): den laveste pris hos samme butik i de 30 dage før `sale_since`, når vores prishistorik for butikken går mindst 30 dage tilbage fra tilbudsstarten (førprisreglen). Findes den ikke, viser vi butikkens egen førpris (`glpris` → `_pf_sale_list`) tydeligt mærket "Butikkens førpris" (ejerens valg 2. nov. 2026, indtil vores historik er lang nok). `_pf_sale_percent` (butikkens rabat) bruges til sortering. Vores egen prishistorik (`PriceHistory::drop()`) er ikke et tilbud. Den vises kun som faktuel prisinfo på produktsiden ("Laveste pris de 30 dage før").
2. **AI må aldrig opfinde fakta.** Produkttekster skrives kun ud fra feed-data (navn, mærke, beskrivelse, kategori) og generel købsrådgivning for kategorien. Ingen opdigtede specifikationer. Ejeren godkender ikke hver tekst: `AiWriter::check()` faktatjekker automatisk (alle tal skal stå i feed-data, ingen reklamesuperlativer). Teksterne er lange (ca. 300–450 ord: indledning, "Det får du", "Hvem passer den til?", "Det skal du overveje" med generel købsrådgivning uden tal); `_pf_ai_version` = 2. Korte tekster i det gamle format skrives om, når alle produkter har tekst. Består teksten, udgives den straks; ellers venter den under Produkter → Tekster til godkendelse. `Cron::after_import()` skriver `playform_ai_texts_per_run` (standard 100) nye tekster efter hver fuld import, højst 200 pr. døgn (ejerens valg 6. nov. 2026); mail til admin, når alle produkter har tekst eller jobbet stopper med fejl.
3. **Affiliate-links** har `rel="sponsored nofollow"`, og siden skal tydeligt oplyse, at den indeholder annoncer. Alle klik-links går gennem `playform_aff_url()`: `uid` = produktets slug, `uid2` = sitets navn + købsguidens slug, `produktside` eller `produktside-prisliste` (fx `fitbase-produktside`; statiske værdier – siderne caches). Sitets navn i uid2 skelner salg mellem sitesne, som deler partner-id (9. nov. 2026).
4. **Produkter uden billede vises ikke** (kladde, se `ProductSync::refresh()`) – typisk udgåede varer eller reservedele. **Udsolgte produkter slettes ikke.** Siden bliver liggende som "ikke på lager". Eksterne produkter kan ikke have WooCommerce-lagerstatus, så vi bruger metafeltet `_pf_in_stock`.
5. **Prissammenligning er en bonus.** De fleste produkter sælges af én butik. Produktsiden viser "Sælges af [butik]" ved én butik og prislisten ved flere.
6. **Ingen pixelerede billeder.** `playform_post_image()` viser kun et indlægsbillede, hvis det er stort nok (hero ≥ 1200 px, kort ≥ 700 px).
7. **Ingen tredjepartskald fra den offentlige side.** Skrift ligger i `themes/playform/assets/fonts/`, billeder caches lokalt, WooCommerce' scripts og sporings-cookies er slået fra.
8. **Redaktørens rettelser vinder.** Metafeltet `_pf_locks` (`name`, `category`) forhindrer importen i at overskrive.

## Kommandoer

```bash
dev/setup-local.sh <kildemappe>     # lokal WordPress (admin/admin)
wp playform import                  # hent og importer alle feeds
wp playform import --shop=apuls --limit=50
wp playform import --file=apuls:/sti/feed.xml
wp playform stats                   # produkter pr. kategori
wp playform drops                   # genberegn målte prisfald (prishistorik)
wp playform sales                   # genberegn butikstilbud
```

På hosting: kør `wp playform import` fra et rigtigt cronjob kl. 05:30 og 17:30 og sæt `DISABLE_WP_CRON`.

## Udrulning

Hvert push til `main` udrulles via GitHub Actions (FTPS) til `fitbase.dk/public_html` på FTP-kontoen (`SITE_DIR` i `.github/workflows/deploy.yml`; udrulningen stopper, hvis mappen ikke indeholder `wp-config.php`). Hoveddomænet blev skiftet fra `frederikb7.sg-host.com` til fitbase.dk den 2. nov. 2026; `playform_move_to_fitbase_dk()` flytter WordPress-adressen. GitHub-secret `FTP_SERVER` skal være SiteGrounds FTP-værtsnavn, ikke det midlertidige domæne.

## Statistik

Matomo via WordPress-pluginnet "Matomo Analytics" (kører på egen server, ingen tredjepart). `inc/consent.php` lægger `requireCookieConsent` i `_paq` før pluginets kode: uden samtykke tælles besøg uden cookies; med samtykke til statistik må Matomo sætte `_pk_id` (12 mdr.) og `_pk_ses`. IP-anonymisering slås til i pluginets indstillinger. Cookie- og privatlivspolitikken (`inc/legal.php`, version 6) beskriver det.

## Design

Designet ligger som et Claude-artefakt (Playform: forside, kategoriside, produktside). Stil: hvid baggrund, sort tekst, BDO Grotesk, afrundede hjørner (14–18 px), accentfarve orange #FF5A1F (ejerens valg 8. nov. 2026; før grøn #23D200) brugt sparsomt med hvid tekst (`--on-accent`), tynde linjeikoner (stroke 1.4), tynde streger med lav opacity.

## Shops

Apuls.dk, Fitnessshoppen.dk, Træningspartner, Den Intelligente Krop (kun træning, yoga, pilates, massage) og OptimaSport.dk (kun restitution). Cykelexperten.dk kun dame- og herrecykler (`category_map` i `Config::shops()`, størrelsesvarianter samles med `group_variants`) til købsguiderne om citybikes; gruppen Cykler (`/cykler/`) er ikke i hovedmenuen. Cykelpartner har ingen hele cykler og er ikke med. Padelshoppen og Watery er fravalgt (ikke fitness).

**SEO i købsguides (ejerens ønske 5. nov. 2026):** folk søger "bedste <søgeord>" og "<søgeord> test". `playform_guide_keyword()` (`keyword` i artikelfilen, ellers titlen før kolon) giver titlen "Bedste <søgeord>: …", sidetitlen "Bedste <søgeord> <år> → Se vores top N", "bedste <søgeord>" i kort-fortalt og sammenligningen, og nederst et afsnit (`playform_guide_test_note()`), der ærligt siger, at det ikke er en test. Overskriften har ikke ordet "test" (7. nov. 2026, efter Forbrugerombudsmandens sag mod Obsidian Media) – kun brødteksten i afsnittet må nævne "<søgeord> test". Artikler med reklamelinks mærkes "Reklamelinks"/"Annonce" i alle lister og i metabeskrivelsen (`playform_post_ad_label()`), og hvert produktvalg siger "ikke testet". Aldrig "testvinder", "bedst i test" som påstand eller lignende.
