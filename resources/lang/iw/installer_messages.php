<?php 
return [
  'title' => 'מתקין zCart',
  'next' => 'השלב הבא',
  'back' => 'קודם',
  'finish' => 'להתקין',
  'forms' => [
    'errorTitle' => 'השגיאות הבאות התרחשו:',
  ],
  'wait' => 'אנא המתן, ההתקנה עשויה לארוך מספר דקות.',
  'welcome' => [
    'templateTitle' => 'ברוך הבא',
    'title' => 'מתקין zCart',
    'message' => 'אשף התקנה והתקנה קלים.',
    'next' => 'בדוק דרישות',
  ],
  'requirements' => [
    'templateTitle' => 'שלב 1 | דרישות שרת',
    'title' => 'דרישות שרת',
    'next' => 'בדוק הרשאות',
    'required' => 'צריך להגדיר את כל דרישות השרת כדי להמשיך',
  ],
  'permissions' => [
    'templateTitle' => 'שלב 2 | אישורים',
    'title' => 'אישורים',
    'next' => 'הגדר את הסביבה',
    'required' => 'הגדר את ההרשאות כנדרש להמשך. קרא את המסמך. לעזרה.',
  ],
  'environment' => [
    'menu' => [
      'templateTitle' => 'שלב 3 | הגדרות סביבה',
      'title' => 'הגדרות סביבה',
      'desc' => 'אנא בחר כיצד ברצונך להגדיר את קובץ היישום <code> .env </code>.',
      'wizard-button' => 'הגדרת אשף הטפסים',
      'classic-button' => 'עורך טקסט קלאסי',
    ],
    'wizard' => [
      'templateTitle' => 'שלב 3 | הגדרות סביבה | אשף מודרך',
      'title' => 'מדריך <code> .env </code> מודרך',
      'tabs' => [
        'environment' => 'סביבה',
        'database' => 'מאגר מידע',
        'application' => 'יישום',
      ],
      'form' => [
        'name_required' => 'יש צורך בשם סביבה.',
        'app_name_label' => 'שם האפליקציה',
        'app_name_placeholder' => 'שם האפליקציה',
        'app_environment_label' => 'סביבת אפליקציות',
        'app_environment_label_local' => 'מְקוֹמִי',
        'app_environment_label_developement' => 'התפתחות',
        'app_environment_label_qa' => 'Qa',
        'app_environment_label_production' => 'הפקה',
        'app_environment_label_other' => 'אַחֵר',
        'app_environment_placeholder_other' => 'היכנסו לסביבה שלכם ...',
        'app_debug_label' => 'ניפוי באגים באפליקציות',
        'app_debug_label_true' => 'נָכוֹן',
        'app_debug_label_false' => 'שֶׁקֶר',
        'app_log_level_label' => 'רמת יומן האפליקציות',
        'app_log_level_label_debug' => 'לנפות',
        'app_log_level_label_info' => 'מידע',
        'app_log_level_label_notice' => 'הודעה',
        'app_log_level_label_warning' => 'אַזהָרָה',
        'app_log_level_label_error' => 'שְׁגִיאָה',
        'app_log_level_label_critical' => 'קריטי',
        'app_log_level_label_alert' => 'עֵרָנִי',
        'app_log_level_label_emergency' => 'חרום',
        'app_url_label' => 'כתובת אתר של אפליקציה',
        'app_url_placeholder' => 'כתובת אתר של אפליקציה',
        'db_connection_failed' => 'לא מצליח להתחבר למסד נתונים. בדוק את התצורות.',
        'db_connection_label' => 'חיבור מסד נתונים',
        'db_connection_label_mysql' => 'mysql',
        'db_connection_label_sqlite' => 'סקליט',
        'db_connection_label_pgsql' => 'pgsql',
        'db_connection_label_sqlsrv' => 'sqlsrv',
        'db_host_label' => 'מארח מסד נתונים',
        'db_host_placeholder' => 'מארח מסד נתונים',
        'db_port_label' => 'יציאת מסד נתונים',
        'db_port_placeholder' => 'יציאת מסד נתונים',
        'db_name_label' => 'שם בסיס הנתונים',
        'db_name_placeholder' => 'שם בסיס הנתונים',
        'db_username_label' => 'שם משתמש של מסד נתונים',
        'db_username_placeholder' => 'שם משתמש של מסד נתונים',
        'db_password_label' => 'סיסמת מסד נתונים',
        'db_password_placeholder' => 'סיסמת מסד נתונים',
        'app_tabs' => [
          'more_info' => 'עוד מידע',
          'broadcasting_title' => 'שידור, אחסון במטמון, הפעלה ותור',
          'broadcasting_label' => 'נהג שידור',
          'broadcasting_placeholder' => 'נהג שידור',
          'cache_label' => 'מנהל מטמון',
          'cache_placeholder' => 'מנהל מטמון',
          'session_label' => 'נהג מושב',
          'session_placeholder' => 'נהג מושב',
          'queue_label' => 'נהג תור',
          'queue_placeholder' => 'נהג תור',
          'redis_label' => 'נהג רדיס',
          'redis_host' => 'מארח רדיס',
          'redis_password' => 'סיסמת Redis',
          'redis_port' => 'נמל רדיס',
          'mail_label' => 'דוֹאַר',
          'mail_driver_label' => 'נהג דואר',
          'mail_driver_placeholder' => 'נהג דואר',
          'mail_host_label' => 'מארח דואר',
          'mail_host_placeholder' => 'מארח דואר',
          'mail_port_label' => 'יציאת דואר',
          'mail_port_placeholder' => 'יציאת דואר',
          'mail_username_label' => 'שם משתמש בדואר',
          'mail_username_placeholder' => 'שם משתמש בדואר',
          'mail_password_label' => 'סיסמת דואר',
          'mail_password_placeholder' => 'סיסמת דואר',
          'mail_encryption_label' => 'הצפנת דואר',
          'mail_encryption_placeholder' => 'הצפנת דואר',
          'pusher_label' => 'דוֹחֵף',
          'pusher_app_id_label' => 'מזהה אפליקציית Pusher',
          'pusher_app_id_palceholder' => 'מזהה אפליקציית Pusher',
          'pusher_app_key_label' => 'מפתח אפליקציית Pusher',
          'pusher_app_key_palceholder' => 'מפתח אפליקציית Pusher',
          'pusher_app_secret_label' => 'סוד האפליקציה Pusher',
          'pusher_app_secret_palceholder' => 'סוד האפליקציה Pusher',
        ],
        'buttons' => [
          'setup_database' => 'מסד הגדרות',
          'setup_application' => 'הגדרת יישום',
          'install' => 'להתקין',
        ],
      ],
    ],
    'classic' => [
      'backup' => 'כדי למנוע בלגן אנא העתק ושמור את תצורות ברירת המחדל במקום אחר לפני שתבצע שינויים כלשהם.',
      'templateTitle' => 'שלב 3 | הגדרות סביבה | עורך קלאסי',
      'title' => 'עורך קבצי סביבה',
      'save' => 'שמור את התצורות',
      'back' => 'השתמש באשף הטפסים',
      'install' => 'להתקין',
      'required' => 'תקן את הבעיה כדי להמשיך.',
    ],
    'success' => 'הגדרות קובץ ה- env ​​שלך נשמרו.',
    'errors' => 'לא ניתן לשמור את קובץ ה- env, אנא צור אותו באופן ידני.',
  ],
  'verify' => [
    'verify_purchase' => 'אמת את הרכישה',
    'submit' => 'שלח',
    'form' => [
      'email_address_label' => 'כתובת דוא"ל',
      'email_address_placeholder' => 'כתובת דוא"ל',
      'purchase_code_label' => 'קוד רכישה',
      'purchase_code_placeholder' => 'קוד רכישה או מפתח רישיון',
      'root_url_label' => 'כתובת שורש',
      'root_url_placeholder' => 'כתובת שורש (ללא / בסוף)',
    ],
  ],
  'install' => 'להתקין',
  'verified' => 'הרישיון אומת בהצלחה.',
  'verification_failed' => 'אימות הרישיון נכשל!',
  'installed' => [
    'success_log_message' => 'מתקין zCart הותקן בהצלחה',
  ],
  'final' => [
    'title' => 'צעד אחרון',
    'templateTitle' => 'צעד אחרון',
    'finished' => 'היישום הותקן בהצלחה.',
    'migration' => 'תפוקת הגירה ומסע זרעים:',
    'console' => 'פלט קונסולת היישומים:',
    'log' => 'ערך יומן ההתקנה:',
    'env' => 'קובץ env סופי:',
    'exit' => 'לחץ כאן בכניסה',
    'import_demo_data' => 'ייבא נתוני הדגמה',
  ],
  'updater' => [
    'title' => 'zCart Updater',
    'welcome' => [
      'title' => 'ברוך הבא למעדכן',
      'message' => 'ברוך הבא לאשף העדכון.',
    ],
    'overview' => [
      'title' => 'סקירה כללית',
      'message' => 'יש עדכון אחד. | יש עדכונים :number.',
      'install_updates' => 'התקן עדכונים',
    ],
    'final' => [
      'title' => 'גָמוּר',
      'finished' => 'מסד הנתונים של היישום עודכן בהצלחה.',
      'exit' => 'לחץ כאן ליציאה',
    ],
    'log' => [
      'success_message' => 'מתקין zCart עודכן בהצלחה',
    ],
  ],
];