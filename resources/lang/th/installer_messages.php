<?php 
return [
  'title' => 'ตัวติดตั้ง zCart',
  'next' => 'ขั้นตอนต่อไป',
  'back' => 'ก่อนหน้า',
  'finish' => 'ติดตั้ง',
  'forms' => [
    'errorTitle' => 'เกิดข้อผิดพลาดต่อไปนี้:',
  ],
  'wait' => 'โปรดรอสักครู่การติดตั้งอาจใช้เวลาสักครู่',
  'welcome' => [
    'templateTitle' => 'ยินดีต้อนรับ',
    'title' => 'ตัวติดตั้ง zCart',
    'message' => 'วิซาร์ดการติดตั้งและการตั้งค่าที่ง่ายดาย',
    'next' => 'ตรวจสอบข้อกำหนด',
  ],
  'requirements' => [
    'templateTitle' => 'ขั้นตอนที่ 1 | ข้อกำหนดของเซิร์ฟเวอร์',
    'title' => 'ข้อกำหนดของเซิร์ฟเวอร์',
    'next' => 'ตรวจสอบสิทธิ์',
    'required' => 'จำเป็นต้องตั้งค่าความต้องการของเซิร์ฟเวอร์ทั้งหมดเพื่อดำเนินการต่อ',
  ],
  'permissions' => [
    'templateTitle' => 'ขั้นตอนที่ 2 | สิทธิ์',
    'title' => 'สิทธิ์',
    'next' => 'กำหนดค่าสภาพแวดล้อม',
    'required' => 'ตั้งค่าสิทธิ์ตามที่จำเป็นเพื่อดำเนินการต่อ อ่านเอกสาร เพื่อขอความช่วยเหลือ',
  ],
  'environment' => [
    'menu' => [
      'templateTitle' => 'ขั้นตอนที่ 3 | การตั้งค่าสภาพแวดล้อม',
      'title' => 'การตั้งค่าสภาพแวดล้อม',
      'desc' => 'โปรดเลือกวิธีที่คุณต้องการกำหนดค่าไฟล์ <code> .env </code> ของแอป',
      'wizard-button' => 'การตั้งค่าตัวช่วยสร้างแบบฟอร์ม',
      'classic-button' => 'แก้ไขข้อความคลาสสิก',
    ],
    'wizard' => [
      'templateTitle' => 'ขั้นตอนที่ 3 | การตั้งค่าสภาพแวดล้อม | ตัวช่วยสร้างที่แนะนำ',
      'title' => 'แนะนำ <code> .env </code> Wizard',
      'tabs' => [
        'environment' => 'สิ่งแวดล้อม',
        'database' => 'ฐานข้อมูล',
        'application' => 'ใบสมัคร',
      ],
      'form' => [
        'name_required' => 'ต้องระบุชื่อสภาพแวดล้อม',
        'app_name_label' => 'ชื่อแอป',
        'app_name_placeholder' => 'ชื่อแอป',
        'app_environment_label' => 'สภาพแวดล้อมของแอป',
        'app_environment_label_local' => 'ท้องถิ่น',
        'app_environment_label_developement' => 'การพัฒนา',
        'app_environment_label_qa' => 'Qa',
        'app_environment_label_production' => 'การผลิต',
        'app_environment_label_other' => 'อื่น ๆ',
        'app_environment_placeholder_other' => 'เข้าสู่สภาพแวดล้อมของคุณ ...',
        'app_debug_label' => 'การแก้ไขข้อบกพร่องของแอป',
        'app_debug_label_true' => 'จริง',
        'app_debug_label_false' => 'เท็จ',
        'app_log_level_label' => 'ระดับบันทึกแอป',
        'app_log_level_label_debug' => 'แก้จุดบกพร่อง',
        'app_log_level_label_info' => 'ข้อมูล',
        'app_log_level_label_notice' => 'แจ้งให้ทราบล่วงหน้า',
        'app_log_level_label_warning' => 'คำเตือน',
        'app_log_level_label_error' => 'ข้อผิดพลาด',
        'app_log_level_label_critical' => 'วิกฤต',
        'app_log_level_label_alert' => 'แจ้งเตือน',
        'app_log_level_label_emergency' => 'ฉุกเฉิน',
        'app_url_label' => 'URL ของแอป',
        'app_url_placeholder' => 'URL ของแอป',
        'db_connection_failed' => 'ไม่สามารถเชื่อมต่อกับฐานข้อมูล ตรวจสอบการกำหนดค่า',
        'db_connection_label' => 'การเชื่อมต่อฐานข้อมูล',
        'db_connection_label_mysql' => 'mysql',
        'db_connection_label_sqlite' => 'sqlite',
        'db_connection_label_pgsql' => 'pgsql',
        'db_connection_label_sqlsrv' => 'sqlsrv',
        'db_host_label' => 'โฮสต์ฐานข้อมูล',
        'db_host_placeholder' => 'โฮสต์ฐานข้อมูล',
        'db_port_label' => 'พอร์ตฐานข้อมูล',
        'db_port_placeholder' => 'พอร์ตฐานข้อมูล',
        'db_name_label' => 'ชื่อฐานข้อมูล',
        'db_name_placeholder' => 'ชื่อฐานข้อมูล',
        'db_username_label' => 'ชื่อผู้ใช้ฐานข้อมูล',
        'db_username_placeholder' => 'ชื่อผู้ใช้ฐานข้อมูล',
        'db_password_label' => 'รหัสผ่านฐานข้อมูล',
        'db_password_placeholder' => 'รหัสผ่านฐานข้อมูล',
        'app_tabs' => [
          'more_info' => 'ข้อมูลเพิ่มเติม',
          'broadcasting_title' => 'การออกอากาศแคชเซสชันและคิว',
          'broadcasting_label' => 'ไดรเวอร์ออกอากาศ',
          'broadcasting_placeholder' => 'ไดรเวอร์ออกอากาศ',
          'cache_label' => 'ไดรเวอร์แคช',
          'cache_placeholder' => 'ไดรเวอร์แคช',
          'session_label' => 'ไดรเวอร์เซสชัน',
          'session_placeholder' => 'ไดรเวอร์เซสชัน',
          'queue_label' => 'คนขับคิว',
          'queue_placeholder' => 'คนขับคิว',
          'redis_label' => 'ไดร์เวอร์ Redis',
          'redis_host' => 'โฮสต์ Redis',
          'redis_password' => 'รหัสผ่าน Redis',
          'redis_port' => 'ท่าเรือ Redis',
          'mail_label' => 'จดหมาย',
          'mail_driver_label' => 'ไดร์เวอร์เมล',
          'mail_driver_placeholder' => 'ไดร์เวอร์เมล',
          'mail_host_label' => 'โฮสต์อีเมล',
          'mail_host_placeholder' => 'โฮสต์อีเมล',
          'mail_port_label' => 'พอร์ตเมล',
          'mail_port_placeholder' => 'พอร์ตเมล',
          'mail_username_label' => 'ชื่อผู้ใช้อีเมล',
          'mail_username_placeholder' => 'ชื่อผู้ใช้อีเมล',
          'mail_password_label' => 'รหัสผ่านเมล',
          'mail_password_placeholder' => 'รหัสผ่านเมล',
          'mail_encryption_label' => 'การเข้ารหัสเมล',
          'mail_encryption_placeholder' => 'การเข้ารหัสเมล',
          'pusher_label' => 'ดัน',
          'pusher_app_id_label' => 'รหัสแอป Pusher',
          'pusher_app_id_palceholder' => 'รหัสแอป Pusher',
          'pusher_app_key_label' => 'รหัสแอป Pusher',
          'pusher_app_key_palceholder' => 'รหัสแอป Pusher',
          'pusher_app_secret_label' => 'Pusher App Secret',
          'pusher_app_secret_palceholder' => 'Pusher App Secret',
        ],
        'buttons' => [
          'setup_database' => 'ตั้งค่าฐานข้อมูล',
          'setup_application' => 'ติดตั้งแอปพลิเคชัน',
          'install' => 'ติดตั้ง',
        ],
      ],
    ],
    'classic' => [
      'backup' => 'เพื่อหลีกเลี่ยงความยุ่งเหยิงโปรดคัดลอกและบันทึกการกำหนดค่าเริ่มต้นไว้ที่อื่นก่อนที่คุณจะทำการเปลี่ยนแปลงใด ๆ',
      'templateTitle' => 'ขั้นตอนที่ 3 | การตั้งค่าสภาพแวดล้อม | บรรณาธิการคลาสสิก',
      'title' => 'ตัวแก้ไขไฟล์สภาพแวดล้อม',
      'save' => 'บันทึกการกำหนดค่า',
      'back' => 'ใช้ตัวช่วยสร้างแบบฟอร์ม',
      'install' => 'ติดตั้ง',
      'required' => 'แก้ไขปัญหาเพื่อดำเนินการต่อ',
    ],
    'success' => 'บันทึกการตั้งค่าไฟล์. env ของคุณแล้ว',
    'errors' => 'ไม่สามารถบันทึกไฟล์. env โปรดสร้างด้วยตนเอง',
  ],
  'verify' => [
    'verify_purchase' => 'ยืนยันการซื้อ',
    'submit' => 'ส่ง',
    'form' => [
      'email_address_label' => 'ที่อยู่อีเมล',
      'email_address_placeholder' => 'ที่อยู่อีเมล',
      'purchase_code_label' => 'รหัสซื้อ',
      'purchase_code_placeholder' => 'รหัสซื้อหรือรหัสใบอนุญาต',
      'root_url_label' => 'URL ราก',
      'root_url_placeholder' => 'ROOT URL (ไม่มี / ต่อท้าย)',
    ],
  ],
  'install' => 'ติดตั้ง',
  'verified' => 'ตรวจสอบใบอนุญาตเรียบร้อยแล้ว',
  'verification_failed' => 'การตรวจสอบใบอนุญาตล้มเหลว!',
  'installed' => [
    'success_log_message' => 'zCart Installer ติดตั้งเรียบร้อยแล้วบน',
  ],
  'final' => [
    'title' => 'ขั้นตอนสุดท้าย',
    'templateTitle' => 'ขั้นตอนสุดท้าย',
    'finished' => 'ติดตั้งแอปพลิเคชันเรียบร้อยแล้ว',
    'migration' => 'การโยกย้ายและเอาต์พุตคอนโซลเมล็ดพันธุ์:',
    'console' => 'เอาต์พุตคอนโซลแอปพลิเคชัน:',
    'log' => 'รายการบันทึกการติดตั้ง:',
    'env' => 'ไฟล์. env ขั้นสุดท้าย:',
    'exit' => 'คลิกที่นี่เพื่อเข้าสู่ระบบ',
    'import_demo_data' => 'นำเข้าข้อมูลสาธิต',
  ],
  'updater' => [
    'title' => 'zCart Updater',
    'welcome' => [
      'title' => 'ยินดีต้อนรับสู่ Updater',
      'message' => 'ยินดีต้อนรับสู่วิซาร์ดการอัปเดต',
    ],
    'overview' => [
      'title' => 'ภาพรวม',
      'message' => 'มีการอัปเดต 1 รายการ | มีการอัปเดต :number',
      'install_updates' => 'ติดตั้งการอัปเดต',
    ],
    'final' => [
      'title' => 'เสร็จแล้ว',
      'finished' => 'อัปเดตฐานข้อมูลของแอปพลิเคชันเรียบร้อยแล้ว',
      'exit' => 'คลิกที่นี่เพื่อออก',
    ],
    'log' => [
      'success_message' => 'zCart Installer อัปเดตเรียบร้อยแล้วเมื่อ',
    ],
  ],
];