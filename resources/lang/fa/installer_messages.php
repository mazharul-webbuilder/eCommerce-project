<?php 
return [
  'title' => 'نصب zCart',
  'next' => 'گام بعدی',
  'back' => 'قبلی',
  'finish' => 'نصب',
  'forms' => [
    'errorTitle' => 'خطاهای زیر رخ داده است:',
  ],
  'wait' => 'لطفا صبر کنید ، نصب ممکن است چند دقیقه طول بکشد.',
  'welcome' => [
    'templateTitle' => 'خوش آمدی',
    'title' => 'نصب zCart',
    'message' => 'جادوگر نصب و نصب آسان.',
    'next' => 'الزامات را بررسی کنید',
  ],
  'requirements' => [
    'templateTitle' => 'مرحله 1 | نیازمندی های سرور',
    'title' => 'نیازمندی های سرور',
    'next' => 'مجوزها را بررسی کنید',
    'required' => 'برای ادامه باید تمام نیازهای سرور را تنظیم کنید',
  ],
  'permissions' => [
    'templateTitle' => 'مرحله 2 | مجوزها',
    'title' => 'مجوزها',
    'next' => 'محیط را پیکربندی کنید',
    'required' => 'مجوزها را برای ادامه تنظیم کنید. سند را بخوانید. برای کمک.',
  ],
  'environment' => [
    'menu' => [
      'templateTitle' => 'مرحله 3 | تنظیمات محیط',
      'title' => 'تنظیمات محیط',
      'desc' => 'لطفاً نحوه پیکربندی فایل <code> .env </code> برنامه ها را انتخاب کنید.',
      'wizard-button' => 'فرم Wizard Setup را تنظیم کنید',
      'classic-button' => 'ویرایشگر متن کلاسیک',
    ],
    'wizard' => [
      'templateTitle' => 'مرحله 3 | تنظیمات محیطی | جادوگر راهنما',
      'title' => 'جادوگر <code> .env </code> راهنما',
      'tabs' => [
        'environment' => 'محیط',
        'database' => 'پایگاه داده',
        'application' => 'کاربرد',
      ],
      'form' => [
        'name_required' => 'نام محیط لازم است.',
        'app_name_label' => 'نام برنامه',
        'app_name_placeholder' => 'نام برنامه',
        'app_environment_label' => 'محیط برنامه',
        'app_environment_label_local' => 'محلی',
        'app_environment_label_developement' => 'توسعه',
        'app_environment_label_qa' => 'قا',
        'app_environment_label_production' => 'تولید',
        'app_environment_label_other' => 'دیگر',
        'app_environment_placeholder_other' => 'وارد محیط خود شوید ...',
        'app_debug_label' => 'اشکال زدایی برنامه',
        'app_debug_label_true' => 'درست است، واقعی',
        'app_debug_label_false' => 'نادرست',
        'app_log_level_label' => 'سطح ورود به سیستم برنامه',
        'app_log_level_label_debug' => 'اشکال زدایی',
        'app_log_level_label_info' => 'اطلاعات',
        'app_log_level_label_notice' => 'اطلاع',
        'app_log_level_label_warning' => 'هشدار',
        'app_log_level_label_error' => 'خطا',
        'app_log_level_label_critical' => 'بحرانی',
        'app_log_level_label_alert' => 'هشدار',
        'app_log_level_label_emergency' => 'اضطراری',
        'app_url_label' => 'آدرس اینترنتی برنامه',
        'app_url_placeholder' => 'آدرس اینترنتی برنامه',
        'db_connection_failed' => 'اتصال به پایگاه داده امکان پذیر نیست. تنظیمات را بررسی کنید.',
        'db_connection_label' => 'اتصال پایگاه داده',
        'db_connection_label_mysql' => 'mysql',
        'db_connection_label_sqlite' => 'sqlite',
        'db_connection_label_pgsql' => 'pgsql',
        'db_connection_label_sqlsrv' => 'sqlsrv',
        'db_host_label' => 'میزبان پایگاه داده',
        'db_host_placeholder' => 'میزبان پایگاه داده',
        'db_port_label' => 'بندر پایگاه داده',
        'db_port_placeholder' => 'بندر پایگاه داده',
        'db_name_label' => 'نام پایگاه داده',
        'db_name_placeholder' => 'نام پایگاه داده',
        'db_username_label' => 'نام کاربری پایگاه داده',
        'db_username_placeholder' => 'نام کاربری پایگاه داده',
        'db_password_label' => 'گذرواژه پایگاه داده',
        'db_password_placeholder' => 'گذرواژه پایگاه داده',
        'app_tabs' => [
          'more_info' => 'اطلاعات بیشتر',
          'broadcasting_title' => 'پخش ، پنهان سازی ، جلسه و صف',
          'broadcasting_label' => 'درایور پخش',
          'broadcasting_placeholder' => 'درایور پخش',
          'cache_label' => 'درایور حافظه پنهان',
          'cache_placeholder' => 'درایور حافظه پنهان',
          'session_label' => 'راننده جلسه',
          'session_placeholder' => 'راننده جلسه',
          'queue_label' => 'راننده صف',
          'queue_placeholder' => 'راننده صف',
          'redis_label' => 'درایور Redis',
          'redis_host' => 'میزبان Redis',
          'redis_password' => 'رمز عبور Redis',
          'redis_port' => 'بندر ردیس',
          'mail_label' => 'نامه',
          'mail_driver_label' => 'درایور نامه',
          'mail_driver_placeholder' => 'درایور نامه',
          'mail_host_label' => 'میزبان نامه',
          'mail_host_placeholder' => 'میزبان نامه',
          'mail_port_label' => 'بندر نامه',
          'mail_port_placeholder' => 'بندر نامه',
          'mail_username_label' => 'نام کاربری نامه',
          'mail_username_placeholder' => 'نام کاربری نامه',
          'mail_password_label' => 'رمز عبور نامه',
          'mail_password_placeholder' => 'رمز عبور نامه',
          'mail_encryption_label' => 'رمزگذاری نامه',
          'mail_encryption_placeholder' => 'رمزگذاری نامه',
          'pusher_label' => 'هل دهنده',
          'pusher_app_id_label' => 'شناسه برنامه فشار دهنده',
          'pusher_app_id_palceholder' => 'شناسه برنامه فشار دهنده',
          'pusher_app_key_label' => 'کلید برنامه فشار دهنده',
          'pusher_app_key_palceholder' => 'کلید برنامه فشار دهنده',
          'pusher_app_secret_label' => 'راز برنامه فشار دهنده',
          'pusher_app_secret_palceholder' => 'راز برنامه فشار دهنده',
        ],
        'buttons' => [
          'setup_database' => 'پایگاه داده راه اندازی',
          'setup_application' => 'برنامه راه اندازی',
          'install' => 'نصب',
        ],
      ],
    ],
    'classic' => [
      'backup' => 'برای جلوگیری از هرگونه خرابکاری ، لطفا قبل از ایجاد هرگونه تغییر ، تنظیمات پیش فرض را کپی و ذخیره کنید',
      'templateTitle' => 'مرحله 3 | تنظیمات محیطی | ویرایشگر کلاسیک',
      'title' => 'ویرایشگر فایل محیط',
      'save' => 'تنظیمات را ذخیره کنید',
      'back' => 'از فرم جادوگر استفاده کنید',
      'install' => 'نصب',
      'required' => 'برای ادامه مشکل را برطرف کنید.',
    ],
    'success' => 'تنظیمات پرونده .env شما ذخیره شده است.',
    'errors' => 'ذخیره فایل .env امکان پذیر نیست ، لطفاً آن را به صورت دستی ایجاد کنید.',
  ],
  'verify' => [
    'verify_purchase' => 'خرید را تأیید کنید',
    'submit' => 'ارسال',
    'form' => [
      'email_address_label' => 'آدرس ایمیل',
      'email_address_placeholder' => 'آدرس ایمیل',
      'purchase_code_label' => 'کد خرید',
      'purchase_code_placeholder' => 'کد خرید یا کلید مجوز',
      'root_url_label' => 'Root Url',
      'root_url_placeholder' => 'URL ریشه (بدون / در انتها)',
    ],
  ],
  'install' => 'نصب',
  'verified' => 'مجوز با موفقیت تأیید شد.',
  'verification_failed' => 'تأیید مجوز ناموفق بود!',
  'installed' => [
    'success_log_message' => 'zCart Installer با موفقیت نصب شد',
  ],
  'final' => [
    'title' => 'مرحله نهایی',
    'templateTitle' => 'مرحله نهایی',
    'finished' => 'برنامه با موفقیت نصب شد',
    'migration' => 'خروجی و خروجی کنسول Seed:',
    'console' => 'خروجی کنسول برنامه:',
    'log' => 'ورود به سیستم نصب:',
    'env' => 'پرونده نهایی .env:',
    'exit' => 'برای ورود اینجا کلیک کنید',
    'import_demo_data' => 'وارد کردن داده های نسخه ی نمایشی',
  ],
  'updater' => [
    'title' => 'zCart Updater',
    'welcome' => [
      'title' => 'به بروزرسانی خوش آمدید',
      'message' => 'به جادوگر بروزرسانی خوش آمدید.',
    ],
    'overview' => [
      'title' => 'بررسی اجمالی',
      'message' => '1 به روز رسانی وجود دارد. | به روزرسانی های :number وجود دارد.',
      'install_updates' => 'به روز رسانی ها را نصب کن',
    ],
    'final' => [
      'title' => 'تمام شده',
      'finished' => 'پایگاه داده برنامه با موفقیت به روز شد.',
      'exit' => 'برای خروج اینجا را کلیک کنید',
    ],
    'log' => [
      'success_message' => 'نصب zCart با موفقیت به روز شد',
    ],
  ],
];