<?php
return [

  'add_input_field' => 'Legg til inntastingsfelt',
  'remove_input_field' => 'Fjern dette inntastingsfeltet',
  'marketplace_name' => 'Navnet på markedsnavnet. Besøkende vil se dette navnet.',
  'system_legal_name' => 'Det juridiske navnet på virksomheten',
  'min_pass_lenght' => 'Minimum 6 tegn',
  'role_name' => 'Tittelen på brukerrollen',
  'role_type' => 'Plattform og selger. Rolletypeplattformen er bare tilgjengelig for hovedplattformbrukeren, en selger kan ikke bruke denne rollen. Merchant-rolletypen er tilgjengelig når en selger vil legge til en ny bruker.',
  'role_level' => 'Rollenivå vil bli brukt for å bestemme hvem som kan kontrollere hvem. Eksempel: En bruker med rollenivå 2 kan ikke endre noen brukere med rollenivå 1. Hold emty hvis rollen er for sluttnivåbrukere.',
  'you_cant_set_role_level' => 'Bare brukere på toppnivå kan angi denne verdien.',
  'cant_edit_special_role' => 'Denne rolletypen er ikke redigerbar. Vær nøye med å endre tillatelsene til denne rollen.',
  'set_role_permissions' => 'Angi rolletillatelser veldig nøye. Velg \'Rolle Type\' for å få godkjenningsmoduler.',
  'permission_modules' => 'Aktiver modulen for å angi tillatelse for modulen',
  'shipping_rate_delivery_takes' => 'Vær spesifikk, kunden vil se dette.',
  'type_dbreset' => 'Skriv det eksakte ordet "RESET" i boksen for å bekrefte ønsket ditt.',
  'type_environment' => 'Skriv det eksakte ordet "MILJØ" i boksen for å bekrefte ønsket ditt.',
  'type_uninstall' => 'Skriv det eksakte ordet "UNINSTALL" i boksen for å bekrefte ønsket ditt.',
  'module' => [
    'name' => 'Alle brukere under denne rollen vil kunne utføre spesifiserte handlinger for å administrere :module.',
    'access' => [
      'common' => 'Dette er en :access-modul. Det betyr at både plattformbrukere og selgerbrukere kan få tilgang.',
      'platform' => 'Dette er en :access-modul. Det betyr at bare plattformbrukere kan få tilgang.',
      'merchant' => 'Dette er en :access-modul. Det betyr at bare selgerbrukere kan få tilgang.',
    ],
  ],
  'currency_iso_code' => 'ISO 4217-kode. For eksempel har amerikanske dollar koden USD og Japans valutakode er JPY.',
  'country_iso_code' => 'ISO 3166_2-kode. Eksempel: Eksempel: For USA er koden USA',
  'currency_subunit' => 'Underenheten som er en brøkdel av baseenheten. For eksempel: cent, centavo, paisa',
  'currency_symbol_first' => 'Eksempel: $ 13,21',
  'currency_decimalpoint' => 'Eksempel: 13.21, 13,21',
  'currency_thousands_separator' => 'Eksempel: 1 000, 1 000, 1 000',
  'cover_img_size' => 'Størrelsen på omslagsbildet skal være 1280x300px',
  'featured_img_size' => 'Utvalgt bildestørrelse skal være 285x190px',
  'brand_featured_img_size' => 'Utvalgt bildestørrelse skal være 380x160px',
  'featured_image' => 'Dette bildet vises i delen Utvalgt kategori på hjemmesiden',
  'brand_featured_image' => 'Dette bildet vil vises i delen Fremhevede merker på hjemmesiden',
  'slug' => 'Slug er vanligvis en søkemotorvennlig URL',
  'shop_slug' => 'Dette vil bli brukt som butikk-URL. Du kan ikke endre den senere. Vær kreativ for å velge sneglen til butikken din',
  'shop_url' => 'Den komplette stien til butikkens destinasjonsside. Du kan ikke endre url.',
  'shop_timezone' => 'Tidssonen påvirker ikke butikken eller markedet. Det er bare for å vite mer om butikken din',
  'url' => 'nettadresse',
  'optional' => '(valgfri)',
  'use_markdown_to_bold' => 'Legg til ** begge deler av viktige nøkkelord for å fremheve',
  'announcement_action_text' => 'Valgfri handlingsknapp for å koble kunngjøringen til en hvilken som helst url',
  'announcement_action_url' => 'Handlings url til blogginnlegg eller hvilken som helst url',
  'blog_feature_img_hint' => 'Bildestørrelsen skal være 960x480px',
  'code' => 'Kode',
  'brand' => 'Produktets merke. Ikke påkrevd, men anbefalt',
  'shop_name' => 'Butikkets merke eller visningsnavn',
  'shop_status' => 'Hvis den er aktiv, vil butikken være live umiddelbart.',
  'shop_maintenance_mode_handle' => 'Hvis vedlikeholdsmodus er på, vil butikken være frakoblet, og alle oppføringer vil være nede fra markedet til vedlikehold er slått av.',
  'system_maintenance_mode_handle' => 'Hvis vedlikeholdsmodus er på, vil markedsplassen være offline, og flagget for vedlikeholdsmodus vises for besøkende. Fortsatte selgere kan få tilgang til adminpanelet.',
  'system_physical_address' => 'Den fysiske plasseringen av markedet / kontoret',
  'system_email' => 'Alle varsler sendes til denne e-postadressen, godta support-e-post (hvis angitt)',
  'system_timezone' => 'Dette systemet vil bruke denne tidssonen til å operere.',
  'system_currency' => 'Markedsplassens valuta',
  'system_slogan' => 'Tagline som beskriver markedsplassen din mest',
  'system_length_unit' => 'Enhetens lengde vil brukes over hele markedet.',
  'system_weight_unit' => 'Enhet av vekt vil brukes over hele markedet.',
  'system_valume_unit' => 'Enhet av valume vil brukes over hele markedet.',
  'ask_customer_for_email_subscription' => 'Når en ny kunde registrerer en konto, spør kunden din om han / hun ønsker å få kampanjer og andre varsler på e-post. Å slå av alternativet vil føre til automatisk abonnement. I så fall gjør det klart i avsnittet om vilkår og betingelser.',
  'allow_guest_checkout' => 'Dette vil tillate kunder å sjekke ut uten å registrere seg på nettstedet.',
  'vendor_can_view_customer_info' => 'Dette vil tillate leverandører å se kundens detaljinformasjon på ordresiden. Ellers vil navn, e-postadresse og fakturerings- / leveringsadresser være synlige.',
  'system_pagination' => 'Angi pagineringsverdien for datatabellene på adminpanelet.',
  'subscription_name' => 'Gi et meningsfylt navn til abonnementsplanen.',
  'subscription_plan_id' => 'Dette er identifikatoren som må være nøyaktig samsvar med Stripes plan-ID',
  'featured_subscription' => 'Det bør bare være ett omtalt abonnement',
  'subscription_cost' => 'Kostnaden for abonnementet per måned',
  'team_size' => 'Lagstørrelse er antall brukere som kan registrere seg under dette teamet',
  'inventory_limit' => 'Antall totale noteringer. En variant av samme produkt vil bli betraktet som en annen vare.',
  'marketplace_commission' => 'Prosentandel av ordreverdiens belastning av markedet',
  'transaction_fee' => 'Hvis du vil kreve et fast gebyr for hver enkelt transaksjon',
  'subscription_best_for' => 'Målretter kunden for denne pakken. Dette vil være synlig for kunden.',
  'config_return_refund' => 'Retur- og refusjonspolicy for din butikk. Vennligst les markedsplassens policy før du spesifiserer din.',
  'config_trial_days' => 'Kjøpmann blir belastet etter prøveperioden. Hvis du ikke tar kort på forhånd, vil kjøpmannskontoen fryse etter denne tiden.',
  'charge_after_trial_days' => 'Vil bli belastet etter prøveperioden på :days dager.',
  'required_card_upfront' => 'Vil du ta kortinformasjon når selger registrerer deg?',
  'leave_empty_to_save_as_draft' => 'La være tom for å lagre som utkast',
  'logo_img_size' => 'Logo bildestørrelse bør være minimum 300x300px',
  'brand_logo_size' => 'Logo bildestørrelse skal være 120x40px og .png',
  'brand_icon_size' => 'Ikonbildestørrelse skal være 32x32px og .png',
  'config_alert_quantity' => 'En varsel e-post vil bli sendt lageret ditt går under varsel mengde',
  'config_max_img_size_limit_kb' => 'Maksimumsgrense for bildestørrelse kan lastes opp for produkt / inventar / logo / avatar. Størrelsen i kilobyte.',
  'config_max_number_of_inventory_imgs' => 'Velg hvor mange bilder som skal lastes opp for en enkelt inventarvare.',
  'config_address_default_country' => 'Angi denne verdien for å fylle ut adresseskjemaet raskere. Det er klart at en bruker kan endre verdien når han legger til en ny adresse.',
  'config_address_default_state' => 'Angi denne verdien for å fylle ut adresseskjemaet raskere. Det er klart at en bruker kan endre verdien når han legger til en ny adresse.',
  'config_show_address_title' => 'Vis / skjul adressetittel mens du viser / skriver ut en adresse.',
  'config_address_show_country' => 'Vis / skjul landets navn mens du viser / skriver ut en adresse. Dette er nyttig hvis markedsplassen din i en liten region.',
  'config_address_show_map' => 'Vil du vise kart med adresser? Dette alternativet vil generere kart ved hjelp av Google Map.',
  'config_show_currency_symbol' => 'Vil du vise valutasymbol når du representerer en pris? Eksempel: $ 123',
  'config_show_space_after_symbol' => 'Vil du formatere prisen ved å plassere et mellomrom etter symbolet. Eksempel: $ 123',
  'config_decimals' => 'Hvor mange sifre vil du vise etter desimalet? Eksempel: 13.21, 13.123',
  'config_gift_card_pin_size' => 'Hvor mange sifre du vil generere et gavekort-pinnummer. Standard lengde 10',
  'config_gift_card_serial_number_size' => 'Hvor mange sifre du vil generere serienummer på gavekort. Standard lengde 13',
  'config_coupon_code_size' => 'Hvor mange sifre du vil generere kupongkode. Standard lengde 8',
  'shop_email' => 'Alle varsler sendes til denne e-postadressen (varelager, bestillinger, billetter, disputer osv.) Aksepterer kundesupport e-post (hvis angitt)',
  'shop_legal_name' => 'Det juridiske navnet på butikken',
  'shop_owner_id' => 'Eieren og superadministrator av butikken. En bruker registrert som selger kan eie en butikk. Du kan ikke endre dette senere.',
  'shop_description' => 'Merkebeskrivelsen av butikken, denne informasjonen vil være synlig på butikkens hjemmeside.',
  'attribute_type' => 'Type attributt. Dette vil bidra til å vise alternativene på produktsiden.',
  'attribute_name' => 'Dette navnet vil vises på produktsiden.',
  'attribute_value' => 'Denne verdien vises på produktsiden som valgbart alternativ.',
  'parent_attribute' => 'Alternativet vil vises under dette attributtet.',
  'list_order' => 'Visningsrekkefølge på listen.',
  'shop_external_url' => 'Hvis du eier et nettsted, kan du legge den eksterne lenken her, url kan settes som butikkens destinasjonsside.',
  'product_name' => 'Kunder vil ikke se dette. Dette navnet hjelper selgere bare med å finne varen som er oppført.',
  'product_featured_image' => 'Kunder vil ikke se dette. Dette hjelper selgere bare med å finne varen som er oppført.',
  'product_images' => 'Kunder vil bare se bildene hvis selgerens oppføring ikke har noen bilder å vise.',
  'product_active' => 'Selgere vil bare finne aktive varer.',
  'product_description' => 'Kundene vil se dette. Dette er kjernen og den vanlige produktbeskrivelsen.',
  'model_number' => 'En identifikator av et produkt gitt av produsenten. Ikke påkrevd, men anbefalt',
  'gtin' => 'Global Trade Item Number (GTIN) er en unik identifikator for et produkt på den globale markedsplassen. Hvis du ønsker å skaffe en ISBN- eller UPC-kode for produktet ditt, finner du mer informasjon på følgende nettsteder: http://www.isbn.org/ og http://www.uc-council.org/',
  'mpn' => 'Produsentens delenummer (MPN) er en unik identifikator utstedt av produsenten. Du kan skaffe MPN-er fra produsenten. Ikke påkrevd, men anbefalt',
  'sku' => 'SKU (Stock Keeping Unit) er den selgerspesifikke identifikatoren. Det vil bidra til å administrere varelageret ditt',
  'isbn' => 'International Standard Book Number (ISBN) er en unik strekkode for kommersiell bokidentifikator. Hver ISBN-kode identifiserer en bok som er unikt. ISBN har enten 10 eller 13 sifre. Alle ISBN-tildelte etter 1. januar 2007 har 13 sifre. Vanligvis er ISBN skrevet ut på baksiden av boken',
  'ean' => 'European Article Number (EAN) er en strekkodestandard, en 12- eller 13-sifret produktidentifikasjonskode. Du kan få EAN-er fra produsenten. Hvis produktene dine ikke har produsent-EAN-er, og du trenger å kjøpe EAN-koder, kan du gå til GS1 UK http://www.gs1uk.org',
  'upc' => 'Universal Product Code (UPC), også kalt GTIN-12 og UPC-A. En unik numerisk identifikator for kommersielle produkter som vanligvis er assosiert med en strekkode trykt på detaljhandel',
  'meta_title' => 'Tittelmerker - teknisk kalt tittelelementer - definerer tittelen på et dokument. Tittelkoder brukes ofte på resultatsider (søkemotorer) for søkemotorer for å vise forhåndsvisningsutdrag for en gitt side, og er viktige både for SEO og sosial deling',
  'meta_description' => 'Metabeskrivelser er HTML-attributter som gir kortfattede forklaringer på innholdet på websider. Metabeskrivelser brukes ofte på resultatsider (søkemotorer) for søkemotorer for å vise forhåndsvisningsutdrag for en gitt side',
  'catalog_min_price' => 'Angi en minstepris for produktet. Leverandører kan legge til varelager innenfor disse prisgrensene.',
  'catalog_max_price' => 'Angi en maksimal pris for produktet. Leverandører kan legge til varelager innenfor disse prisgrensene.',
  'requires_shipping' => 'Denne varen krever frakt.',
  'downloadable' => 'Denne varen er et digitalt innhold, og kjøpere kan laste ned varen.',
  'manufacturer_url' => 'Den offisielle nettstedlenken til produsenten.',
  'manufacturer_email' => 'Systemet vil bruke denne e-postadressen for å kommunisere med produsenten.',
  'manufacturer_phone' => 'Støttetelefonnummeret til produsenten.',
  'supplier_email' => 'Systemet vil bruke denne e-postadressen for å kommunisere med leverandøren.',
  'supplier_contact_person' => 'Kontaktperson',
  'shop_address' => 'Den fysiske adressen til butikken.',
  'search_product' => 'Du kan bruke hvilken som helst GTIN-identifikator som UPC, ISBN, EAN, JAN eller ITF. Du kan også bruke navn og modellnummer ELLER del av navn eller modellnummer.',
  'seller_description' => 'Dette er en selgerspesifikk beskrivelse av produktet. Kunden vil se dette',
  'seller_product_condition' => 'Hva er gjeldende tilstand for produktet?',
  'condition_note' => 'Tilstandsnotat er nyttig når produktet brukes / pusses opp',
  'select_supplier' => 'Anbefalt felt. Dette vil bidra til å generere rapporter',
  'select_warehouse' => 'Velg lageret hvor produktet skal sendes.',
  'select_packagings' => 'Liste over tilgjengelige emballasjealternativer for å sende produktet. La være tomt for å deaktivere emballasjealternativet',
  'available_from' => 'Datoen da aksjen vil være tilgjengelig. Standard = umiddelbart',
  'sale_price' => 'Prisen uten skatt. Skatt beregnes automatisk basert på forsendelsessone.',
  'purchase_price' => 'Anbefalt felt. Dette vil bidra til å beregne fortjeneste og generere rapporter',
  'min_order_quantity' => 'Antallet tillatt å ta bestillinger. Må være en heltallverdi. Standard = 1',
  'offer_price' => 'Tilbudsprisen gjennomføres mellom tilbudets start- og sluttdato',
  'offer_start' => 'Et tilbud må ha en startdato. Påkrevd dersom tilbudsprisefeltet er gitt',
  'offer_end' => 'Et tilbud må ha en sluttdato. Påkrevd dersom tilbudsprisefeltet er gitt',
  'seller_inventory_status' => 'Er varen åpen for salg? Inaktiv vare vises ikke på markedsplassen.',
  'stock_quantity' => 'Antall varer du har på lageret ditt',
  'offer_starting_time' => 'Tilbud starttid',
  'offer_ending_time' => 'Tilbud sluttid',
  'set_attribute' => 'Hvis verdien ikke er på listen, kan du legge til passende verdi ved å bare skrive den nye verdien',
  'variants' => 'Produktvarianter',
  'delete_this_combination' => 'Slett denne kombinasjonen',
  'romove_this_cart_item' => 'Fjern denne varen fra handlekurven',
  'no_product_found' => 'Ingen produkter funnet! Vennligst prøv forskjellige søk eller legg til nytt produkt',
  'not_available' => 'Ikke tilgjengelig!',
  'admin_note' => 'Administrasjonsnotat vil ikke være synlig for kunden',
  'message_to_customer' => 'Denne meldingen blir sendt til kunden med faktura-e-posten',
  'empty_cart' => 'Handlekurven er tom',
  'send_invoice_to_customer' => 'Send en faktura til kunden med denne meldingen',
  'delete_the_cart' => 'Slette handlekurven og fortsett bestillingen',
  'order_status_send_email' => 'En e-post vil bli sendt til kunden når ordrestatusen oppdateres',
  'order_status_email_template' => 'Denne e-postmalen blir sendt til kunden når ordrestatusen oppdateres. Obligatorisk hvis e-postadressen er aktivert for statusen',
  'update_order_status' => 'Oppdater ordrestatusen',
  'email_template_name' => 'Gi malen et navn. Dette er kun for systembruk.',
  'template_use_for' => 'Malen vil bli brukt av',
  'email_template_subject' => 'Dette vil brukes som emne for e-posten.',
  'email_template_body' => 'Det er noen korte koder du kan bruke for dynamisk informasjon. Sjekk bunnen av dette skjemaet for å se tilgjengelige kortkoder.',
  'email_template_type' => 'Type e-postadresse.',
  'template_sender_email' => 'Denne e-postadressen vil brukes til å sende e-post, og mottakeren kan svare på dette.',
  'template_sender_name' => 'Dette navnet vil brukes som avsendernavn',
  'packaging_name' => 'Kunden vil se dette hvis emballasjealternativet er tilgjengelig ved bestilling',
  'width' => 'Bredden på emballasjen',
  'height' => 'Høyden på emballasjen',
  'depth' => 'Dybden på emballasjen',
  'packaging_cost' => 'Kostnaden for emballasje. Du kan velge om du vil belaste kostnadene for kundene eller ikke',
  'set_as_default_packaging' => 'Hvis merket: denne emballasjen vil bli brukt som standard fraktpakke',
  'shipping_carrier_name' => 'Navnet på transportøren',
  'shipping_zone_name' => 'Gi et navn på sone. Kunden vil ikke se dette navnet.',
  'shipping_rate_name' => 'Gi et meningsfylt navn. Kunden vil se dette navnet i kassen. e. g. \'standard fraktmetode\'',
  'shipping_zone_carrier' => 'Du kan koble fraktføreren. Kunden vil se dette i kassen.',
  'free_shipping' => 'Hvis den er aktivert, vil gratis forsendelsesetiketten vises på produktoppføringssiden.',
  'shipping_rate' => 'Sjekk alternativet \'Gratis frakt\' eller gi 0 beløp for gratis frakt',
  'shipping_zone_tax' => 'Denne avgiftsprofilen vil være gjeldende når kunden kjøper fra denne forsendelsessonen',
  'shipping_zone_select_countries' => 'Velg land til denne sonen du sender til. Merk av for resten av verden-alternativet for verdensomspennende sone.',
  'rest_of_the_world' => 'Denne sonen inkluderer land og regioner som ikke allerede er definert i de andre forsendelsessoner.',
  'shipping_max_width' => 'Maksimal pakkeviddehåndtak av bæreren. La være tom for å deaktivere.',
  'shipping_tracking_url' => '\'@\' vil bli erstattet av det dynamiske sporingsnummeret',
  'shipping_tracking_url_example' => 'f.eks .: http://eksempel.no/track.php?num=@',
  'order_tracking_id' => 'Bestillingssporings-ID levert av leverandøren av levering.',
  'order_fulfillment_carrier' => 'Velg transportør for å oppfylle bestillingen.',
  'notify_customer' => 'En varsel e-post vil bli sendt til kunden med nødvendig informasjon.',
  'shipping_weight' => 'Dette vil bli brukt til å beregne fraktkostnaden.',
  'order_number_prefix_suffix' => 'Prefikset og endelsen legges automatisk til for å formatere alle ordrenumre. La det være tomt hvis du ikke vil formulere ordrenumre.',
  'customer_not_see_this' => 'Kunden vil ikke se dette',
  'customer_will_see_this' => 'Kundene vil se dette',
  'refund_select_order' => 'Velg bestillingen du vil tilbakebetale',
  'refund_order_fulfilled' => 'Sendes bestillingen til kunden?',
  'refund_return_goods' => 'Er varen returnert til deg?',
  'customer_paid' => 'Kunden betalte <strong> <em> :amount </em> </strong> inkludert alle skatter, fraktkostnader og andre.',
  'order_refunded' => 'Tidligere tilbakebetalt <strong> <em> :amount </em> </strong> av totalt <strong> <em> :total </em> </strong>',
  'search_customer' => 'Finn kunden via e-postadresse, fint navn eller fullt navn.',
  'coupon_quantity' => 'Totalt antall tilgjengelige kuponger',
  'coupon_name' => 'Navnet vil bli brukt i faktura og ordreoppsummering',
  'coupon_code' => 'Den unike kupongkoden',
  'coupon_value' => 'Verdien av kupongen',
  'coupon_min_order_amount' => 'Velg minimum bestillingsbeløp for handlekurven (valgfritt)',
  'coupon_quantity_per_customer' => 'Velg hvor mange ganger en kunde kan bruke denne kupongen. Hvis du lar den stå tom, kan en kunde bruke denne kupongen til den er tilgjengelig.',
  'starting_time' => 'Kupongen vil være tilgjengelig fra denne tiden',
  'ending_time' => 'Kupongen vil være tilgjengelig frem til denne tiden',
  'exclude_tax_n_shipping' => 'Ekskluder skatt og fraktkostnad',
  'exclude_offer_items' => 'Utelukk elementer som allerede har et løpende tilbud eller rabatt',
  'coupon_limited_to_customers' => 'Velg om du bare vil gjøre kupongen for bestemte kunder',
  'coupon_limited_to_shipping_zones' => 'Velg om du bare vil gjøre kupongen for spesifikke forsendelsessoner',
  'coupon_limited_to' => 'Bruk e-postadresse eller navn for å finne kunder',
  'faq_placeholders' => 'Du kan bruke denne plassholderen i spørsmålet og svaret ditt. Dette erstattes av den faktiske verdien',
  'gift_card_name' => 'Navnet på gavekortet.',
  'gift_card_pin_code' => 'Den unike hemmelige koden. PIN-koden er passordet for kortet. Du kan ikke endre denne verdien senere.',
  'gift_card_serial_number' => 'Det unike serienummeret for kortet. Du kan ikke endre denne verdien senere.',
  'gift_card_value' => 'Verdien på kortet. Kunden vil motta samme rabatt.',
  'gift_card_activation_time' => 'Aktiveringstid for kortet. Kortet kan brukes etter denne tiden.',
  'gift_card_expiry_time' => 'Utløpstid for kortet. Kortet kan være gyldig til denne tiden.',
  'gift_card_partial_use' => 'Tillat delvis bruk av den totale kortverdien',
  'number_between' => 'Mellom :min og :max',
  'default_tax_id' => 'Standard avgiftsprofil vil bli brukt når fraktsonen ikke er dekket av noe avgiftsområde.',
  'default_payment_method_id' => 'Hvis valgt, blir betalingsmetoden forhåndsvalgt når du oppretter en ny ordre',
  'config_order_handling_cost' => 'Denne ekstrakostnaden tillegges med fraktkostnaden for alle bestillinger. La det være tomt for å deaktivere ordrehåndteringsgebyret',
  'default_warehouse' => 'Standardlager blir forhåndsvalgt når du legger til nytt lager',
  'default_supplier' => 'Standardleverandør vil bli valgt på forhånd når du legger til nytt lager',
  'default_packaging_ids_for_inventory' => 'Standardemballasjer blir forhåndsvalgt når du legger til nytt lager. Dette vil hjelpe deg å legge til inventar raskere',
  'config_payment_environment' => 'Er legitimasjonsbeskrivelsen for live-modus eller tester du mer?',
  'config_authorize_net_transaction_key' => 'Transaksjonsnøkkelen fra Authorize.net. Hvis du ikke er sikker, kan du kontakte Authorize.net for å få hjelp.',
  'config_authorize_net_api_login_id' => 'API-påloggings-ID fra Authorize.net. Hvis du ikke er sikker, kan du kontakte Authorize.net for å få hjelp.',
  'config_enable_payment_method' => 'Systemet tilbyr forskjellige typer betalingsportaler. Du kan aktivere / deaktivere enhver betalingsgateway for å kontrollere betalingsalternativer leverandøren kan bruke for å godta betaling fra kunder.',
  'config_additional_details' => 'Vises på siden Betalingsmetode, mens kunden velger å betale.',
  'config_payment_instructions' => 'Vises på takkesiden etter at kunden har lagt inn bestillingen.',
  'config_stripe_publishable_key' => 'Publiserbare API-nøkler er ment bare for å identifisere kontoen din med Stripe, de er ikke hemmelige. De kan trygt publiseres.',
  'config_paypal_express_account' => 'Vanligvis e-postadressen til PayPal-applikasjonen din. Lag PayPal-applikasjonen din herfra: https://developer.paypal.com/webapps/developer/applications/myapps',
  'config_paypal_express_client_id' => 'Klient-IDen er en lang, unik identifikator av PayPal-applikasjonen din. Du finner denne verdien på delen Mine apper og legitimasjon på PayPal-oversikten.',
  'config_paypal_express_secret' => 'PayPal hemmelige nøkkel. Du finner denne verdien på delen Mine apper og legitimasjon på PayPal-oversikten.',
  'config_paystack_merchant_email' => 'Salgs-e-posten til din Paystack-konto.',
  'config_paystack_public_key' => 'Public Key er en lang, unik identifikator av din Paystack-applikasjon. Du finner denne verdien på API-nøkler og Webhooks-delen i innstillingene på Paystack-oversikten.',
  'config_paystack_secret' => 'Paystack API Secret Key. Du finner denne verdien på API-nøkler og Webhooks-delen i innstillingene på Paystack-oversikten.',
  'config_auto_archive_order' => 'Arkiver ordren automatisk. Velg denne funksjonen hvis du ikke vil arkivere alle ordrer manuelt etter at de er oppfylt.',
  'config_pagination' => 'Hvor mange listeelementer du vil vise per side i datatabellene',
  'support_phone' => 'Kunden vil kontakte dette nummeret for support og spørsmål',
  'support_email' => 'Du får all support-e-post til denne adressen',
  'support_phone_toll_free' => 'Hvis du har et avgiftsfritt nummer for kundesupport',
  'default_sender_email_address' => 'Alle automatiserte e-postmeldinger til kundene vil bli sendt fra denne e-postadressen. Og også når en avsender-e-postadresse ikke kan angi når du sender en e-post',
  'default_email_sender_name' => 'Dette navnet vil bli brukt som avsender av e-post som sendes fra standard avsender e-postadresse',
  'google_analytic_report' => 'Du bør bare aktivere dette hvis systemet er konfigurert med Google Analytics. Ellers kan det føre til feil. Sjekk dokumentasjonen for hjelp. Alternativt kan du bruke programmets innebygde rapportsystem.',
  'inventory_linked_items' => 'De koblede varene vises på produktsiden som ofte kjøpte varer. Dette er valgfritt, men viktig.',
  'notify_new_message' => 'Send meg en varsling når en ny melding kom',
  'notify_alert_quantity' => 'Send meg et varsel når noen av varene på lageret mitt når varemengdenivået',
  'notify_inventory_out' => 'Send meg et varsel når noen av varene mine er på lager',
  'notify_new_order' => 'Send meg et varsel når en ny ordre er lagt inn i butikken min',
  'notify_abandoned_checkout' => 'Send meg et varsel da kunden forlot kassen av varen min',
  'notify_when_vendor_registered' => 'Send meg et varsel når en ny leverandør er registrert',
  'notify_new_ticket' => 'Send meg et varsel når det er opprettet en supportbillett på systemet',
  'notify_new_disput' => 'Send meg et varsel når en kunde sender inn en ny tvist',
  'notify_when_dispute_appealed' => 'Send meg et varsel når en tvist er anket til gjennomgang av markedsteamet',
  'download_template' => '<a href=":url"> Last ned en prøve-CSV-mal </a> for å se et eksempel på formatet som kreves.',
  'download_category_slugs' => '<a href=":url"> Last ned kategorisnegler </a> for å få riktig kategori for produktene dine.',
  'first_row_as_header' => 'Den første raden er overskriften. <strong> Ikke endre </strong> denne raden.',
  'user_category_slug' => 'Bruk kategori <strong> slug </strong> i kategorifeltet.',
  'cover_img' => 'Dette bildet vises øverst på :page-siden',
  'cat_grp_img' => 'Dette bildet vises på bakgrunnen for nedtrekksboksen for kategorien',
  'cat_grp_desc' => 'Kunden vil ikke se dette. Men selgere vil se dette.',
  'inactive_for_back_office' => 'Hvis de er inaktive, kan kunder fortsatt besøke :page-siden. Men selgere vil ikke kunne bruke denne :page til fremtidig notering.',
  'invalid_rows_will_ignored' => 'Ugyldige rader blir <strong> ignorert </strong>.',
  'upload_rows' => 'Du kan laste opp maksimalt <strong>: rader poster </strong> per batch for bedre ytelse.',
  'name_field_required' => 'Navnefelt er påkrevd.',
  'email_field_required' => 'E-post er påkrevd.',
  'invalid_email' => 'Ugyldig epostadresse.',
  'invalid_category' => 'Ugyldig kategori.',
  'category_desc' => 'Gi en kort detalj. Kundene vil se dette.',
  'email_already_exist' => 'E-postadressen som allerede er i bruk.',
  'slug_already_exist' => 'Sluggen som allerede er i bruk.',
  'display_order' => 'Dette nummeret vil bli brukt til å ordne visningsrekkefølge. Det minste antallet vises først.',
  'banner_title' => 'Denne linjen blir uthevet på banneret. La den være tom hvis du ikke vil vise tittelen.',
  'banner_description' => '(Eksempel: 50% avslag!) La det være tomt hvis du ikke vil vise dette.',
  'banner_image' => 'Hovedbildet hva som vil vises over bakgrunnen. Bruk ofte et produktbilde.',
  'banner_background' => 'Velg en farge eller last opp et bilde som bakgrunn.',
  'banner_group' => 'Plasseringen av banneret på butikken. Banneret vises ikke hvis gruppen ikke er spesifisert.',
  'bs_columns' => 'Hvor mange kolonner vil dette banneret bruke? Systemet bruker 12 kolonners rutenettsystem for å vise bannere.',
  'banner_order' => 'Dette nummeret vil bli brukt til å ordne visningsrekkefølge i gruppen av bannere. Det minste antallet vises først.',
  'banner_link' => 'Brukere vil omdirigere til denne lenken.',
  'link_label' => 'Etiketten til lenkknappen',
  'slider_link' => 'Brukere vil omdirigere til denne lenken.',
  'slider_title' => 'Denne linjen blir uthevet over glidebryteren. La den være tom hvis du ikke vil vise tittelen.',
  'slider_sub_title' => 'Den andre linjen i tittelen. La det være tomt hvis du ikke vil vise dette.',
  'slider_description' => 'Få flere ord om glidebryteren. La den være tom hvis du ikke vil vise beskrivelsen.',
  'slider_image' => 'Hovedbildet hva som vil vises som glidebryter. Det kreves for å generere glidebryteren.',
  'slider_img_hint' => 'Skyvebildet skal være 1280x300px',
  'slider_order' => 'Glidebryteren ordnes etter denne ordren.',
  'slider_thumb_image' => 'Dette lille bildet blir brukt som miniatyrbilde. Systemet oppretter et miniatyrbilde hvis det ikke er gitt.',
  'variant_image' => 'Bildet av varianten',
  'empty_trash' => 'Tøm søpla. Alle elementene i papirkurven blir slettet permanent.',
  'hide_trial_notice_on_vendor_panel' => 'Skjul prøvevarsel på leverandørpanelet',
  'language_order' => 'Posisjonen du vil vise dette språket på språkalternativet. Det minste antallet vises først.',
  'locale_active' => 'Vil du vise dette språket på språkalternativet?',
  'locale_code' => 'Landskoden, koden må ha samme navn som språkmappen.',
  'locale_code_exmaple' => 'Eksempel for engelsk er koden <em> no </em>',
  'new_language_info' => 'Et nytt språk vil ikke påvirke systemet med mindre du virkelig gjør transaksjonen til språkkatalogen. Sjekk dokumentasjonen for detaljer.',
  'php_locale_code' => 'PHP-landskoden for systembruk som oversettelse av dato, klokkeslett osv. Vennligst finn hele listen over PHP-landskoden i dokumentasjonen.',
  'rtl' => 'Er språket høyre fra venstre (RTL)?',
  'select_all_verification_documents' => 'Velg alle dokumenter samtidig.',
  'system_default_language' => 'System standardspråk',
  'update_trial_period' => 'Oppdater prøveperioden',
  'vendor_needs_approval' => 'Hvis det er aktivert, vil hver nye leverandør kreve manuell godkjenning fra plattformadministrasjonspanelet for å bli live.',
  'verified_seller' => 'Bekreftet selger',
  'mark_address_verified' => 'Merk som adresse bekreftet',
  'mark_id_verified' => 'Merk som ID bekreftet',
  'mark_phone_verified' => 'Merk som telefonbekreftet',
  'missing_required_data' => 'Ugyldige data. Noen nødvendige data mangler.',
  'invalid_catalog_data' => 'Ugyldige katalogdata, kontroller GTIN og annen informasjon.',
  'product_have_to_be_catalog' => 'Produktet må være til stede i <strong> katalogen </strong> -systemet. ellers vil den ikke laste opp.',
  'need_to_know_product_gtin' => 'Du må kjenne til <strong> GTIN </strong> for elementene før du laster opp.',
  'multi_img_upload_instruction' => 'Du kan laste opp maksimalt :number bilder, og hver filstørrelse kan ikke overstige :size KB',
  'number_of_img_upload_required' => 'Du må velge minst <b> {n} </b> {filer} for å laste opp. Prøv på nytt!',
  'msg_invalid_file_extension' => 'Ugyldig utvidelse for filen {name}. Bare <b> {extensions} </b> filer støttes.',
  'number_of_img_upload_exceeded' => 'Du kan laste opp maksimalt <b> {m} </b> filer (<b> {n} </b> filer oppdaget).',
  'msg_invalid_file_too_learge' => 'Fil {name} (<b> {størrelse} KB </b>) overskrider maksimal tillatt opplastningsstørrelse på <b> {maxSize} KB </b>. Prøv på nytt!',
  'required_fields_csv' => 'Disse feltene er <strong> påkrevd </strong> <em>: felt </em>.',
  'seller_condition_note' => 'Skriv inn flere detaljer om varetilstanden. Dette vil hjelpe kundene til å forstå varen.',
  'active_business_zone' => 'Ditt forretningsoperasjonsområde. Leverandører vil bare kunne opprette forsendelsessoner innenfor aktive områder.',
  'config_show_seo_info_to_frontend' => 'Vis SEO-informasjon som metatittelen, metabeskrivelsen, tags til frontend.',
  'config_can_use_own_catalog_only' => 'Hvis det er aktivert, kan leverandørene bare bruke sitt eget katalogprodukt for å lage oppføringer.',
  'currency_iso_numeric' => 'ISO 4217 numerisk kode. For eksempel: USD = 840 og JPY = 392',
  'country_iso_numeric' => 'ISO 3166-1 numerisk kode. For eksempel: USA = 840 og JAPAN = 392',
  'currency_active' => 'Aktive valutaer vises på markedet.',
  'country_active' => 'Aktive valutaer vil bli inkludert i forretningsområdet.',
  'currency_symbol' => 'Valutasymbolet',
  'currency_disambiguate_symbol' => 'Eksempel: USD = US $ og BDT = BD $',
  'currency_html_entity' => 'Eksempel: JPY = ¥ og INR = $',
  'currency_smallest_denomination' => 'Den minste valutaen valuta. Standardverdien er 1',
  'currency_subunit_to_unit' => 'Antall underenheter krever en enkelt enhet. Standardverdien er 100',
  'eea' => 'Det europeiske økonomiske området',
  'support_agent' => 'Supportagenten vil få alle støttemeldingene. Hvis ikke angitt, vil selgeren få alle varsler.',
  'show_refund_policy_with_listing' => 'Vis retningslinjer for retur og refusjon på produktbeskrivelsessiden i frontend.',
  'show_shop_desc_with_listing' => 'Vis butikkbeskrivelsen på produktbeskrivelsessiden på frontend.',
  'shipping_zone_select_states' => 'Hvis du ikke ser alternativet du leter etter, er sannsynligvis ikke markedsplassen i det området. Du kan kontakte markedsadministratoren for å be om å legge til området.',
  'marketplace_business_area' => 'Forretningsområdet for markedsplassen',
  'notify_new_chat' => 'Send meg en e-postvarsling da en ny chatmelding kom',
  'not_in_business_area' => 'Dette området er ikke i markedets aktive forretningsområde. Kanskje nylig blitt fjernet av markedsadministratoren.',
  'region_iso_code' => 'Regionens ISO-kode må være riktig. Les * Forretningsområde * i dokumentasjonen for å få hjelp.',
  'subscribers_count' => 'Antall aktive abonnenter',
  'this_plan_has_active_subscribers' => 'Denne planen kan ikke slettes fordi den har aktive abonnenter.',
  'max_chat_allowed' => 'Maksimalt :size tegn.',
  'mobile_slider_image' => 'Skyvebildet for mobilapp. Systemet vil skjule denne glidebryteren på mobilen hvis den ikke leveres.',
  'config_can_cancel_order_within' => 'Kunder vil kunne kansellere bestillingen innen denne tiden etter at de har bestilt. Hold den tom for å tillate kansellering til ordreoppfyllelse. Sett 0 for å deaktivere kanselleringsalternativet. Kunder kan fortsatt be om avbestilling til leverandøren.',
  'mobile_app_slider_hits' => 'Hold forholdet 2: 1',
  'enable_live_chat_on_platform' => 'Hvis aktivert, vil leverandøren få muligheten til å slå av / på live chat på produktsiden og butikksiden.',
  'enable_live_chat_on_shop' => 'Aktiver live chat på produktsiden og butikksiden.',
  'package_dependency_not_loaded' => 'Avhengighet mislyktes! Denne pakken avhenger av :dependency-modul (er).',
  'option_dependence_module' => 'Avhengighet mislyktes! Dette alternativet avhengighet :dependency-modul',
  'config_vendor_order_cancellation_fee' => 'Avbestillingsgebyret når en leverandør avbryter en bestilling. Sett 0 uten avbestillingsgebyr, hold tom for å angi tilpasset gebyr for hver bestilling (kansellering vil kreve godkjenning av administratoren)',
  'vendor_order_cancellation_fee' => 'Avbestillingsgebyret for ordren vil bli belastet leverandøren.',
  'disabled_when_vendor_get_paid_directly' => 'Kan ikke aktiveres når leverandøren får betalt direkte!',
  'confirm_uninstall_package' => 'Alle data relatert til :package vil gå tapt for alltid! Du kan ikke tilbakestille disse dataene.',
  'verify_license_key' => 'Vi sendte lisensnøkkelen til e-posten din da du kjøpte. Hvis du ikke finner det, kan du kontakte supporten for mer informasjon.',
  'promotional_tagline' => 'Kampanjen vil bli plassert på hovednavigasjonen.',
  'best_finds_under' => 'Dette er for hjemmesiden <em> Best Finds Under </em> produktkarusellen. Systemet vil velge bestselgende varer under denne prisgrensen.',
  'featured_items' => 'Dette er for startsiden <em> Utvalgte </em> delen. Vi foreslår at du setter 5-10 gjenstander.',
  'featured_categories' => 'Dette er for hjemmesiden <em> kjente kategorier </em> seksjon. Vi foreslår å sette 10-15 kategorier.',
  'trending_now_categories' => 'Dette er for hjemmesiden <em> trending nå kategorier </em> seksjon. Vi foreslår å sette 2-4 kategorier.',
  'featured_brands' => 'Dette er for hjemmesiden <em> Utvalgte merker </em>. Vi foreslår å sette 3 merker.',
  'slider_alternative_color' => 'Fargen skal brukes til tekst i span-kodene.',
  'you_can_use_span_tag' => 'Du kan bruke <span> -merket for å markere viktige ord.',
  'trending_now_category_help' => 'For bedre visning, legg til maksimalt 5 kategorier',
  'social_auth' => 'Hvis aktiverer sosial innlogging, vises alternativet på kundens innloggings- og registerside',
  'slider_text_position' => 'Sett innholdsposisjonen på glidebryteren. standard posisjon høyre',
  'deal_of_the_day' => 'Bare ett element kan angis som en del av dagen.',
  'upload_package_zip_archive' => 'Last opp zip-arkivet som inneholder pakkene bare. Ikke last opp dokumentasjon eller andre filer.',
  'help_clear_cache' => 'Clear system cache inkludert konfigurasjoner, bilder, ruter. Denne handlingen kan kreve at du har gjort noen endringer i .NOV-filen eller noen konfigurasjonsfiler. Umiddelbart vil du legge merke til en ytelse showdown for litt, men ikke bekymre deg, det er bare for den første belastningen bare.',
  'this_will_overwrite_by_dynamic_commission' => 'Når Dynamic Commission Plugin er aktiv. Dette vil overskrive med dynamisk verdi.',
  'transaction_fee_will_charge' => 'Transaksjonsavgiften vil bli belastet selv når kommisjonen er null.',
  'icon_size' => 'Ikonet bør være et 32x32px .png bilde',
  'icon_image' => 'Dette ikonbildet viser i kategori Gruppe Dropdown som Kategori Gruppeikon.',
  'changes_can_take_time' => 'Endringene kan ta opptil :time for å påvirke resultatet.',
];
