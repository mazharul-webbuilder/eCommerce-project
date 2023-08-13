<?php
return [

  'add_input_field' => 'เพิ่มช่องใส่',
  'remove_input_field' => 'ลบช่องใส่นี้',
  'marketplace_name' => 'ชื่อของชื่อตลาด ผู้เข้าชมจะเห็นชื่อนี้',
  'system_legal_name' => 'ชื่อทางกฎหมายของธุรกิจ',
  'min_pass_lenght' => 'ขั้นต่ำ 6 ตัวอักษร',
  'role_name' => 'หัวเรื่องของบทบาทผู้ใช้',
  'role_type' => 'แพลตฟอร์มและผู้ค้า แพลตฟอร์มประเภทบทบาทใช้ได้เฉพาะกับผู้ใช้แพลตฟอร์มหลักผู้ค้าไม่สามารถใช้บทบาทนี้ได้ ประเภทบทบาทผู้ค้าจะมีให้เมื่อผู้ขายเพิ่มผู้ใช้ใหม่',
  'role_level' => 'ระดับบทบาทจะถูกใช้กำหนดว่าใครสามารถควบคุมใครได้บ้าง ตัวอย่าง: ผู้ใช้ที่มีระดับบทบาท 2 ไม่สามารถแก้ไขผู้ใช้ที่มีระดับบทบาทได้ 1 เก็บ emty หากบทบาทนั้นมีไว้สำหรับผู้ใช้ระดับปลาย',
  'you_cant_set_role_level' => 'ผู้ใช้ระดับบนสุดเท่านั้นที่สามารถตั้งค่านี้',
  'cant_edit_special_role' => 'ประเภทบทบาทนี้ไม่สามารถแก้ไขได้ ระวังการปรับเปลี่ยนการอนุญาตของบทบาทนี้',
  'set_role_permissions' => 'กำหนดสิทธิ์ของบทบาทอย่างระมัดระวัง เลือก \'ประเภทบทบาท\' เพื่อรับโมดูลที่เหมาะสม',
  'permission_modules' => 'เปิดใช้งานโมดูลเพื่อตั้งค่าการอนุญาตสำหรับโมดูล',
  'shipping_rate_delivery_takes' => 'เฉพาะเจาะจงลูกค้าจะเห็นสิ่งนี้',
  'type_dbreset' => 'พิมพ์คำว่า "RESET" ที่ถูกต้องในกล่องเพื่อยืนยันความต้องการของคุณ',
  'type_environment' => 'พิมพ์คำว่า "สิ่งแวดล้อม" ที่ถูกต้องในกล่องเพื่อยืนยันความต้องการของคุณ',
  'type_uninstall' => 'พิมพ์คำที่แน่นอน "ถอนการติดตั้ง" ในช่องเพื่อยืนยันความต้องการของคุณ',
  'module' => [
    'name' => 'ผู้ใช้ทั้งหมดภายใต้บทบาทนี้จะสามารถดำเนินการตามที่ระบุเพื่อจัดการ :module',
    'access' => [
      'common' => 'นี่คือโมดูล :Access นั่นหมายความว่าทั้งผู้ใช้แพลตฟอร์มและผู้ใช้ร้านค้าสามารถเข้าถึงได้',
      'platform' => 'นี่คือโมดูล :Access นั่นหมายความว่าผู้ใช้แพลตฟอร์มเท่านั้นที่สามารถเข้าถึงได้',
      'merchant' => 'นี่คือโมดูล :Access นั่นหมายความว่ามีเพียงผู้ใช้ของร้านค้าเท่านั้นที่สามารถเข้าถึงได้',
    ],
  ],
  'currency_iso_code' => 'รหัส ISO 4217 ตัวอย่างเช่นดอลลาร์สหรัฐมีรหัส USD และรหัสสกุลเงินของญี่ปุ่นคือ JPY',
  'country_iso_code' => 'รหัส ISO 3166_2 ตัวอย่างเช่นตัวอย่าง: สำหรับสหรัฐอเมริการหัสคือ US',
  'currency_subunit' => 'หน่วยย่อยที่เป็นเศษส่วนของหน่วยฐาน ตัวอย่างเช่น: cent, centavo, paisa',
  'currency_symbol_first' => 'ตัวอย่าง: $ 13.21',
  'currency_decimalpoint' => 'ตัวอย่าง: 13.21, 13,21',
  'currency_thousands_separator' => 'ตัวอย่าง: 1,000, 1.000, 1 000',
  'cover_img_size' => 'ขนาดภาพหน้าปกควรเป็น 1280x300px',
  'featured_img_size' => 'ขนาดรูปภาพเด่นควรเป็น 285x190px',
  'brand_featured_img_size' => 'ขนาดรูปภาพเด่นควรเป็น 380x160px',
  'featured_image' => 'ภาพนี้จะแสดงในส่วนหมวดหมู่ที่แนะนำในหน้าแรก',
  'brand_featured_image' => 'ภาพนี้จะแสดงในส่วนแบรนด์เด่นในหน้าแรก',
  'slug' => 'กระสุนมักเป็น URL ที่เป็นมิตรกับเครื่องมือค้นหา',
  'shop_slug' => 'สิ่งนี้จะใช้เป็น URL ร้านค้าของคุณคุณไม่สามารถเปลี่ยนได้ในภายหลัง มีความคิดสร้างสรรค์ในการเลือกกระสุนสำหรับร้านค้าของคุณ',
  'shop_url' => 'เส้นทางที่สมบูรณ์ไปยังหน้า Landing Page ของร้านค้า คุณไม่สามารถเปลี่ยน URL',
  'shop_timezone' => 'เขตเวลาจะไม่ส่งผลกระทบต่อร้านค้าหรือตลาด มันเป็นเพียงเพื่อรู้เพิ่มเติมเกี่ยวกับร้านค้าของคุณ',
  'url' => 'ที่อยู่เว็บ',
  'optional' => '(ไม่จำเป็น)',
  'use_markdown_to_bold' => 'เพิ่ม ** ทั้งสองคำที่สำคัญเพื่อเน้น',
  'announcement_action_text' => 'ปุ่มการกระทำเพิ่มเติมเพื่อเชื่อมโยงประกาศไปยัง url',
  'announcement_action_url' => 'URL การดำเนินการกับบล็อกโพสต์หรือ URL ใด ๆ',
  'blog_feature_img_hint' => 'ขนาดภาพควรเป็น 960x480px',
  'code' => 'รหัส',
  'brand' => 'แบรนด์ของผลิตภัณฑ์ ไม่จำเป็น แต่แนะนำ',
  'shop_name' => 'แบรนด์หรือชื่อที่แสดงของร้านค้า',
  'shop_status' => 'หากเปิดใช้งานแล้วทางร้านจะเปิดทำการทันที',
  'shop_maintenance_mode_handle' => 'หากโหมดการบำรุงรักษาเปิดอยู่ร้านค้าจะออฟไลน์และรายชื่อทั้งหมดจะถูกยกเลิกจากตลาดจนกว่าจะปิดการบำรุงรักษา',
  'system_maintenance_mode_handle' => 'หากโหมดการบำรุงรักษาเปิดอยู่ตลาดจะออฟไลน์และธงโหมดการบำรุงรักษาจะแสดงต่อผู้เข้าชม พ่อค้ายังสามารถเข้าถึงแผงผู้ดูแลระบบของพวกเขา',
  'system_physical_address' => 'ที่ตั้งทางกายภาพของตลาด / สำนักงาน',
  'system_email' => 'การแจ้งเตือนทั้งหมดจะถูกส่งไปยังที่อยู่อีเมลนี้รับอีเมลสนับสนุน (ถ้าตั้งค่า)',
  'system_timezone' => 'ระบบนี้จะใช้เขตเวลานี้ในการทำงาน',
  'system_currency' => 'สกุลเงินของตลาด',
  'system_slogan' => 'สโลแกนที่อธิบายตลาดของคุณมากที่สุด',
  'system_length_unit' => 'หน่วยความยาวจะถูกใช้ทั่วตลาด',
  'system_weight_unit' => 'หน่วยของน้ำหนักจะถูกใช้ทั่วตลาด',
  'system_valume_unit' => 'หน่วยของ valume จะถูกใช้ทั่วตลาด',
  'ask_customer_for_email_subscription' => 'เมื่อลูกค้าใหม่ลงทะเบียนบัญชีถามลูกค้าของคุณว่าต้องการรับโปรโมชันและการแจ้งเตือนอื่น ๆ ทางอีเมลหรือไม่ การปิดตัวเลือกจะส่งผลให้การสมัครสมาชิกอัตโนมัติ ในกรณีดังกล่าวให้ชัดเจนในส่วนข้อกำหนดและเงื่อนไข',
  'allow_guest_checkout' => 'สิ่งนี้จะช่วยให้ลูกค้าชำระเงินโดยไม่ต้องลงทะเบียนบนเว็บไซต์',
  'vendor_can_view_customer_info' => 'นี่จะช่วยให้ผู้ขายเห็นข้อมูลรายละเอียดของลูกค้าในหน้าการสั่งซื้อ มิฉะนั้นจะเห็นชื่อที่อยู่อีเมลและที่อยู่สำหรับการเรียกเก็บเงิน / การจัดส่ง',
  'system_pagination' => 'ตั้งค่าการแบ่งหน้าสำหรับตารางข้อมูลบนแผงควบคุม',
  'subscription_name' => 'ให้ชื่อที่มีความหมายกับแผนการสมัครสมาชิก',
  'subscription_plan_id' => 'นี่คือตัวระบุที่จะต้องตรงกับรหัสแผนของ Stripe',
  'featured_subscription' => 'ควรมีการสมัครสมาชิกแนะนำเพียงหนึ่งรายการเท่านั้น',
  'subscription_cost' => 'ค่าใช้จ่ายของการสมัครสมาชิกต่อเดือน',
  'team_size' => 'ขนาดทีมคือจำนวนผู้ใช้ทั้งหมดสามารถลงทะเบียนภายใต้ทีมนี้',
  'inventory_limit' => 'จำนวนรายชื่อทั้งหมด ความแตกต่างของผลิตภัณฑ์เดียวกันจะถือเป็นรายการอื่น',
  'marketplace_commission' => 'อัตราร้อยละของการคิดมูลค่ารายการตามคำสั่งซื้อตามตลาด',
  'transaction_fee' => 'หากคุณต้องการเรียกเก็บค่าธรรมเนียมคงที่สำหรับทุกธุรกรรม',
  'subscription_best_for' => 'กลุ่มลูกค้าเป้าหมายสำหรับแพ็คเกจนี้ สิ่งนี้จะปรากฏให้ลูกค้าเห็น',
  'config_return_refund' => 'นโยบายการคืนสินค้า & คืนเงินสำหรับร้านค้าของคุณ โปรดอ่านนโยบายของตลาดก่อนที่จะระบุของคุณ',
  'config_trial_days' => 'ผู้ขายจะถูกเรียกเก็บเงินหลังจากระยะเวลาทดลองใช้ หากคุณไม่ใช้บัตรล่วงหน้าบัญชีการค้าจะหยุดหลังจากเวลานี้',
  'charge_after_trial_days' => 'จะถูกเรียกเก็บเงินหลังจากระยะเวลาทดลองใช้ :days วัน',
  'required_card_upfront' => 'คุณต้องการใช้ข้อมูลบัตรเมื่อผู้ค้าลงทะเบียนหรือไม่?',
  'leave_empty_to_save_as_draft' => 'เว้นว่างไว้เพื่อบันทึกเป็นแบบร่าง',
  'logo_img_size' => 'ขนาดภาพโลโก้ควรเป็นขั้นต่ำ 300x300px',
  'brand_logo_size' => 'ขนาดภาพโลโก้ควรเป็น 120x40px และ. png',
  'brand_icon_size' => 'ขนาดภาพไอคอนควรเป็น 32x32px และ. png',
  'config_alert_quantity' => 'อีเมลแจ้งเตือนจะถูกส่งสินค้าคงคลังของคุณไปด้านล่างปริมาณการแจ้งเตือน',
  'config_max_img_size_limit_kb' => 'ระบบ จำกัด ขนาดภาพสูงสุดสามารถอัปโหลดสำหรับผลิตภัณฑ์ / สินค้าคงคลัง / โลโก้ / avatar ขนาดเป็นกิโลไบต์',
  'config_max_number_of_inventory_imgs' => 'เลือกจำนวนรูปภาพที่สามารถอัปโหลดสำหรับรายการสินค้าคงคลังเดียว',
  'config_address_default_country' => 'ตั้งค่านี้เพื่อกรอกแบบฟอร์มที่อยู่ให้เร็วขึ้น เห็นได้ชัดว่าผู้ใช้สามารถเปลี่ยนค่าเมื่อเพิ่มที่อยู่ใหม่',
  'config_address_default_state' => 'ตั้งค่านี้เพื่อกรอกแบบฟอร์มที่อยู่ให้เร็วขึ้น เห็นได้ชัดว่าผู้ใช้สามารถเปลี่ยนค่าเมื่อเพิ่มที่อยู่ใหม่',
  'config_show_address_title' => 'แสดง / ซ่อนชื่อที่อยู่ในขณะที่ดู / พิมพ์ที่อยู่',
  'config_address_show_country' => 'แสดง / ซ่อนชื่อประเทศในขณะที่ดู / พิมพ์ที่อยู่ สิ่งนี้จะเป็นประโยชน์หากตลาดของคุณในภูมิภาคเล็ก ๆ',
  'config_address_show_map' => 'ต้องการแสดงแผนที่พร้อมที่อยู่หรือไม่ ตัวเลือกนี้จะสร้างแผนที่โดยใช้ Google Map',
  'config_show_currency_symbol' => 'คุณต้องการแสดงสัญลักษณ์สกุลเงินเมื่อแสดงราคาหรือไม่ ตัวอย่าง: $ 123',
  'config_show_space_after_symbol' => 'ต้องการจัดรูปแบบราคาโดยใส่ช่องว่างหลังสัญลักษณ์ ตัวอย่าง: $ 123',
  'config_decimals' => 'คุณต้องการแสดงตัวเลขกี่หลักหลังจุดทศนิยม ตัวอย่าง: 13.21, 13.123',
  'config_gift_card_pin_size' => 'จำนวนหลักที่คุณต้องการสร้างหมายเลขบัตรของขวัญ ความยาวเริ่มต้น 10',
  'config_gift_card_serial_number_size' => 'จำนวนหลักที่คุณต้องการสร้างหมายเลขซีเรียลการ์ด ความยาวเริ่มต้น 13',
  'config_coupon_code_size' => 'คุณต้องการสร้างรหัสคูปองกี่หลัก ความยาวเริ่มต้น 8',
  'shop_email' => 'การแจ้งเตือนทั้งหมดจะถูกส่งไปยังที่อยู่อีเมลนี้ (สินค้าคงเหลือคำสั่งซื้อตั๋วการโต้แย้ง ฯลฯ ) รับอีเมลการสนับสนุนลูกค้า (ถ้าตั้งค่า)',
  'shop_legal_name' => 'ชื่อทางกฎหมายของร้านค้า',
  'shop_owner_id' => 'เจ้าของและผู้ดูแลระบบขั้นสูงของร้านค้า ผู้ใช้ที่ลงทะเบียนในฐานะ Merchant สามารถเป็นเจ้าของร้านค้าได้ คุณไม่สามารถเปลี่ยนแปลงได้ในภายหลัง',
  'shop_description' => 'รายละเอียดแบรนด์ของร้านค้าข้อมูลนี้จะปรากฏในหน้าแรกของร้านค้า',
  'attribute_type' => 'ประเภทของคุณลักษณะ สิ่งนี้จะช่วยในการแสดงตัวเลือกในหน้าผลิตภัณฑ์',
  'attribute_name' => 'ชื่อนี้จะแสดงในหน้าผลิตภัณฑ์',
  'attribute_value' => 'ค่านี้จะแสดงในหน้าผลิตภัณฑ์เป็นตัวเลือกที่เลือกได้',
  'parent_attribute' => 'ตัวเลือกจะปรากฏภายใต้คุณลักษณะนี้',
  'list_order' => 'ดูคำสั่งในรายการ',
  'shop_external_url' => 'หากคุณเป็นเจ้าของเว็บไซต์คุณสามารถใส่ลิงค์ภายนอกที่นี่คุณสามารถตั้งค่า URL เป็นหน้า Landing Page ของร้านค้า',
  'product_name' => 'ลูกค้าจะไม่เห็นสิ่งนี้ ชื่อนี้จะช่วยให้ร้านค้าสามารถค้นหารายการสำหรับรายชื่อ',
  'product_featured_image' => 'ลูกค้าจะไม่เห็นสิ่งนี้ สิ่งนี้จะช่วยให้ร้านค้าสามารถค้นหารายการสำหรับรายชื่อ',
  'product_images' => 'ลูกค้าจะเห็นภาพนี้เฉพาะเมื่อรายชื่อผู้ขายไม่มีภาพที่จะแสดง',
  'product_active' => 'ผู้ค้าจะพบรายการที่ใช้งานเท่านั้น',
  'product_description' => 'ลูกค้าจะเห็นสิ่งนี้ นี่คือคำอธิบายผลิตภัณฑ์หลักและทั่วไป',
  'model_number' => 'ตัวบ่งชี้ของผลิตภัณฑ์ที่กำหนดโดยผู้ผลิต ไม่จำเป็น แต่แนะนำ',
  'gtin' => 'หมายเลขรายการการค้าทั่วโลก (GTIN) เป็นตัวระบุที่ไม่ซ้ำกันของผลิตภัณฑ์ในตลาดโลก หากคุณต้องการรับรหัส ISBN หรือ UPC สำหรับผลิตภัณฑ์ของคุณคุณจะพบข้อมูลเพิ่มเติมได้ที่เว็บไซต์ต่อไปนี้: http://www.isbn.org/ และ http://www.uc-council.org/',
  'mpn' => 'หมายเลขชิ้นส่วนของผู้ผลิต (MPN) เป็นตัวระบุเฉพาะที่ออกโดยผู้ผลิต คุณสามารถรับ MPN ได้จากผู้ผลิต ไม่จำเป็น แต่แนะนำ',
  'sku' => 'SKU (Stock Keeping Unit) เป็นตัวระบุเฉพาะของผู้ขาย มันจะช่วยจัดการสินค้าคงคลังของคุณ',
  'isbn' => 'หมายเลขหนังสือมาตรฐานสากล (ISBN) เป็นบาร์โค้ดตัวระบุหนังสือเชิงพาณิชย์ที่ไม่ซ้ำใคร รหัส ISBN แต่ละรหัสระบุหนังสือที่ไม่ซ้ำกัน ISBN มี 10 หรือ 13 หลัก ISBN ทั้งหมดที่กำหนดหลังจากวันที่ 1 มกราคม 2550 มี 13 หลัก โดยปกติแล้ว ISBN จะพิมพ์อยู่บนปกหลังของหนังสือ',
  'ean' => 'หมายเลขบทความยุโรป (EAN) เป็นมาตรฐานบาร์โค้ด, รหัสผลิตภัณฑ์ 12 หรือ 13 หลัก คุณสามารถขอรับ EAN ได้จากผู้ผลิต หากผลิตภัณฑ์ของคุณไม่มีผู้ผลิต EAN และคุณต้องซื้อรหัส EAN ให้ไปที่ GS1 UK http://www.gs1uk.org',
  'upc' => 'รหัสผลิตภัณฑ์สากล (UPC) หรือที่เรียกว่า GTIN-12 และ UPC-A ตัวระบุตัวเลขที่ไม่ซ้ำกันสำหรับผลิตภัณฑ์เพื่อการค้าที่มักจะเกี่ยวข้องกับบาร์โค้ดที่พิมพ์บนสินค้าขายปลีก',
  'meta_title' => 'แท็กชื่อ - เทคนิคที่เรียกว่าองค์ประกอบชื่อเรื่อง - กำหนดชื่อของเอกสาร แท็กชื่อมักใช้ในหน้าผลลัพธ์ของเครื่องมือค้นหา (SERPs) เพื่อแสดงตัวอย่างโค้ดสำหรับหน้าเว็บที่กำหนดและมีความสำคัญทั้งสำหรับ SEO และการแบ่งปันทางสังคม',
  'meta_description' => 'คำอธิบาย Meta เป็นแอตทริบิวต์ HTML ที่ให้คำอธิบายที่กระชับของเนื้อหาของหน้าเว็บ คำอธิบาย Meta มักใช้ในหน้าผลลัพธ์ของเครื่องมือค้นหา (SERPs) เพื่อแสดงตัวอย่างโค้ดสำหรับหน้าเว็บที่ระบุ',
  'catalog_min_price' => 'กำหนดราคาต่ำสุดสำหรับผลิตภัณฑ์ ผู้ขายสามารถเพิ่มสินค้าคงคลังภายในวงเงินราคานี้',
  'catalog_max_price' => 'กำหนดราคาสูงสุดสำหรับผลิตภัณฑ์ ผู้ขายสามารถเพิ่มสินค้าคงคลังภายในวงเงินราคานี้',
  'requires_shipping' => 'รายการนี้ต้องจัดส่ง',
  'downloadable' => 'รายการนี้เป็นเนื้อหาดิจิทัลและผู้ซื้อสามารถดาวน์โหลดรายการได้',
  'manufacturer_url' => 'ลิงค์เว็บไซต์อย่างเป็นทางการของผู้ผลิต',
  'manufacturer_email' => 'ระบบจะใช้ที่อยู่อีเมลนี้เพื่อสื่อสารกับผู้ผลิต',
  'manufacturer_phone' => 'หมายเลขโทรศัพท์ฝ่ายสนับสนุนของผู้ผลิต',
  'supplier_email' => 'ระบบจะใช้ที่อยู่อีเมลนี้เพื่อสื่อสารกับซัพพลายเออร์',
  'supplier_contact_person' => 'บุคคลที่ติดต่อ',
  'shop_address' => 'ที่อยู่ทางกายภาพของร้านค้า',
  'search_product' => 'คุณสามารถใช้ตัวระบุ GTIN เช่น UPC, ISBN, EAN, JAN หรือ ITF คุณยังสามารถใช้ชื่อและหมายเลขรุ่นหรือส่วนหนึ่งของชื่อหรือหมายเลขรุ่น',
  'seller_description' => 'นี่คือคำอธิบายเฉพาะของผู้ขายของผลิตภัณฑ์ ลูกค้าจะเห็นสิ่งนี้',
  'seller_product_condition' => 'สภาพปัจจุบันของผลิตภัณฑ์คืออะไร?',
  'condition_note' => 'หมายเหตุสภาพจะมีประโยชน์เมื่อใช้ / ตกแต่งใหม่',
  'select_supplier' => 'ฟิลด์ที่แนะนำ สิ่งนี้จะช่วยในการสร้างรายงาน',
  'select_warehouse' => 'เลือกคลังสินค้าที่จะส่งสินค้า',
  'select_packagings' => 'รายการตัวเลือกบรรจุภัณฑ์ที่มีเพื่อจัดส่งผลิตภัณฑ์ เว้นว่างไว้เพื่อปิดใช้งานตัวเลือกบรรจุภัณฑ์',
  'available_from' => 'วันที่ที่หุ้นจะพร้อมใช้งาน เริ่มต้น = ทันที',
  'sale_price' => 'ราคาไม่รวมภาษีใด ๆ ภาษีจะถูกคำนวณโดยอัตโนมัติตามเขตการจัดส่ง',
  'purchase_price' => 'ฟิลด์ที่แนะนำ สิ่งนี้จะช่วยในการคำนวณกำไรและสร้างรายงาน',
  'min_order_quantity' => 'ปริมาณที่อนุญาตให้สั่งซื้อ ต้องเป็นค่าจำนวนเต็ม ค่าเริ่มต้น = 1',
  'offer_price' => 'ราคาเสนอซื้อจะมีผลระหว่างวันที่เริ่มต้นและวันที่สิ้นสุดของข้อเสนอ',
  'offer_start' => 'ข้อเสนอต้องมีวันที่เริ่มต้น ต้องระบุหากได้รับฟิลด์ราคาข้อเสนอ',
  'offer_end' => 'ข้อเสนอต้องมีวันที่สิ้นสุด ต้องระบุหากได้รับฟิลด์ราคาข้อเสนอ',
  'seller_inventory_status' => 'รายการนี้เปิดขายหรือไม่? รายการที่ไม่ใช้งานจะไม่ปรากฏในตลาด',
  'stock_quantity' => 'จำนวนรายการที่คุณมีในคลังสินค้าของคุณ',
  'offer_starting_time' => 'เสนอเวลาเริ่มต้น',
  'offer_ending_time' => 'เวลาสิ้นสุดของข้อเสนอ',
  'set_attribute' => 'หากค่าไม่ได้อยู่ในรายการคุณสามารถเพิ่มมูลค่าที่เหมาะสมโดยเพียงพิมพ์ค่าใหม่',
  'variants' => 'ผลิตภัณฑ์ย่อย',
  'delete_this_combination' => 'ลบชุดค่าผสมนี้',
  'romove_this_cart_item' => 'ลบรายการนี้ออกจากรถเข็น',
  'no_product_found' => 'ไม่พบสินค้า! โปรดลองค้นหาอื่นหรือเพิ่มผลิตภัณฑ์ใหม่',
  'not_available' => 'ใช้งานไม่ได้!',
  'admin_note' => 'หมายเหตุผู้ดูแลระบบจะไม่ปรากฏให้ลูกค้าเห็น',
  'message_to_customer' => 'ข้อความนี้จะส่งถึงลูกค้าพร้อมอีเมลใบแจ้งหนี้',
  'empty_cart' => 'รถเข็นว่างเปล่า',
  'send_invoice_to_customer' => 'ส่งใบแจ้งหนี้ให้กับลูกค้าด้วยข้อความนี้',
  'delete_the_cart' => 'ลบรถเข็นและดำเนินการตามคำสั่ง',
  'order_status_send_email' => 'อีเมลจะถูกส่งไปยังลูกค้าเมื่อสถานะการสั่งซื้ออัพเดท',
  'order_status_email_template' => 'เทมเพลตอีเมลนี้จะถูกส่งไปยังลูกค้าเมื่อสถานะการสั่งซื้ออัพเดท จำเป็นหากอีเมลถูกเปิดใช้งานสำหรับสถานะ',
  'update_order_status' => 'อัพเดทสถานะการสั่งซื้อ',
  'email_template_name' => 'ตั้งชื่อแม่แบบ ใช้สำหรับระบบเท่านั้น',
  'template_use_for' => 'เทมเพลตจะถูกใช้โดย',
  'email_template_subject' => 'สิ่งนี้จะใช้เป็นหัวเรื่องของอีเมล',
  'email_template_body' => 'มีรหัสย่อบางส่วนที่คุณสามารถใช้เป็นข้อมูลแบบไดนามิก ตรวจสอบด้านล่างของแบบฟอร์มนี้เพื่อดูรหัสย่อที่มี',
  'email_template_type' => 'ประเภทของอีเมล',
  'template_sender_email' => 'ที่อยู่อีเมลนี้จะใช้ในการส่งอีเมลและผู้รับสามารถตอบกลับนี้',
  'template_sender_name' => 'ชื่อนี้จะใช้เป็นชื่อผู้ส่ง',
  'packaging_name' => 'ลูกค้าจะเห็นสิ่งนี้หากมีตัวเลือกบรรจุภัณฑ์ในการสั่งซื้อ',
  'width' => 'ความกว้างของบรรจุภัณฑ์',
  'height' => 'ความสูงของบรรจุภัณฑ์',
  'depth' => 'ความลึกของบรรจุภัณฑ์',
  'packaging_cost' => 'ค่าใช้จ่ายของบรรจุภัณฑ์ คุณสามารถเลือกได้ว่าต้องการคิดต้นทุนกับลูกค้าหรือไม่',
  'set_as_default_packaging' => 'หากตรวจสอบ: บรรจุภัณฑ์นี้จะใช้เป็นแพ็คเกจการจัดส่งเริ่มต้น',
  'shipping_carrier_name' => 'ชื่อของผู้ให้บริการจัดส่ง',
  'shipping_zone_name' => 'ตั้งชื่อโซน ลูกค้าจะไม่เห็นชื่อนี้',
  'shipping_rate_name' => 'ให้ชื่อที่มีความหมาย ลูกค้าจะเห็นชื่อนี้เมื่อทำการเช็คเอาท์ อี ก. \'การจัดส่งมาตรฐาน\'',
  'shipping_zone_carrier' => 'คุณสามารถเชื่อมโยงผู้ให้บริการจัดส่ง ลูกค้าจะเห็นสิ่งนี้เมื่อทำการเช็คเอาท์',
  'free_shipping' => 'หากเปิดใช้งานฉลากการจัดส่งฟรีจะปรากฏในหน้ารายการผลิตภัณฑ์',
  'shipping_rate' => 'ตรวจสอบตัวเลือก \'จัดส่งฟรี\' หรือให้จำนวน 0 สำหรับการจัดส่งฟรี',
  'shipping_zone_tax' => 'โปรไฟล์ภาษีนี้จะมีผลบังคับใช้เมื่อลูกค้าทำการซื้อจากโซนการจัดส่งนี้',
  'shipping_zone_select_countries' => 'เลือกประเทศในโซนนี้ที่คุณจัดส่ง ตรวจสอบตัวเลือกที่เหลือของโลกสำหรับโซนทั่วโลก',
  'rest_of_the_world' => 'โซนนี้รวมถึงประเทศและภูมิภาคใด ๆ ที่ไม่ได้กำหนดไว้ในเขตจัดส่งอื่น ๆ ของคุณ',
  'shipping_max_width' => 'ความกว้างของบรรจุภัณฑ์สูงสุดที่จัดการโดยผู้ให้บริการ ปล่อยว่างไว้เพื่อปิดการใช้งาน',
  'shipping_tracking_url' => '\'@\' จะถูกแทนที่ด้วยหมายเลขติดตามแบบไดนามิก',
  'shipping_tracking_url_example' => 'เช่น: http://example.com/track.php?num=@',
  'order_tracking_id' => 'รหัสการติดตามคำสั่งซื้อจากผู้ให้บริการจัดส่ง',
  'order_fulfillment_carrier' => 'เลือกผู้ให้บริการจัดส่งเพื่อปฏิบัติตามคำสั่งซื้อ',
  'notify_customer' => 'อีเมลแจ้งเตือนจะถูกส่งไปยังลูกค้าด้วยข้อมูลที่จำเป็น',
  'shipping_weight' => 'จะใช้ในการคำนวณค่าจัดส่ง',
  'order_number_prefix_suffix' => 'คำนำหน้าและคำต่อท้ายจะถูกเพิ่มโดยอัตโนมัติเพื่อจัดรูปแบบหมายเลขคำสั่งซื้อทั้งหมด เว้นว่างไว้หากคุณไม่ต้องการจัดรูปแบบหมายเลขการสั่งซื้อ',
  'customer_not_see_this' => 'ลูกค้าจะไม่เห็นสิ่งนี้',
  'customer_will_see_this' => 'ลูกค้าจะเห็นสิ่งนี้',
  'refund_select_order' => 'เลือกคำสั่งซื้อที่คุณต้องการคืนเงิน',
  'refund_order_fulfilled' => 'มีการจัดส่งสินค้าให้กับลูกค้าหรือไม่',
  'refund_return_goods' => 'สินค้าถูกส่งคืนให้คุณหรือไม่?',
  'customer_paid' => 'ลูกค้าชำระเงิน <strong> <em> :amount </em> </strong> รวมภาษีทั้งหมดค่าจัดส่งและอื่น ๆ',
  'order_refunded' => 'ก่อนหน้านี้ได้รับเงินคืน <strong> <em> :amount </em> </strong> จากยอดรวม <strong> <em> :total </em> </strong>',
  'search_customer' => 'ค้นหาลูกค้าด้วยที่อยู่อีเมลชื่อดีหรือชื่อเต็ม',
  'coupon_quantity' => 'จำนวนคูปองที่มีทั้งหมด',
  'coupon_name' => 'ชื่อจะถูกใช้ในใบแจ้งหนี้และสรุปการสั่งซื้อ',
  'coupon_code' => 'รหัสคูปองที่ไม่ซ้ำกัน',
  'coupon_value' => 'มูลค่าของคูปอง',
  'coupon_min_order_amount' => 'เลือกจำนวนสั่งซื้อขั้นต่ำสำหรับรถเข็น (ไม่จำเป็น)',
  'coupon_quantity_per_customer' => 'เลือกจำนวนครั้งที่ลูกค้าสามารถใช้คูปองนี้ หากคุณปล่อยว่างไว้ลูกค้าสามารถใช้คูปองนี้ได้จนกว่าจะเป็นประโยชน์',
  'starting_time' => 'คูปองจะสามารถใช้ได้ตั้งแต่เวลานี้',
  'ending_time' => 'คูปองจะสามารถใช้ได้จนถึงเวลานี้',
  'exclude_tax_n_shipping' => 'ไม่รวมภาษีและค่าจัดส่ง',
  'exclude_offer_items' => 'ยกเว้นรายการที่มีข้อเสนอพิเศษหรือส่วนลดอยู่แล้ว',
  'coupon_limited_to_customers' => 'เลือกว่าคุณต้องการทำคูปองสำหรับลูกค้าเฉพาะเท่านั้น',
  'coupon_limited_to_shipping_zones' => 'เลือกว่าคุณต้องการทำคูปองสำหรับเขตการจัดส่งสินค้าเฉพาะเท่านั้น',
  'coupon_limited_to' => 'ใช้ที่อยู่อีเมลหรือชื่อเพื่อค้นหาลูกค้า',
  'faq_placeholders' => 'คุณสามารถใช้ตัวยึดตำแหน่งนี้ในคำถามและคำตอบของคุณซึ่งจะถูกแทนที่ด้วยค่าจริง',
  'gift_card_name' => 'ชื่อของบัตรของขวัญ',
  'gift_card_pin_code' => 'รหัสลับเฉพาะ รหัสพินคือรหัสผ่านสำหรับการ์ด คุณไม่สามารถเปลี่ยนค่านี้ได้ในภายหลัง',
  'gift_card_serial_number' => 'หมายเลขซีเรียลที่ไม่ซ้ำกันสำหรับการ์ด คุณไม่สามารถเปลี่ยนค่านี้ได้ในภายหลัง',
  'gift_card_value' => 'มูลค่าของการ์ด ลูกค้าจะได้รับส่วนลดเท่ากัน',
  'gift_card_activation_time' => 'เวลาเปิดใช้งานการ์ด การ์ดนี้สามารถใช้งานได้หลังจากเวลานี้',
  'gift_card_expiry_time' => 'เวลาหมดอายุของการ์ด บัตรสามารถใช้งานได้จนถึงเวลานี้',
  'gift_card_partial_use' => 'อนุญาตให้ใช้มูลค่าบัตรทั้งหมดบางส่วน',
  'number_between' => 'ระหว่าง :min และ :max',
  'default_tax_id' => 'โปรไฟล์ภาษีเริ่มต้นจะถูกนำไปใช้เมื่อเขตการจัดส่งไม่ครอบคลุมพื้นที่ภาษีใด ๆ',
  'default_payment_method_id' => 'หากเลือกวิธีการชำระเงินจะถูกเลือกไว้ล่วงหน้าเมื่อสร้างคำสั่งซื้อใหม่',
  'config_order_handling_cost' => 'เพิ่มต้นทุนเพิ่มเติมนี้พร้อมค่าจัดส่งของทุกคำสั่งซื้อ เว้นว่างไว้เพื่อปิดการใช้งานการจัดการคำสั่งซื้อ',
  'default_warehouse' => 'คลังสินค้าเริ่มต้นจะถูกเลือกไว้ล่วงหน้าเมื่อเพิ่มสินค้าคงคลังใหม่',
  'default_supplier' => 'ผู้จัดหาเริ่มต้นจะถูกเลือกไว้ล่วงหน้าเมื่อเพิ่มคลังโฆษณาใหม่',
  'default_packaging_ids_for_inventory' => 'บรรจุภัณฑ์เริ่มต้นจะถูกเลือกไว้ล่วงหน้าเมื่อเพิ่มสินค้าคงคลังใหม่ วิธีนี้จะช่วยให้คุณเพิ่มคลังโฆษณาได้เร็วขึ้น',
  'config_payment_environment' => 'ข้อมูลรับรองมีไว้สำหรับโหมดสดหรือทดสอบเพิ่มเติมหรือไม่',
  'config_authorize_net_transaction_key' => 'คีย์ธุรกรรมจาก Authorize.net หากคุณไม่แน่ใจให้ติดต่อ Authorize.net เพื่อรับความช่วยเหลือ',
  'config_authorize_net_api_login_id' => 'รหัสล็อกอิน API จาก Authorize.net หากคุณไม่แน่ใจให้ติดต่อ Authorize.net เพื่อรับความช่วยเหลือ',
  'config_enable_payment_method' => 'ระบบมีเกตเวย์การชำระเงินหลายประเภท คุณสามารถเปิด / ปิดการใช้งานเกตเวย์การชำระเงินเพื่อควบคุมตัวเลือกการชำระเงินที่ผู้ขายสามารถใช้เพื่อรับการชำระเงินจากลูกค้า',
  'config_additional_details' => 'แสดงในหน้าวิธีการชำระเงินในขณะที่ลูกค้ากำลังเลือกวิธีชำระเงิน',
  'config_payment_instructions' => 'แสดงในหน้าขอบคุณหลังจากลูกค้าทำการสั่งซื้อแล้ว',
  'config_stripe_publishable_key' => 'คีย์ API ที่เผยแพร่ได้มีไว้เพื่อระบุบัญชีของคุณด้วย Stripe เท่านั้น แต่ไม่ได้เป็นความลับ พวกเขาสามารถเผยแพร่ได้อย่างปลอดภัย',
  'config_paypal_express_account' => 'มักจะเป็นที่อยู่อีเมลของแอปพลิเคชัน PayPal ของคุณ สร้างแอปพลิเคชัน PayPal ของคุณจากที่นี่: https://developer.paypal.com/webapps/developer/applications/myapps',
  'config_paypal_express_client_id' => 'รหัสลูกค้าเป็นตัวระบุที่ไม่ซ้ำใครของแอปพลิเคชัน PayPal ของคุณ คุณจะพบค่านี้ในส่วนแอพและข้อมูลรับรองของฉันในหน้าแดชบอร์ด PayPal ของคุณ',
  'config_paypal_express_secret' => 'รหัสลับ API ของ PayPal คุณจะพบค่านี้ในส่วนแอพและข้อมูลรับรองของฉันในหน้าแดชบอร์ด PayPal ของคุณ',
  'config_paystack_merchant_email' => 'อีเมลผู้ขายของบัญชี Paystack ของคุณ',
  'config_paystack_public_key' => 'รหัสสาธารณะเป็นตัวระบุที่ไม่ซ้ำใครของแอปพลิเคชัน Paystack คุณจะพบค่านี้ในส่วนของคีย์ API และ Webhooks ในการตั้งค่าบนแผงควบคุม Paystack ของคุณ',
  'config_paystack_secret' => 'รหัสลับ API ของ Paystack คุณจะพบค่านี้ในส่วนของคีย์ API และ Webhooks ในการตั้งค่าบนแผงควบคุม Paystack ของคุณ',
  'config_auto_archive_order' => 'เก็บคำสั่งซื้อโดยอัตโนมัติ เลือกคุณสมบัตินี้หากคุณไม่ต้องการเก็บถาวรคำสั่งซื้อทั้งหมดด้วยตนเองหลังจากที่พวกเขาปฏิบัติตามแล้ว',
  'config_pagination' => 'จำนวนรายการที่คุณต้องการดูต่อหน้าบนตารางข้อมูล',
  'support_phone' => 'ลูกค้าจะติดต่อหมายเลขนี้เพื่อรับการสนับสนุนและสอบถาม',
  'support_email' => 'คุณจะได้รับอีเมลสนับสนุนทั้งหมดตามที่อยู่นี้',
  'support_phone_toll_free' => 'หากคุณมีหมายเลขโทรฟรีสำหรับการสนับสนุนลูกค้า',
  'default_sender_email_address' => 'อีเมลที่ส่งถึงลูกค้าอัตโนมัติทั้งหมดจะถูกส่งจากที่อยู่อีเมลนี้ และเมื่อไม่สามารถตั้งค่าที่อยู่อีเมลของผู้ส่งในขณะที่ส่งอีเมลได้',
  'default_email_sender_name' => 'ชื่อนี้จะใช้เป็นผู้ส่งอีเมลที่ส่งจากที่อยู่อีเมลของผู้ส่งที่เป็นค่าเริ่มต้น',
  'google_analytic_report' => 'คุณควรเปิดใช้งานสิ่งนี้หากระบบได้รับการกำหนดค่าด้วย Google Analytics มิฉะนั้นอาจทำให้เกิดข้อผิดพลาด ตรวจสอบเอกสารประกอบเพื่อขอความช่วยเหลือ หรือคุณสามารถใช้แอปพลิเคชันในระบบรายงาน',
  'inventory_linked_items' => 'รายการที่เชื่อมโยงจะปรากฏบนหน้าผลิตภัณฑ์เมื่อซื้อสินค้าบ่อยครั้งพร้อมกัน นี่เป็นทางเลือก แต่สำคัญ',
  'notify_new_message' => 'ส่งการแจ้งเตือนให้ฉันเมื่อมีข้อความใหม่มาถึง',
  'notify_alert_quantity' => 'ส่งการแจ้งเตือนเมื่อรายการใด ๆ ในคลังของฉันถึงระดับปริมาณการแจ้งเตือน',
  'notify_inventory_out' => 'ส่งการแจ้งเตือนเมื่อรายการใด ๆ ในสต็อกสินค้าคงคลังของฉันหมด',
  'notify_new_order' => 'ส่งการแจ้งเตือนให้ฉันเมื่อมีการสั่งซื้อใหม่ในร้านค้าของฉัน',
  'notify_abandoned_checkout' => 'ส่งการแจ้งเตือนเมื่อลูกค้ายกเลิกการชำระเงินสำหรับสินค้าของฉัน',
  'notify_when_vendor_registered' => 'ส่งการแจ้งเตือนเมื่อมีผู้ค้ารายใหม่ลงทะเบียน',
  'notify_new_ticket' => 'ส่งการแจ้งเตือนให้ฉันเมื่อมีการสร้างตั๋วสนับสนุนบนระบบ',
  'notify_new_disput' => 'ส่งการแจ้งเตือนให้ฉันเมื่อลูกค้าส่งข้อพิพาทใหม่',
  'notify_when_dispute_appealed' => 'ส่งการแจ้งเตือนให้ฉันเมื่อมีข้อโต้แย้งถูกอุทธรณ์เพื่อตรวจสอบโดยทีมงานตลาด',
  'download_template' => '<a href=":url"> ดาวน์โหลดเทมเพลต CSV ตัวอย่าง </a> เพื่อดูตัวอย่างของรูปแบบที่ต้องการ',
  'download_category_slugs' => '<a href=":url"> ดาวน์โหลดทากหมวดหมู่ </a> เพื่อรับหมวดหมู่ที่ถูกต้องสำหรับผลิตภัณฑ์ของคุณ',
  'first_row_as_header' => 'แถวแรกคือส่วนหัว <strong> อย่าเปลี่ยน </strong> แถวนี้',
  'user_category_slug' => 'ใช้หมวดหมู่ <strong> กระสุน </strong> ในฟิลด์หมวดหมู่',
  'cover_img' => 'ภาพนี้จะแสดงที่ด้านบนของหน้า :page',
  'cat_grp_img' => 'ภาพนี้จะแสดงบนพื้นหลังของกล่องแบบเลื่อนลงหมวดหมู่',
  'cat_grp_desc' => 'ลูกค้าจะไม่เห็นสิ่งนี้ แต่พ่อค้าจะเห็นสิ่งนี้',
  'inactive_for_back_office' => 'หากไม่ได้ใช้งานลูกค้ายังคงสามารถไปที่หน้า :page แต่ผู้ค้าจะไม่สามารถใช้ :page นี้เพื่อการจดทะเบียนในอนาคต',
  'invalid_rows_will_ignored' => 'แถวที่ไม่ถูกต้องจะถูก <strong> ละเว้น </strong>',
  'upload_rows' => 'คุณสามารถอัปโหลด <strong> สูงสุด: ระเบียนแถว </strong> ต่อชุดเพื่อประสิทธิภาพที่ดีขึ้น',
  'name_field_required' => 'ต้องระบุฟิลด์ชื่อ',
  'email_field_required' => 'ต้องระบุอีเมล',
  'invalid_email' => 'ที่อยู่อีเมลที่ไม่ถูกต้อง.',
  'invalid_category' => 'หมวดหมู่ไม่ถูกต้อง',
  'category_desc' => 'ให้รายละเอียดสั้น ๆ ลูกค้าจะเห็นสิ่งนี้',
  'email_already_exist' => 'ที่อยู่อีเมลนี้ถูกใช้งานแล้ว',
  'slug_already_exist' => 'กระสุนถูกใช้งานแล้ว',
  'display_order' => 'หมายเลขนี้จะถูกใช้เพื่อจัดเรียงลำดับการดู จำนวนที่น้อยที่สุดจะแสดงก่อน',
  'banner_title' => 'บรรทัดนี้จะถูกเน้นบนแบนเนอร์ เว้นว่างไว้หากคุณไม่ต้องการแสดงชื่อ',
  'banner_description' => '(ตัวอย่าง: ลด 50%!) เว้นว่างไว้หากคุณไม่ต้องการแสดงสิ่งนี้',
  'banner_image' => 'ภาพหลักสิ่งที่จะแสดงบนพื้นหลัง มักใช้ภาพผลิตภัณฑ์',
  'banner_background' => 'เลือกสีหรืออัปโหลดภาพเป็นพื้นหลัง',
  'banner_group' => 'การจัดวางแบนเนอร์บนหน้าร้าน แบนเนอร์จะไม่แสดงหากไม่ได้ระบุกลุ่ม',
  'bs_columns' => 'แบนเนอร์นี้จะใช้คอลัมน์กี่คอลัมน์ ระบบใช้ระบบกริด 12 คอลัมน์เพื่อแสดงแบนเนอร์',
  'banner_order' => 'หมายเลขนี้จะถูกใช้เพื่อจัดเรียงลำดับการดูในกลุ่มแบนเนอร์ จำนวนที่น้อยที่สุดจะแสดงก่อน',
  'banner_link' => 'ผู้ใช้จะเปลี่ยนเส้นทางไปที่ลิงค์นี้',
  'link_label' => 'ป้ายกำกับของปุ่มลิงค์',
  'slider_link' => 'ผู้ใช้จะเปลี่ยนเส้นทางไปที่ลิงค์นี้',
  'slider_title' => 'บรรทัดนี้จะถูกเน้นไปที่แถบเลื่อน เว้นว่างไว้หากคุณไม่ต้องการแสดงชื่อ',
  'slider_sub_title' => 'บรรทัดที่สองของชื่อ เว้นว่างไว้หากคุณไม่ต้องการแสดงสิ่งนี้',
  'slider_description' => 'อีกสองสามคำเกี่ยวกับแถบเลื่อน เว้นว่างไว้หากคุณไม่ต้องการแสดงคำอธิบาย',
  'slider_image' => 'ภาพหลักสิ่งที่จะแสดงเป็นตัวเลื่อน มันจำเป็นในการสร้างตัวเลื่อน',
  'slider_img_hint' => 'ภาพตัวเลื่อนควรเป็น 1280x300px',
  'slider_order' => 'ตัวเลื่อนจะถูกจัดเรียงตามคำสั่งนี้',
  'slider_thumb_image' => 'ภาพขนาดเล็กนี้จะถูกใช้เป็นภาพย่อ ระบบจะสร้างภาพขนาดย่อหากไม่มีให้',
  'variant_image' => 'รูปภาพของชุดตัวเลือก',
  'empty_trash' => 'เอาขยะไปทิ้ง. รายการทั้งหมดในถังขยะจะถูกลบอย่างถาวร',
  'hide_trial_notice_on_vendor_panel' => 'ซ่อนประกาศการทดลองใช้บนแผงผู้ขาย',
  'language_order' => 'ตำแหน่งที่คุณต้องการแสดงภาษานี้ในตัวเลือกภาษา จำนวนที่น้อยที่สุดจะแสดงก่อน',
  'locale_active' => 'คุณต้องการแสดงภาษานี้ในตัวเลือกภาษาหรือไม่?',
  'locale_code' => 'รหัสสถานที่, รหัสจะต้องมีชื่อเดียวกันกับโฟลเดอร์ภาษา',
  'locale_code_exmaple' => 'ตัวอย่างสำหรับภาษาอังกฤษรหัสคือ <em> en </em>',
  'new_language_info' => 'ภาษาใหม่จะไม่ส่งผลกระทบต่อระบบเว้นแต่คุณจะทำธุรกรรมของไดเรกทอรีภาษา ตรวจสอบเอกสารประกอบเพื่อดูรายละเอียด',
  'php_locale_code' => 'รหัสภาษาของ PHP สำหรับการใช้งานระบบเช่นวันที่แปล, เวลา ฯลฯ โปรดค้นหารายการทั้งหมดของรหัสภาษา PHP ในเอกสาร',
  'rtl' => 'เป็นภาษาจากขวาไปซ้าย (RTL)?',
  'select_all_verification_documents' => 'เลือกเอกสารทั้งหมดในครั้งเดียว',
  'system_default_language' => 'ภาษาเริ่มต้นของระบบ',
  'update_trial_period' => 'อัปเดตช่วงทดลองใช้',
  'vendor_needs_approval' => 'หากเปิดใช้งานผู้ขายรายใหม่ทุกรายจะต้องได้รับการอนุมัติจากแผงควบคุมแพลตฟอร์มเพื่อรับการถ่ายทอดสด',
  'verified_seller' => 'ตรวจสอบผู้ขาย',
  'mark_address_verified' => 'ทำเครื่องหมายว่าเป็นที่อยู่ที่ยืนยันแล้ว',
  'mark_id_verified' => 'ทำเครื่องหมายว่าเป็น ID ที่ตรวจสอบแล้ว',
  'mark_phone_verified' => 'ทำเครื่องหมายว่าโทรศัพท์ยืนยันแล้ว',
  'missing_required_data' => 'ข้อมูลไม่ถูกต้องข้อมูลที่จำเป็นบางอย่างขาดหายไป',
  'invalid_catalog_data' => 'ข้อมูลแคตตาล็อกไม่ถูกต้องตรวจสอบ GTIN และข้อมูลอื่น ๆ',
  'product_have_to_be_catalog' => 'ต้องแสดงผลิตภัณฑ์ในระบบ <strong> แคตตาล็อก </strong> มิฉะนั้นจะไม่อัปโหลด',
  'need_to_know_product_gtin' => 'คุณต้องทราบ <strong> GTIN </strong> ของรายการก่อนอัปโหลด',
  'multi_img_upload_instruction' => 'คุณสามารถอัปโหลดภาพสูงสุด :number ภาพและขนาดไฟล์แต่ละไฟล์ต้องไม่เกิน :size KB',
  'number_of_img_upload_required' => 'คุณต้องเลือกอย่างน้อย <b> {n} </b> {ไฟล์} ที่จะอัปโหลด โปรดลองอัพโหลดอีกครั้ง!',
  'msg_invalid_file_extension' => 'นามสกุลไม่ถูกต้องสำหรับไฟล์ {name} รองรับเฉพาะไฟล์ <b> {นามสกุล} </b>',
  'number_of_img_upload_exceeded' => 'คุณสามารถอัปโหลดไฟล์ได้สูงสุด <b> {m} </b> (ตรวจพบไฟล์ <b> {n} </b>)',
  'msg_invalid_file_too_learge' => 'ไฟล์ {name} (<b> {size} KB </b>) เกินขนาดการอัปโหลดสูงสุดที่อนุญาต <b> {maxSize} KB </b> โปรดลองอัพโหลดอีกครั้ง!',
  'required_fields_csv' => 'ฟิลด์เหล่านี้คือ <strong> ต้องระบุ </strong> <em>: ช่อง </em>',
  'seller_condition_note' => 'ป้อนรายละเอียดเพิ่มเติมเกี่ยวกับเงื่อนไขรายการ สิ่งนี้จะช่วยให้ลูกค้าเข้าใจรายการ',
  'active_business_zone' => 'พื้นที่ดำเนินธุรกิจของคุณ ผู้ขายจะสามารถสร้างเขตการจัดส่งภายในพื้นที่ใช้งานเท่านั้น',
  'config_show_seo_info_to_frontend' => 'แสดงข้อมูล SEO เช่นชื่อเมตาคำอธิบายเมตาแท็กไปยังส่วนหน้า',
  'config_can_use_own_catalog_only' => 'หากเปิดใช้งานผู้ขายสามารถใช้เฉพาะผลิตภัณฑ์แคตตาล็อกของตนเพื่อสร้างรายชื่อ',
  'currency_iso_numeric' => 'รหัสตัวเลข ISO 4217 ตัวอย่างเช่น: USD = 840 และ JPY = 392',
  'country_iso_numeric' => 'รหัสตัวเลข ISO 3166-1 ตัวอย่างเช่น: USA = 840 และ JAPAN = 392',
  'currency_active' => 'สกุลเงินที่ใช้งานจะแสดงในตลาด',
  'country_active' => 'สกุลเงินที่ใช้งานจะรวมอยู่ในพื้นที่ธุรกิจ',
  'currency_symbol' => 'สัญลักษณ์สกุลเงิน',
  'currency_disambiguate_symbol' => 'ตัวอย่าง: USD = US $ และ BDT = BD $',
  'currency_html_entity' => 'ตัวอย่าง: JPY = ¥และ INR = ₹',
  'currency_smallest_denomination' => 'สกุลเงินที่เล็กที่สุดของ ค่าเริ่มต้นคือ 1',
  'currency_subunit_to_unit' => 'จำนวนหน่วยย่อยต้องการสำหรับหน่วยเดียว ค่าเริ่มต้นคือ 100',
  'eea' => 'เขตเศรษฐกิจยุโรป',
  'support_agent' => 'ตัวแทนสนับสนุนจะได้รับการแจ้งเตือนทั้งหมด หากไม่ได้ตั้งค่าผู้ค้าจะได้รับการแจ้งเตือนทั้งหมด',
  'show_refund_policy_with_listing' => 'แสดงนโยบายการคืนสินค้าและคืนเงินในหน้าคำอธิบายผลิตภัณฑ์ที่ส่วนหน้า',
  'show_shop_desc_with_listing' => 'แสดงรายละเอียดร้านค้าในหน้าคำอธิบายผลิตภัณฑ์ที่ส่วนหน้า',
  'shipping_zone_select_states' => 'หากคุณไม่เห็นตัวเลือกที่คุณกำลังค้นหาตลาดอาจไม่ทำงานในพื้นที่นั้น คุณสามารถติดต่อผู้ดูแลระบบสนับสนุนการตลาดเพื่อขอเพิ่มพื้นที่',
  'marketplace_business_area' => 'ตลาดธุรกิจพื้นที่',
  'notify_new_chat' => 'ส่งอีเมลแจ้งเตือนฉันเมื่อมีข้อความแชทใหม่มาถึง',
  'not_in_business_area' => 'พื้นที่นี้ไม่ได้อยู่ในพื้นที่ธุรกิจที่ใช้งานของตลาด อาจจะถูกลบโดยผู้ดูแลตลาดเมื่อไม่นานมานี้',
  'region_iso_code' => 'รหัส ISO ของภูมิภาคจะต้องถูกต้อง อ่านหัวข้อธุรกิจในเอกสารเพื่อรับความช่วยเหลือ',
  'subscribers_count' => 'จำนวนสมาชิกที่ใช้งาน',
  'this_plan_has_active_subscribers' => 'ไม่สามารถลบแผนนี้ได้เนื่องจากมีผู้สมัครสมาชิกอยู่',
  'max_chat_allowed' => 'สูงสุด :size ตัวอักษร',
  'mobile_slider_image' => 'รูปภาพตัวเลื่อนสำหรับแอพมือถือ ระบบจะซ่อนแถบเลื่อนนี้บนมือถือหากไม่ได้ระบุไว้',
  'config_can_cancel_order_within' => 'ลูกค้าจะสามารถยกเลิกคำสั่งซื้อได้ภายในเวลานี้หลังจากทำการสั่งซื้อ เว้นว่างไว้เพื่อให้สามารถยกเลิกได้จนกว่าจะดำเนินการตามคำสั่งซื้อ ตั้งค่า 0 เพื่อปิดใช้งานตัวเลือกการยกเลิก ลูกค้ายังคงสามารถขอยกเลิกกับผู้จำหน่ายได้',
  'mobile_app_slider_hits' => 'รักษาอัตราส่วน 2: 1',
  'enable_live_chat_on_platform' => 'หากเปิดใช้งานผู้ขายจะได้รับตัวเลือกในการเปิด / ปิดแชทสดบนหน้าผลิตภัณฑ์และหน้าร้านค้า',
  'enable_live_chat_on_shop' => 'เปิดใช้งานแชทสดบนหน้าผลิตภัณฑ์และหน้าร้านค้าของคุณ',
  'package_dependency_not_loaded' => 'การพึ่งพาล้มเหลว! แพ็คเกจนี้ขึ้นอยู่กับโมดูล :dependency',
  'option_dependence_module' => 'การพึ่งพาล้มเหลว! โมดูลการพึ่งพาตัวเลือกนี้ :dependency',
  'config_vendor_order_cancellation_fee' => 'ค่าธรรมเนียมการยกเลิกเมื่อผู้ขายยกเลิกคำสั่งซื้อ ตั้งค่า 0 โดยไม่มีค่าธรรมเนียมการยกเลิกเว้นว่างไว้เพื่อกำหนดค่าธรรมเนียมที่กำหนดเองสำหรับทุกคำสั่งซื้อ (การยกเลิกจะต้องได้รับการอนุมัติจากผู้ดูแลระบบ)',
  'vendor_order_cancellation_fee' => 'ค่าธรรมเนียมการยกเลิกคำสั่งซื้อจะถูกเรียกเก็บจากผู้ขาย',
  'disabled_when_vendor_get_paid_directly' => 'ไม่สามารถเปิดใช้งานได้เมื่อผู้ขายได้รับเงินโดยตรง!',
  'confirm_uninstall_package' => 'ข้อมูลทั้งหมดที่เกี่ยวข้องกับ :package จะหายไปตลอดกาล! คุณไม่สามารถเปลี่ยนกลับข้อมูลเหล่านี้ได้',
  'verify_license_key' => 'เราได้ส่งรหัสใบอนุญาตไปยังอีเมลของคุณเมื่อคุณทำการสั่งซื้อ หากคุณไม่พบโปรดติดต่อฝ่ายสนับสนุนพร้อมรายละเอียด',
  'promotional_tagline' => 'แท็กไลน์ส่งเสริมการขายจะวางไว้ในการนำทางหลัก',
  'best_finds_under' => 'นี่คือหน้าแรกของ <em> การค้นหาที่ดีที่สุดภายใต้ </em> ภาพหมุนผลิตภัณฑ์ ระบบจะเลือกสินค้าขายดีภายใต้ขีด จำกัด ราคานี้',
  'featured_items' => 'สำหรับหน้าแรกส่วน <em> แนะนำ </em> เราขอแนะนำให้ตั้งค่า 5-10 รายการ',
  'featured_categories' => 'นี่คือสำหรับโฮมเพจ <em> หมวดหมู่ที่โดดเด่น </em> ส่วน เราขอแนะนำให้ตั้งค่า 10-15 หมวดหมู่',
  'trending_now_categories' => 'นี่คือสำหรับโฮมเพจ <em> แนวโน้มตอนนี้หมวดหมู่ </em> ส่วน เราขอแนะนำให้ตั้งค่า 2-4 หมวดหมู่',
  'featured_brands' => 'นี่คือสำหรับโฮมเพจ <em> แบรนด์ที่โดดเด่น </em> ส่วน เราแนะนำให้ตั้งค่า 3 แบรนด์',
  'slider_alternative_color' => 'สีจะใช้สำหรับข้อความภายในแท็กช่วง',
  'you_can_use_span_tag' => 'คุณสามารถใช้ <span> แท็กเพื่อเน้นคำสำคัญ',
  'trending_now_category_help' => 'สำหรับมุมมองที่ดีขึ้นให้เพิ่มสูงสุด 5 หมวดหมู่',
  'social_auth' => 'หากเปิดใช้งานตัวเลือกการเข้าสู่ระบบโซเชียลจะแสดงในหน้าล็อกอินและลงทะเบียนของลูกค้า',
  'slider_text_position' => 'กำหนดตำแหน่งเนื้อหาของคุณบนแถบเลื่อน ตำแหน่งเริ่มต้นถูกต้อง',
  'deal_of_the_day' => 'สามารถตั้งค่าเป็นดีลของวันได้เพียงรายการเดียว',
  'upload_package_zip_archive' => 'อัปโหลดไฟล์เก็บถาวร zip ที่มีไฟล์แพคเกจเท่านั้น อย่าอัปโหลดเอกสารหรือไฟล์อื่น ๆ',
  'help_clear_cache' => 'ล้างแคชระบบรวมถึงการกำหนดค่ารูปภาพเส้นทาง การกระทำนี้อาจต้องการหลังจากที่คุณทำการเปลี่ยนแปลงในไฟล์. env หรือไฟล์กำหนดค่าใด ๆ ทันทีที่คุณจะสังเกตเห็นการประลองประสิทธิภาพการแสดงเล็กน้อย แต่ไม่ต้องกังวลมันเป็นเพียงการโหลดครั้งแรกเท่านั้น',
  'this_will_overwrite_by_dynamic_commission' => 'เมื่อปลั๊กอินคณะกรรมการแบบไดนามิกใช้งานได้ สิ่งนี้จะเขียนทับด้วยค่าแบบไดนามิก',
  'transaction_fee_will_charge' => 'ค่าธรรมเนียมการทำธุรกรรมจะถูกเรียกเก็บแม้ว่าค่าคอมมิชชั่นเป็นศูนย์',
  'icon_size' => 'ไอคอนควรเป็นภาพ 32x32px .png',
  'icon_image' => 'ไอคอนนี้ภาพจะแสดงในหมวดสินค้าแบบดรอปดาวน์หมวดหมู่เป็นไอคอนกลุ่มหมวดหมู่',
  'changes_can_take_time' => 'การเปลี่ยนแปลงสามารถใช้เวลาถึง :time เพื่อส่งผลกระทบต่อผลลัพธ์',
];
