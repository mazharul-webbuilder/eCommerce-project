<?php 
return [
  'password_updated' => [
    'subject' => 'आपका :marketplace पासवर्ड सफलतापूर्वक अपडेट कर दिया गया है!',
    'greeting' => 'नमस्ते :user!',
    'message' => 'आपका खाता लॉगिन पासवर्ड सफलतापूर्वक बदल दिया गया है! यदि आपने यह परिवर्तन नहीं किया है, तो कृपया हमसे संपर्क करें! अपने प्रोफाइल पेज में लॉगिन करने के लिए नीचे दिए गए बटन पर क्लिक करें।',
    'button_text' => 'अपनी प्रोफ़ाइल पर जाएं',
  ],
  'invoice_created' => [
    'subject' => ':marketplace मासिक सदस्यता शुल्क चालान',
    'greeting' => 'नमस्ते :merchant!',
    'message' => 'आपकी लगातार सहायता के लिए धन्यवाद। हमने आपके रिकॉर्ड के लिए आपके चालान की एक प्रति संलग्न की है। कृपया हमें बताएं कि क्या आपका कोई सवाल या चिंता है!',
    'button_text' => 'डैशबोर्ड पर जाएं',
  ],
  'customer_registered' => [
    'subject' => ' :marketplace बाज़ार में आपका स्वागत है!',
    'greeting' => 'बधाई :customer!',
    'message' => 'आपका खाता सफलतापूर्वक बनाया गया है! अपना ईमेल पता सत्यापित करने के लिए नीचे दिए गए बटन पर क्लिक करें।',
    'button_text' => 'मुझे सत्यापित करें',
  ],
  'customer_updated' => [
    'subject' => 'खाता जानकारी सफलतापूर्वक अपडेट की गई!',
    'greeting' => 'नमस्ते :customer!',
    'message' => 'यह एक सूचना है जो आपको बताती है कि आपका खाता सफलतापूर्वक अपडेट कर दिया गया है!',
    'button_text' => 'अपनी प्रोफ़ाइल पर जाएं',
  ],
  'customer_password_reset' => [
    'subject' => 'पासवर्ड अधिसूचना रीसेट करें',
    'greeting' => 'नमस्कार!',
    'message' => 'आप यह ईमेल प्राप्त कर रहे हैं क्योंकि हमें आपके खाते के लिए पासवर्ड रीसेट अनुरोध प्राप्त हुआ है। यदि आपने एक पासवर्ड रीसेट का अनुरोध नहीं किया है, तो बस इस अधिसूचना को अनदेखा करें और आगे बटन_टेक्स्ट की आवश्यकता नहीं है।',
    'button_text' => 'पासवर्ड रीसेट',
  ],
  'dispute_acknowledgement' => [
    'subject' => '[आदेश आईडी: :order_id] विवाद सफलतापूर्वक प्रस्तुत किया गया है',
    'greeting' => 'नमस्ते :customer',
    'message' => 'यह एक सूचना है जो आपको बताती है कि हमें ऑर्डर आईडी: :order_id के लिए आपका विवाद मिल गया है, हमारी सहायता टीम जल्द से जल्द आपके पास वापस आ जाएगी।',
    'button_text' => 'विवाद देखें',
  ],
  'dispute_created' => [
    'subject' => 'ऑर्डर आईडी के लिए नया विवाद: :order_id',
    'greeting' => 'नमस्ते :merchant!',
    'message' => 'आपको ऑर्डर आईडी: :order_id के लिए एक नया विवाद मिला है। कृपया समीक्षा करें और ग्राहक के साथ समस्या का समाधान करें।',
    'button_text' => 'विवाद देखें',
  ],
  'dispute_updated' => [
    'subject' => '[आदेश आईडी: :order_id] विवाद स्थिति अद्यतन किया गया है!',
    'greeting' => 'नमस्ते :customer!',
    'message' => 'विक्रेता के इस संदेश से ऑर्डर आईडी :order_id के लिए एक विवाद को अपडेट किया गया है ": उत्तर"। कृपया नीचे देखें और हमसे संपर्क करें यदि आपको कोई सहायता चाहिए।',
    'button_text' => 'विवाद देखें',
  ],
  'dispute_appealed' => [
    'subject' => '[आदेश आईडी: :order_id] विवाद की अपील की गई!',
    'greeting' => 'नमस्कार!',
    'message' => 'ऑर्डर आईडी :order_id के लिए एक विवाद इस संदेश के साथ अपील किया गया है ": उत्तर"। कृपया नीचे विस्तार से देखें।',
    'button_text' => 'विवाद देखें',
  ],
  'appealed_dispute_replied' => [
    'subject' => '[आदेश आईडी: अपील विवाद के लिए :order_id] नई प्रतिक्रिया!',
    'greeting' => 'नमस्कार!',
    'message' => 'ऑर्डर आईडी :order_id के लिए इस संदेश के साथ विवाद का जवाब दिया गया है: www.br>>br> ": उत्तर"',
    'button_text' => 'विवाद देखें',
  ],
  'low_inventory_notification' => [
    'subject' => 'कम सूची चेतावनी!',
    'greeting' => 'नमस्कार!',
    'message' => 'आपकी एक या अधिक वस्तु सूची आइटम कम हो रही है। आइटम को बाज़ार में लाइव रखने के लिए अधिक इन्वेंट्री जोड़ने का समय है।',
    'button_text' => 'अद्यतन सूची',
  ],
  'inventory_bulk_upload_procceed_notice' => [
    'subject' => 'आपका बल्क इन्वेंट्री आयात अनुरोध प्राप्त हो गया है।',
    'greeting' => 'नमस्कार!',
    'message' => 'हमें आपको यह बताते हुए खुशी हो रही है कि आपका बल्क इन्वेंट्री आयात अनुरोध प्राप्त हो गया है। प्लेटफ़ॉर्म :success में सफलतापूर्वक आयात की गई पंक्तियों की कुल संख्या, पंक्तियों की असफल संख्या :failed',
    'failed' => 'कृपया विफल पंक्तियों के लिए संलग्न फ़ाइल खोजें।',
    'button_text' => 'इन्वेंटरी देखें',
  ],
  'new_message' => [
    'subject' => ':subject',
    'greeting' => 'नमस्ते :receiver',
    'message' => ':message',
    'button_text' => 'साइट पर संदेश देखें',
  ],
  'message_replied' => [
    'subject' => ':user ने :subject का उत्तर दिया',
    'greeting' => 'नमस्ते :receiver',
    'message' => ':reply',
    'button_text' => 'साइट पर संदेश देखें',
  ],
  'order_created' => [
    'subject' => '[आदेश आईडी: :order] आपके आदेश को सफलतापूर्वक रखा गया है!',
    'greeting' => 'नमस्ते :customer',
    'message' => 'हमें चुनने के लिए धन्यवाद! आपका आदेश [आदेश आईडी :order] सफलतापूर्वक रखा गया है। हम आपको आदेश की स्थिति बताएंगे।',
    'button_text' => 'दुकान पर जाएँ',
  ],
  'merchant_order_created_notification' => [
    'subject' => 'नया ऑर्डर [ऑर्डर आईडी: :order] को आपकी दुकान पर रखा गया है!',
    'greeting' => 'नमस्ते :merchant',
    'message' => 'एक नया आदेश [आदेश आईडी :order] रखा गया है। कृपया आदेश विवरण जांचें और आदेश को पूरा करें।',
    'button_text' => 'आदेश को पूरा करें',
  ],
  'order_updated' => [
    'subject' => '[आदेश आईडी: :order] आपकी आदेश स्थिति अपडेट हो गई है!',
    'greeting' => 'नमस्ते :customer',
    'message' => 'यह एक सूचना है जो आपको बताती है कि आपका ऑर्डर [ऑर्डर आईडी :order] अपडेट हो गया है। आदेश विस्तार के लिए कृपया नीचे देखें। आप अपने डैशबोर्ड से अपने ऑर्डर भी चेक कर सकते हैं।',
    'button_text' => 'दुकान पर जाएँ',
  ],
  'order_fulfilled' => [
    'subject' => '[आदेश आईडी: :order] इस तरह से आपका आदेश!',
    'greeting' => 'नमस्ते :customer',
    'message' => 'यह एक सूचना है जो आपको बताती है कि आपका ऑर्डर [ऑर्डर आईडी :order] भेज दिया गया है और यह आपके रास्ते में है। आदेश विस्तार के लिए कृपया नीचे देखें। आप अपने डैशबोर्ड से अपने ऑर्डर भी चेक कर सकते हैं।',
    'button_text' => 'दुकान पर जाएँ',
  ],
  'order_paid' => [
    'subject' => '[आदेश आईडी: :order] आपका आदेश सफलतापूर्वक भुगतान किया गया है!',
    'greeting' => 'नमस्ते :customer',
    'message' => 'यह एक सूचना है जो आपको बताती है कि आपका ऑर्डर [ऑर्डर आईडी :order] सफलतापूर्वक भुगतान कर दिया गया है और यह आपके रास्ते में है। आदेश विस्तार के लिए कृपया नीचे देखें। आप अपने डैशबोर्ड से अपने ऑर्डर भी चेक कर सकते हैं।',
    'button_text' => 'दुकान पर जाएँ',
  ],
  'order_payment_failed' => [
    'subject' => '[आदेश आईडी: :order] भुगतान विफल!',
    'greeting' => 'नमस्ते :customer',
    'message' => 'यह एक सूचना है जो आपको बताती है कि आपका ऑर्डर [ऑर्डर आईडी :order] भुगतान विफल हो गया है। आदेश विस्तार के लिए कृपया नीचे देखें। आप अपने डैशबोर्ड से अपने ऑर्डर भी चेक कर सकते हैं।',
    'button_text' => 'दुकान पर जाएँ',
  ],
  'cancellation_request_acknowledgement' => [
    'subject' => '[आदेश आईडी: :order] आपका रद्द करने का अनुरोध सफलतापूर्वक रखा गया है!',
    'greeting' => 'नमस्ते :customer',
    'message' => 'हमें चुनने के लिए धन्यवाद! आपका आदेश [आदेश आईडी :order] रद्द करने का अनुरोध सफलतापूर्वक रखा गया है। हम आपको आदेश की स्थिति बताएंगे।',
    'button_text' => 'दुकान पर जाएँ',
  ],
  'merchant_order_cancellation_notification' => [
    'subject' => 'आपकी दुकान [ऑर्डर आईडी: :order] पर नया ऑर्डर रद्द करने का अनुरोध किया गया है।',
    'greeting' => 'नमस्ते :merchant',
    'message' => 'एक आदेश [आदेश आईडी :order] रद्द करने का अनुरोध बनाया गया है। कृपया आदेश विवरण जांचें और अनुरोध को उत्तर दें।',
    'button_text' => 'अनुरोध का जवाब दें',
  ],
  'cancellation_request_approved' => [
    'subject' => 'आपका [ऑर्डर आईडी: :order] आइटम (ओं) को रद्द करने का अनुरोध स्वीकृत हो गया है!',
    'greeting' => 'नमस्ते :customer',
    'message' => 'आपका [ऑर्डर आईडी :order] आइटम (ओं) को रद्द करने का अनुरोध विक्रेता द्वारा अनुमोदित किया गया है। हमें चुनने के लिए धन्यवाद!',
    'button_text' => 'दुकान पर जाएँ',
  ],
  'cancellation_request_declined' => [
    'subject' => 'आपका [ऑर्डर आईडी: :order] रद्द करने के लिए बहुत देर हो चुकी है',
    'greeting' => 'नमस्ते :customer',
    'message' => 'हमें वास्तव में खेद है! विक्रेता द्वारा आपके [ऑर्डर आईडी :order] आइटम (ओं) को रद्द करने के अनुरोध को स्वीकार करने में बहुत देर हो चुकी है। यदि आपको वह आइटम पसंद नहीं है, तो आप अभी भी वापस आ सकते हैं।',
    'button_text' => 'दुकान पर जाएँ',
  ],
  'order_canceled' => [
    'subject' => '[आदेश आईडी: :order] आपका आदेश रद्द कर दिया गया है!',
    'greeting' => 'नमस्ते :customer',
    'message' => 'आपका ऑर्डर [ऑर्डर आईडी :order] रद्द कर दिया गया है। हमें चुनने के लिए धन्यवाद!',
    'button_text' => 'दुकान पर जाएँ',
  ],
  'refund_initiated' => [
    'subject' => '[आदेश आईडी: एक्स 1 रिफंड शुरू किया गया है!',
    'greeting' => 'नमस्ते :customer',
    'message' => 'यह आपको एक सूचना है कि हमने आपके आदेश :order के लिए धनवापसी अनुरोध शुरू किया है। हमारी टीम का एक मेमबर जल्द ही अनुरोध की समीक्षा करेगा। हम आपको अनुरोध की स्थिति बता देंगे।',
  ],
  'refund_approved' => [
    'subject' => '[आदेश आईडी: एक्स 1 रिफंड अनुरोध को मंजूरी दी गई है!',
    'greeting' => 'नमस्ते :customer',
    'message' => 'यह आपको एक सूचना है कि हमने आपके आदेश :order के लिए धनवापसी अनुरोध को मंजूरी दे दी है। रिफंड की गई राशि :amount है। हमने आपकी भुगतान विधि को धन भेज दिया है, आपके खाते को प्रभावित करने में कुछ दिन लग सकते हैं। यदि आप कुछ दिनों में प्रभावित हुए पैसे नहीं देखते हैं, तो अपने भुगतान प्रदाता से संपर्क करें।',
  ],
  'refund_declined' => [
    'subject' => '[आदेश आईडी: एक्स 1 रिफंड अनुरोध को अस्वीकार कर दिया गया है!',
    'greeting' => 'नमस्ते :customer',
    'message' => 'यह आपको एक सूचना है कि आपके आदेश :order के लिए धनवापसी अनुरोध को अस्वीकार कर दिया गया है। यदि आप व्यापारी के समाधान से संतुष्ट नहीं हैं, तो आप सीधे मंच से व्यापारी से संपर्क कर सकते हैं या यहां तक ​​कि आप :marketplace पर विवाद की अपील भी कर सकते हैं। हम समस्या को हल करने के लिए कदम रखेंगे।',
  ],
  'shop_created' => [
    'subject' => 'आपकी दुकान जाने के लिए तैयार है!',
    'greeting' => 'बधाई :merchant!',
    'message' => 'आपकी दुकान :shop_name सफलतापूर्वक बनाई गई है! दुकान व्यवस्थापक पैनल में प्रवेश करने के लिए नीचे दिए गए बटन पर क्लिक करें।',
    'button_text' => 'डैशबोर्ड पर जाएं',
  ],
  'shop_updated' => [
    'subject' => 'दुकान की जानकारी सफलतापूर्वक अपडेट की गई!',
    'greeting' => 'नमस्ते :merchant!',
    'message' => 'यह एक सूचना है जो आपको बताती है कि आपकी दुकान :shop_name सफलतापूर्वक अपडेट हो गई है!',
    'button_text' => 'डैशबोर्ड पर जाएं',
  ],
  'shop_config_updated' => [
    'subject' => 'शॉप कॉन्फ़िगरेशन सफलतापूर्वक अपडेट किया गया!',
    'greeting' => 'नमस्ते :merchant!',
    'message' => 'आपकी दुकान कॉन्फ़िगरेशन सफलतापूर्वक अपडेट कर दी गई है! दुकान व्यवस्थापक पैनल में प्रवेश करने के लिए नीचे दिए गए बटन पर क्लिक करें।',
    'button_text' => 'डैशबोर्ड पर जाएं',
  ],
  'shop_down_for_maintainace' => [
    'subject' => 'आपकी दुकान बंद है!',
    'greeting' => 'नमस्ते :merchant!',
    'message' => 'यह एक सूचना है कि आपको पता है कि आपकी दुकान :shop_name नीचे है! कोई भी ग्राहक आपकी दुकान पर तब तक नहीं जा सकता जब तक कि वह फिर से रहने के लिए वापस नहीं आता।',
    'button_text' => 'कॉन्फ़िगर पृष्ठ पर जाएं',
  ],
  'shop_is_live' => [
    'subject' => 'आपकी दुकान वापस LIVE है!',
    'greeting' => 'नमस्ते :merchant',
    'message' => 'यह एक सूचना है जो आपको बताती है कि आपकी दुकान :shop_name सफलतापूर्वक जीवित है!',
    'button_text' => 'डैशबोर्ड पर जाएं',
  ],
  'shop_deleted' => [
    'subject' => 'आपकी दुकान को :marketplace से हटा दिया गया है!',
    'greeting' => 'नमस्कार व्यापारी!',
    'message' => 'यह एक सूचना है जो आपको बताती है कि आपकी दुकान को हमारे मार्कर से हटा दिया गया है! हम तुम्हें याद करेंगे।',
  ],
  'system_is_down' => [
    'subject' => 'आपका बाज़ार एक्स 1 अब नीचे है!',
    'greeting' => 'नमस्ते :user!',
    'message' => 'यह एक सूचना है जो आपको बताती है कि आपका बाज़ार एक्स 1 नीचे है! कोई भी ग्राहक आपके बाज़ार का दौरा तब तक नहीं कर सकता जब तक कि वह फिर से रहने के लिए वापस नहीं आता।',
    'button_text' => 'कॉन्फिग पेज पर जाएं',
  ],
  'system_is_live' => [
    'subject' => 'आपका बाज़ार :marketplace वापस LIVE है!',
    'greeting' => 'नमस्ते :user!',
    'message' => 'यह एक सूचना है जो आपको बताती है कि आपका मार्केटप्लेस :marketplace सफलतापूर्वक वापस आ गया है!',
    'button_text' => 'डैशबोर्ड पर जाएं',
  ],
  'system_info_updated' => [
    'subject' => ':marketplace - बाज़ार की जानकारी सफलतापूर्वक अपडेट की गई!',
    'greeting' => 'नमस्ते :user!',
    'message' => 'यह एक सूचना है जो आपको बताती है कि आपका मार्केटप्लेस :marketplace सफलतापूर्वक अपडेट हो गया है!',
    'button_text' => 'डैशबोर्ड पर जाएं',
  ],
  'system_config_updated' => [
    'subject' => ':marketplace - मार्केटप्लेस कॉन्फ़िगरेशन सफलतापूर्वक अपडेट किया गया!',
    'greeting' => 'नमस्ते :user!',
    'message' => 'आपके मार्केटप्लेस :marketplace के कॉन्फ़िगरेशन को सफलतापूर्वक अपडेट किया गया है! व्यवस्थापक पैनल में प्रवेश करने के लिए नीचे दिए गए बटन पर क्लिक करें।',
    'button_text' => 'दृश्य सेटिंग्स',
  ],
  'new_contact_us_message' => [
    'subject' => 'हमसे संपर्क फ़ॉर्म के माध्यम से नया संदेश: :subject',
    'greeting' => 'नमस्कार!',
    'message_footer_with_phone' => 'आप इस ईमेल का जवाब दे सकते हैं या सीधे इस फ़ोन से संपर्क कर सकते हैं :phone',
    'message_footer' => 'आप इस ईमेल का उत्तर सीधे दे सकते हैं।',
  ],
  'ticket_acknowledgement' => [
    'subject' => '[टिकट आईडी: :ticket_id] :subject',
    'greeting' => 'नमस्ते :user',
    'message' => 'यह एक सूचना है जो आपको बताती है कि हमने आपका टिकट :ticket_id सफलतापूर्वक प्राप्त कर लिया है! हमारी सहायता टीम जल्द से जल्द आपके पास वापस आ जाएगी।',
    'button_text' => 'टिकट देखें',
  ],
  'ticket_created' => [
    'subject' => 'नया समर्थन टिकट [टिकट आईडी: :ticket_id] :subject',
    'greeting' => 'नमस्कार!',
    'message' => 'आपको विक्रेता :vendor से एक नया समर्थन टिकट आईडी :ticket_id, प्रेषक :sender प्राप्त हुआ है। टीम का समर्थन करने के लिए टिकट की समीक्षा और आश्वासन।',
    'button_text' => 'टिकट देखें',
  ],
  'ticket_assigned' => [
    'subject' => 'एक टिकट सिर्फ आपको दिया गया है [टिकट IF: :ticket_id] :subject',
    'greeting' => 'नमस्ते :user',
    'message' => 'यह आपको उस टिकट [टिकट आईडी: एक्स 1 एक्स 2 का सिर्फ आपको आश्वासन देने की सूचना देने के लिए एक अधिसूचना है। जितनी जल्दी हो सके टिकट की समीक्षा करें और उत्तर दें।',
    'button_text' => 'टिकट का जवाब दें',
  ],
  'ticket_replied' => [
    'subject' => ':user ने टिकट [टिकट आईडी: :ticket_id] :subject] का जवाब दिया',
    'greeting' => 'नमस्ते :user',
    'message' => ':reply',
    'button_text' => 'टिकट देखें',
  ],
  'ticket_updated' => [
    'subject' => 'एक टिकट [टिकट आईडी: :ticket_id] :subject अपडेट किया गया है!',
    'greeting' => 'नमस्ते :user!',
    'message' => 'आपका एक समर्थन टिकट टिकट आईडी #: ticket_id :subject अपडेट किया गया है। आप किसी भी सहायता की जरूरत है, तो हमसे संपर्क करें।',
    'button_text' => 'टिकट देखें',
  ],
  'user_created' => [
    'subject' => ':admin ने आपको :marketplace बाज़ार में जोड़ा!',
    'greeting' => 'बधाई :user!',
    'message' => 'आपको :admin द्वारा :marketplace में जोड़ा गया है! अपने खाते में प्रवेश करने के लिए नीचे दिए गए बटन पर क्लिक करें। प्रारंभिक लॉगिन के लिए अस्थायी पासवर्ड का उपयोग करें।',
    'alert' => 'लॉगिन करने के बाद अपना पासवर्ड बदलना न भूलें।',
    'button_text' => 'अपनी प्रोफ़ाइल पर जाएं',
  ],
  'user_updated' => [
    'subject' => 'खाता जानकारी सफलतापूर्वक अपडेट की गई!',
    'greeting' => 'नमस्ते :user!',
    'message' => 'यह एक सूचना है जो आपको बताती है कि आपका खाता सफलतापूर्वक अपडेट कर दिया गया है!',
    'button_text' => 'अपनी प्रोफ़ाइल पर जाएं',
  ],
  'verdor_registered' => [
    'subject' => 'नए विक्रेता सिर्फ पंजीकृत!',
    'greeting' => 'बधाई हो!',
    'message' => 'आपके मार्केटप्लेस :marketplace को सिर्फ शॉप के नाम <strong>: shop_name </strong> के साथ एक नया वर्जन मिला है और व्यापारी का ईमेल पता :merchant_email है',
    'button_text' => 'डैशबोर्ड पर जाएं',
  ],
  'email_verification' => [
    'subject' => 'अपना :marketplace खाता सत्यापित करें!',
    'greeting' => 'बधाई :user!',
    'message' => 'आपका खाता सफलतापूर्वक बनाया गया है! अपना ईमेल पता सत्यापित करने के लिए नीचे दिए गए बटन पर क्लिक करें।',
    'button_text' => 'मेरा ईमेल सत्यापित करें',
  ],
  'dispute_solved' => [
    'subject' => 'विवाद [आदेश आईडी: :order_id] को हल के रूप में चिह्नित किया गया है!',
    'greeting' => 'नमस्ते :customer!',
    'message' => 'ऑर्डर आईडी के लिए विवाद: :order_id को हल के रूप में चिह्नित किया गया है। हमारे साथ रहने के लिए धन्यवाद।',
    'button_text' => 'विवाद देखें',
  ],
  'new_chat_message' => [
    'subject' => 'लाइव चैट फॉर्म :sender के जरिए नया संदेश',
    'greeting' => 'नमस्ते :receipent!',
    'message' => 'आपको लाइव चैट विंडो "संदेश:" के माध्यम से एक नया संदेश मिला। कृपया उत्तर देने के लिए दुकान के डैशबोर्ड में प्रवेश करें।',
    'button_text' => 'डैशबोर्ड पर देखें',
  ],
];