<?php 
return [
  'accepted' => ' :attribute må aksepteres.',
  'active_url' => ' :attribute er ikke en gyldig URL.',
  'after' => ' :attribute må være en dato etter :date.',
  'after_or_equal' => ' :attribute må være en dato etter eller lik :date.',
  'alpha' => ' :attribute kan bare inneholde bokstaver.',
  'alpha_dash' => ' :attribute kan bare inneholde bokstaver, tall og bindestreker.',
  'alpha_num' => ' :attribute kan bare inneholde bokstaver og tall.',
  'array' => ' :attribute må være en matrise.',
  'before' => ' :attribute må være en dato før :date.',
  'before_or_equal' => ' :attribute må være en dato før eller lik :date.',
  'between' => [
    'numeric' => ' :attribute må være mellom :min og :max.',
    'file' => ' :attribute må være mellom :min og :max kilobyte.',
    'string' => ' :attribute må være mellom :min og :max tegn.',
    'array' => ' :attribute må ha mellom :min og :max elementer.',
  ],
  'boolean' => ' :attribute-feltet må være sant eller usant.',
  'confirmed' => 'Bekreftelsen :attribute stemmer ikke.',
  'date' => ' :attribute er ikke en gyldig dato.',
  'date_format' => ' :attribute stemmer ikke overens med formatet :format.',
  'different' => ' :attribute og :other må være forskjellige.',
  'digits' => ' :attribute må være :digits sifre.',
  'digits_between' => ' :attribute må være mellom :min og :max sifre.',
  'dimensions' => ' :attribute har ugyldige bildedimensjoner.',
  'distinct' => ' :attribute-feltet har en duplikatverdi.',
  'email' => ' :attribute må være en gyldig e-postadresse.',
  'exists' => 'Den valgte :attribute er ugyldig.',
  'file' => ' :attribute må være en fil.',
  'filled' => ' :attribute-feltet må ha en verdi.',
  'gt' => [
  ],
  'gte' => [
  ],
  'image' => ' :attribute må være et bilde.',
  'in' => 'Den valgte :attribute er ugyldig.',
  'in_array' => 'Feltet :attribute eksisterer ikke i :other.',
  'integer' => ' :attribute må være et helt tall.',
  'ip' => ' :attribute må være en gyldig IP-adresse.',
  'ipv4' => ' :attribute må være en gyldig IPv4-adresse.',
  'ipv6' => ' :attribute må være en gyldig IPv6-adresse.',
  'json' => ' :attribute må være en gyldig JSON-streng.',
  'lt' => [
  ],
  'lte' => [
  ],
  'max' => [
    'numeric' => ' :attribute er kanskje ikke større enn :max.',
    'file' => ' :attribute er kanskje ikke større enn :max kilobyte.',
    'string' => 'Det kan hende at :attribute ikke er større enn :max tegn.',
    'array' => 'Det kan hende at :attribute ikke har mer enn :max elementer.',
  ],
  'mimes' => ' :attribute må være en fil av typen: :values.',
  'mimetypes' => ' :attribute må være en fil av typen: :values.',
  'min' => [
    'numeric' => ' :attribute må være minst :min.',
    'file' => ' :attribute må være minst :min kilobyte.',
    'string' => ' :attribute må være minst :min tegn.',
    'array' => ' :attribute må ha minst :min elementer.',
  ],
  'not_in' => 'Den valgte :attribute er ugyldig.',
  'numeric' => ' :attribute må være et tall.',
  'present' => ' :attribute-feltet må være til stede.',
  'regex' => ' :attribute-formatet er ugyldig.',
  'required' => ' :attribute-feltet er påkrevd.',
  'required_if' => ' :attribute-feltet kreves når :other er :value.',
  'required_unless' => ' :attribute-feltet er påkrevd med mindre :other er i :values.',
  'required_with' => ' :attribute-feltet kreves når :values er til stede.',
  'required_with_all' => ' :attribute-feltet kreves når :values er til stede.',
  'required_without' => ' :attribute-feltet er påkrevd når :values ikke er til stede.',
  'required_without_all' => ' :attribute-feltet er påkrevd når ingen av :values er til stede.',
  'same' => ' :attribute og :other må stemme overens.',
  'size' => [
    'numeric' => ' :attribute må være :size.',
    'file' => ' :attribute må være :size kilobyte.',
    'string' => ' :attribute må være :size tegn.',
    'array' => ' :attribute må inneholde :size elementer.',
  ],
  'string' => ' :attribute må være en streng.',
  'timezone' => ' :attribute må være en gyldig sone.',
  'unique' => ' :attribute er allerede tatt.',
  'uploaded' => 'Filstørrelsen overskredet maksimumgrensen for opplasting på serveren din. Vennligst sjekk php.ini-filen.',
  'url' => ' :attribute-formatet er ugyldig.',
  'composite_unique' => ' :attribute :value finnes allerede.',
  'register_email_unique' => 'Denne e-postadressen har allerede en konto. Prøv noe annet.',
  'role_type_required' => 'Velg rolletype.',
  'attribute_id_required' => 'Velg attributt.',
  'attribute_type_id_required' => 'Velg attributtype.',
  'attribute_code_required' => 'Feltet attributtkode er påkrevd.',
  'attribute_value_required' => 'Feltet attributtverdi er påkrevd.',
  'category_list_required' => 'Velg minst en kategori.',
  'manufacturer_required' => 'Produsentfeltet er påkrevd.',
  'origin_required' => 'Opprinnelsesfeltet er påkrevd.',
  'offer_start_required' => 'Når du har en tilbudspris, kreves tilbudsdato.',
  'offer_start_after' => 'Starttid for kampanjen kan ikke være en tidligere tid.',
  'offer_end_required' => 'Når du har en tilbudspris, kreves sluttdatoen for tilbudet.',
  'offer_end_after' => 'Sluttid for tilbudet må være et tidspunkt etter starttidspunktet for tilbudet.',
  'variants_required' => 'Varianter påkrevd',
  'sku-unique' => 'Sku :value er allerede tatt. Prøv en ny.',
  'sku-distinct' => 'Variant :attribute har en duplisert skuverdi.',
  'offer_price-numeric' => 'er ikke en gyldig prisverdi. Tilbudsprisen må være et tall.',
  'email_template_id_required' => 'E-postmal er påkrevd.',
  'brand_logo_max' => 'Merkelogoen kan ikke være større enn :max kilobyte.',
  'brand_logo_mimes' => 'Merkelogoen må være en fil av typen: :values.',
  'avatar_required' => 'Velg en avatar.',
  'subject_required_without' => 'Emnet kreves hvis du ikke bruker en mal.',
  'message_required_without' => 'Meldingen er påkrevd hvis du ikke bruker en mal.',
  'template_id_required_without_all' => 'Velg en mal eller komponist en ny melding.',
  'customer_required' => 'Velg en kunde.',
  'reply_required_without' => 'Det innleverte svaret er påkrevd.',
  'template_id_required_without' => 'Velg en mal som kreves når du svarer med mal.',
  'shipping_zone_tax_id_required' => 'Velg avgiftsprofil for sonen',
  'shipping_zone_country_ids_required' => 'Velg minst ett land',
  'rest_of_the_world_composite_unique' => 'Resten av verdens skipsfartssone eksisterer allerede.',
  'something_went_wrong' => 'Noe stemmer ikke. Kontroller og prøv igjen.',
  'shipping_rate_required_unless' => 'Gi en forsendelsesgrad eller velg alternativet "Gratis frakt"',
  'shipping_range_minimum_min' => 'Minimumsområde kan ikke være negativ verdi',
  'shipping_range_maximum_min' => 'Maksimal rekkevidde kan ikke være mindre enn minimumsverdien',
  'csv_mimes' => ' :attribute må være en fil av typen csv.',
  'import_data_required' => 'Datasettet er ikke gyldig for import. Kontroller dataene dine og prøv igjen.',
  'do_action_required' => 'Du ga ikke innspillene.',
  'do_action_invalid' => 'Det gitte nøkkelordet / inndata er ikke gyldig.',
  'recaptcha' => 'Forsikre deg om at du er et menneske!',
  'custom' => [
    'attribute-name' => [
      'rule-name' => 'custom-melding',
    ],
  ],
  'attributes' => [
  ],
  'upload_rows' => 'Du kan laste opp maksimalt :rows poster per batch.',
  'csv_upload_invalid_data' => 'Noen rader inneholder ugyldige data som ikke kan behandles. Kontroller dataene dine og prøv igjen.',
  'slider_image_required' => 'Skyvebildet kreves',
  'banner_image_required' => 'Bannerbildet er nødvendig',
  'select_the_item' => 'Velg varen',
  'banner_group_id_required' => 'Vennligst velg Banner Group',
];