<?php 
return [
  'title' => 'zCart-installatieprogramma',
  'next' => 'Volgende stap',
  'back' => 'Vorige',
  'finish' => 'Installeren',
  'forms' => [
    'errorTitle' => 'De volgende fouten zijn opgetreden:',
  ],
  'wait' => 'Even geduld, de installatie kan enkele minuten duren.',
  'welcome' => [
    'templateTitle' => 'Welkom',
    'title' => 'zCart-installatieprogramma',
    'message' => 'Eenvoudige installatie- en configuratiewizard.',
    'next' => 'Controleer de vereisten',
  ],
  'requirements' => [
    'templateTitle' => 'Stap 1 | Serververeisten',
    'title' => 'Serververeisten',
    'next' => 'Controleer machtigingen',
    'required' => 'U moet alle serververeisten instellen om door te gaan',
  ],
  'permissions' => [
    'templateTitle' => 'Stap 2 | Rechten',
    'title' => 'Rechten',
    'next' => 'Configureer omgeving',
    'required' => 'Stel de benodigde machtigingen in om door te gaan. Lees het document. voor hulp.',
  ],
  'environment' => [
    'menu' => [
      'templateTitle' => 'Stap 3 | Omgevingsinstellingen',
      'title' => 'Omgevingsinstellingen',
      'desc' => 'Selecteer hoe u het apps <code> .env </code> -bestand wilt configureren.',
      'wizard-button' => 'Formulier Wizard instellen',
      'classic-button' => 'Klassieke teksteditor',
    ],
    'wizard' => [
      'templateTitle' => 'Stap 3 | Omgevingsinstellingen | Begeleide wizard',
      'title' => 'Begeleide <code> .env </code> Wizard',
      'tabs' => [
        'environment' => 'Milieu',
        'database' => 'Database',
        'application' => 'Toepassing',
      ],
      'form' => [
        'name_required' => 'Een omgevingsnaam is vereist.',
        'app_name_label' => 'Applicatie naam',
        'app_name_placeholder' => 'Applicatie naam',
        'app_environment_label' => 'App-omgeving',
        'app_environment_label_local' => 'Lokaal',
        'app_environment_label_developement' => 'Ontwikkeling',
        'app_environment_label_qa' => 'Qa',
        'app_environment_label_production' => 'Productie',
        'app_environment_label_other' => 'Andere',
        'app_environment_placeholder_other' => 'Voer uw omgeving in ...',
        'app_debug_label' => 'App-foutopsporing',
        'app_debug_label_true' => 'Klopt',
        'app_debug_label_false' => 'Vals',
        'app_log_level_label' => 'App-logboekniveau',
        'app_log_level_label_debug' => 'debuggen',
        'app_log_level_label_info' => 'info',
        'app_log_level_label_notice' => 'merk op',
        'app_log_level_label_warning' => 'waarschuwing',
        'app_log_level_label_error' => 'fout',
        'app_log_level_label_critical' => 'kritiek',
        'app_log_level_label_alert' => 'alert',
        'app_log_level_label_emergency' => 'noodgeval',
        'app_url_label' => 'App-URL',
        'app_url_placeholder' => 'App-URL',
        'db_connection_failed' => 'Kon niet verbinden met de database. Controleer de configuraties.',
        'db_connection_label' => 'Database verbinding',
        'db_connection_label_mysql' => 'mysql',
        'db_connection_label_sqlite' => 'sqlite',
        'db_connection_label_pgsql' => 'pgsql',
        'db_connection_label_sqlsrv' => 'sqlsrv',
        'db_host_label' => 'Databasehost',
        'db_host_placeholder' => 'Databasehost',
        'db_port_label' => 'Databasepoort',
        'db_port_placeholder' => 'Databasepoort',
        'db_name_label' => 'Database naam',
        'db_name_placeholder' => 'Database naam',
        'db_username_label' => 'Database gebruikersnaam',
        'db_username_placeholder' => 'Database gebruikersnaam',
        'db_password_label' => 'Database wachtwoord',
        'db_password_placeholder' => 'Database wachtwoord',
        'app_tabs' => [
          'more_info' => 'Meer informatie',
          'broadcasting_title' => 'Uitzenden, caching, sessie en wachtrij',
          'broadcasting_label' => 'Broadcast-stuurprogramma',
          'broadcasting_placeholder' => 'Broadcast-stuurprogramma',
          'cache_label' => 'Cachestuurprogramma',
          'cache_placeholder' => 'Cachestuurprogramma',
          'session_label' => 'Sessie-stuurprogramma',
          'session_placeholder' => 'Sessie-stuurprogramma',
          'queue_label' => 'Wachtrijstuurprogramma',
          'queue_placeholder' => 'Wachtrijstuurprogramma',
          'redis_label' => 'Redis-stuurprogramma',
          'redis_host' => 'Redis-host',
          'redis_password' => 'Redis-wachtwoord',
          'redis_port' => 'Redis-poort',
          'mail_label' => 'Mail',
          'mail_driver_label' => 'Mail-stuurprogramma',
          'mail_driver_placeholder' => 'Mail-stuurprogramma',
          'mail_host_label' => 'E-mailhost',
          'mail_host_placeholder' => 'E-mailhost',
          'mail_port_label' => 'E-mailpoort',
          'mail_port_placeholder' => 'E-mailpoort',
          'mail_username_label' => 'E-mail gebruikersnaam',
          'mail_username_placeholder' => 'E-mail gebruikersnaam',
          'mail_password_label' => 'E-mail wachtwoord',
          'mail_password_placeholder' => 'E-mail wachtwoord',
          'mail_encryption_label' => 'E-mailversleuteling',
          'mail_encryption_placeholder' => 'E-mailversleuteling',
          'pusher_label' => 'Opdringer',
          'pusher_app_id_label' => 'Id van Pusher-app',
          'pusher_app_id_palceholder' => 'Id van Pusher-app',
          'pusher_app_key_label' => 'Pusher App-toets',
          'pusher_app_key_palceholder' => 'Pusher App-toets',
          'pusher_app_secret_label' => 'Pusher App-geheim',
          'pusher_app_secret_palceholder' => 'Pusher App-geheim',
        ],
        'buttons' => [
          'setup_database' => 'Database instellen',
          'setup_application' => 'Installatie-applicatie',
          'install' => 'Installeren',
        ],
      ],
    ],
    'classic' => [
      'backup' => 'Om rommel te voorkomen, dient u de standaardconfiguraties ergens anders te kopiëren en op te slaan voordat u wijzigingen aanbrengt.',
      'templateTitle' => 'Stap 3 | Omgevingsinstellingen | Klassieke editor',
      'title' => 'Environment File Editor',
      'save' => 'Sla de configuraties op',
      'back' => 'Gebruik de Formulierwizard',
      'install' => 'Installeren',
      'required' => 'Los het probleem op om door te gaan.',
    ],
    'success' => 'Uw .env-bestandsinstellingen zijn opgeslagen.',
    'errors' => 'Kan het .env-bestand niet opslaan. Maak het handmatig aan.',
  ],
  'verify' => [
    'verify_purchase' => 'Controleer de aankoop',
    'submit' => 'Verzenden',
    'form' => [
      'email_address_label' => 'E-mailadres',
      'email_address_placeholder' => 'E-mailadres',
      'purchase_code_label' => 'Aankoopcode',
      'purchase_code_placeholder' => 'Aankoopcode of licentiecode',
      'root_url_label' => 'Root-URL',
      'root_url_placeholder' => 'ROOT URL (zonder / aan het einde)',
    ],
  ],
  'install' => 'Installeren',
  'verified' => 'Licentie is succesvol geverifieerd.',
  'verification_failed' => 'Licentieverificatie mislukt!',
  'installed' => [
    'success_log_message' => 'zCart Installer is succesvol GEÏNSTALLEERD op',
  ],
  'final' => [
    'title' => 'Laatste stap',
    'templateTitle' => 'Laatste stap',
    'finished' => 'De applicatie is succesvol geïnstalleerd.',
    'migration' => 'Migratie en uitgangsconsole:',
    'console' => 'Applicatieconsole-uitvoer:',
    'log' => 'Installatie logboekinvoer:',
    'env' => 'Laatste .env-bestand:',
    'exit' => 'Klik hier om in te loggen',
    'import_demo_data' => 'Demo-gegevens importeren',
  ],
  'updater' => [
    'title' => 'zCart Updater',
    'welcome' => [
      'title' => 'Welkom bij de Updater',
      'message' => 'Welkom bij de update-wizard.',
    ],
    'overview' => [
      'title' => 'Overzicht',
      'message' => 'Er is 1 update. | Er zijn :number updates.',
      'install_updates' => 'Installeer updates',
    ],
    'final' => [
      'title' => 'Afgewerkt',
      'finished' => 'De database van de applicatie is bijgewerkt.',
      'exit' => 'Klik hier om af te sluiten',
    ],
    'log' => [
      'success_message' => 'zCart Installer is succesvol bijgewerkt op',
    ],
  ],
];