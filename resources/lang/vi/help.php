<?php
return [

  'add_input_field' => 'Thêm trường đầu vào',
  'remove_input_field' => 'Xóa trường nhập này',
  'marketplace_name' => 'Tên của tên thị trường. Du khách sẽ thấy tên này.',
  'system_legal_name' => 'Tên pháp lý của doanh nghiệp',
  'min_pass_lenght' => 'Tối thiểu 6 ký tự',
  'role_name' => 'Tiêu đề của vai trò người dùng',
  'role_type' => 'Nền tảng và thương gia. Nền tảng loại vai trò chỉ khả dụng cho người dùng nền tảng chính, một thương gia không thể sử dụng vai trò này. Loại vai trò Người bán sẽ khả dụng khi người bán sẽ thêm người dùng mới.',
  'role_level' => 'Cấp độ vai trò sẽ được sử dụng xác định ai có thể kiểm soát ai. Ví dụ: Người dùng có vai trò cấp 2 không thể sửa đổi bất kỳ người dùng nào có cấp độ vai trò 1. Giữ emty nếu vai trò dành cho người dùng cấp cuối.',
  'you_cant_set_role_level' => 'Chỉ người dùng cấp cao nhất mới có thể đặt giá trị này.',
  'cant_edit_special_role' => 'Loại vai trò này không thể chỉnh sửa. Hãy cẩn thận để sửa đổi các quyền của vai trò này.',
  'set_role_permissions' => 'Đặt quyền cho vai trò rất cẩn thận. Chọn \'Loại vai trò\' để nhận các mô-đun phê duyệt.',
  'permission_modules' => 'Cho phép mô-đun để đặt quyền cho mô-đun',
  'shipping_rate_delivery_takes' => 'Hãy cụ thể, khách hàng sẽ thấy điều này.',
  'type_dbreset' => 'Nhập từ chính xác "Đặt lại" trong hộp để xác nhận mong muốn của bạn.',
  'type_environment' => 'Nhập từ chính xác "MÔI TRƯỜNG" vào ô để xác nhận mong muốn của bạn.',
  'type_uninstall' => 'Nhập từ chính xác "UNINSTALL" vào ô để xác nhận mong muốn của bạn.',
  'module' => [
    'name' => 'Tất cả người dùng dưới vai trò này sẽ có thể thực hiện các hành động được chỉ định để quản lý :module.',
    'access' => [
      'common' => 'Đây là một mô-đun :access. Điều đó có nghĩa là cả người dùng nền tảng và người dùng thương gia đều có thể truy cập.',
      'platform' => 'Đây là một mô-đun :access. Điều đó có nghĩa là chỉ người dùng nền tảng mới có thể truy cập.',
      'merchant' => 'Đây là một mô-đun :access. Điều đó có nghĩa là chỉ người dùng thương mại mới có thể truy cập.',
    ],
  ],
  'currency_iso_code' => 'Mã ISO 4217. Ví dụ: đô la Mỹ có mã USD và mã tiền tệ của Nhật Bản là JPY.',
  'country_iso_code' => 'Mã ISO 3166_2. Ví dụ: Ví dụ: Đối với Hoa Kỳ, mã là Hoa Kỳ',
  'currency_subunit' => 'Tiểu đơn vị đó là một phần của đơn vị cơ sở. Ví dụ: cent, centavo, paisa',
  'currency_symbol_first' => 'Ví dụ: $ 13,21',
  'currency_decimalpoint' => 'Ví dụ: 13,21, 13,21',
  'currency_thousands_separator' => 'Ví dụ: 1.000, 1.000, 1 000',
  'cover_img_size' => 'Kích thước ảnh bìa phải là 1280x300px',
  'featured_img_size' => 'Kích thước hình ảnh nổi bật phải là 285x190px',
  'brand_featured_img_size' => 'Kích thước hình ảnh nổi bật phải là 380x160px',
  'featured_image' => 'Hình ảnh này sẽ hiển thị trong phần Danh mục nổi bật trên trang chủ',
  'brand_featured_image' => 'Hình ảnh này sẽ hiển thị trong phần Thương hiệu nổi bật trên trang chủ',
  'slug' => 'Slug thường là một URL thân thiện với công cụ tìm kiếm',
  'shop_slug' => 'Điều này sẽ được sử dụng làm URL cửa hàng của bạn, Bạn không thể thay đổi nó sau này. Hãy sáng tạo để chọn sên cho cửa hàng của bạn',
  'shop_url' => 'Đường dẫn đầy đủ đến trang đích của cửa hàng. Bạn không thể thay đổi url.',
  'shop_timezone' => 'Múi giờ sẽ không ảnh hưởng đến cửa hàng hoặc thị trường. Chỉ để biết thêm về cửa hàng của bạn',
  'url' => 'địa chỉ web',
  'optional' => '(không bắt buộc)',
  'use_markdown_to_bold' => 'Thêm ** cả hai từ khóa quan trọng để làm nổi bật',
  'announcement_action_text' => 'Nút hành động tùy chọn để liên kết thông báo với bất kỳ url nào',
  'announcement_action_url' => 'Url hành động để đăng bài trên blog hoặc bất kỳ url nào',
  'blog_feature_img_hint' => 'Kích thước hình ảnh phải là 960x480px',
  'code' => 'Mã',
  'brand' => 'Thương hiệu của sản phẩm. Không bắt buộc nhưng nên',
  'shop_name' => 'Tên thương hiệu hoặc hiển thị của cửa hàng',
  'shop_status' => 'Nếu hoạt động, cửa hàng sẽ được sống ngay lập tức.',
  'shop_maintenance_mode_handle' => 'Nếu chế độ bảo trì được bật, cửa hàng sẽ ngoại tuyến và tất cả các danh sách sẽ giảm từ thị trường cho đến khi bảo trì tắt.',
  'system_maintenance_mode_handle' => 'Nếu chế độ bảo trì được bật, thị trường sẽ ngoại tuyến và cờ chế độ bảo trì sẽ được hiển thị cho khách truy cập. Các thương nhân vẫn có thể truy cập bảng quản trị của họ.',
  'system_physical_address' => 'Vị trí thực tế của thị trường / văn phòng',
  'system_email' => 'Tất cả các thông báo sẽ được gửi đến địa chỉ email này, chấp nhận email hỗ trợ (nếu được đặt)',
  'system_timezone' => 'Hệ thống này sẽ sử dụng múi giờ này để hoạt động.',
  'system_currency' => 'Tiền tệ thị trường',
  'system_slogan' => 'Khẩu hiệu mô tả thị trường của bạn nhiều nhất',
  'system_length_unit' => 'Đơn vị chiều dài sẽ được sử dụng trên tất cả các thị trường.',
  'system_weight_unit' => 'Đơn vị trọng lượng sẽ được sử dụng trên tất cả các thị trường.',
  'system_valume_unit' => 'Đơn vị của valume sẽ được sử dụng trên tất cả các thị trường.',
  'ask_customer_for_email_subscription' => 'Khi một khách hàng mới đăng ký một tài khoản, hãy hỏi khách hàng của bạn nếu anh ấy / cô ấy muốn nhận được khuyến mãi và các thông báo khác trên email. Tắt tùy chọn sẽ dẫn đến đăng ký tự động. Trong trường hợp đó, hãy làm rõ về các điều khoản và điều kiện.',
  'allow_guest_checkout' => 'Điều này sẽ cho phép khách hàng thanh toán mà không cần đăng ký trên trang web.',
  'vendor_can_view_customer_info' => 'Điều này sẽ cho phép các nhà cung cấp xem thông tin chi tiết của khách hàng trên trang đặt hàng. Nếu không, tên, địa chỉ email và địa chỉ thanh toán / giao hàng sẽ hiển thị.',
  'system_pagination' => 'Đặt giá trị phân trang cho các bảng dữ liệu trên bảng quản trị.',
  'subscription_name' => 'Đặt một cái tên có ý nghĩa cho kế hoạch đăng ký.',
  'subscription_plan_id' => 'Đây là số nhận dạng cần phải khớp chính xác với ID gói của Stripe',
  'featured_subscription' => 'Chỉ nên có một thuê bao đặc trưng',
  'subscription_cost' => 'Chi phí thuê bao mỗi tháng',
  'team_size' => 'Quy mô nhóm là số lượng người dùng có thể đăng ký theo nhóm này',
  'inventory_limit' => 'Số lượng của danh sách tổng. Một biến thể của cùng một sản phẩm sẽ được coi là một mặt hàng khác nhau.',
  'marketplace_commission' => 'Tỷ lệ phần trăm của giá trị mục hàng theo thị trường',
  'transaction_fee' => 'Nếu bạn muốn tính phí cố định cho mỗi giao dịch',
  'subscription_best_for' => 'Khách hàng mục tiêu cho gói này. Điều này sẽ được hiển thị cho khách hàng.',
  'config_return_refund' => 'Chính sách đổi trả & hoàn tiền cho bạn shop. Vui lòng đọc chính sách của thị trường trước khi bạn chỉ định chính sách của bạn.',
  'config_trial_days' => 'Người bán sẽ bị tính phí sau thời gian dùng thử. Nếu bạn không nhận thẻ trả trước thì tài khoản người bán sẽ bị đóng băng sau thời gian này.',
  'charge_after_trial_days' => 'Sẽ bị tính phí sau thời gian dùng thử :days ngày.',
  'required_card_upfront' => 'Bạn có muốn lấy thông tin thẻ khi người bán đăng ký?',
  'leave_empty_to_save_as_draft' => 'Để trống để lưu như dự thảo',
  'logo_img_size' => 'Kích thước hình ảnh logo phải tối thiểu 300x300px',
  'brand_logo_size' => 'Kích thước hình ảnh logo phải là 120x40px và .png',
  'brand_icon_size' => 'Kích thước hình ảnh biểu tượng phải là 32x32px và .png',
  'config_alert_quantity' => 'Một email thông báo sẽ được gửi hàng tồn kho của bạn xuống dưới số lượng cảnh báo',
  'config_max_img_size_limit_kb' => 'Hệ thống giới hạn kích thước hình ảnh tối đa có thể tải lên cho sản phẩm / kho / logo / avatar. Kích thước tính bằng kilobyte.',
  'config_max_number_of_inventory_imgs' => 'Chọn số lượng hình ảnh có thể được tải lên cho một mục kiểm kê.',
  'config_address_default_country' => 'Đặt giá trị này để điền vào mẫu địa chỉ nhanh hơn. Rõ ràng, người dùng có thể thay đổi giá trị khi thêm địa chỉ mới.',
  'config_address_default_state' => 'Đặt giá trị này để điền vào mẫu địa chỉ nhanh hơn. Rõ ràng, người dùng có thể thay đổi giá trị khi thêm địa chỉ mới.',
  'config_show_address_title' => 'Hiển thị / Ẩn tiêu đề địa chỉ trong khi xem / in một địa chỉ.',
  'config_address_show_country' => 'Hiển thị / Ẩn tên quốc gia trong khi xem / in một địa chỉ. Điều này rất hữu ích nếu thị trường của bạn trong một khu vực nhỏ.',
  'config_address_show_map' => 'Bạn muốn hiển thị bản đồ với địa chỉ? Tùy chọn này sẽ tạo bản đồ bằng Google Map.',
  'config_show_currency_symbol' => 'Bạn có muốn hiển thị biểu tượng tiền tệ khi đại diện cho một mức giá? Ví dụ: $ 123',
  'config_show_space_after_symbol' => 'Muốn định dạng giá bằng cách đặt một khoảng trắng sau ký hiệu. Ví dụ: $ 123',
  'config_decimals' => 'Có bao nhiêu chữ số bạn muốn hiển thị sau dấu thập phân? Ví dụ: 13,21, 13.123',
  'config_gift_card_pin_size' => 'Có bao nhiêu chữ số bạn muốn tạo số pin giftcard. Độ dài mặc định 10',
  'config_gift_card_serial_number_size' => 'Có bao nhiêu chữ số bạn muốn tạo số sê-ri thẻ quà tặng. Độ dài mặc định 13',
  'config_coupon_code_size' => 'Có bao nhiêu chữ số bạn muốn tạo mã phiếu giảm giá. Độ dài mặc định 8',
  'shop_email' => 'Tất cả các thông báo sẽ được gửi đến địa chỉ email này (hàng tồn kho, đơn đặt hàng, vé, tranh chấp, v.v.) chấp nhận email hỗ trợ khách hàng (nếu được đặt)',
  'shop_legal_name' => 'Tên pháp lý của cửa hàng',
  'shop_owner_id' => 'Các chủ sở hữu và siêu quản trị của cửa hàng. Người dùng đã đăng ký làm Người bán có thể sở hữu cửa hàng. Bạn không thể thay đổi điều này sau.',
  'shop_description' => 'Mô tả thương hiệu của cửa hàng, thông tin này sẽ được hiển thị trên trang chủ của cửa hàng.',
  'attribute_type' => 'Các loại thuộc tính. Điều này sẽ giúp hiển thị các tùy chọn trên trang sản phẩm.',
  'attribute_name' => 'Tên này sẽ hiển thị trên trang sản phẩm.',
  'attribute_value' => 'Giá trị này sẽ hiển thị trên trang sản phẩm dưới dạng tùy chọn có thể chọn.',
  'parent_attribute' => 'Tùy chọn sẽ được hiển thị dưới thuộc tính này.',
  'list_order' => 'Xem thứ tự trên danh sách.',
  'shop_external_url' => 'Nếu bạn sở hữu một trang web, bạn có thể đặt liên kết bên ngoài tại đây, url có thể được đặt làm trang đích của cửa hàng.',
  'product_name' => 'Khách hàng sẽ không thấy điều này. Tên này chỉ giúp các thương nhân tìm thấy các mục để liệt kê.',
  'product_featured_image' => 'Khách hàng sẽ không thấy điều này. Điều này chỉ giúp các thương nhân tìm thấy các mục để liệt kê.',
  'product_images' => 'Khách hàng sẽ chỉ nhìn thấy hình ảnh này nếu danh sách của thương gia không có hình ảnh để hiển thị.',
  'product_active' => 'Thương gia sẽ chỉ tìm thấy các mặt hàng hoạt động.',
  'product_description' => 'Khách hàng sẽ thấy điều này. Đây là cốt lõi và mô tả sản phẩm phổ biến.',
  'model_number' => 'Một định danh của một sản phẩm được đưa ra bởi nhà sản xuất của nó. Không bắt buộc nhưng nên',
  'gtin' => 'Số thương phẩm toàn cầu (GTIN) là mã định danh duy nhất của sản phẩm trên thị trường toàn cầu. Nếu bạn muốn có được mã ISBN hoặc UPC cho sản phẩm của mình, bạn sẽ tìm thấy thêm thông tin tại các trang web sau: http://www.vdn.org/ và http: //www.uc-cferences.org/',
  'mpn' => 'Nhà sản xuất Phần số (MPN) là một mã định danh duy nhất do nhà sản xuất cấp. Bạn có thể có được MPN từ nhà sản xuất. Không bắt buộc nhưng nên',
  'sku' => 'SKU (Stock Keeping Unit) là định danh cụ thể của người bán. Nó sẽ giúp quản lý hàng tồn kho của bạn',
  'isbn' => 'Số sách tiêu chuẩn quốc tế (ISBN) là mã vạch định danh sách thương mại duy nhất. Mỗi mã ISBN xác định duy nhất một cuốn sách. ISBN có 10 hoặc 13 chữ số. Tất cả các số được gán sau ngày 1 tháng 1 năm 2007 có 13 chữ số. Thông thường, ISBN được in ở bìa sau của cuốn sách',
  'ean' => 'Số bài viết châu Âu (EAN) là một tiêu chuẩn mã vạch, mã nhận dạng sản phẩm 12 hoặc 13 chữ số. Bạn có thể có được EAN từ nhà sản xuất. Nếu sản phẩm của bạn không có EAN của nhà sản xuất và bạn cần mua mã EAN, hãy truy cập GS1 UK http://www.gs1uk.org',
  'upc' => 'Mã sản phẩm toàn cầu (UPC), còn được gọi là GTIN-12 và UPC-A. Mã định danh số duy nhất cho các sản phẩm thương mại thường được liên kết với mã vạch được in trên hàng hóa bán lẻ',
  'meta_title' => 'Các thẻ tiêu đề, kỹ thuật được gọi là các thành phần tiêu đề. Thẻ tiêu đề thường được sử dụng trên các trang kết quả của công cụ tìm kiếm (SERPs) để hiển thị các đoạn xem trước cho một trang nhất định và rất quan trọng đối với SEO và chia sẻ xã hội',
  'meta_description' => 'Mô tả meta là các thuộc tính HTML cung cấp giải thích ngắn gọn về nội dung của các trang web. Mô tả meta thường được sử dụng trên các trang kết quả của công cụ tìm kiếm (SERPs) để hiển thị các đoạn xem trước cho một trang nhất định',
  'catalog_min_price' => 'Đặt giá tối thiểu cho sản phẩm. Các nhà cung cấp có thể thêm hàng tồn kho trong giới hạn giá này.',
  'catalog_max_price' => 'Đặt giá tối đa cho sản phẩm. Các nhà cung cấp có thể thêm hàng tồn kho trong giới hạn giá này.',
  'requires_shipping' => 'Mục này yêu cầu vận chuyển.',
  'downloadable' => 'Mục này là một nội dung kỹ thuật số và người mua có thể tải xuống các mục.',
  'manufacturer_url' => 'Các liên kết trang web chính thức của nhà sản xuất.',
  'manufacturer_email' => 'Hệ thống sẽ sử dụng địa chỉ email này để liên lạc với nhà sản xuất.',
  'manufacturer_phone' => 'Số điện thoại hỗ trợ của nhà sản xuất.',
  'supplier_email' => 'Hệ thống sẽ sử dụng địa chỉ email này để liên lạc với nhà cung cấp.',
  'supplier_contact_person' => 'Người liên hệ',
  'shop_address' => 'Địa chỉ vật lý của cửa hàng.',
  'search_product' => 'Bạn có thể sử dụng bất kỳ số nhận dạng GTIN nào như UPC, ISBN, EAN, JAN hoặc ITF. Bạn cũng có thể sử dụng tên và số kiểu HOẶC một phần của tên hoặc số kiểu.',
  'seller_description' => 'Đây là mô tả cụ thể của người bán sản phẩm. Khách hàng sẽ thấy điều này',
  'seller_product_condition' => 'Tình trạng hiện tại của sản phẩm là gì?',
  'condition_note' => 'Điều kiện lưu ý là hữu ích khi sản phẩm được sử dụng / tân trang',
  'select_supplier' => 'Lĩnh vực đề xuất. Điều này sẽ giúp tạo báo cáo',
  'select_warehouse' => 'Chọn kho từ nơi sản phẩm sẽ được vận chuyển.',
  'select_packagings' => 'Danh sách các tùy chọn đóng gói có sẵn để vận chuyển sản phẩm. Để trống để tắt tùy chọn đóng gói',
  'available_from' => 'Ngày mà chứng khoán sẽ có sẵn. Mặc định = ngay lập tức',
  'sale_price' => 'Giá không có thuế. Thuế sẽ được tính tự động dựa trên khu vực vận chuyển.',
  'purchase_price' => 'Lĩnh vực đề xuất. Điều này sẽ giúp tính toán lợi nhuận và tạo báo cáo',
  'min_order_quantity' => 'Số lượng được phép nhận đơn đặt hàng. Phải là một giá trị nguyên. Mặc định = 1',
  'offer_price' => 'Giá ưu đãi sẽ được thực hiện giữa ngày bắt đầu và ngày kết thúc',
  'offer_start' => 'Một đề nghị phải có ngày bắt đầu. Cần thiết nếu trường giá chào bán được đưa ra',
  'offer_end' => 'Một đề nghị phải có ngày kết thúc. Cần thiết nếu trường giá chào bán được đưa ra',
  'seller_inventory_status' => 'Là mặt hàng được mở để bán? Mục không hoạt động sẽ không được hiển thị trên thị trường.',
  'stock_quantity' => 'Số lượng mặt hàng bạn có trên kho của bạn',
  'offer_starting_time' => 'Cung cấp thời gian bắt đầu',
  'offer_ending_time' => 'Cung cấp thời gian kết thúc',
  'set_attribute' => 'Nếu giá trị không có trong danh sách, bạn có thể thêm giá trị phù hợp bằng cách chỉ cần nhập giá trị mới',
  'variants' => 'Biến thể sản phẩm',
  'delete_this_combination' => 'Xóa kết hợp này',
  'romove_this_cart_item' => 'Loại bỏ mặt hàng này khỏi giỏ hàng',
  'no_product_found' => 'Không tìm thấy sản phẩm! Vui lòng thử tìm kiếm khác nhau hoặc thêm sản phẩm mới',
  'not_available' => 'Không có sẵn!',
  'admin_note' => 'Ghi chú của quản trị viên sẽ không hiển thị cho khách hàng',
  'message_to_customer' => 'Thông báo này sẽ gửi cho khách hàng với email hóa đơn',
  'empty_cart' => 'Giỏ hàng trống',
  'send_invoice_to_customer' => 'Gửi hóa đơn cho khách hàng với thông báo này',
  'delete_the_cart' => 'Xóa giỏ hàng và tiến hành đặt hàng',
  'order_status_send_email' => 'Một email sẽ được gửi đến khách hàng khi cập nhật trạng thái đơn hàng',
  'order_status_email_template' => 'Mẫu email này sẽ được gửi đến khách hàng khi trạng thái đơn hàng cập nhật. Bắt buộc nếu email được bật cho trạng thái',
  'update_order_status' => 'Cập nhật trạng thái đơn hàng',
  'email_template_name' => 'Đặt tên cho mẫu. Điều này chỉ dành cho hệ thống sử dụng.',
  'template_use_for' => 'Mẫu sẽ được sử dụng bởi',
  'email_template_subject' => 'Điều này sẽ sử dụng như là chủ đề của email.',
  'email_template_body' => 'Có một số mã ngắn bạn có thể sử dụng cho thông tin động. Kiểm tra dưới cùng của mẫu này để xem các mã ngắn có sẵn.',
  'email_template_type' => 'Các loại email.',
  'template_sender_email' => 'Địa chỉ email này sẽ sử dụng để gửi email và người nhận có thể trả lời này.',
  'template_sender_name' => 'Tên này sẽ sử dụng làm tên người gửi',
  'packaging_name' => 'Khách hàng sẽ thấy điều này nếu tùy chọn đóng gói có sẵn khi thanh toán đơn hàng',
  'width' => 'Chiều rộng của bao bì',
  'height' => 'Chiều cao của bao bì',
  'depth' => 'Độ sâu của bao bì',
  'packaging_cost' => 'Chi phí đóng gói. Bạn có thể chọn nếu bạn muốn tính chi phí cho khách hàng hay không',
  'set_as_default_packaging' => 'Nếu được chọn: bao bì này sẽ được sử dụng làm gói vận chuyển mặc định',
  'shipping_carrier_name' => 'Tên của hãng vận chuyển',
  'shipping_zone_name' => 'Đặt tên của khu vực. Khách hàng sẽ không thấy tên này.',
  'shipping_rate_name' => 'Đặt một cái tên có ý nghĩa. Khách hàng sẽ thấy tên này khi thanh toán. e. g. \'vận chuyển tiêu chuẩn\'',
  'shipping_zone_carrier' => 'Bạn có thể liên kết các hãng vận chuyển. Khách hàng sẽ thấy điều này khi thanh toán.',
  'free_shipping' => 'Nếu được bật, Nhãn vận chuyển miễn phí sẽ được hiển thị trên trang danh sách sản phẩm.',
  'shipping_rate' => 'Kiểm tra tùy chọn \'Giao hàng miễn phí\' hoặc cung cấp 0 số tiền để giao hàng miễn phí',
  'shipping_zone_tax' => 'Hồ sơ thuế này sẽ được áp dụng khi khách hàng mua hàng từ khu vực vận chuyển này',
  'shipping_zone_select_countries' => 'Chọn quốc gia đến khu vực này mà bạn gửi đến. Kiểm tra phần còn lại của tùy chọn thế giới cho khu vực trên toàn thế giới.',
  'rest_of_the_world' => 'Khu vực này bao gồm bất kỳ quốc gia và khu vực nào chưa được xác định trong các khu vực vận chuyển khác của bạn.',
  'shipping_max_width' => 'Chiều rộng gói tối đa xử lý bởi các hãng. Để trống để vô hiệu hóa.',
  'shipping_tracking_url' => '\'@\' sẽ được thay thế bằng số theo dõi động',
  'shipping_tracking_url_example' => 'ví dụ: http://example.com/track.php?num=@',
  'order_tracking_id' => 'ID theo dõi đơn hàng được cung cấp bởi nhà cung cấp dịch vụ vận chuyển.',
  'order_fulfillment_carrier' => 'Chọn hãng vận chuyển để thực hiện đơn hàng.',
  'notify_customer' => 'Một email thông báo sẽ được gửi đến khách hàng với thông tin cần thiết.',
  'shipping_weight' => 'Sẽ được sử dụng để tính chi phí vận chuyển.',
  'order_number_prefix_suffix' => 'Tiền tố và hậu tố sẽ được thêm tự động để định dạng tất cả các số thứ tự. Để trống nếu bạn không muốn tạo số thứ tự.',
  'customer_not_see_this' => 'Khách hàng sẽ không thấy điều này',
  'customer_will_see_this' => 'Khách hàng sẽ thấy điều này',
  'refund_select_order' => 'Chọn đơn hàng bạn muốn hoàn tiền',
  'refund_order_fulfilled' => 'Là đơn đặt hàng được vận chuyển cho khách hàng?',
  'refund_return_goods' => 'Là mặt hàng trả lại cho bạn?',
  'customer_paid' => 'Khách hàng đã thanh toán <strong> <em> :amount </em> </strong>, đã bao gồm tất cả các loại thuế, phí vận chuyển và các khoản khác.',
  'order_refunded' => 'Đã hoàn trả trước đây <strong> <em> :amount </em> </strong> trong tổng số <strong> <em> :total </em> </strong>',
  'search_customer' => 'Tìm khách hàng theo địa chỉ email, tên đẹp hoặc tên đầy đủ.',
  'coupon_quantity' => 'Tổng số phiếu giảm giá có sẵn',
  'coupon_name' => 'Tên sẽ được sử dụng trong hóa đơn và tóm tắt đơn hàng',
  'coupon_code' => 'Mã phiếu giảm giá duy nhất',
  'coupon_value' => 'Giá trị của phiếu giảm giá',
  'coupon_min_order_amount' => 'Chọn số lượng đặt hàng tối thiểu cho giỏ hàng (tùy chọn)',
  'coupon_quantity_per_customer' => 'Chọn số lần khách hàng có thể sử dụng phiếu giảm giá này. Nếu bạn để trống thì khách hàng có thể sử dụng phiếu giảm giá này cho đến khi có sẵn.',
  'starting_time' => 'Phiếu giảm giá sẽ có sẵn từ thời điểm này',
  'ending_time' => 'Phiếu giảm giá sẽ có sẵn cho đến thời điểm này',
  'exclude_tax_n_shipping' => 'Không bao gồm thuế và chi phí vận chuyển',
  'exclude_offer_items' => 'Không bao gồm các mặt hàng đã có ưu đãi hoặc giảm giá đang chạy',
  'coupon_limited_to_customers' => 'Chọn nếu bạn muốn tạo phiếu giảm giá cho khách hàng cụ thể',
  'coupon_limited_to_shipping_zones' => 'Chọn nếu bạn muốn tạo phiếu giảm giá cho các khu vực vận chuyển cụ thể',
  'coupon_limited_to' => 'Sử dụng địa chỉ email hoặc tên để tìm kiếm khách hàng',
  'faq_placeholders' => 'Bạn có thể sử dụng trình giữ chỗ này trong câu hỏi và câu trả lời của mình, điều này sẽ được thay thế bằng giá trị thực',
  'gift_card_name' => 'Tên của thẻ quà tặng.',
  'gift_card_pin_code' => 'Mã bí mật độc đáo. Mã pin là mật mã cho thẻ. Bạn không thể thay đổi giá trị này sau.',
  'gift_card_serial_number' => 'Số sê-ri duy nhất cho thẻ. Bạn không thể thay đổi giá trị này sau.',
  'gift_card_value' => 'Giá trị của thẻ. Khách hàng sẽ nhận được số tiền giảm giá tương tự.',
  'gift_card_activation_time' => 'Thời gian kích hoạt của thẻ. Thẻ có thể được sử dụng sau thời gian này.',
  'gift_card_expiry_time' => 'Thời hạn sử dụng của thẻ. Thẻ có thể có giá trị cho đến thời điểm này.',
  'gift_card_partial_use' => 'Cho phép sử dụng một phần tổng giá trị thẻ',
  'number_between' => 'Giữa :min và :max',
  'default_tax_id' => 'Hồ sơ thuế mặc định sẽ được áp dụng khi khu vực vận chuyển không thuộc bất kỳ khu vực thuế nào.',
  'default_payment_method_id' => 'Nếu được chọn, Phương thức thanh toán sẽ được chọn trước khi tạo đơn hàng mới',
  'config_order_handling_cost' => 'Tille chi phí bổ sung này được thêm vào với chi phí vận chuyển của mỗi đơn hàng. Để trống để vô hiệu hóa phí xử lý đơn hàng',
  'default_warehouse' => 'Kho mặc định sẽ được chọn trước khi thêm hàng tồn kho mới',
  'default_supplier' => 'Nhà cung cấp mặc định sẽ được chọn trước khi thêm hàng tồn kho mới',
  'default_packaging_ids_for_inventory' => 'Đóng gói mặc định sẽ được chọn trước khi thêm hàng tồn kho mới. Điều này sẽ giúp bạn thêm hàng tồn kho nhanh hơn',
  'config_payment_environment' => 'Là thông tin đăng nhập cho chế độ trực tiếp hoặc kiểm tra thêm?',
  'config_authorize_net_transaction_key' => 'Khóa giao dịch từ Authorize.net. Nếu bạn không chắc chắn, hãy liên hệ với Authorize.net để nhận trợ giúp.',
  'config_authorize_net_api_login_id' => 'ID đăng nhập API từ Authorize.net. Nếu bạn không chắc chắn, hãy liên hệ với Authorize.net để nhận trợ giúp.',
  'config_enable_payment_method' => 'Hệ thống này cung cấp nhiều loại cổng thanh toán. Bạn có thể bật / tắt bất kỳ cổng thanh toán nào để kiểm soát nhà cung cấp tùy chọn thanh toán có thể sử dụng để chấp nhận thanh toán từ khách hàng.',
  'config_additional_details' => 'Hiển thị trên trang Phương thức thanh toán, trong khi khách hàng đang chọn cách thanh toán.',
  'config_payment_instructions' => 'Hiển thị trên trang Cảm ơn, sau khi khách hàng đã đặt hàng.',
  'config_stripe_publishable_key' => 'Các khóa API có thể xuất bản chỉ nhằm xác định tài khoản của bạn với Stripe, chúng không bí mật. Họ có thể được công bố một cách an toàn.',
  'config_paypal_express_account' => 'Thông thường là địa chỉ email của ứng dụng PayPal của bạn. Tạo ứng dụng PayPal của bạn từ đây: https://developer.paypal.com/webapps/developer/appluggest/myapps',
  'config_paypal_express_client_id' => 'ID khách hàng là một định danh duy nhất dài của ứng dụng PayPal của bạn. Bạn sẽ tìm thấy giá trị này trên phần Ứng dụng & Thông tin của tôi trên bảng điều khiển PayPal của bạn.',
  'config_paypal_express_secret' => 'Khóa bí mật API PayPal. Bạn sẽ tìm thấy giá trị này trên phần Ứng dụng & Thông tin của tôi trên bảng điều khiển PayPal của bạn.',
  'config_paystack_merchant_email' => 'Email thương gia của tài khoản Paystack của bạn.',
  'config_paystack_public_key' => 'Khóa công khai là một mã định danh duy nhất dài của ứng dụng Paystack của bạn. Bạn sẽ tìm thấy giá trị này trên các khóa API và phần Webhooks trong cài đặt trên bảng điều khiển Paystack của bạn.',
  'config_paystack_secret' => 'Khóa bí mật API Paystack. Bạn sẽ tìm thấy giá trị này trên các khóa API và phần Webhooks trong cài đặt trên bảng điều khiển Paystack của bạn.',
  'config_auto_archive_order' => 'Tự động lưu trữ đơn hàng. Chọn tính năng này nếu bạn không muốn lưu trữ thủ công tất cả các đơn đặt hàng sau khi chúng được thực hiện.',
  'config_pagination' => 'Có bao nhiêu mục danh sách bạn muốn xem trên mỗi trang trên bảng dữ liệu',
  'support_phone' => 'Khách hàng sẽ liên hệ với số này để được hỗ trợ và truy vấn',
  'support_email' => 'Bạn sẽ nhận được tất cả email hỗ trợ đến địa chỉ này',
  'support_phone_toll_free' => 'Nếu bạn có số điện thoại miễn phí để được hỗ trợ khách hàng',
  'default_sender_email_address' => 'Tất cả các email tự động gửi cho khách hàng sẽ được gửi từ địa chỉ email này. Và cũng có thể khi địa chỉ email người gửi không thể được đặt trong khi gửi email',
  'default_email_sender_name' => 'Tên này sẽ được sử dụng làm người gửi email gửi từ địa chỉ email người gửi mặc định',
  'google_analytic_report' => 'Bạn chỉ nên kích hoạt tính năng này, Nếu hệ thống được định cấu hình với Google Analytics. Nếu không, nó có thể gây ra lỗi. Kiểm tra tài liệu để được giúp đỡ. Ngoài ra, bạn có thể sử dụng hệ thống báo cáo được tích hợp sẵn của ứng dụng.',
  'inventory_linked_items' => 'Các mục được liên kết sẽ hiển thị trên trang sản phẩm như các mục thường được mua cùng nhau. Đây là tùy chọn nhưng quan trọng.',
  'notify_new_message' => 'Gửi cho tôi một thông báo khi có tin nhắn mới',
  'notify_alert_quantity' => 'Gửi cho tôi một thông báo khi bất kỳ mục nào trong kho của tôi đạt đến mức số lượng cảnh báo',
  'notify_inventory_out' => 'Gửi cho tôi một thông báo khi có bất kỳ mục nào trong kho của tôi',
  'notify_new_order' => 'Gửi cho tôi một thông báo khi một đơn đặt hàng mới đã được đặt trên cửa hàng của tôi',
  'notify_abandoned_checkout' => 'Gửi cho tôi một thông báo khi khách hàng từ bỏ kiểm tra mặt hàng của tôi',
  'notify_when_vendor_registered' => 'Gửi cho tôi một thông báo khi một nhà cung cấp mới đã được đăng ký',
  'notify_new_ticket' => 'Gửi cho tôi một thông báo khi một vé hỗ trợ đã được tạo trên hệ thống',
  'notify_new_disput' => 'Gửi cho tôi một thông báo khi khách hàng gửi tranh chấp mới',
  'notify_when_dispute_appealed' => 'Gửi cho tôi một thông báo khi tranh chấp đã được kháng cáo để xem xét bởi nhóm thị trường',
  'download_template' => '<a href=":url"> Tải xuống mẫu CSV mẫu </a> để xem ví dụ về định dạng được yêu cầu.',
  'download_category_slugs' => '<a href=":url"> Tải xuống sên danh mục </a> để có danh mục chính xác cho các sản phẩm của bạn.',
  'first_row_as_header' => 'Hàng đầu tiên là tiêu đề. <strong> Đừng thay đổi </strong> hàng này.',
  'user_category_slug' => 'Sử dụng danh mục <strong> sên </strong> trong trường danh mục.',
  'cover_img' => 'Hình ảnh này sẽ hiển thị trên đầu trang :page',
  'cat_grp_img' => 'Hình ảnh này sẽ hiển thị trên nền của hộp thả xuống danh mục',
  'cat_grp_desc' => 'Khách hàng sẽ không thấy điều này. Nhưng Thương sẽ thấy điều này.',
  'inactive_for_back_office' => 'Nếu không hoạt động, Khách hàng vẫn có thể truy cập trang :page. Nhưng thương nhân sẽ không thể sử dụng :page này cho danh sách trong tương lai.',
  'invalid_rows_will_ignored' => 'Các hàng không hợp lệ sẽ bị <strong> bỏ qua </strong>.',
  'upload_rows' => 'Bạn có thể tải lên tối đa <strong>: bản ghi hàng </strong> mỗi đợt để có hiệu suất tốt hơn.',
  'name_field_required' => 'Tên trường là bắt buộc.',
  'email_field_required' => 'Email thì cần thiết.',
  'invalid_email' => 'Địa chỉ email không hợp lệ.',
  'invalid_category' => 'Thể loại không hợp lệ.',
  'category_desc' => 'Cho một chi tiết ngắn. Khách hàng sẽ thấy điều này.',
  'email_already_exist' => 'Địa chỉ email đã được sử dụng.',
  'slug_already_exist' => 'Sên đã được sử dụng.',
  'display_order' => 'Số này sẽ được sử dụng để sắp xếp thứ tự xem. Số nhỏ nhất sẽ hiển thị đầu tiên.',
  'banner_title' => 'Dòng này sẽ được đánh dấu trên banner. Để trống nếu bạn không muốn hiển thị tiêu đề.',
  'banner_description' => '(Ví dụ: Giảm 50%!) Để trống nếu bạn không muốn hiển thị điều này.',
  'banner_image' => 'Hình ảnh chính những gì sẽ hiển thị trên nền. Thường sử dụng một hình ảnh sản phẩm.',
  'banner_background' => 'Chọn một màu hoặc tải lên một hình ảnh làm nền.',
  'banner_group' => 'Việc đặt banner trên mặt tiền cửa hàng. Biểu ngữ sẽ không hiển thị nếu nhóm không được chỉ định.',
  'bs_columns' => 'Biểu ngữ này sẽ sử dụng bao nhiêu cột? Hệ thống sử dụng hệ thống lưới 12 cột để hiển thị các biểu ngữ.',
  'banner_order' => 'Số này sẽ được sử dụng để sắp xếp thứ tự xem trong nhóm các biểu ngữ. Số nhỏ nhất sẽ hiển thị đầu tiên.',
  'banner_link' => 'Người dùng sẽ chuyển hướng đến liên kết này.',
  'link_label' => 'Nhãn của nút liên kết',
  'slider_link' => 'Người dùng sẽ chuyển hướng đến liên kết này.',
  'slider_title' => 'Dòng này sẽ được tô sáng trên thanh trượt. Để trống nếu bạn không muốn hiển thị tiêu đề.',
  'slider_sub_title' => 'Dòng thứ hai của tiêu đề. Để trống nếu bạn không muốn hiển thị điều này.',
  'slider_description' => 'Vài lời về thanh trượt. Để trống nếu bạn không muốn hiển thị mô tả.',
  'slider_image' => 'Các hình ảnh chính những gì sẽ hiển thị như thanh trượt. Yêu cầu của nó để tạo thanh trượt.',
  'slider_img_hint' => 'Hình ảnh thanh trượt phải là 1280x300px',
  'slider_order' => 'Các thanh trượt sẽ được sắp xếp theo thứ tự này.',
  'slider_thumb_image' => 'Hình ảnh nhỏ này sẽ được sử dụng làm hình thu nhỏ. Hệ thống sẽ tạo một hình thu nhỏ nếu không được cung cấp.',
  'variant_image' => 'Hình ảnh của biến thể',
  'empty_trash' => 'Dọn rác. Tất cả các mục trên thùng rác sẽ bị xóa vĩnh viễn.',
  'hide_trial_notice_on_vendor_panel' => 'Ẩn thông báo dùng thử trên bảng điều khiển của nhà cung cấp',
  'language_order' => 'Vị trí bạn muốn hiển thị ngôn ngữ này trên tùy chọn ngôn ngữ. Số nhỏ nhất sẽ hiển thị đầu tiên.',
  'locale_active' => 'Bạn có muốn hiển thị ngôn ngữ này trên tùy chọn ngôn ngữ?',
  'locale_code' => 'Mã ngôn ngữ, mã phải có cùng tên với thư mục ngôn ngữ.',
  'locale_code_exmaple' => 'Ví dụ cho tiếng Anh mã là <em> en </em>',
  'new_language_info' => 'Một ngôn ngữ mới sẽ không ảnh hưởng đến hệ thống trừ khi bạn thực sự thực hiện giao dịch của thư mục ngôn ngữ. Kiểm tra tài liệu để biết chi tiết.',
  'php_locale_code' => 'Mã ngôn ngữ PHP để sử dụng hệ thống như ngày dịch, thời gian, v.v. Vui lòng tìm danh sách đầy đủ mã địa phương PHP trên tài liệu.',
  'rtl' => 'Là ngôn ngữ là phải sang trái (RTL)?',
  'select_all_verification_documents' => 'Chọn tất cả các tài liệu cùng một lúc.',
  'system_default_language' => 'Ngôn ngữ mặc định của hệ thống',
  'update_trial_period' => 'Cập nhật thời gian dùng thử',
  'vendor_needs_approval' => 'Nếu được bật, mọi nhà cung cấp mới sẽ yêu cầu phê duyệt thủ công từ bảng quản trị nền tảng để phát trực tiếp.',
  'verified_seller' => 'Người bán đã được xác minh',
  'mark_address_verified' => 'Đánh dấu là địa chỉ được xác minh',
  'mark_id_verified' => 'Đánh dấu là ID đã được xác minh',
  'mark_phone_verified' => 'Đánh dấu là điện thoại đã được xác minh',
  'missing_required_data' => 'Dữ liệu không hợp lệ, Một số dữ liệu cần thiết bị thiếu.',
  'invalid_catalog_data' => 'Dữ liệu danh mục không hợp lệ, kiểm tra lại GTIN và các thông tin khác.',
  'product_have_to_be_catalog' => 'Sản phẩm phải có mặt trong hệ thống <strong> danh mục </strong>. nếu không nó sẽ không tải lên.',
  'need_to_know_product_gtin' => 'Bạn cần biết <strong> GTIN </strong> của các mục trước khi tải lên.',
  'multi_img_upload_instruction' => 'Bạn có thể tải lên tối đa :number hình ảnh và mỗi kích thước tệp không thể vượt quá :size KB',
  'number_of_img_upload_required' => 'Bạn phải chọn ít nhất <b> {n} </b> {files} để tải lên. Vui lòng thử lại tải lên của bạn!',
  'msg_invalid_file_extension' => 'Phần mở rộng không hợp lệ cho tệp {name}. Chỉ các tệp <b> {extend} </b> được hỗ trợ.',
  'number_of_img_upload_exceeded' => 'Bạn có thể tải lên tối đa các tệp <b> {m} </b> (các tệp <b> {n} </b> được phát hiện).',
  'msg_invalid_file_too_learge' => 'Tệp {name} (<b> {size} KB </b>) vượt quá kích thước tải lên tối đa được phép của <b> {maxSize} KB </b>. Vui lòng thử lại tải lên của bạn!',
  'required_fields_csv' => 'Các trường này là <strong> bắt buộc </strong> <em>: các trường </em>.',
  'seller_condition_note' => 'Nhập thêm chi tiết về điều kiện mục. Điều này sẽ giúp khách hàng hiểu được mặt hàng.',
  'active_business_zone' => 'Khu vực hoạt động kinh doanh của bạn. Các nhà cung cấp sẽ chỉ có thể tạo các khu vực vận chuyển trong khu vực hoạt động.',
  'config_show_seo_info_to_frontend' => 'Hiển thị thông tin SEO như tiêu đề meta, mô tả meta, thẻ vào frontend.',
  'config_can_use_own_catalog_only' => 'Nếu được bật, các nhà cung cấp chỉ có thể sử dụng sản phẩm danh mục của riêng mình để tạo danh sách.',
  'currency_iso_numeric' => 'Mã số ISO 4217. Ví dụ: USD = 840 và JPY = 392',
  'country_iso_numeric' => 'Mã số ISO 3166-1. Ví dụ: Hoa Kỳ = 840 và NHẬT BẢN = 392',
  'currency_active' => 'Tiền tệ hoạt động sẽ được hiển thị trên thị trường.',
  'country_active' => 'Tiền tệ hoạt động sẽ được bao gồm trong khu vực kinh doanh.',
  'currency_symbol' => 'Ký hiệu tiền tệ',
  'currency_disambiguate_symbol' => 'Ví dụ: USD = US $ và BDT = BD $',
  'currency_html_entity' => 'Ví dụ: JPY = và INR = $',
  'currency_smallest_denomination' => 'Mệnh giá nhỏ nhất của tiền tệ. Giá trị mặc định là 1',
  'currency_subunit_to_unit' => 'Số lượng tiểu đơn vị cần cho một đơn vị. Giá trị mặc định là 100',
  'eea' => 'khu vực kinh tế châu Âu',
  'support_agent' => 'Các đại lý hỗ trợ sẽ nhận được tất cả các thông báo hỗ trợ. Nếu không được đặt, người bán sẽ nhận được tất cả các thông báo.',
  'show_refund_policy_with_listing' => 'Hiển thị chính sách hoàn trả và hoàn tiền trên trang mô tả sản phẩm ở lối vào.',
  'show_shop_desc_with_listing' => 'Hiển thị mô tả cửa hàng trên trang mô tả sản phẩm trên frontend.',
  'shipping_zone_select_states' => 'Nếu bạn không thấy tùy chọn mà bạn đang tìm kiếm, có lẽ thị trường không hoạt động trong khu vực đó. Bạn có thể liên hệ với quản trị viên hỗ trợ thị trường để đưa ra yêu cầu thêm khu vực.',
  'marketplace_business_area' => 'Khu vực kinh doanh thị trường',
  'notify_new_chat' => 'Gửi cho tôi một thông báo email khi có tin nhắn trò chuyện mới',
  'not_in_business_area' => 'Khu vực này không nằm trong khu vực kinh doanh đang hoạt động của thị trường. Có lẽ gần đây đã bị gỡ bỏ bởi các quản trị viên thị trường.',
  'region_iso_code' => 'Mã ISO khu vực phải có quyền. Đọc phần * Khu vực kinh doanh * trên tài liệu để nhận trợ giúp.',
  'subscribers_count' => 'Số lượng thuê bao đang hoạt động',
  'this_plan_has_active_subscribers' => 'Gói này không thể bị xóa vì nó có người đăng ký hoạt động.',
  'max_chat_allowed' => 'Tối đa :size ký tự.',
  'mobile_slider_image' => 'Hình ảnh thanh trượt cho ứng dụng di động. Hệ thống sẽ ẩn thanh trượt này trên thiết bị di động nếu không được cung cấp.',
  'config_can_cancel_order_within' => 'Khách hàng sẽ có thể hủy đơn hàng trong thời gian này sau khi đặt hàng. Giữ nó trống để cho phép hủy cho đến khi hoàn thành đơn đặt hàng. Đặt 0 để tắt tùy chọn hủy. Khách hàng vẫn có thể yêu cầu hủy với nhà cung cấp.',
  'mobile_app_slider_hits' => 'Giữ tỷ lệ 2: 1',
  'enable_live_chat_on_platform' => 'Nếu được bật, nhà cung cấp sẽ có tùy chọn bật / tắt trò chuyện trực tiếp trên trang sản phẩm và trang cửa hàng của họ.',
  'enable_live_chat_on_shop' => 'Bật trò chuyện trực tiếp trên trang sản phẩm và trang cửa hàng của bạn.',
  'package_dependency_not_loaded' => 'Phụ thuộc không thành công! Gói này phụ thuộc vào :dependency (các) mô-đun.',
  'option_dependence_module' => 'Phụ thuộc không thành công! Mô-đun :dependency phụ thuộc tùy chọn này',
  'config_vendor_order_cancellation_fee' => 'Phí hủy bỏ khi nhà cung cấp hủy đơn hàng. Đặt 0 để không có phí hủy, giữ trống để đặt phí tùy chỉnh cho mọi đơn đặt hàng (việc hủy sẽ yêu cầu sự chấp thuận của quản trị viên)',
  'vendor_order_cancellation_fee' => 'Phí hủy đơn hàng sẽ được tính cho nhà cung cấp.',
  'disabled_when_vendor_get_paid_directly' => 'Không thể được kích hoạt khi nhà cung cấp được thanh toán trực tiếp!',
  'confirm_uninstall_package' => 'Tất cả dữ liệu liên quan đến :package sẽ bị mất vĩnh viễn! Bạn không thể hoàn nguyên những dữ liệu này.',
  'verify_license_key' => 'Chúng tôi đã gửi khóa cấp phép đến email của bạn khi bạn mua hàng. Nếu bạn không tìm thấy nó, vui lòng liên hệ với bộ phận hỗ trợ với thông tin chi tiết.',
  'promotional_tagline' => 'Dòng giới thiệu quảng cáo sẽ được đặt trên điều hướng chính.',
  'best_finds_under' => 'Đây là băng chuyền sản phẩm <em> Best Finds Under </em> trên trang chủ. Hệ thống sẽ chọn các mặt hàng bán chạy nhất theo giới hạn giá này.',
  'featured_items' => 'Đây là dành cho phần <em> Nổi bật </em> trên trang chủ. Chúng tôi đề nghị đặt 5-10 mặt hàng.',
  'featured_categories' => 'Đây là cho trang chủ <em> Danh mục nổi bật </EM> phần. Chúng tôi đề nghị đặt 10-15 loại.',
  'trending_now_categories' => 'Đây là cho trang chủ <em> xu hướng bây giờ các loại </EM> phần. Chúng tôi khuyên bạn nên đặt 2-4 loại.',
  'featured_brands' => 'Đây là cho trang chủ <em> các thương hiệu nổi bật </EM> phần. Chúng tôi đề nghị đặt 3 thương hiệu.',
  'slider_alternative_color' => 'Màu sẽ được sử dụng cho văn bản bên trong thẻ span.',
  'you_can_use_span_tag' => 'Bạn có thể sử dụng thẻ <span> để đánh dấu các từ quan trọng.',
  'trending_now_category_help' => 'Để xem tốt hơn, hãy thêm tối đa 5 danh mục',
  'social_auth' => 'Nếu bật tùy chọn đăng nhập xã hội sẽ hiển thị trên trang đăng nhập và đăng ký của khách hàng',
  'slider_text_position' => 'Đặt vị trí nội dung của bạn trên thanh trượt. vị trí mặc định đúng',
  'deal_of_the_day' => 'Chỉ một mục có thể được đặt làm giao dịch trong ngày.',
  'upload_package_zip_archive' => 'Tải lên kho lưu trữ zip chỉ chứa các tệp gói. Không tải lên tài liệu hoặc các tập tin khác.',
  'help_clear_cache' => 'Xóa bộ nhớ cache hệ thống bao gồm cấu hình, hình ảnh, tuyến đường. Hành động này có thể yêu cầu sau khi bạn thực hiện một số thay đổi trong tệp .env hoặc bất kỳ tệp cấu hình nào. Ngay lập tức bạn sẽ nhận thấy một màn trình diễn biểu diễn một chút nhưng đừng lo lắng, nó chỉ dành cho tải đầu tiên.',
  'this_will_overwrite_by_dynamic_commission' => 'Khi plugin Ủy ban Động đang hoạt động. Điều này sẽ ghi đè lên giá trị động.',
  'transaction_fee_will_charge' => 'Phí giao dịch sẽ được tính phí ngay cả khi hoa hồng bằng không.',
  'icon_size' => 'Biểu tượng phải là hình ảnh .png 32x32px',
  'icon_image' => 'Hình ảnh biểu tượng này sẽ hiển thị trong danh mục thả xuống nhóm dưới dạng biểu tượng nhóm danh mục.',
  'changes_can_take_time' => 'Những thay đổi có thể mất tới :time để ảnh hưởng đến kết quả.',
];
