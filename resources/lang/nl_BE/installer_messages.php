<?php 
return [
  'title' => 'Zcart Marketplace Installer',
  'next' => 'Volgende stap',
  'back' => 'Vorig',
  'finish' => 'Installeren',
  'forms' => [
    'errorTitle' => 'De volgende fouten zijn opgetreden:',
  ],
  'wait' => 'Even geduld, de installatie kan een paar minuten duren.',
  'welcome' => [
    'templateTitle' => 'Welkom',
    'title' => 'Zcart Marketplace Installer',
    'message' => 'Eenvoudige installatie- en installatiewizard.',
    'next' => 'Controleer de vereisten',
  ],
  'requirements' => [
    'templateTitle' => 'Stap 1 | Serverseisen',
    'title' => 'Serverseisen',
    'next' => 'Controleer de machtigingen',
    'required' => 'Moet alle serververeisten instellen om door te gaan',
  ],
  'permissions' => [
    'templateTitle' => 'Stap 2 | Rechten',
    'title' => 'Rechten',
    'next' => 'Omgeving configureren',
    'required' => 'Stel de machtigingen in zoals vereist om door te gaan. Lees de doc. voor hulp.',
  ],
  'environment' => [
    'menu' => [
      'templateTitle' => 'Stap 3 | Milieu-instellingen',
      'title' => 'Milieu-instellingen',
      'desc' => 'Selecteer hoe u de apps wilt configureren <Code> .NV </CODE> -bestand.',
      'wizard-button' => 'Vorm Wizard Setup',
      'classic-button' => 'Klassieke teksteditor',
    ],
    'wizard' => [
      'templateTitle' => 'Stap 3 | Milieu-instellingen | Begeleide tovenaar',
      'title' => 'Begeleide <code> .env </code> wizard',
      'tabs' => [
        'environment' => 'Omgeving',
        'database' => 'Database',
        'application' => 'Sollicitatie',
      ],
      'form' => [
        'name_required' => 'Een milieunaam is vereist.',
        'app_name_label' => 'Applicatie naam',
        'app_name_placeholder' => 'Applicatie naam',
        'app_environment_label' => 'App-omgeving',
        'app_environment_label_local' => 'Lokaal',
        'app_environment_label_developement' => 'Ontwikkeling',
        'app_environment_label_qa' => 'Qa',
        'app_environment_label_production' => 'Productie',
        'app_environment_label_other' => 'Ander',
        'app_environment_placeholder_other' => 'Voer je omgeving in ...',
        'app_debug_label' => 'App debug',
        'app_debug_label_true' => 'Waar',
        'app_debug_label_false' => 'Vals',
        'app_log_level_label' => 'App logniveau',
        'app_log_level_label_debug' => 'debug',
        'app_log_level_label_info' => 'info',
        'app_log_level_label_notice' => 'kennisgeving',
        'app_log_level_label_warning' => 'waarschuwing',
        'app_log_level_label_error' => 'fout',
        'app_log_level_label_critical' => 'kritiek',
        'app_log_level_label_alert' => 'alert',
        'app_log_level_label_emergency' => 'noodgeval',
        'app_url_label' => 'App-url',
        'app_url_placeholder' => 'App-url',
        'db_connection_failed' => 'Kon niet verbinden met de database. Controleer de configuraties.',
        'db_connection_label' => 'Database-aansluiting',
        'db_connection_label_mysql' => 'MySQL',
        'db_connection_label_sqlite' => 'sqlite',
        'db_connection_label_pgsql' => 'PGSQL',
        'db_connection_label_sqlsrv' => 'sqlsrv',
        'db_host_label' => 'Database-host',
        'db_host_placeholder' => 'Database-host',
        'db_port_label' => 'Databasepoort',
        'db_port_placeholder' => 'Databasepoort',
        'db_name_label' => 'Database naam',
        'db_name_placeholder' => 'Database naam',
        'db_username_label' => 'Database-gebruikersnaam',
        'db_username_placeholder' => 'Database-gebruikersnaam',
        'db_password_label' => 'Database-wachtwoord',
        'db_password_placeholder' => 'Database-wachtwoord',
        'app_tabs' => [
          'more_info' => 'Meer informatie',
          'broadcasting_title' => 'Uitzending, caching, sessie en wachtrij',
          'broadcasting_label' => 'Uitzendbestuurder',
          'broadcasting_placeholder' => 'Uitzendbestuurder',
          'cache_label' => 'Cache',
          'cache_placeholder' => 'Cache',
          'session_label' => 'Sessiedrijver',
          'session_placeholder' => 'Sessiedrijver',
          'queue_label' => 'Wachtrijchauffeur',
          'queue_placeholder' => 'Wachtrijchauffeur',
          'redis_label' => 'Redis-bestuurder',
          'redis_host' => 'Redis-host',
          'redis_password' => 'Redis wachtwoord',
          'redis_port' => 'REDIS-poort',
          'mail_label' => 'Mail',
          'mail_driver_label' => 'Postbestuurder',
          'mail_driver_placeholder' => 'Postbestuurder',
          'mail_host_label' => 'Posthost',
          'mail_host_placeholder' => 'Posthost',
          'mail_port_label' => 'Posthaven',
          'mail_port_placeholder' => 'Posthaven',
          'mail_username_label' => 'Mail-gebruikersnaam',
          'mail_username_placeholder' => 'Mail-gebruikersnaam',
          'mail_password_label' => 'Mail-wachtwoord',
          'mail_password_placeholder' => 'Mail-wachtwoord',
          'mail_encryption_label' => 'Mail-codering',
          'mail_encryption_placeholder' => 'Mail-codering',
          'pusher_label' => 'Pusher',
          'pusher_app_id_label' => 'PUSER APP ID',
          'pusher_app_id_palceholder' => 'PUSER APP ID',
          'pusher_app_key_label' => 'Pusher-app-sleutel',
          'pusher_app_key_palceholder' => 'Pusher-app-sleutel',
          'pusher_app_secret_label' => 'Pusher app geheim',
          'pusher_app_secret_palceholder' => 'Pusher app geheim',
        ],
        'buttons' => [
          'setup_database' => 'Setup-database',
          'setup_application' => 'Setup-applicatie',
          'install' => 'Installeren',
        ],
      ],
    ],
    'classic' => [
      'backup' => 'Om elke puinhoop te voorkomen, kopieer en sla de standaardconfiguraties ergens anders op voordat u wijzigingen aanbrengt.',
      'templateTitle' => 'Stap 3 | Milieu-instellingen | Klassieke editor',
      'title' => 'Milieubestand-editor',
      'save' => 'Sla de configuraties op',
      'back' => 'Gebruik formulierwizard',
      'install' => 'Installeren',
      'required' => 'Repareer het probleem om door te gaan.',
    ],
    'success' => 'Uw .NV-bestandsinstellingen zijn opgeslagen.',
    'errors' => 'Kan het .env-bestand niet opslaan, maak deze handmatig aan.',
  ],
  'verify' => [
    'verify_purchase' => 'Controleer de aankoop',
    'submit' => 'Indienen',
    'form' => [
      'email_address_label' => 'E-mailadres',
      'email_address_placeholder' => 'E-mailadres',
      'purchase_code_label' => 'Koopcode',
      'purchase_code_placeholder' => 'Koopcode of Licentiesleutel',
      'root_url_label' => 'Root-URL',
      'root_url_placeholder' => 'Root-URL (zonder / aan het einde)',
    ],
  ],
  'install' => 'Installeren',
  'verified' => 'Licentie is met succes geverifieerd.',
  'verification_failed' => 'Licentieverificatie mislukt!',
  'installed' => [
    'success_log_message' => 'Zcart Marketplace Installer met succes geïnstalleerd',
  ],
  'final' => [
    'title' => 'Laatste stap',
    'templateTitle' => 'Laatste stap',
    'finished' => 'Toepassing is succesvol geïnstalleerd.',
    'migration' => 'Migratie- en zaadconsole-uitgang:',
    'console' => 'Toepassingsconsole-uitgang:',
    'log' => 'Installatie logboekinvoer:',
    'env' => 'Final .NV-bestand:',
    'exit' => 'Klik hier om in te loggen',
    'import_demo_data' => 'Demo-gegevens importeren',
  ],
  'updater' => [
    'title' => 'Zcart Marketplace Updater',
    'welcome' => [
      'title' => 'Welkom bij de update',
      'message' => 'Welkom bij de Wizard Update.',
    ],
    'overview' => [
      'title' => 'Overzicht',
      'message' => 'Er is 1 update. | Er zijn :number-updates.',
      'install_updates' => 'Installeer updates',
    ],
    'final' => [
      'title' => 'Afgewerkt',
      'finished' => 'De database van toepassing is succesvol bijgewerkt.',
      'exit' => 'Klik hier om af te sluiten',
    ],
    'log' => [
      'success_message' => 'Zcart Marketplace Installer met succes bijgewerkt op',
    ],
  ],
];