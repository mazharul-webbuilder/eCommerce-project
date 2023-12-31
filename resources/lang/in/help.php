<?php
return [

  'add_input_field' => 'Tambahkan bidang input',
  'remove_input_field' => 'Hapus bidang input ini',
  'marketplace_name' => 'Nama nama pasar. Pengunjung akan melihat nama ini.',
  'system_legal_name' => 'Nama resmi bisnis',
  'min_pass_lenght' => 'Minimal 6 karakter',
  'role_name' => 'Judul peran pengguna',
  'role_type' => 'Platform dan Pedagang. Platform tipe peran hanya tersedia untuk pengguna platform utama, pedagang tidak dapat menggunakan peran ini. Jenis peran Pedagang akan tersedia ketika pedagang akan menambahkan pengguna baru.',
  'role_level' => 'Level peran akan digunakan menentukan siapa yang dapat mengendalikan siapa. Contoh: Seorang pengguna dengan level peran 2 tidak dapat memodifikasi pengguna mana pun dengan level peran 1. Pertahankan emty jika perannya adalah untuk pengguna level akhir.',
  'you_cant_set_role_level' => 'Hanya pengguna tingkat atas yang dapat menetapkan nilai ini.',
  'cant_edit_special_role' => 'Jenis peran ini tidak dapat diedit. Berhati-hatilah untuk memodifikasi izin peran ini.',
  'set_role_permissions' => 'Tetapkan izin peran dengan sangat hati-hati. Pilih \'Jenis Peran\' untuk mendapatkan modul yang sesuai.',
  'permission_modules' => 'Aktifkan modul untuk mengatur izin untuk modul',
  'shipping_rate_delivery_takes' => 'Lebih spesifik, pelanggan akan melihat ini.',
  'type_dbreset' => 'Ketikkan kata persis "RESET" di kotak untuk mengonfirmasi keinginan Anda.',
  'type_environment' => 'Ketikkan kata persis "LINGKUNGAN" di kotak untuk mengonfirmasi keinginan Anda.',
  'type_uninstall' => 'Ketikkan kata "UNINSTALL" di kotak untuk mengonfirmasi keinginan Anda.',
  'module' => [
    'name' => 'Semua pengguna di bawah peran ini akan dapat melakukan tindakan yang ditentukan untuk mengelola :module.',
    'access' => [
      'common' => 'Ini adalah modul :Access. Itu berarti pengguna platform dan pengguna pedagang bisa mendapatkan akses.',
      'platform' => 'Ini adalah modul :Access. Itu berarti hanya pengguna platform yang bisa mendapatkan akses.',
      'merchant' => 'Ini adalah modul :Access. Itu berarti hanya pengguna pedagang yang bisa mendapatkan akses.',
    ],
  ],
  'currency_iso_code' => 'Kode ISO 4217. Misalnya, dolar Amerika Serikat memiliki kode USD dan kode mata uang Jepang adalah JPY.',
  'country_iso_code' => 'Kode ISO 3166_2. Misalnya, Contoh: Untuk Amerika Serikat kodenya adalah AS',
  'currency_subunit' => 'Subunit yang merupakan sebagian kecil dari unit dasar. Sebagai contoh: cent, centavo, paisa',
  'currency_symbol_first' => 'Contoh: $ 13,21',
  'currency_decimalpoint' => 'Contoh: 13.21, 13,21',
  'currency_thousands_separator' => 'Contoh: 1.000, 1.000, 1 000',
  'cover_img_size' => 'Ukuran gambar sampul harus 1280x300px',
  'featured_img_size' => 'Ukuran gambar unggulan harus 285x190px',
  'brand_featured_img_size' => 'Ukuran gambar unggulan harus 380x160px',
  'featured_image' => 'Gambar ini akan ditampilkan di bagian Kategori Unggulan di beranda',
  'brand_featured_image' => 'Gambar ini akan ditampilkan di bagian Merek Unggulan di beranda',
  'slug' => 'Slug biasanya merupakan URL ramah mesin pencari',
  'shop_slug' => 'Ini akan digunakan sebagai URL toko Anda, Anda tidak dapat mengubahnya nanti. Jadilah kreatif untuk memilih siput untuk toko Anda',
  'shop_url' => 'Jalur lengkap ke halaman pendaratan toko. Anda tidak dapat mengubah url.',
  'shop_timezone' => 'Zona waktu tidak akan memengaruhi toko atau pasar. Hanya untuk mengetahui lebih banyak tentang toko Anda',
  'url' => 'alamat web',
  'optional' => '(pilihan)',
  'use_markdown_to_bold' => 'Tambahkan ** kedua sisi kata kunci penting untuk disorot',
  'announcement_action_text' => 'Tombol tindakan opsional untuk menautkan pengumuman ke url apa pun',
  'announcement_action_url' => 'Url tindakan ke posting blog atau url apa pun',
  'blog_feature_img_hint' => 'Ukuran gambar harus 960x480px',
  'code' => 'Kode',
  'brand' => 'Merek produk. Tidak diperlukan tetapi disarankan',
  'shop_name' => 'Merek atau nama tampilan toko',
  'shop_status' => 'Jika aktif, toko akan langsung hidup.',
  'shop_maintenance_mode_handle' => 'Jika mode pemeliharaan aktif, toko akan offline dan semua listing akan turun dari pasar hingga pemeliharaan tidak aktif.',
  'system_maintenance_mode_handle' => 'Jika mode pemeliharaan aktif, pasar akan offline dan bendera mode pemeliharaan akan ditampilkan kepada pengunjung. Tetap pedagang dapat mengakses panel admin mereka.',
  'system_physical_address' => 'Lokasi fisik pasar / kantor',
  'system_email' => 'Semua pemberitahuan akan dikirim ke alamat email ini, terima email dukungan (jika ditetapkan)',
  'system_timezone' => 'Sistem ini akan menggunakan zona waktu ini untuk beroperasi.',
  'system_currency' => 'Mata uang pasar',
  'system_slogan' => 'Tagline yang paling menggambarkan pasar Anda',
  'system_length_unit' => 'Satuan panjang akan digunakan di seluruh pasar.',
  'system_weight_unit' => 'Satuan berat akan digunakan di seluruh pasar.',
  'system_valume_unit' => 'Unit valume akan digunakan di seluruh pasar.',
  'ask_customer_for_email_subscription' => 'Ketika pelanggan baru mendaftarkan akun, tanyakan kepada pelanggan Anda apakah dia ingin mendapatkan promosi dan pemberitahuan lainnya melalui email. Menonaktifkan opsi akan menghasilkan langganan otomatis. Dalam hal ini, jelaskan bagian syarat dan ketentuan.',
  'allow_guest_checkout' => 'Ini akan memungkinkan pelanggan untuk checkout tanpa mendaftar di situs.',
  'vendor_can_view_customer_info' => 'Ini akan memungkinkan vendor untuk melihat informasi detail pelanggan di halaman pesanan. Kalau tidak, nama, alamat email, dan alamat penagihan / pengiriman akan terlihat.',
  'system_pagination' => 'Tetapkan nilai pagination untuk tabel data pada panel admin.',
  'subscription_name' => 'Berikan nama yang bermakna untuk paket berlangganan.',
  'subscription_plan_id' => 'Ini adalah pengidentifikasi yang harus sama persis dengan ID paket Stripe',
  'featured_subscription' => 'Seharusnya hanya ada satu langganan unggulan',
  'subscription_cost' => 'Biaya berlangganan per bulan',
  'team_size' => 'Ukuran tim adalah jumlah total pengguna yang dapat mendaftar di bawah tim ini',
  'inventory_limit' => 'Jumlah total listing. Varian dari produk yang sama akan dianggap sebagai item yang berbeda.',
  'marketplace_commission' => 'Persentase biaya nilai item pesanan oleh pasar',
  'transaction_fee' => 'Jika Anda ingin mengenakan biaya tetap untuk setiap transaksi',
  'subscription_best_for' => 'Targetkan pelanggan untuk paket ini. Ini akan terlihat oleh pelanggan.',
  'config_return_refund' => 'Kembali & pengembalian kebijakan untuk Anda berbelanja. Harap baca kebijakan pasar sebelum Anda menentukannya.',
  'config_trial_days' => 'Merchant akan dikenakan biaya setelah masa percobaan. Jika Anda tidak mengambil kartu di muka maka akun pedagang akan dibekukan setelah waktu ini.',
  'charge_after_trial_days' => 'Akan dikenakan biaya setelah masa percobaan :days hari.',
  'required_card_upfront' => 'Apakah Anda ingin mengambil informasi kartu saat merchant mendaftar?',
  'leave_empty_to_save_as_draft' => 'Biarkan kosong untuk menyimpan sebagai konsep',
  'logo_img_size' => 'Ukuran gambar logo harus minimum 300x300px',
  'brand_logo_size' => 'Ukuran gambar logo harus 120x40px dan .png',
  'brand_icon_size' => 'Ukuran gambar ikon harus 32x32px dan .png',
  'config_alert_quantity' => 'Email notifikasi akan dikirimkan, inventaris Anda berada di bawah kuantitas peringatan',
  'config_max_img_size_limit_kb' => 'Sistem batas ukuran gambar maksimum dapat mengunggah produk / inventaris / logo / avatar. Ukurannya dalam kilobyte.',
  'config_max_number_of_inventory_imgs' => 'Pilih berapa banyak gambar yang dapat diunggah untuk satu item inventaris.',
  'config_address_default_country' => 'Tetapkan nilai ini untuk mengisi formulir alamat lebih cepat. Jelas, pengguna dapat mengubah nilai saat menambahkan alamat baru.',
  'config_address_default_state' => 'Tetapkan nilai ini untuk mengisi formulir alamat lebih cepat. Jelas, pengguna dapat mengubah nilai saat menambahkan alamat baru.',
  'config_show_address_title' => 'Tampilkan / Sembunyikan judul alamat sambil melihat / mencetak alamat.',
  'config_address_show_country' => 'Tampilkan / Sembunyikan nama negara sambil melihat / mencetak alamat. Ini bermanfaat jika pasar Anda berada di wilayah kecil.',
  'config_address_show_map' => 'Ingin menampilkan peta dengan alamat? Opsi ini akan menghasilkan peta menggunakan Google Map.',
  'config_show_currency_symbol' => 'Apakah Anda ingin menampilkan simbol mata uang saat menunjukkan harga? Contoh: $ 123',
  'config_show_space_after_symbol' => 'Ingin memformat harga dengan menempatkan spasi setelah simbol. Contoh: $ 123',
  'config_decimals' => 'Berapa banyak angka yang ingin Anda tunjukkan setelah titik desimal? Contoh: 13.21, 13.123',
  'config_gift_card_pin_size' => 'Berapa banyak angka yang Anda inginkan untuk menghasilkan nomor pin kartu hadiah. Panjang standar 10',
  'config_gift_card_serial_number_size' => 'Berapa banyak angka yang Anda inginkan untuk menghasilkan nomor seri kartu hadiah. Panjang standar 13',
  'config_coupon_code_size' => 'Berapa banyak angka yang Anda inginkan untuk menghasilkan kode kupon. Panjang standar 8',
  'shop_email' => 'Semua pemberitahuan akan dikirimkan ke alamat email ini (inventaris, pesanan, tiket, sengketa, dll.) Menerima email dukungan pelanggan (jika ditetapkan)',
  'shop_legal_name' => 'Nama resmi toko',
  'shop_owner_id' => 'Pemilik dan admin super toko. Seorang pengguna yang terdaftar sebagai Pedagang dapat memiliki toko. Anda tidak dapat mengubahnya nanti.',
  'shop_description' => 'Deskripsi merek toko, informasi ini akan terlihat di beranda toko.',
  'attribute_type' => 'Jenis atribut. Ini akan membantu menunjukkan opsi pada halaman produk.',
  'attribute_name' => 'Nama ini akan ditampilkan di halaman produk.',
  'attribute_value' => 'Nilai ini akan ditampilkan di halaman produk sebagai opsi yang dapat dipilih.',
  'parent_attribute' => 'Opsi akan ditampilkan di bawah atribut ini.',
  'list_order' => 'Melihat urutan pada daftar.',
  'shop_external_url' => 'Jika Anda memiliki situs web, Anda dapat meletakkan tautan eksternal di sini, url dapat ditetapkan sebagai halaman arahan toko.',
  'product_name' => 'Pelanggan tidak akan melihat ini. Nama ini hanya membantu pedagang untuk menemukan barang untuk didaftar.',
  'product_featured_image' => 'Pelanggan tidak akan melihat ini. Ini hanya membantu pedagang menemukan barang untuk didaftar.',
  'product_images' => 'Pelanggan akan melihat gambar ini hanya jika daftar merchant tidak memiliki gambar untuk ditampilkan.',
  'product_active' => 'Pedagang hanya akan menemukan item aktif.',
  'product_description' => 'Pelanggan akan melihat ini. Ini adalah deskripsi produk inti dan umum.',
  'model_number' => 'Pengidentifikasi suatu produk yang diberikan oleh pabrikannya. Tidak diperlukan tetapi disarankan',
  'gtin' => 'Global Item Item Number (GTIN) adalah pengidentifikasi unik dari suatu produk di pasar global. Jika Anda ingin mendapatkan ISBN atau kode UPC untuk produk Anda, Anda akan menemukan informasi lebih lanjut di situs web berikut: http://www.isbn.org/ dan http://www.uc-council.org/',
  'mpn' => 'Pabrikan Nomor Komponen (MPN) adalah pengidentifikasi unik yang dikeluarkan oleh pabrikan. Anda dapat memperoleh MPN dari pabrikan. Tidak diperlukan tetapi disarankan',
  'sku' => 'SKU (Stock Keeping Unit) adalah pengidentifikasi khusus penjual. Ini akan membantu mengelola inventaris Anda',
  'isbn' => 'Nomor Buku Standar Internasional (ISBN) adalah barcode pengidentifikasi buku komersial yang unik. Setiap kode ISBN mengidentifikasi buku secara unik. ISBN memiliki 10 atau 13 digit. Semua ISBN yang ditetapkan setelah 1 Jan 2007 memiliki 13 digit. Biasanya, ISBN dicetak di sampul belakang buku',
  'ean' => 'Nomor Artikel Eropa (EAN) adalah standar barcode, kode identifikasi produk 12 atau 13 digit. Anda dapat memperoleh EAN dari pabriknya. Jika produk Anda tidak memiliki EAN pabrikan, dan Anda perlu membeli kode EAN, buka GS1 UK http://www.gs1uk.org',
  'upc' => 'Kode Produk Universal (UPC), juga disebut GTIN-12 dan UPC-A. Pengidentifikasi numerik unik untuk produk komersial yang biasanya dikaitkan dengan barcode yang dicetak pada barang eceran',
  'meta_title' => 'Tag judul — secara teknis disebut elemen judul — menentukan judul dokumen. Tag judul sering digunakan pada halaman hasil mesin pencari (SERP) untuk menampilkan cuplikan pratinjau untuk halaman tertentu, dan penting untuk SEO dan berbagi sosial',
  'meta_description' => 'Deskripsi meta adalah atribut HTML yang memberikan penjelasan singkat tentang isi halaman web. Deskripsi meta biasanya digunakan pada halaman hasil mesin pencari (SERP) untuk menampilkan cuplikan pratinjau untuk halaman tertentu',
  'catalog_min_price' => 'Tetapkan harga minimum untuk produk. Vendor dapat menambahkan inventaris dalam batas harga ini.',
  'catalog_max_price' => 'Tetapkan harga maksimum untuk produk. Vendor dapat menambahkan inventaris dalam batas harga ini.',
  'requires_shipping' => 'Item ini membutuhkan pengiriman.',
  'downloadable' => 'Item ini adalah konten digital dan pembeli dapat mengunduh item tersebut.',
  'manufacturer_url' => 'Tautan situs web resmi pabrikan.',
  'manufacturer_email' => 'Sistem akan menggunakan alamat email ini untuk berkomunikasi dengan pabrikan.',
  'manufacturer_phone' => 'Nomor telepon dukungan pabrikan.',
  'supplier_email' => 'Sistem akan menggunakan alamat email ini untuk berkomunikasi dengan pemasok.',
  'supplier_contact_person' => 'Orang yang dapat dihubungi',
  'shop_address' => 'Alamat fisik toko.',
  'search_product' => 'Anda dapat menggunakan pengidentifikasi GTIN seperti UPC, ISBN, EAN, JAN atau ITF. Anda juga dapat menggunakan nama dan nomor model ATAU bagian dari nama atau nomor model.',
  'seller_description' => 'Ini adalah deskripsi spesifik produk dari penjual. Pelanggan akan melihat ini',
  'seller_product_condition' => 'Bagaimana kondisi produk saat ini?',
  'condition_note' => 'Catatan kondisi sangat membantu ketika produk digunakan / diperbaharui',
  'select_supplier' => 'Bidang yang direkomendasikan. Ini akan membantu menghasilkan laporan',
  'select_warehouse' => 'Pilih gudang dari mana produk akan dikirim.',
  'select_packagings' => 'Daftar opsi pengemasan yang tersedia untuk mengirim produk. Biarkan kosong untuk menonaktifkan opsi pengemasan',
  'available_from' => 'Tanggal kapan stok akan tersedia. Default = segera',
  'sale_price' => 'Harga tanpa pajak. Pajak akan dihitung secara otomatis berdasarkan zona pengiriman.',
  'purchase_price' => 'Bidang yang direkomendasikan. Ini akan membantu menghitung laba dan menghasilkan laporan',
  'min_order_quantity' => 'Kuantitas diizinkan untuk menerima pesanan. Harus berupa nilai integer. Default = 1',
  'offer_price' => 'Harga penawaran akan berlaku antara tanggal mulai dan berakhir penawaran',
  'offer_start' => 'Penawaran harus memiliki tanggal mulai. Diperlukan jika bidang harga penawaran diberikan',
  'offer_end' => 'Penawaran harus memiliki tanggal akhir. Diperlukan jika bidang harga penawaran diberikan',
  'seller_inventory_status' => 'Apakah barang itu terbuka untuk dijual? Item tidak aktif tidak akan ditampilkan di pasar.',
  'stock_quantity' => 'Jumlah barang yang Anda miliki di gudang Anda',
  'offer_starting_time' => 'Tawarkan waktu mulai',
  'offer_ending_time' => 'Menawarkan waktu berakhir',
  'set_attribute' => 'Jika nilainya tidak ada dalam daftar, Anda dapat menambahkan nilai yang sesuai hanya dengan mengetik nilai baru',
  'variants' => 'Varian produk',
  'delete_this_combination' => 'Hapus kombinasi ini',
  'romove_this_cart_item' => 'Hapus item ini dari troli',
  'no_product_found' => 'Tidak ada produk yang ditemukan! Silakan coba pencarian lain atau tambahkan produk baru',
  'not_available' => 'Tidak tersedia!',
  'admin_note' => 'Catatan admin tidak akan terlihat oleh pelanggan',
  'message_to_customer' => 'Pesan ini akan dikirim ke pelanggan dengan email faktur',
  'empty_cart' => 'Gerobak kosong',
  'send_invoice_to_customer' => 'Kirim faktur kepada pelanggan dengan pesan ini',
  'delete_the_cart' => 'Hapus keranjang dan lanjutkan pesanan',
  'order_status_send_email' => 'Email akan dikirim ke pelanggan ketika status pesanan diperbarui',
  'order_status_email_template' => 'Template email ini akan dikirim ke pelanggan ketika status pesanan diperbarui. Wajib jika email diaktifkan untuk status',
  'update_order_status' => 'Perbarui status pesanan',
  'email_template_name' => 'Beri nama pada templat. Ini hanya untuk penggunaan sistem.',
  'template_use_for' => 'Template akan digunakan oleh',
  'email_template_subject' => 'Ini akan digunakan sebagai subjek email.',
  'email_template_body' => 'Ada beberapa kode pendek yang dapat Anda gunakan untuk informasi dinamis. Periksa bagian bawah formulir ini untuk melihat kode pendek yang tersedia.',
  'email_template_type' => 'Jenis emailnya.',
  'template_sender_email' => 'Alamat email ini akan digunakan untuk mengirim email dan penerima dapat membalas ini.',
  'template_sender_name' => 'Nama ini akan digunakan sebagai nama pengirim',
  'packaging_name' => 'Pelanggan akan melihat ini jika opsi kemasan tersedia pada checkout pesanan',
  'width' => 'Lebar kemasan',
  'height' => 'Ketinggian kemasan',
  'depth' => 'Kedalaman kemasan',
  'packaging_cost' => 'Biaya pengemasan. Anda dapat memilih apakah Anda ingin membebankan biaya kepada pelanggan atau tidak',
  'set_as_default_packaging' => 'Jika dicentang: kemasan ini akan digunakan sebagai paket pengiriman default',
  'shipping_carrier_name' => 'Nama perusahaan pengiriman',
  'shipping_zone_name' => 'Beri nama zona. Pelanggan tidak akan melihat nama ini.',
  'shipping_rate_name' => 'Beri nama yang bermakna. Pelanggan akan melihat nama ini di checkout. e. g. \'pengiriman standar\'',
  'shipping_zone_carrier' => 'Anda dapat menghubungkan penyedia pengiriman. Pelanggan akan melihat ini di checkout.',
  'free_shipping' => 'Jika diaktifkan, label pengiriman gratis akan ditampilkan pada halaman daftar produk.',
  'shipping_rate' => 'Periksa opsi \'Pengiriman gratis\' atau berikan 0 jumlah untuk pengiriman gratis',
  'shipping_zone_tax' => 'Profil pajak ini akan berlaku ketika pelanggan melakukan pembelian dari zona pengiriman ini',
  'shipping_zone_select_countries' => 'Pilih negara ke zona ini yang Anda kirimi. Periksa opsi Sisa dunia untuk zona di seluruh dunia.',
  'rest_of_the_world' => 'Zona ini mencakup negara dan wilayah yang belum ditentukan di zona pengiriman Anda yang lain.',
  'shipping_max_width' => 'Pegangan lebar paket maksimum oleh operator. Biarkan kosong untuk menonaktifkan.',
  'shipping_tracking_url' => '\'@\' akan diganti oleh nomor pelacakan dinamis',
  'shipping_tracking_url_example' => 'mis .: http://example.com/track.php?num=@',
  'order_tracking_id' => 'ID pelacakan pesanan disediakan oleh penyedia layanan pengiriman.',
  'order_fulfillment_carrier' => 'Pilih perusahaan pengiriman untuk memenuhi pesanan.',
  'notify_customer' => 'Email pemberitahuan akan dikirimkan kepada pelanggan dengan informasi yang diperlukan.',
  'shipping_weight' => 'Akan digunakan untuk menghitung biaya pengiriman.',
  'order_number_prefix_suffix' => 'Awalan dan sufiks akan ditambahkan secara otomatis untuk memformat semua nomor pesanan. Biarkan kosong jika Anda tidak ingin memformat nomor pesanan.',
  'customer_not_see_this' => 'Pelanggan tidak akan melihat ini',
  'customer_will_see_this' => 'Pelanggan akan melihat ini',
  'refund_select_order' => 'Pilih pesanan yang ingin Anda kembalikan',
  'refund_order_fulfilled' => 'Apakah pesanan dikirimkan ke pelanggan?',
  'refund_return_goods' => 'Apakah barang dikembalikan kepada Anda?',
  'customer_paid' => 'Pelanggan membayar <strong> <em> :amount </em> </strong>, termasuk semua pajak, biaya pengiriman, dan lainnya.',
  'order_refunded' => 'Pengembalian dana sebelumnya <strong> <em> :amount </em> </strong> dari total <strong> <em> :total </em> </strong>',
  'search_customer' => 'Temukan pelanggan dengan alamat email, nama yang bagus atau nama lengkap.',
  'coupon_quantity' => 'Jumlah total kupon yang tersedia',
  'coupon_name' => 'Nama akan digunakan dalam faktur dan ringkasan pesanan',
  'coupon_code' => 'Kode kupon unik',
  'coupon_value' => 'Nilai kupon',
  'coupon_min_order_amount' => 'Pilih jumlah pesanan minimum untuk keranjang (opsional)',
  'coupon_quantity_per_customer' => 'Pilih berapa kali pelanggan dapat menggunakan kupon ini. Jika Anda membiarkannya kosong maka pelanggan dapat menggunakan kupon ini sampai ketersediaan.',
  'starting_time' => 'Kupon akan tersedia mulai saat ini',
  'ending_time' => 'Kupon akan tersedia hingga saat ini',
  'exclude_tax_n_shipping' => 'Tidak termasuk pajak dan biaya pengiriman',
  'exclude_offer_items' => 'Kecualikan item yang sudah memiliki penawaran berjalan atau diskon',
  'coupon_limited_to_customers' => 'Pilih jika Anda ingin membuat kupon hanya untuk pelanggan tertentu',
  'coupon_limited_to_shipping_zones' => 'Pilih jika Anda ingin membuat kupon hanya untuk zona pengiriman tertentu',
  'coupon_limited_to' => 'Gunakan alamat email atau nama untuk menemukan pelanggan',
  'faq_placeholders' => 'Anda dapat menggunakan placeholder ini dalam pertanyaan dan jawaban Anda, ini akan diganti dengan nilai aktual',
  'gift_card_name' => 'Nama kartu hadiah.',
  'gift_card_pin_code' => 'Kode rahasia yang unik. Kode pin adalah kode sandi untuk kartu. Anda tidak dapat mengubah nilai ini nanti.',
  'gift_card_serial_number' => 'Nomor seri unik untuk kartu. Anda tidak dapat mengubah nilai ini nanti.',
  'gift_card_value' => 'Nilai kartu. Pelanggan akan menerima jumlah diskon yang sama.',
  'gift_card_activation_time' => 'Waktu aktivasi kartu. Kartu dapat digunakan setelah waktu ini.',
  'gift_card_expiry_time' => 'Waktu kedaluwarsa kartu. Kartu dapat valid hingga saat ini.',
  'gift_card_partial_use' => 'Izinkan sebagian penggunaan nilai kartu total',
  'number_between' => 'Antara :min dan :max',
  'default_tax_id' => 'Profil pajak default akan diterapkan ketika zona pengiriman tidak dicakup oleh area pajak mana pun.',
  'default_payment_method_id' => 'Jika dipilih, Metode pembayaran akan dipilih sebelum membuat pesanan baru',
  'config_order_handling_cost' => 'Biaya tambahan ini ditambahkan dengan biaya pengiriman setiap pesanan. Biarkan kosong untuk menonaktifkan biaya penanganan pesanan',
  'default_warehouse' => 'Gudang bawaan akan dipilih sebelumnya ketika menambah inventaris baru',
  'default_supplier' => 'Pemasok default akan dipilih terlebih dahulu saat menambah inventaris baru',
  'default_packaging_ids_for_inventory' => 'Kemasan bawaan akan dipilih terlebih dahulu saat menambah inventaris baru. Ini akan membantu Anda untuk menambah inventaris lebih cepat',
  'config_payment_environment' => 'Apakah kredensial untuk live mode atau tes lebih lanjut?',
  'config_authorize_net_transaction_key' => 'Kunci transaksi dari Authorize.net. Jika Anda tidak yakin, hubungi Authorize.net untuk mendapatkan bantuan.',
  'config_authorize_net_api_login_id' => 'ID login API dari Authorize.net. Jika Anda tidak yakin, hubungi Authorize.net untuk mendapatkan bantuan.',
  'config_enable_payment_method' => 'Sistem ini menawarkan berbagai jenis gateway pembayaran. Anda dapat mengaktifkan / menonaktifkan gateway pembayaran apa pun untuk mengontrol opsi pembayaran yang dapat digunakan vendor untuk menerima pembayaran dari pelanggan.',
  'config_additional_details' => 'Ditampilkan pada halaman Metode pembayaran, sementara pelanggan memilih cara membayar.',
  'config_payment_instructions' => 'Ditampilkan di halaman Terima kasih, setelah pelanggan melakukan pemesanan.',
  'config_stripe_publishable_key' => 'Kunci API yang dapat diterbitkan dimaksudkan hanya untuk mengidentifikasi akun Anda dengan Stripe, itu bukan rahasia. Mereka dapat diterbitkan dengan aman.',
  'config_paypal_express_account' => 'Biasanya alamat email aplikasi PayPal Anda. Buat aplikasi PayPal Anda dari sini: https://developer.paypal.com/webapps/developer/applications/myapps',
  'config_paypal_express_client_id' => 'ID Klien adalah pengidentifikasi unik panjang untuk aplikasi PayPal Anda. Anda akan menemukan nilai ini di bagian Aplikasi Saya & Kredensial di dasbor PayPal Anda.',
  'config_paypal_express_secret' => 'Kunci Rahasia API PayPal. Anda akan menemukan nilai ini di bagian Aplikasi Saya & Kredensial di dasbor PayPal Anda.',
  'config_paystack_merchant_email' => 'Email pedagang dari akun Paystack Anda.',
  'config_paystack_public_key' => 'Kunci Publik adalah pengidentifikasi unik panjang aplikasi Paystack Anda. Anda akan menemukan nilai ini di bagian kunci API dan Webhooks di pengaturan di dasbor Paystack Anda.',
  'config_paystack_secret' => 'Kunci Rahasia API Paystack. Anda akan menemukan nilai ini di bagian kunci API dan Webhooks di pengaturan di dasbor Paystack Anda.',
  'config_auto_archive_order' => 'Secara otomatis mengarsipkan pesanan. Pilih fitur ini jika Anda tidak ingin mengarsipkan semua pesanan secara manual setelah mereka dipenuhi.',
  'config_pagination' => 'Berapa banyak item daftar yang ingin Anda lihat per halaman pada tabel data',
  'support_phone' => 'Pelanggan akan menghubungi nomor ini untuk dukungan dan permintaan',
  'support_email' => 'Anda akan mendapatkan semua email dukungan ke alamat ini',
  'support_phone_toll_free' => 'Jika Anda memiliki nomor bebas pulsa untuk dukungan pelanggan',
  'default_sender_email_address' => 'Semua email autometed kepada pelanggan akan dikirim dari alamat email ini. Dan juga ketika alamat email pengirim tidak dapat ditetapkan saat mengirim email',
  'default_email_sender_name' => 'Nama ini akan digunakan sebagai pengirim pengiriman email dari alamat email pengirim default',
  'google_analytic_report' => 'Anda hanya harus mengaktifkan ini, Jika sistem dikonfigurasikan dengan Google analytics. Jika tidak, dapat menyebabkan kesalahan. Periksa dokumentasi untuk bantuan. Atau Anda dapat menggunakan sistem laporan bawaan aplikasi.',
  'inventory_linked_items' => 'Item yang ditautkan akan ditampilkan pada halaman produk sebagai item yang sering dibeli bersama. Ini opsional tetapi penting.',
  'notify_new_message' => 'Kirimi saya pemberitahuan ketika pesan baru tiba',
  'notify_alert_quantity' => 'Kirimi saya pemberitahuan ketika barang apa pun di inventaris saya mencapai tingkat kuantitas peringatan',
  'notify_inventory_out' => 'Kirimi saya pemberitahuan bila ada barang yang persediaan saya habis',
  'notify_new_order' => 'Kirimi saya pemberitahuan ketika pesanan baru telah ditempatkan di toko saya',
  'notify_abandoned_checkout' => 'Kirimi saya pemberitahuan ketika pelanggan meninggalkan checkout barang saya',
  'notify_when_vendor_registered' => 'Kirimi saya pemberitahuan ketika vendor baru telah terdaftar',
  'notify_new_ticket' => 'Kirimi saya pemberitahuan ketika tiket dukungan telah dibuat di sistem',
  'notify_new_disput' => 'Kirimi saya pemberitahuan ketika pelanggan mengirimkan sengketa baru',
  'notify_when_dispute_appealed' => 'Kirimi saya pemberitahuan ketika sengketa telah diajukan banding untuk ditinjau oleh tim marketplace',
  'download_template' => '<a href=":url"> Unduh contoh CSV template </a> untuk melihat contoh format yang diperlukan.',
  'download_category_slugs' => '<a href=":url"> Unduh siput kategori </a> untuk mendapatkan kategori yang benar untuk produk Anda.',
  'first_row_as_header' => 'Baris pertama adalah tajuk. <strong> Jangan ubah </strong> baris ini.',
  'user_category_slug' => 'Gunakan kategori <strong> siput </strong> di bidang kategori.',
  'cover_img' => 'Gambar ini akan ditampilkan di bagian atas halaman :page',
  'cat_grp_img' => 'Gambar ini akan ditampilkan di latar belakang kotak dropdown kategori',
  'cat_grp_desc' => 'Pelanggan tidak akan melihat ini. Tapi Pedagang akan melihat ini.',
  'inactive_for_back_office' => 'Jika tidak aktif, Pelanggan masih dapat mengunjungi halaman :page. Tetapi pedagang tidak dapat menggunakan :page ini untuk listing di masa depan.',
  'invalid_rows_will_ignored' => 'Baris yang tidak valid akan <strong> diabaikan </strong>.',
  'upload_rows' => 'Anda dapat mengunggah maksimum <strong>: baris catatan </strong> per batch untuk kinerja yang lebih baik.',
  'name_field_required' => 'Bidang nama wajib diisi.',
  'email_field_required' => 'Diperlukan email.',
  'invalid_email' => 'Alamat email salah.',
  'invalid_category' => 'Kategori tidak valid.',
  'category_desc' => 'Berikan detail singkat. Pelanggan akan melihat ini.',
  'email_already_exist' => 'Alamat email sudah digunakan.',
  'slug_already_exist' => 'Siput sudah digunakan.',
  'display_order' => 'Nomor ini akan digunakan untuk mengatur urutan tampilan. Angka terkecil akan ditampilkan terlebih dahulu.',
  'banner_title' => 'Baris ini akan disorot pada spanduk. Biarkan kosong jika Anda tidak ingin menampilkan judul.',
  'banner_description' => '(Contoh: Diskon 50%!) Biarkan kosong jika Anda tidak ingin menunjukkan ini.',
  'banner_image' => 'Gambar utama apa yang akan ditampilkan di latar belakang. Biasanya menggunakan gambar produk.',
  'banner_background' => 'Pilih warna atau unggah gambar sebagai latar belakang.',
  'banner_group' => 'Penempatan spanduk di etalase. Spanduk tidak akan ditampilkan jika grup tidak ditentukan.',
  'bs_columns' => 'Berapa kolom kolom yang akan digunakan spanduk ini? Sistem ini menggunakan sistem grid 12 kolom untuk menampilkan spanduk.',
  'banner_order' => 'Nomor ini akan digunakan untuk mengatur urutan tampilan dalam kelompok spanduk. Angka terkecil akan ditampilkan terlebih dahulu.',
  'banner_link' => 'Pengguna akan mengalihkan ke tautan ini.',
  'link_label' => 'Label tombol tautan',
  'slider_link' => 'Pengguna akan mengalihkan ke tautan ini.',
  'slider_title' => 'Baris ini akan disorot di atas slider. Biarkan kosong jika Anda tidak ingin menampilkan judul.',
  'slider_sub_title' => 'Baris kedua dari judul. Biarkan kosong jika Anda tidak ingin menunjukkan ini.',
  'slider_description' => 'Beberapa kata lagi tentang slider. Biarkan kosong jika Anda tidak ingin menampilkan deskripsinya.',
  'slider_image' => 'Gambar utama yang akan ditampilkan sebagai slider. Diperlukan untuk menghasilkan slider.',
  'slider_img_hint' => 'Gambar slider harus 1280x300px',
  'slider_order' => 'Slider akan diatur oleh urutan ini.',
  'slider_thumb_image' => 'Gambar kecil ini akan digunakan sebagai thumbnail. Sistem akan membuat thumbnail jika tidak disediakan.',
  'variant_image' => 'Gambar varian',
  'empty_trash' => 'Kosongkansampahnya. Semua item di tempat sampah akan dihapus secara permanen.',
  'hide_trial_notice_on_vendor_panel' => 'Sembunyikan pemberitahuan uji coba di panel vendor',
  'language_order' => 'Posisi Anda ingin menunjukkan bahasa ini pada opsi bahasa. Angka terkecil akan ditampilkan terlebih dahulu.',
  'locale_active' => 'Apakah Anda ingin menunjukkan bahasa ini pada opsi bahasa?',
  'locale_code' => 'Kode lokal, kode tersebut harus memiliki nama yang sama dengan folder bahasa.',
  'locale_code_exmaple' => 'Contoh untuk bahasa Inggris kodenya adalah <em> en </em>',
  'new_language_info' => 'Bahasa baru tidak akan mempengaruhi sistem kecuali Anda benar-benar melakukan transaksi direktori bahasa. Periksa dokumentasi untuk detailnya.',
  'php_locale_code' => 'Kode lokal PHP untuk penggunaan sistem seperti menerjemahkan tanggal, waktu dll. Silakan temukan daftar lengkap kode lokal PHP pada dokumentasi.',
  'rtl' => 'Apakah bahasanya tepat dari kiri (RTL)?',
  'select_all_verification_documents' => 'Pilih semua dokumen sekaligus.',
  'system_default_language' => 'Bahasa default sistem',
  'update_trial_period' => 'Perbarui periode uji coba',
  'vendor_needs_approval' => 'Jika diaktifkan, setiap vendor baru akan memerlukan persetujuan manual dari panel admin platform untuk dapat ditayangkan.',
  'verified_seller' => 'Penjual Terverifikasi',
  'mark_address_verified' => 'Tandai sebagai alamat terverifikasi',
  'mark_id_verified' => 'Tandai sebagai ID yang diverifikasi',
  'mark_phone_verified' => 'Tandai sebagai ponsel terverifikasi',
  'missing_required_data' => 'Data tidak valid, Beberapa data yang diperlukan tidak ada.',
  'invalid_catalog_data' => 'Data katalog tidak valid, periksa kembali GTIN dan informasi lainnya.',
  'product_have_to_be_catalog' => 'Produk harus ada di sistem <strong> katalog </strong>. kalau tidak, itu tidak akan mengunggah.',
  'need_to_know_product_gtin' => 'Anda perlu mengetahui <strong> GTIN </strong> item sebelum mengunggah.',
  'multi_img_upload_instruction' => 'Anda dapat mengunggah maksimum :number gambar dan setiap ukuran file tidak boleh melebihi :size KB',
  'number_of_img_upload_required' => 'Anda harus memilih setidaknya <b> {n} </b> {file} untuk diunggah. Coba lagi unggahan Anda!',
  'msg_invalid_file_extension' => 'Ekstensi untuk file {nama} tidak valid. Hanya file <b> {ekstensi} </b> yang didukung.',
  'number_of_img_upload_exceeded' => 'Anda dapat mengunggah maksimum <b> {m} </b> file (<b> {n} </b> file terdeteksi).',
  'msg_invalid_file_too_learge' => 'File {name} (<b> {size} KB </b>) melebihi ukuran unggahan maksimum yang diizinkan dari <b> {maxSize} KB </b>. Coba lagi unggahan Anda!',
  'required_fields_csv' => 'Bidang-bidang ini <strong> wajib </strong> <em>: bidang </em>.',
  'seller_condition_note' => 'Masukkan detail lebih lanjut tentang kondisi item. Ini akan membantu pelanggan untuk memahami item tersebut.',
  'active_business_zone' => 'Area operasi bisnis Anda. Vendor akan dapat membuat zona pengiriman hanya dalam area aktif.',
  'config_show_seo_info_to_frontend' => 'Tampilkan info SEO seperti judul meta, deskripsi meta, tag ke frontend.',
  'config_can_use_own_catalog_only' => 'Jika diaktifkan, vendor hanya dapat menggunakan produk katalognya sendiri untuk membuat daftar.',
  'currency_iso_numeric' => 'Kode numerik ISO 4217. Sebagai contoh: USD = 840 dan JPY = 392',
  'country_iso_numeric' => 'ISO 3166-1 kode numerik. Sebagai contoh: USA = 840 dan JAPAN = 392',
  'currency_active' => 'Mata uang aktif akan ditampilkan di pasar.',
  'country_active' => 'Mata uang aktif akan dimasukkan dalam area bisnis.',
  'currency_symbol' => 'Simbol mata uang',
  'currency_disambiguate_symbol' => 'Contoh: USD = US $ dan BDT = BD $',
  'currency_html_entity' => 'Contoh: JPY = ¥ dan INR = ₹',
  'currency_smallest_denomination' => 'Denominasi terkecil dari mata uang. Nilai default adalah 1',
  'currency_subunit_to_unit' => 'Jumlah subunit membutuhkan satu unit. Nilai default adalah 100',
  'eea' => 'Area Ekonomi Eropa',
  'support_agent' => 'Agen dukungan akan mendapatkan semua pemberitahuan dukungan. Jika tidak disetel, pedagang akan mendapatkan semua pemberitahuan.',
  'show_refund_policy_with_listing' => 'Tampilkan kebijakan pengembalian dan pengembalian dana pada halaman deskripsi produk di frontend.',
  'show_shop_desc_with_listing' => 'Tampilkan deskripsi toko di halaman deskripsi produk di frontend.',
  'shipping_zone_select_states' => 'Jika Anda tidak melihat opsi yang Anda cari, mungkin pasar tidak beroperasi di area itu. Anda dapat menghubungi admin dukungan pasar untuk membuat permintaan untuk menambahkan area.',
  'marketplace_business_area' => 'Area bisnis pasar',
  'notify_new_chat' => 'Kirimi saya pemberitahuan email ketika pesan obrolan baru tiba',
  'not_in_business_area' => 'Area ini tidak berada dalam area bisnis aktif pasar. Mungkin baru-baru ini dihapus oleh admin marketplace.',
  'region_iso_code' => 'Kode ISO wilayah harus benar. Baca * Area Bisnis * pada dokumentasi untuk mendapatkan bantuan.',
  'subscribers_count' => 'Jumlah pelanggan aktif',
  'this_plan_has_active_subscribers' => 'Paket ini tidak dapat dihapus karena memiliki pelanggan aktif.',
  'max_chat_allowed' => 'Maksimal :size karakter.',
  'mobile_slider_image' => 'Gambar slider untuk aplikasi seluler. Sistem akan menyembunyikan slider ini di ponsel jika tidak disediakan.',
  'config_can_cancel_order_within' => 'Pelanggan akan dapat membatalkan pesanan dalam waktu ini setelah melakukan pemesanan. Biarkan kosong untuk mengizinkan pembatalan sampai pesanan terpenuhi. Setel 0 untuk menonaktifkan opsi pembatalan. Pelanggan masih bisa meminta pembatalan ke vendor.',
  'mobile_app_slider_hits' => 'Pertahankan rasio 2: 1',
  'enable_live_chat_on_platform' => 'Jika diaktifkan, vendor akan mendapatkan opsi untuk mengaktifkan / menonaktifkan live chat di halaman produk dan halaman toko mereka.',
  'enable_live_chat_on_shop' => 'Aktifkan live chat di halaman produk dan halaman toko Anda.',
  'package_dependency_not_loaded' => 'Ketergantungan gagal! Paket ini bergantung pada modul :dependency.',
  'option_dependence_module' => 'Ketergantungan gagal! Opsi ini ketergantungan modul :dependency',
  'config_vendor_order_cancellation_fee' => 'Biaya pembatalan ketika vendor membatalkan pesanan. Setel 0 tanpa biaya pembatalan, kosongkan untuk menetapkan biaya kustom untuk setiap pesanan (pembatalan memerlukan persetujuan admin)',
  'vendor_order_cancellation_fee' => 'Biaya pembatalan pesanan akan dibebankan ke vendor.',
  'disabled_when_vendor_get_paid_directly' => 'Tidak dapat diaktifkan saat vendor dibayar langsung!',
  'confirm_uninstall_package' => 'Semua data yang terkait dengan :package akan hilang selamanya! Anda tidak dapat mengembalikan data ini.',
  'verify_license_key' => 'Kami mengirimkan kunci lisensi ke email Anda saat Anda melakukan pembelian. Jika Anda tidak menemukannya, silakan hubungi dukungan dengan detail.',
  'promotional_tagline' => 'Slogan promosi akan ditempatkan di navigasi utama.',
  'best_finds_under' => 'Ini untuk beranda carousel produk <em> Best Finds Under </em>. Sistem akan memilih barang terlaris di bawah batas harga ini.',
  'featured_items' => 'Ini untuk beranda bagian <em> Unggulan </em>. Kami menyarankan untuk mengatur 5-10 item.',
  'featured_categories' => 'Ini untuk beranda <Em> bagian yang ditampilkan </em>. Kami menyarankan untuk menetapkan 10-15 kategori.',
  'trending_now_categories' => 'Ini untuk beranda <eh> tren sekarang kategori </em> bagian. Kami menyarankan untuk menetapkan 2-4 kategori.',
  'featured_brands' => 'Ini untuk beranda <em> bagian menampilkan </em>. Kami menyarankan untuk menetapkan 3 merek.',
  'slider_alternative_color' => 'Warnanya akan digunakan untuk teks di dalam tag span.',
  'you_can_use_span_tag' => 'Anda dapat menggunakan tag <span> untuk menyoroti kata-kata penting.',
  'trending_now_category_help' => 'Untuk tampilan yang lebih baik tambahkan maksimal 5 kategori',
  'social_auth' => 'Jika mengaktifkan opsi login sosial akan muncul di halaman login dan register pelanggan',
  'slider_text_position' => 'Atur posisi konten Anda pada slider. posisi default benar',
  'deal_of_the_day' => 'Hanya satu item yang dapat ditetapkan sebagai kesepakatan hari ini.',
  'upload_package_zip_archive' => 'Unggah arsip ZIP hanya berisi file paket. Jangan mengunggah dokumentasi atau file lain.',
  'help_clear_cache' => 'Hapus cache sistem termasuk konfigurasi, gambar, rute. Tindakan ini mungkin diperlukan setelah Anda membuat beberapa perubahan dalam file .env atau file konfigurasi apa pun. Segera Anda akan melihat pertarungan kinerja sebentar tetapi jangan khawatir, itu hanya untuk muat pertama saja.',
  'this_will_overwrite_by_dynamic_commission' => 'Ketika plugin Komisi Dinamis aktif. Ini akan menimpa dengan nilai dinamis.',
  'transaction_fee_will_charge' => 'Biaya transaksi akan dibebankan bahkan ketika komisi nol.',
  'icon_size' => 'Ikon harus menjadi gambar 32x32px .png',
  'icon_image' => 'Image Image ini akan ditampilkan dalam dropdown grup Kategori sebagai ikon Grup Kategori.',
  'changes_can_take_time' => 'Perubahan dapat memakan waktu hingga :time untuk memengaruhi hasilnya.',
];
