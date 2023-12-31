<?php 
return [
  'password_updated' => [
    'subject' => 'סיסמת ה- :marketplace שלך עודכנה בהצלחה!',
    'greeting' => 'שלום :user!',
    'message' => 'סיסמת הכניסה לחשבונך שונתה בהצלחה! אם לא ביצעת שינוי זה, אנא פנה אלינו בהקדם האפשרי! לחץ על הלחצן למטה בכניסה לדף הפרופיל שלך.',
    'button_text' => 'בקר בפרופיל שלך',
  ],
  'invoice_created' => [
    'subject' => ':marketplace חשבונית עמלת מנוי חודשית',
    'greeting' => 'שלום :merchant!',
    'message' => 'תודה על המשך התמיכה שלך. צירפנו עותק של החשבונית שלך לרישומיך. אנא יידע אותנו אם יש לך שאלות או חששות!',
    'button_text' => 'עבור אל לוח המחוונים',
  ],
  'customer_registered' => [
    'subject' => 'ברוך הבא לשוק :marketplace!',
    'greeting' => 'מזל טוב :customer!',
    'message' => 'חשבונך נוצר בהצלחה! לחץ על הלחצן למטה כדי לאמת את כתובת הדוא"ל שלך.',
    'button_text' => 'אמת אותי',
  ],
  'customer_updated' => [
    'subject' => 'פרטי החשבון עודכנו בהצלחה!',
    'greeting' => 'שלום :customer!',
    'message' => 'זוהי הודעה שתודיע לך שחשבונך עודכן בהצלחה!',
    'button_text' => 'בקר בפרופיל שלך',
  ],
  'customer_password_reset' => [
    'subject' => 'אפס את הודעת הסיסמה',
    'greeting' => 'שלום!',
    'message' => 'אתה מקבל דוא"ל זה מכיוון שקיבלנו בקשה לאיפוס סיסמה עבור חשבונך. אם לא ביקשת איפוס סיסמה, פשוט התעלם מהודעה זו ואין צורך בכפתור_טקסט נוסף.',
    'button_text' => 'לאפס את הסיסמה',
  ],
  'dispute_acknowledgement' => [
    'subject' => '[מזהה הזמנה: מחלוקת :order_id] הוגשה בהצלחה',
    'greeting' => 'שלום :customer',
    'message' => 'זוהי הודעה שתודיע לך שקיבלנו את המחלוקת שלך לגבי מזהה ההזמנה: :order_id, צוות התמיכה שלנו יחזור אליך בהקדם האפשרי.',
    'button_text' => 'צפו במחלוקת',
  ],
  'dispute_created' => [
    'subject' => 'מחלוקת חדשה עבור מזהה ההזמנה: :order_id',
    'greeting' => 'שלום :merchant!',
    'message' => 'קיבלת מחלוקת חדשה על מזהה ההזמנה: :order_id. אנא בדוק ופתור את הבעיה מול הלקוח.',
    'button_text' => 'צפו במחלוקת',
  ],
  'dispute_updated' => [
    'subject' => '[מזהה הזמנה: :order_id] סטטוס המחלוקת עודכן!',
    'greeting' => 'שלום :customer!',
    'message' => 'מחלוקת לגבי מזהה ההזמנה :order_id עודכנה עם הודעה זו מהספק ": תשובה". אנא בדוק למטה וצור איתנו קשר אם אתה זקוק לעזרה כלשהי.',
    'button_text' => 'צפו במחלוקת',
  ],
  'dispute_appealed' => [
    'subject' => '[מזהה ההזמנה: :order_id] ערעור על מחלוקת!',
    'greeting' => 'שלום!',
    'message' => 'על ערעור על מזהה ההזמנה :order_id הוגש ערעור עם הודעה זו ": תשובה". אנא בדוק למטה לפרטים.',
    'button_text' => 'צפו במחלוקת',
  ],
  'appealed_dispute_replied' => [
    'subject' => '[מזהה הזמנה: :order_id] תגובה חדשה לסכסוך בערעור!',
    'greeting' => 'שלום!',
    'message' => 'מחלוקת לגבי מזהה ההזמנה :order_id נענתה בהודעה זו: </br> </br> ": תשובה"',
    'button_text' => 'צפו במחלוקת',
  ],
  'low_inventory_notification' => [
    'subject' => 'התראת מלאי נמוכה!',
    'greeting' => 'שלום!',
    'message' => 'אחד או יותר מפריטי המלאי שלך נמוכים יותר. הגיע הזמן להוסיף מלאי נוסף כדי להשאיר את הפריט בשידור חי בשוק.',
    'button_text' => 'עדכן מלאי',
  ],
  'inventory_bulk_upload_procceed_notice' => [
    'subject' => 'הבקשה שלך לייבוא ​​מלאי בכמויות גדולות בוצעה.',
    'greeting' => 'שלום!',
    'message' => 'אנו שמחים לבשר לך כי הבקשה שלך לייבוא ​​מלאי בכמות גדולה הושלמה. המספר הכולל של השורות שיובאו בהצלחה לפלטפורמה :success, מספר השורות :failed נכשל',
    'failed' => 'אנא מצא את הקובץ המצורף לשורות שנכשלו.',
    'button_text' => 'צפה במלאי',
  ],
  'new_message' => [
    'subject' => ':subject',
    'greeting' => 'שלום :receiver',
    'message' => ':message',
    'button_text' => 'צפו בהודעה באתר',
  ],
  'message_replied' => [
    'subject' => 'השיב :user',
    'greeting' => 'שלום :receiver',
    'message' => ':reply',
    'button_text' => 'צפו בהודעה באתר',
  ],
  'order_created' => [
    'subject' => '[מזהה הזמנה: :order] ההזמנה שלך בוצעה בהצלחה!',
    'greeting' => 'שלום :customer',
    'message' => 'אנו מודים לך על שבחרת בנו! ההזמנה שלך [מזהה ההזמנה :order] בוצעה בהצלחה. אנו נודיע לך על סטטוס ההזמנה.',
    'button_text' => 'בקר בחנות',
  ],
  'merchant_order_created_notification' => [
    'subject' => 'הזמנה חדשה [מזהה הזמנה: :order] הושם בחנות שלך!',
    'greeting' => 'שלום :merchant',
    'message' => 'הזמנה חדשה [מזהה הזמנה :order] בוצע. אנא בדוק את פרטי ההזמנה והגש את ההזמנה בהקדם האפשרי.',
    'button_text' => 'מילוי ההזמנה',
  ],
  'order_updated' => [
    'subject' => '[מזהה הזמנה: :order] סטטוס ההזמנה שלך עודכן!',
    'greeting' => 'שלום :customer',
    'message' => 'זוהי התראה שתודיע לך שההזמנה שלך [מזהה ההזמנה :order] עודכן. אנא ראה להלן לקבלת פרטי הזמנה. אתה יכול גם לבדוק את ההזמנות שלך ממרכז השליטה שלך.',
    'button_text' => 'בקר בחנות',
  ],
  'order_fulfilled' => [
    'subject' => '[מזהה הזמנה: :order] ההזמנה שלך בדרך!',
    'greeting' => 'שלום :customer',
    'message' => 'זוהי הודעה שתודיע לך שההזמנה שלך [מזהה ההזמנה :order] נשלחה והיא בדרך שלך. אנא ראה להלן לקבלת פרטי הזמנה. אתה יכול גם לבדוק את ההזמנות שלך ממרכז השליטה שלך.',
    'button_text' => 'בקר בחנות',
  ],
  'order_paid' => [
    'subject' => '[מזהה הזמנה: :order] ההזמנה שלך שולמה בהצלחה!',
    'greeting' => 'שלום :customer',
    'message' => 'זו הודעה שתודיע לך שההזמנה שלך [מזהה ההזמנה :order] שולמה בהצלחה והיא בדרך שלך. אנא ראה להלן לקבלת פרטי הזמנה. אתה יכול גם לבדוק את ההזמנות שלך ממרכז השליטה שלך.',
    'button_text' => 'בקר בחנות',
  ],
  'order_payment_failed' => [
    'subject' => '[מזהה ההזמנה: תשלום :order] נכשל!',
    'greeting' => 'שלום :customer',
    'message' => 'זוהי הודעה שתודיע לך שההזמנה שלך [תשלום מזהה הזמנה :order] נכשל. אנא ראה להלן לקבלת פרטי הזמנה. אתה יכול גם לבדוק את ההזמנות שלך ממרכז השליטה שלך.',
    'button_text' => 'בקר בחנות',
  ],
  'cancellation_request_acknowledgement' => [
    'subject' => '[מזהה הזמנה: :order] בקשת הביטול שלך הושמה בהצלחה!',
    'greeting' => 'שלום :customer',
    'message' => 'אנו מודים לך על שבחרת בנו! הזמנתך [בקשת ביטול מזהה הזמנה :order] בוצעה בהצלחה. אנו נודיע לך על סטטוס ההזמנה.',
    'button_text' => 'בקר בחנות',
  ],
  'merchant_order_cancellation_notification' => [
    'subject' => 'בקשת ביטול הזמנה חדשה נוצרה בחנות שלך [מזהה הזמנה: :order].',
    'greeting' => 'שלום :merchant',
    'message' => 'נוצרה הזמנה [בקשת ביטול מזהה הזמנה :order] נוצרה. אנא בדוק את פרטי ההזמנה והענה לבקשה בהקדם האפשרי.',
    'button_text' => 'נענה לבקשה',
  ],
  'cancellation_request_approved' => [
    'subject' => 'בקשת הביטול שלך [מזהה הזמנה: :order] פריט / ים) אושרה!',
    'greeting' => 'שלום :customer',
    'message' => 'בקשת הביטול של [מזהה ההזמנה :order] פריט (ים) שלך אושרה על ידי הספק. אנו מודים לך על שבחרת בנו!',
    'button_text' => 'בקר בחנות',
  ],
  'cancellation_request_declined' => [
    'subject' => 'מאוחר מדי לבטל את [מזהה ההזמנה: :order]',
    'greeting' => 'שלום :customer',
    'message' => 'אנחנו ממש מצטערים! מאוחר מכדי לקבל את בקשת הביטול של [מזהה ההזמנה :order] פריטים / פריטים על ידי הספק. אם אתה לא אוהב לקבל את הפריט / ים, אתה עדיין יכול לחזור.',
    'button_text' => 'בקר בחנות',
  ],
  'order_canceled' => [
    'subject' => '[מזהה הזמנה: :order] ההזמנה שלך בוטלה!',
    'greeting' => 'שלום :customer',
    'message' => 'ההזמנה שלך [מזהה ההזמנה :order] בוטלה. אנו מודים לך על שבחרת בנו!',
    'button_text' => 'בקר בחנות',
  ],
  'refund_initiated' => [
    'subject' => '[מזהה הזמנה: :order] החזר החזר!',
    'greeting' => 'שלום :customer',
    'message' => 'זוהי הודעה שתיידע אותך שיזמנו בקשת החזר עבור הזמנתך :order. אחד מחברי הצוות שלנו יבדוק את הבקשה בקרוב. אנו נודיע לך על סטטוס הבקשה.',
  ],
  'refund_approved' => [
    'subject' => '[מזהה הזמנה: :order] אושרה בקשת החזר!',
    'greeting' => 'שלום :customer',
    'message' => 'זוהי הודעה שתיידע אותך שאישרנו בקשה להחזר עבור ההזמנה שלך :order. הסכום שהוחזר הוא :amount. שלחנו את הכסף לאמצעי התשלום שלך. ייתכן שיחלפו כמה ימים עד להשלמת חשבונך. פנה לספק התשלומים שלך אם אינך רואה את הכסף המושקע תוך מספר ימים.',
  ],
  'refund_declined' => [
    'subject' => '[מזהה הזמנה: :order] בקשת החזר נדחתה!',
    'greeting' => 'שלום :customer',
    'message' => 'זו הודעה שתיידע אותך כי בקשת החזר נדחתה עבור הזמנתך :order. אם אינך מרוצה מהפתרון של הסוחר, תוכל ליצור קשר עם הסוחר ישירות מהפלטפורמה או אפילו תוכל לערער על המחלוקת ב- :marketplace. ניכנס לפתור את הבעיה.',
  ],
  'shop_created' => [
    'subject' => 'החנות שלך מוכנה לצאת לדרך!',
    'greeting' => 'מזל טוב :merchant!',
    'message' => 'החנות :shop_name שלך נוצרה בהצלחה! לחץ על הלחצן למטה כדי להתחבר לחלונית הניהול של החנות.',
    'button_text' => 'עבור אל לוח המחוונים',
  ],
  'shop_updated' => [
    'subject' => 'פרטי החנות עודכנו בהצלחה!',
    'greeting' => 'שלום :merchant!',
    'message' => 'זוהי הודעה שתודיע לך שהחנות :shop_name שלך עודכנה בהצלחה!',
    'button_text' => 'עבור אל לוח המחוונים',
  ],
  'shop_config_updated' => [
    'subject' => 'תצורת החנות עודכנה בהצלחה!',
    'greeting' => 'שלום :merchant!',
    'message' => 'תצורת החנות שלך עודכנה בהצלחה! לחץ על הלחצן למטה כדי להתחבר לחלונית הניהול של החנות.',
    'button_text' => 'עבור אל לוח המחוונים',
  ],
  'shop_down_for_maintainace' => [
    'subject' => 'החנות שלך פגומה!',
    'greeting' => 'שלום :merchant!',
    'message' => 'זוהי הודעה שתודיע לך שהחנות :shop_name שלך מושבתת! אף לקוח לא יכול לבקר בחנות שלך עד שהיא תחזור לחיות מחדש.',
    'button_text' => 'עבור לדף התצורה',
  ],
  'shop_is_live' => [
    'subject' => 'החנות שלך חזרה ל- LIVE!',
    'greeting' => 'שלום :merchant',
    'message' => 'זוהי הודעה שתודיע לך שהחנות :shop_name שלך חזרה לחיות בהצלחה!',
    'button_text' => 'עבור אל לוח המחוונים',
  ],
  'shop_deleted' => [
    'subject' => 'החנות שלך הוסרה מ- :marketplace!',
    'greeting' => 'שלום סוחר!',
    'message' => 'זוהי הודעה שתודיע לך שהחנות שלך נמחקה מהסמן שלנו! נתגעגע אליך.',
  ],
  'system_is_down' => [
    'subject' => 'השוק :marketplace שלך כבר לא פעיל!',
    'greeting' => 'שלום :user!',
    'message' => 'זוהי הודעה שתודיע לך שה- :marketplace השוק שלך אינו פעיל! אף לקוח לא יכול לבקר בשוק שלך עד שהוא יחזור לחיות שוב.',
    'button_text' => 'עבור לדף התצורה',
  ],
  'system_is_live' => [
    'subject' => 'השוק :marketplace שלך חזר ל- LIVE!',
    'greeting' => 'שלום :user!',
    'message' => 'זו הודעה שתודיע לך שה- :marketplace השוק שלך חזר לחיות בהצלחה!',
    'button_text' => 'עבור אל לוח המחוונים',
  ],
  'system_info_updated' => [
    'subject' => ':marketplace - מידע על השוק עודכן בהצלחה!',
    'greeting' => 'שלום :user!',
    'message' => 'זוהי הודעה שתודיע לך שה- :marketplace השוק שלך עודכן בהצלחה!',
    'button_text' => 'עבור אל לוח המחוונים',
  ],
  'system_config_updated' => [
    'subject' => ':marketplace - תצורת השוק עודכנה בהצלחה!',
    'greeting' => 'שלום :user!',
    'message' => 'התצורה של :marketplace השוק שלך עודכנה בהצלחה! לחץ על הלחצן למטה בכניסה לחלונית הניהול.',
    'button_text' => 'הצגת הגדרות',
  ],
  'new_contact_us_message' => [
    'subject' => 'הודעה חדשה באמצעות טופס יצירת קשר: :subject',
    'greeting' => 'שלום!',
    'message_footer_with_phone' => 'אתה יכול להשיב לדוא"ל זה או ליצור קשר ישירות לטלפון זה :phone',
    'message_footer' => 'תוכל להשיב לדוא"ל זה ישירות.',
  ],
  'ticket_acknowledgement' => [
    'subject' => '[מזהה כרטיס: :ticket_id] :subject',
    'greeting' => 'שלום :user',
    'message' => 'זוהי הודעה שתודיע לך שקיבלנו את הכרטיס :ticket_id שלך בהצלחה! צוות התמיכה שלנו יחזור אליכם בהקדם האפשרי.',
    'button_text' => 'צפו בכרטיס',
  ],
  'ticket_created' => [
    'subject' => 'כרטיס תמיכה חדש [מזהה כרטיס: :ticket_id] :subject',
    'greeting' => 'שלום!',
    'message' => 'קיבלת כרטיס תמיכה חדש מזהה :ticket_id, שולח :sender מהספק :vendor. סקור ושמן את הכרטיס לצוות התמיכה.',
    'button_text' => 'צפו בכרטיס',
  ],
  'ticket_assigned' => [
    'subject' => 'כרטיס שהוקצה לך זה עתה [כרטיס IF: :ticket_id] :subject',
    'greeting' => 'שלום :user',
    'message' => 'זוהי הודעה שתיידע אותך שהכרטיס הזהה [כרטיס זיהוי: :ticket_id] :subject בדיוק נמסר לך. בדוק והשיב לו את הכרטיס בהקדם האפשרי.',
    'button_text' => 'השיב לכרטיס',
  ],
  'ticket_replied' => [
    'subject' => ':user השיב לכרטיס [מזהה כרטיס: :ticket_id] :subject',
    'greeting' => 'שלום :user',
    'message' => ':reply',
    'button_text' => 'צפו בכרטיס',
  ],
  'ticket_updated' => [
    'subject' => 'כרטיס [מזהה כרטיס: :ticket_id] :subject עודכן!',
    'greeting' => 'שלום :user!',
    'message' => 'אחד ממזהות כרטיס הכרטיסים התומכים שלך: ticket_id :subject עודכן. אנא צרו איתנו קשר אם אתם זקוקים לעזרה כלשהי.',
    'button_text' => 'צפו בכרטיס',
  ],
  'user_created' => [
    'subject' => ':admin הוסיף אותך לשוק :marketplace!',
    'greeting' => 'מזל טוב :user!',
    'message' => 'נוספה ל- :marketplace על ידי :admin! לחץ על הלחצן למטה כדי להתחבר לחשבונך. השתמש בסיסמה הזמנית לצורך התחברות ראשונית.',
    'alert' => 'אל תשכח לשנות את הסיסמה שלך לאחר הכניסה.',
    'button_text' => 'בקר בפרופיל שלך',
  ],
  'user_updated' => [
    'subject' => 'פרטי החשבון עודכנו בהצלחה!',
    'greeting' => 'שלום :user!',
    'message' => 'זוהי הודעה שתודיע לך שחשבונך עודכן בהצלחה!',
    'button_text' => 'בקר בפרופיל שלך',
  ],
  'verdor_registered' => [
    'subject' => 'ספק חדש שרשום זה עתה!',
    'greeting' => 'מזל טוב!',
    'message' => 'השוק שלך :marketplace בדיוק קיבל צורה חדשה עם שם החנות <strong>: שם_חנות </strong> וכתובת הדוא"ל של הסוחר היא :merchant_email',
    'button_text' => 'עבור אל לוח המחוונים',
  ],
  'email_verification' => [
    'subject' => 'אמת את חשבון :marketplace שלך!',
    'greeting' => 'מזל טוב :user!',
    'message' => 'חשבונך נוצר בהצלחה! לחץ על הלחצן למטה כדי לאמת את כתובת הדוא"ל שלך.',
    'button_text' => 'אמת את הדוא"ל שלי',
  ],
  'dispute_solved' => [
    'subject' => 'מחלוקת [מזהה ההזמנה: :order_id] סומן כפתרון!',
    'greeting' => 'שלום :customer!',
    'message' => 'המחלוקת לגבי הזמנת ההזמנה: :order_id סומנה כפתורה. תודה שהייתם איתנו.',
    'button_text' => 'צפו במחלוקת',
  ],
  'new_chat_message' => [
    'subject' => 'הודעה חדשה באמצעות טופס צ\'אט חי :sender',
    'greeting' => 'שלום :receipent!',
    'message' => 'קיבלת הודעה חדשה דרך חלון הצ\'אט החי ": הודעה". אנא היכנס למרכז השליטה של ​​החנות כדי להשיב.',
    'button_text' => 'תצוגה בלוח המחוונים',
  ],
];