<?php 
return [
  'password_updated' => [
    'subject' => 'تم تحديث كلمة مرور :marketplace الخاصة بك بنجاح!',
    'greeting' => 'مرحبا :user!',
    'message' => 'تم تغيير كلمة مرور تسجيل الدخول إلى حسابك بنجاح! إذا لم تقم بإجراء هذا التغيير ، فيرجى الاتصال بنا في أسرع وقت ممكن! انقر فوق الزر أدناه لتسجيل الدخول إلى صفحة ملفك الشخصي.',
    'button_text' => 'قم بزيارة ملف التعريف الخاص بك',
  ],
  'invoice_created' => [
    'subject' => ':marketplace فاتورة رسوم الاشتراك الشهرية',
    'greeting' => 'مرحبا :merchant!',
    'message' => 'شكرا لدعمكم المتواصل. لقد أرفقنا نسخة من فاتورتك في سجلاتك. يرجى إعلامنا إذا كان لديك أي أسئلة أو مخاوف!',
    'button_text' => 'اذهب إلى لوحة القيادة',
  ],
  'customer_registered' => [
    'subject' => 'مرحبًا بك في سوق :marketplace!',
    'greeting' => 'تهنئة :customer!',
    'message' => 'تم إنشاء حسابك بنجاح! انقر فوق الزر أدناه للتحقق من عنوان بريدك الإلكتروني.',
    'button_text' => 'تحقق مني',
  ],
  'customer_updated' => [
    'subject' => 'تم تحديث معلومات الحساب بنجاح!',
    'greeting' => 'مرحبا :customer!',
    'message' => 'هذا إشعار لإعلامك بأنه تم تحديث حسابك بنجاح!',
    'button_text' => 'قم بزيارة ملف التعريف الخاص بك',
  ],
  'customer_password_reset' => [
    'subject' => 'إعادة تعيين إشعار كلمة المرور',
    'greeting' => 'مرحبا!',
    'message' => 'أنت تتلقى هذا البريد الإلكتروني لأننا تلقينا طلب إعادة تعيين كلمة المرور لحسابك. إذا لم تطلب إعادة تعيين كلمة المرور ، فما عليك سوى تجاهل هذا الإشعار ولن يكون هناك حاجة إلى button_text آخر.',
    'button_text' => 'إعادة تعيين كلمة المرور',
  ],
  'dispute_acknowledgement' => [
    'subject' => '[معرف الطلب: تم ​​تقديم النزاع :order_id] بنجاح',
    'greeting' => 'مرحبا :customer',
    'message' => 'هذا إشعار لإعلامك بأننا تلقينا نزاعك بشأن معرّف الطلب: :order_id ، وسيقوم فريق الدعم لدينا بالرد عليك في أقرب وقت ممكن.',
    'button_text' => 'عرض النزاع',
  ],
  'dispute_created' => [
    'subject' => 'نزاع جديد لمعرف الطلب: :order_id',
    'greeting' => 'مرحبا :merchant!',
    'message' => 'لقد تلقيت نزاعًا جديدًا بشأن معرف الطلب: :order_id. يرجى مراجعة وحل المشكلة مع العميل.',
    'button_text' => 'عرض النزاع',
  ],
  'dispute_updated' => [
    'subject' => '[معرف الطلب: تم ​​تحديث حالة النزاع :order_id]!',
    'greeting' => 'مرحبا :customer!',
    'message' => 'تم تحديث نزاع حول معرف الطلب :order_id بهذه الرسالة من البائع ": رد". يرجى التحقق أدناه والاتصال بنا إذا كنت بحاجة إلى أي مساعدة.',
    'button_text' => 'عرض النزاع',
  ],
  'dispute_appealed' => [
    'subject' => '[معرف الطلب: :order_id] نزاع مستأنف!',
    'greeting' => 'مرحبا!',
    'message' => 'تم استئناف نزاع بشأن معرف الطلب :order_id بهذه الرسالة ": رد". يرجى التحقق أدناه للحصول على التفاصيل.',
    'button_text' => 'عرض النزاع',
  ],
  'appealed_dispute_replied' => [
    'subject' => '[معرف الطلب: :order_id] استجابة جديدة لنزاع الاستئناف!',
    'greeting' => 'مرحبا!',
    'message' => 'تم الرد على نزاع حول معرف الطلب :order_id بهذه الرسالة: </br> </br> ": reply"',
    'button_text' => 'عرض النزاع',
  ],
  'low_inventory_notification' => [
    'subject' => 'تنبيه انخفاض المخزون!',
    'greeting' => 'مرحبا!',
    'message' => 'واحد أو أكثر من عناصر المخزون الخاص بك ينخفض. حان الوقت لإضافة المزيد من المخزون لإبقاء العنصر موجودًا في السوق.',
    'button_text' => 'تحديث الجرد',
  ],
  'inventory_bulk_upload_procceed_notice' => [
    'subject' => 'تمت معالجة طلب استيراد المخزون بالجملة.',
    'greeting' => 'مرحبا!',
    'message' => 'يسعدنا إخبارك بأنه قد تمت متابعة طلب استيراد المخزون بالجملة. إجمالي عدد الصفوف التي تم استيرادها بنجاح إلى النظام الأساسي :success ، عدد الصفوف الفاشلة :failed',
    'failed' => 'يرجى العثور على الملف المرفق للصفوف الفاشلة.',
    'button_text' => 'مشاهدة الجرد',
  ],
  'new_message' => [
    'subject' => ':subject',
    'greeting' => 'مرحبا :receiver',
    'message' => ':message',
    'button_text' => 'عرض الرسالة في الموقع',
  ],
  'message_replied' => [
    'subject' => ':user أجاب :subject',
    'greeting' => 'مرحبا :receiver',
    'message' => ':reply',
    'button_text' => 'عرض الرسالة في الموقع',
  ],
  'order_created' => [
    'subject' => '[معرف الطلب: :order] تم وضع طلبك بنجاح!',
    'greeting' => 'مرحبا :customer',
    'message' => 'شكرا لك لاختيارنا! طلبك [تم تقديم معرف الطلب :order] بنجاح. سنخبرك بحالة الطلب.',
    'button_text' => 'قم بزيارة المتجر',
  ],
  'merchant_order_created_notification' => [
    'subject' => 'طلب جديد [معرف الطلب: تم ​​وضع :order] في متجرك!',
    'greeting' => 'مرحبا :merchant',
    'message' => 'طلب جديد [تم وضع معرف الطلب :order]. يرجى التحقق من تفاصيل الطلب وتنفيذ الطلب في أسرع وقت ممكن.',
    'button_text' => 'نفذ الطلب',
  ],
  'order_updated' => [
    'subject' => '[معرف الطلب: :order] تم تحديث حالة طلبك!',
    'greeting' => 'مرحبا :customer',
    'message' => 'هذا إشعار لإعلامك بأنه تم تحديث طلبك [معرف الطلب :order]. يرجى الاطلاع أدناه للحصول على تفاصيل الطلب. يمكنك أيضًا التحقق من طلباتك من لوحة التحكم الخاصة بك.',
    'button_text' => 'قم بزيارة المتجر',
  ],
  'order_fulfilled' => [
    'subject' => '[معرف الطلب: :order] طلبك في طريقه!',
    'greeting' => 'مرحبا :customer',
    'message' => 'هذا إشعار لإعلامك بأن طلبك [معرف الطلب :order] قد تم شحنه وهو في طريقك إليك. يرجى الاطلاع أدناه للحصول على تفاصيل الطلب. يمكنك أيضًا التحقق من طلباتك من لوحة التحكم الخاصة بك.',
    'button_text' => 'قم بزيارة المتجر',
  ],
  'order_paid' => [
    'subject' => '[معرف الطلب: :order] تم دفع طلبك بنجاح!',
    'greeting' => 'مرحبا :customer',
    'message' => 'هذا إشعار لإعلامك بأن طلبك [معرف الطلب :order] قد تم دفعه بنجاح وهو في طريقك. يرجى الاطلاع أدناه للحصول على تفاصيل الطلب. يمكنك أيضًا التحقق من طلباتك من لوحة التحكم الخاصة بك.',
    'button_text' => 'قم بزيارة المتجر',
  ],
  'order_payment_failed' => [
    'subject' => '[معرف الطلب: فشل الدفع :order]!',
    'greeting' => 'مرحبا :customer',
    'message' => 'هذا إشعار لإعلامك بأن طلبك [معرف الطلب :order] قد فشل. يرجى الاطلاع أدناه للحصول على تفاصيل الطلب. يمكنك أيضًا التحقق من طلباتك من لوحة التحكم الخاصة بك.',
    'button_text' => 'قم بزيارة المتجر',
  ],
  'cancellation_request_acknowledgement' => [
    'subject' => '[معرف الطلب: :order] تم تقديم طلب الإلغاء الخاص بك بنجاح!',
    'greeting' => 'مرحبا :customer',
    'message' => 'شكرا لك لاختيارنا! طلبك [تم تقديم طلب إلغاء معرف الطلب :order] بنجاح. سنخبرك بحالة الطلب.',
    'button_text' => 'قم بزيارة المتجر',
  ],
  'merchant_order_cancellation_notification' => [
    'subject' => 'تم إنشاء طلب إلغاء طلب جديد في متجرك [معرف الطلب: :order].',
    'greeting' => 'مرحبا :merchant',
    'message' => 'تم إنشاء طلب [طلب إلغاء معرف الطلب :order]. يرجى التحقق من تفاصيل الطلب والرد على الطلب في أسرع وقت ممكن.',
    'button_text' => 'استجب للطلب',
  ],
  'cancellation_request_approved' => [
    'subject' => 'تمت الموافقة على طلب إلغاء [معرف الطلب: :order] عنصرًا (عناصر)!',
    'greeting' => 'مرحبا :customer',
    'message' => 'تمت الموافقة على طلب إلغاء [معرف الطلب :order] عنصر (عناصر) من قبل البائع. شكرا لك لاختيارنا!',
    'button_text' => 'قم بزيارة المتجر',
  ],
  'cancellation_request_declined' => [
    'subject' => 'فات الأوان لإلغاء [معرف الطلب: :order]',
    'greeting' => 'مرحبا :customer',
    'message' => 'نحن حقا آسفون! فات الأوان لقبول طلب إلغاء [معرف الطلب :order] من قبل البائع. إذا كنت لا ترغب في الحصول على العنصر (العناصر) ، فلا يزال بإمكانك العودة.',
    'button_text' => 'قم بزيارة المتجر',
  ],
  'order_canceled' => [
    'subject' => '[معرف الطلب: :order] تم إلغاء طلبك!',
    'greeting' => 'مرحبا :customer',
    'message' => 'طلبك [تم إلغاء معرف الطلب :order]. شكرا لك لاختيارنا!',
    'button_text' => 'قم بزيارة المتجر',
  ],
  'refund_initiated' => [
    'subject' => '[معرف الطلب: :order] بدأ رد الأموال!',
    'greeting' => 'مرحبا :customer',
    'message' => 'هذا إشعار لإعلامك بأننا بدأنا طلب استرداد لطلبك :order. سيراجع أحد أعضاء فريقنا الطلب قريبًا. سنخبرك بحالة الطلب.',
  ],
  'refund_approved' => [
    'subject' => '[معرف الطلب: :order] تمت الموافقة على طلب استرداد!',
    'greeting' => 'مرحبا :customer',
    'message' => 'هذا إشعار لإعلامك بأننا وافقنا على طلب استرداد طلبك :order. المبلغ المردود هو :amount. لقد أرسلنا الأموال إلى طريقة الدفع الخاصة بك ، وقد يستغرق الأمر بضعة أيام حتى يتم تفعيل حسابك. اتصل بمزود الدفع الخاص بك إذا كنت لا ترى الأموال قد تم تنفيذها في غضون أيام قليلة.',
  ],
  'refund_declined' => [
    'subject' => '[معرف الطلب: :order] تم رفض طلب استرداد!',
    'greeting' => 'مرحبا :customer',
    'message' => 'هذا إشعار لإعلامك بأنه تم رفض طلب استرداد لطلبك :order. إذا لم تكن راضيًا عن حل التاجر ، يمكنك الاتصال بالتاجر مباشرة من المنصة أو حتى يمكنك استئناف النزاع على :marketplace. سنتدخل لحل المشكلة.',
  ],
  'shop_created' => [
    'subject' => 'متجرك جاهز للذهاب!',
    'greeting' => 'تهنئة :merchant!',
    'message' => 'تم إنشاء متجرك :shop_name بنجاح! انقر فوق الزر أدناه لتسجيل الدخول إلى لوحة إدارة المتجر.',
    'button_text' => 'اذهب إلى لوحة القيادة',
  ],
  'shop_updated' => [
    'subject' => 'تم تحديث معلومات المتجر بنجاح!',
    'greeting' => 'مرحبا :merchant!',
    'message' => 'هذا إشعار لإعلامك بأنه تم تحديث متجرك :shop_name بنجاح!',
    'button_text' => 'اذهب إلى لوحة القيادة',
  ],
  'shop_config_updated' => [
    'subject' => 'تم تحديث تكوين المتجر بنجاح!',
    'greeting' => 'مرحبا :merchant!',
    'message' => 'تم تحديث تكوين متجرك بنجاح! انقر فوق الزر أدناه لتسجيل الدخول إلى لوحة إدارة المتجر.',
    'button_text' => 'اذهب إلى لوحة القيادة',
  ],
  'shop_down_for_maintainace' => [
    'subject' => 'متجرك معطل!',
    'greeting' => 'مرحبا :merchant!',
    'message' => 'هذا إشعار لإعلامك بأن متجرك :shop_name معطل! لا يمكن لأي عميل زيارة متجرك حتى يعود للعيش مرة أخرى.',
    'button_text' => 'انتقل إلى صفحة التكوين',
  ],
  'shop_is_live' => [
    'subject' => 'متجرك عاد إلى LIVE!',
    'greeting' => 'مرحبا :merchant',
    'message' => 'هذا إشعار لإعلامك بأن متجرك :shop_name عاد للعيش بنجاح!',
    'button_text' => 'اذهب إلى لوحة القيادة',
  ],
  'shop_deleted' => [
    'subject' => 'تمت إزالة متجرك من :marketplace!',
    'greeting' => 'مرحبا التاجر!',
    'message' => 'هذا إشعار لإعلامك بأن متجرك قد تم حذفه من مكاننا! سنفتقدك.',
  ],
  'system_is_down' => [
    'subject' => 'سوقك :marketplace معطل الآن!',
    'greeting' => 'مرحبا :user!',
    'message' => 'هذا إشعار لإعلامك بأن السوق الخاص بك :marketplace معطل! لا يمكن لأي عميل زيارة السوق الخاص بك حتى يعود للعيش مرة أخرى.',
    'button_text' => 'انتقل إلى صفحة التكوين',
  ],
  'system_is_live' => [
    'subject' => 'عاد السوق الخاص بك :marketplace إلى البث المباشر!',
    'greeting' => 'مرحبا :user!',
    'message' => 'هذا إشعار لإعلامك بأن سوقك :marketplace عاد للعيش بنجاح!',
    'button_text' => 'اذهب إلى لوحة القيادة',
  ],
  'system_info_updated' => [
    'subject' => ':marketplace - تم تحديث معلومات السوق بنجاح!',
    'greeting' => 'مرحبا :user!',
    'message' => 'هذا إشعار لإعلامك بأنه تم تحديث السوق الخاص بك :marketplace بنجاح!',
    'button_text' => 'اذهب إلى لوحة القيادة',
  ],
  'system_config_updated' => [
    'subject' => ':marketplace - تم تحديث تكوين السوق بنجاح!',
    'greeting' => 'مرحبا :user!',
    'message' => 'تم تحديث تكوين السوق الخاص بك :marketplace بنجاح! انقر فوق الزر أدناه لتسجيل الدخول إلى لوحة الإدارة.',
    'button_text' => 'اعرض الإعدادات',
  ],
  'new_contact_us_message' => [
    'subject' => 'رسالة جديدة عبر نموذج اتصل بنا: :subject',
    'greeting' => 'مرحبا!',
    'message_footer_with_phone' => 'يمكنك الرد على هذا البريد الإلكتروني أو الاتصال مباشرة بهذا الهاتف :phone',
    'message_footer' => 'يمكنك الرد على هذا البريد الإلكتروني مباشرة.',
  ],
  'ticket_acknowledgement' => [
    'subject' => '[معرف التذكرة: :ticket_id] :subject',
    'greeting' => 'مرحبا :user',
    'message' => 'هذا إشعار لإعلامك بأننا تلقينا تذكرتك :ticket_id بنجاح! سيتواصل معك فريق الدعم في أقرب وقت ممكن.',
    'button_text' => 'عرض التذكرة',
  ],
  'ticket_created' => [
    'subject' => 'تذكرة دعم جديدة [معرف التذكرة: :ticket_id] :subject',
    'greeting' => 'مرحبا!',
    'message' => 'لقد تلقيت معرف بطاقة دعم جديد :ticket_id ، المرسل :sender من البائع :vendor. مراجعة وتأكيد التذكرة لفريق الدعم.',
    'button_text' => 'عرض التذكرة',
  ],
  'ticket_assigned' => [
    'subject' => 'تم تخصيص تذكرة لك للتو [تذكرة IF: :ticket_id] :subject',
    'greeting' => 'مرحبا :user',
    'message' => 'هذا إخطار لإعلامك بتلك التذكرة [معرف التذكرة: :ticket_id] :subject تم الرد عليها للتو. مراجعة التذكرة والرد عليها في أقرب وقت ممكن.',
    'button_text' => 'رد على التذكرة',
  ],
  'ticket_replied' => [
    'subject' => 'رد :user على التذكرة [معرف التذكرة: :ticket_id] :subject',
    'greeting' => 'مرحبا :user',
    'message' => ':reply',
    'button_text' => 'عرض التذكرة',
  ],
  'ticket_updated' => [
    'subject' => 'تم تحديث تذكرة [معرف التذكرة: :ticket_id] :subject!',
    'greeting' => 'مرحبا :user!',
    'message' => 'تم تحديث معرّف إحدى بطاقات الدعم رقم #: Ticket_id :subject. يرجى الاتصال بنا اذا كنت بحاجة إلى أي مساعدة.',
    'button_text' => 'عرض التذكرة',
  ],
  'user_created' => [
    'subject' => 'أضافك :admin إلى سوق :marketplace!',
    'greeting' => 'تهنئة :user!',
    'message' => 'لقد تمت إضافتك إلى :marketplace بواسطة :admin! انقر فوق الزر أدناه لتسجيل الدخول إلى حسابك. استخدم كلمة المرور المؤقتة لتسجيل الدخول الأولي.',
    'alert' => 'لا تنس تغيير كلمة المرور الخاصة بك بعد تسجيل الدخول.',
    'button_text' => 'قم بزيارة ملف التعريف الخاص بك',
  ],
  'user_updated' => [
    'subject' => 'تم تحديث معلومات الحساب بنجاح!',
    'greeting' => 'مرحبا :user!',
    'message' => 'هذا إشعار لإعلامك بأنه تم تحديث حسابك بنجاح!',
    'button_text' => 'قم بزيارة ملف التعريف الخاص بك',
  ],
  'verdor_registered' => [
    'subject' => 'بائع جديد مسجل للتو!',
    'greeting' => 'تهنئة!',
    'message' => 'حصل سوقك على :marketplace للتو على صورة جديدة باسم المتجر <strong>: اسم المتجر </strong> وعنوان البريد الإلكتروني للتاجر هو :merchant_email',
    'button_text' => 'اذهب إلى لوحة القيادة',
  ],
  'email_verification' => [
    'subject' => 'تحقق من حساب :marketplace الخاص بك!',
    'greeting' => 'تهنئة :user!',
    'message' => 'تم إنشاء حسابك بنجاح! انقر فوق الزر أدناه للتحقق من عنوان بريدك الإلكتروني.',
    'button_text' => 'تحقق من بريدي الإلكتروني',
  ],
  'dispute_solved' => [
    'subject' => 'نزاع [معرف الطلب: تم ​​وضع علامة :order_id] على أنه تم حله!',
    'greeting' => 'مرحبا :customer!',
    'message' => 'تم وضع علامة على النزاع الخاص بمعرف الطلب: :order_id على أنه تم حله. شكرا لك على وجودك معنا.',
    'button_text' => 'عرض النزاع',
  ],
  'new_chat_message' => [
    'subject' => 'رسالة جديدة عبر نموذج الدردشة الحية :sender',
    'greeting' => 'مرحبا :receipent!',
    'message' => 'تلقيت رسالة جديدة عبر نافذة الدردشة المباشرة ": message". الرجاء تسجيل الدخول إلى لوحة تحكم المتجر للرد.',
    'button_text' => 'عرض على لوحة القيادة',
  ],
];