<?php 
return [
  'password_updated' => [
    'subject' => ' :marketplace 비밀번호가 성공적으로 업데이트되었습니다!',
    'greeting' => '안녕하세요 :user!',
    'message' => '귀하의 계정 로그인 비밀번호가 성공적으로 변경되었습니다! 변경하지 않으 셨다면 최대한 빨리 문의 해주세요! 아래 버튼을 클릭하여 프로필 페이지에 로그인하십시오.',
    'button_text' => '프로필 방문',
  ],
  'invoice_created' => [
    'subject' => ':marketplace 월간 구독료 청구서',
    'greeting' => '안녕하세요 :merchant!',
    'message' => '지속적인 지원에 감사드립니다. 기록을 위해 송장 사본을 첨부했습니다. 질문이나 우려 사항이 있으면 알려주십시오!',
    'button_text' => '대시 보드로 이동',
  ],
  'customer_registered' => [
    'subject' => ' :marketplace 마켓 플레이스에 오신 것을 환영합니다!',
    'greeting' => '축하 :customer!',
    'message' => '귀하의 계정이 성공적으로 생성되었습니다! 아래 버튼을 클릭하여 이메일 주소를 확인하십시오.',
    'button_text' => '나를 확인',
  ],
  'customer_updated' => [
    'subject' => '계정 정보가 성공적으로 업데이트되었습니다!',
    'greeting' => '안녕하세요 :customer!',
    'message' => '귀하의 계정이 성공적으로 업데이트되었음을 ​​알려 드리는 알림입니다!',
    'button_text' => '프로필 방문',
  ],
  'customer_password_reset' => [
    'subject' => '비밀번호 재설정 알림',
    'greeting' => '여보세요!',
    'message' => '귀하의 계정에 대한 비밀번호 재설정 요청이 접수되어이 이메일을 보내드립니다. 비밀번호 재설정을 요청하지 않은 경우이 알림을 무시하고 추가 button_text가 필요하지 않습니다.',
    'button_text' => '암호를 재설정',
  ],
  'dispute_acknowledgement' => [
    'subject' => '[주문 ID : :order_id] 분쟁이 성공적으로 제출되었습니다.',
    'greeting' => '안녕하세요 :customer',
    'message' => '주문 ID : :order_id에 대한 이의 제기가 접수되었음을 알려 드리는 알림입니다. Google 지원팀에서 가능한 한 빨리 답변을 드릴 것입니다.',
    'button_text' => '분쟁보기',
  ],
  'dispute_created' => [
    'subject' => '주문 ID에 대한 새로운 분쟁 : :order_id',
    'greeting' => '안녕하세요 :merchant!',
    'message' => '주문 ID : :order_id에 대한 새로운 이의 제기를 받았습니다. 고객과 함께 문제를 검토하고 해결하세요.',
    'button_text' => '분쟁보기',
  ],
  'dispute_updated' => [
    'subject' => '[주문 ID : :order_id] 분쟁 상태가 업데이트되었습니다!',
    'greeting' => '안녕하세요 :customer!',
    'message' => '주문 ID :order_id에 대한 분쟁이 공급 업체 ": reply"의이 메시지로 업데이트되었습니다. 아래를 확인 하시고 도움이 필요하시면 연락주세요.',
    'button_text' => '분쟁보기',
  ],
  'dispute_appealed' => [
    'subject' => '[주문 ID : :order_id] 분쟁 항소!',
    'greeting' => '여보세요!',
    'message' => '주문 ID :order_id에 대한 이의 제기가 ": reply"메시지로 항소되었습니다. 자세한 내용은 아래를 확인하세요.',
    'button_text' => '분쟁보기',
  ],
  'appealed_dispute_replied' => [
    'subject' => '[주문 ID : :order_id] 항소 분쟁에 대한 새로운 응답!',
    'greeting' => '여보세요!',
    'message' => '주문 ID :order_id에 대한 이의 제기가 다음 메시지로 응답되었습니다. </br> </br> ": reply"',
    'button_text' => '분쟁보기',
  ],
  'low_inventory_notification' => [
    'subject' => '재고 부족 경고!',
    'greeting' => '여보세요!',
    'message' => '하나 이상의 인벤토리 항목이 부족합니다. 더 많은 재고를 추가하여 상품을 마켓 플레이스에 유지해야합니다.',
    'button_text' => '재고 업데이트',
  ],
  'inventory_bulk_upload_procceed_notice' => [
    'subject' => '대량 재고 가져 오기 요청이 처리되었습니다.',
    'greeting' => '여보세요!',
    'message' => '대량 재고 가져 오기 요청이 처리되었음을 알려드립니다. 플랫폼으로 성공적으로 가져온 총 행 수 :success, 실패한 행 수 :failed',
    'failed' => '실패한 행에 대한 첨부 파일을 찾으십시오.',
    'button_text' => '재고보기',
  ],
  'new_message' => [
    'subject' => ':subject',
    'greeting' => '안녕하세요 :receiver',
    'message' => ':message',
    'button_text' => '사이트에서 메시지보기',
  ],
  'message_replied' => [
    'subject' => ':user 응답 :subject',
    'greeting' => '안녕하세요 :receiver',
    'message' => ':reply',
    'button_text' => '사이트에서 메시지보기',
  ],
  'order_created' => [
    'subject' => '[주문 ID : :order] 주문이 성공적으로 완료되었습니다!',
    'greeting' => '안녕하세요 :customer',
    'message' => '우리를 선택해 주셔서 감사합니다! 귀하의 주문 [주문 ID :order]이 성공적으로 접수되었습니다. 주문 상태를 알려 드리겠습니다.',
    'button_text' => '가게 방문',
  ],
  'merchant_order_created_notification' => [
    'subject' => '새로운 주문 [주문 ID : :order]이 상점에 접수되었습니다!',
    'greeting' => '안녕하세요 :merchant',
    'message' => '새로운 주문 [주문 ID :order]이 접수되었습니다. 주문 세부 사항을 확인하고 최대한 빨리 주문을 이행하십시오.',
    'button_text' => '주문 처리',
  ],
  'order_updated' => [
    'subject' => '[주문 ID : :order] 주문 상태가 업데이트되었습니다!',
    'greeting' => '안녕하세요 :customer',
    'message' => '주문 [주문 ID :order]이 업데이트되었음을 ​​알려드립니다. 주문 세부 사항은 아래를 참조하십시오. 대시 보드에서 주문을 확인할 수도 있습니다.',
    'button_text' => '가게 방문',
  ],
  'order_fulfilled' => [
    'subject' => '[주문 ID : :order] 주문이오고 있습니다!',
    'greeting' => '안녕하세요 :customer',
    'message' => '주문 [주문 ID :order]이 배송되었으며 배송 중임을 알려 드리기위한 알림입니다. 주문 세부 사항은 아래를 참조하십시오. 대시 보드에서 주문을 확인할 수도 있습니다.',
    'button_text' => '가게 방문',
  ],
  'order_paid' => [
    'subject' => '[주문 ID : :order] 주문이 성공적으로 결제되었습니다!',
    'greeting' => '안녕하세요 :customer',
    'message' => '주문 [Order ID :order]이 성공적으로 결제되었으며 배송 중임을 알려드립니다. 주문 세부 사항은 아래를 참조하십시오. 대시 보드에서 주문을 확인할 수도 있습니다.',
    'button_text' => '가게 방문',
  ],
  'order_payment_failed' => [
    'subject' => '[주문 ID : :order] 결제 실패!',
    'greeting' => '안녕하세요 :customer',
    'message' => '주문 [Order ID :order] 결제 실패를 알려드립니다. 주문 세부 사항은 아래를 참조하십시오. 대시 보드에서 주문을 확인할 수도 있습니다.',
    'button_text' => '가게 방문',
  ],
  'cancellation_request_acknowledgement' => [
    'subject' => '[주문 ID : :order] 취소 요청이 성공적으로 접수되었습니다!',
    'greeting' => '안녕하세요 :customer',
    'message' => '우리를 선택해 주셔서 감사합니다! 귀하의 주문 [주문 ID :order] 취소 요청이 성공적으로 접수되었습니다. 주문 상태를 알려 드리겠습니다.',
    'button_text' => '가게 방문',
  ],
  'merchant_order_cancellation_notification' => [
    'subject' => '상점에 새로운 주문 취소 요청이 생성되었습니다. [주문 ID : :order].',
    'greeting' => '안녕하세요 :merchant',
    'message' => '주문 [주문 ID :order] 취소 요청이 생성되었습니다. 주문 세부 사항을 확인하고 최대한 빨리 요청에 응답하십시오.',
    'button_text' => '요청에 응답',
  ],
  'cancellation_request_approved' => [
    'subject' => '귀하의 [주문 ID : :order] 품목 취소 요청이 승인되었습니다!',
    'greeting' => '안녕하세요 :customer',
    'message' => '공급 업체에서 [주문 ID :order] 항목 취소 요청을 승인했습니다. 우리를 선택해 주셔서 감사합니다!',
    'button_text' => '가게 방문',
  ],
  'cancellation_request_declined' => [
    'subject' => '[주문 ID : :order]',
    'greeting' => '안녕하세요 :customer',
    'message' => '정말 죄송합니다! 공급 업체의 [주문 ID :order] 품목 취소 요청을 수락하기에는 너무 늦었습니다. 상품이 마음에 들지 않으면 반품 할 수 있습니다.',
    'button_text' => '가게 방문',
  ],
  'order_canceled' => [
    'subject' => '[주문 ID : :order] 주문이 취소되었습니다!',
    'greeting' => '안녕하세요 :customer',
    'message' => '주문 [주문 ID :order]이 취소되었습니다. 우리를 선택해 주셔서 감사합니다!',
    'button_text' => '가게 방문',
  ],
  'refund_initiated' => [
    'subject' => '[주문 ID : :order] 환불이 시작되었습니다!',
    'greeting' => '안녕하세요 :customer',
    'message' => '주문 :order에 대한 환불 요청을 시작했음을 알려 드리는 알림입니다. 팀 구성원 중 한 명이 곧 요청을 검토 할 것입니다. 요청 상태를 알려 드리겠습니다.',
  ],
  'refund_approved' => [
    'subject' => '[주문 ID : :order] 환불 요청이 승인되었습니다!',
    'greeting' => '안녕하세요 :customer',
    'message' => '귀하의 주문 :order에 대한 환불 요청을 승인했음을 알려 드리는 알림입니다. 환불 금액은 :amount입니다. 귀하의 결제 수단으로 금액을 보냈습니다. 귀하의 계정에 적용되는 데 며칠이 소요될 수 있습니다. 며칠 내에 금액이 적용되지 않으면 결제 제공 업체에 문의하세요.',
  ],
  'refund_declined' => [
    'subject' => '[주문 ID : :order] 환불 요청이 거부되었습니다!',
    'greeting' => '안녕하세요 :customer',
    'message' => '주문 :order에 대한 환불 요청이 거부되었음을 알려 드리는 알림입니다. 판매자의 솔루션이 만족스럽지 않은 경우 플랫폼에서 직접 판매자에게 연락하거나 :marketplace에 대한 이의를 제기 할 수도 있습니다. 문제를 해결하기 위해 개입하겠습니다.',
  ],
  'shop_created' => [
    'subject' => '당신의 가게는 갈 준비가되었습니다!',
    'greeting' => '축하 :merchant!',
    'message' => '상점 :shop_name이 성공적으로 생성되었습니다! 상점 관리자 패널에 로그인하려면 아래 버튼을 클릭하십시오.',
    'button_text' => '대시 보드로 이동',
  ],
  'shop_updated' => [
    'subject' => '상점 정보가 성공적으로 업데이트되었습니다!',
    'greeting' => '안녕하세요 :merchant!',
    'message' => '귀하의 상점 :shop_name이 성공적으로 업데이트되었음을 ​​알려드립니다!',
    'button_text' => '대시 보드로 이동',
  ],
  'shop_config_updated' => [
    'subject' => '상점 구성이 성공적으로 업데이트되었습니다!',
    'greeting' => '안녕하세요 :merchant!',
    'message' => '상점 구성이 성공적으로 업데이트되었습니다! 상점 관리자 패널에 로그인하려면 아래 버튼을 클릭하십시오.',
    'button_text' => '대시 보드로 이동',
  ],
  'shop_down_for_maintainace' => [
    'subject' => '당신의 가게가 다운되었습니다!',
    'greeting' => '안녕하세요 :merchant!',
    'message' => '귀하의 상점 :shop_name이 다운되었음을 알리는 알림입니다! 고객이 다시 살기 전까지는 매장을 방문 할 수 없습니다.',
    'button_text' => '구성 페이지로 이동',
  ],
  'shop_is_live' => [
    'subject' => '상점이 다시 LIVE로 돌아 왔습니다!',
    'greeting' => '안녕하세요 :merchant',
    'message' => '귀하의 상점 :shop_name이 성공적으로 돌아 왔음을 알리는 알림입니다!',
    'button_text' => '대시 보드로 이동',
  ],
  'shop_deleted' => [
    'subject' => '상점이 :marketplace에서 제거되었습니다!',
    'greeting' => '안녕하세요 판매자 님!',
    'message' => '귀하의 상점이 마커 플레이스에서 삭제되었음을 알려 드리는 알림입니다! 우리는 당신을 그리워 할 것입니다.',
  ],
  'system_is_down' => [
    'subject' => '이제 마켓 플레이스 :marketplace이 다운되었습니다!',
    'greeting' => '안녕하세요 :user!',
    'message' => '귀하의 마켓 플레이스 :marketplace이 다운되었음을 알리는 알림입니다! 고객이 다시 활성화 될 때까지 마켓 플레이스를 방문 할 수 없습니다.',
    'button_text' => '구성 페이지로 이동',
  ],
  'system_is_live' => [
    'subject' => '귀하의 마켓 플레이스 :marketplace이 다시 라이브로 돌아 왔습니다!',
    'greeting' => '안녕하세요 :user!',
    'message' => '귀하의 마켓 플레이스 :marketplace이 성공적으로 다시 활성화되었음을 알리는 알림입니다!',
    'button_text' => '대시 보드로 이동',
  ],
  'system_info_updated' => [
    'subject' => ':marketplace-마켓 플레이스 정보가 성공적으로 업데이트되었습니다!',
    'greeting' => '안녕하세요 :user!',
    'message' => '귀하의 마켓 플레이스 :marketplace이 성공적으로 업데이트되었음을 ​​알려 드리는 알림입니다!',
    'button_text' => '대시 보드로 이동',
  ],
  'system_config_updated' => [
    'subject' => ':marketplace-마켓 플레이스 구성이 성공적으로 업데이트되었습니다!',
    'greeting' => '안녕하세요 :user!',
    'message' => '마켓 플레이스 :marketplace의 구성이 성공적으로 업데이트되었습니다! 아래 버튼을 클릭하여 관리자 패널에 로그인하십시오.',
    'button_text' => '설정보기',
  ],
  'new_contact_us_message' => [
    'subject' => '문의 양식을 통한 새 메시지 : :subject',
    'greeting' => '여보세요!',
    'message_footer_with_phone' => '이 이메일에 답장하거나이 전화로 직접 연락 할 수 있습니다. :phone',
    'message_footer' => '이 이메일에 직접 회신 할 수 있습니다.',
  ],
  'ticket_acknowledgement' => [
    'subject' => '[티켓 ID : :ticket_id] :subject',
    'greeting' => '안녕하세요 :user',
    'message' => '티켓 :ticket_id이 성공적으로 접수되었음을 알려 드리는 알림입니다! 지원팀이 가능한 한 빨리 답변을 드릴 것입니다.',
    'button_text' => '티켓보기',
  ],
  'ticket_created' => [
    'subject' => '신규 지원 티켓 [티켓 ID : :ticket_id] :subject',
    'greeting' => '여보세요!',
    'message' => '공급 업체 :vendor에서 새 지원 티켓 ID :ticket_id, 보낸 사람 :sender를 받았습니다. 지원 팀에 티켓을 검토하고 평가합니다.',
    'button_text' => '티켓보기',
  ],
  'ticket_assigned' => [
    'subject' => '방금 할당 된 티켓 [티켓 IF : :ticket_id] :subject',
    'greeting' => '안녕하세요 :user',
    'message' => '티켓 [티켓 ID : :ticket_id] :subject가 방금 건네 준 티켓을 알려 드리기위한 알림입니다. 가능한 한 빨리 티켓을 검토하고 회신하십시오.',
    'button_text' => '티켓 회신',
  ],
  'ticket_replied' => [
    'subject' => ':user이 티켓에 응답했습니다. [티켓 ID : :ticket_id] :subject',
    'greeting' => '안녕하세요 :user',
    'message' => ':reply',
    'button_text' => '티켓보기',
  ],
  'ticket_updated' => [
    'subject' => '티켓 [티켓 ID : :ticket_id] :subject가 업데이트되었습니다!',
    'greeting' => '안녕하세요 :user!',
    'message' => '지원 티켓 티켓 ID # : ticket_id :subject 중 하나가 업데이트되었습니다. 도움이 필요하면 저희에게 연락하십시오.',
    'button_text' => '티켓보기',
  ],
  'user_created' => [
    'subject' => ':admin이 당신을 :marketplace 마켓 플레이스에 추가했습니다!',
    'greeting' => '축하 :user!',
    'message' => ' :admin에 의해 :marketplace에 추가되었습니다! 아래 버튼을 클릭하여 계정에 로그인하십시오. 초기 로그인에 임시 비밀번호를 사용하십시오.',
    'alert' => '로그인 후 비밀번호를 변경하는 것을 잊지 마십시오.',
    'button_text' => '프로필 방문',
  ],
  'user_updated' => [
    'subject' => '계정 정보가 성공적으로 업데이트되었습니다!',
    'greeting' => '안녕하세요 :user!',
    'message' => '귀하의 계정이 성공적으로 업데이트되었음을 ​​알려 드리는 알림입니다!',
    'button_text' => '프로필 방문',
  ],
  'verdor_registered' => [
    'subject' => '새로운 공급 업체가 방금 등록되었습니다!',
    'greeting' => '축하합니다!',
    'message' => '마켓 플레이스 :marketplace에 상점 이름이 <strong> : shop_name </strong> 인 새 verdor가 있으며 판매자의 이메일 주소는 :merchant_email입니다.',
    'button_text' => '대시 보드로 이동',
  ],
  'email_verification' => [
    'subject' => ' :marketplace 계정을 확인하십시오!',
    'greeting' => '축하 :user!',
    'message' => '귀하의 계정이 성공적으로 생성되었습니다! 아래 버튼을 클릭하여 이메일 주소를 확인하십시오.',
    'button_text' => '내 이메일 확인',
  ],
  'dispute_solved' => [
    'subject' => '분쟁 [주문 ID : :order_id]이 해결됨으로 표시되었습니다!',
    'greeting' => '안녕하세요 :customer!',
    'message' => '주문 ID : :order_id에 대한 분쟁이 해결 된 것으로 표시되었습니다. 함께 해주셔서 감사합니다.',
    'button_text' => '분쟁보기',
  ],
  'new_chat_message' => [
    'subject' => '라이브 채팅 양식 :sender을 통한 새 메시지',
    'greeting' => '안녕하세요 :receipent!',
    'message' => '라이브 채팅 창 ": message"를 통해 새 메시지를 받았습니다. 답장하려면 상점 대시 보드에 로그인하십시오.',
    'button_text' => '대시 보드에서보기',
  ],
];