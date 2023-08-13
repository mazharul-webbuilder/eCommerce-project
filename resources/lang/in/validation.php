<?php 
return [
  'accepted' => ' :attribute harus diterima.',
  'active_url' => ' :attribute bukan URL yang valid.',
  'after' => ' :attribute harus berupa tanggal setelah :date.',
  'after_or_equal' => ' :attribute harus berupa tanggal setelah atau sama dengan :date.',
  'alpha' => ' :attribute hanya boleh berisi huruf.',
  'alpha_dash' => ' :attribute hanya dapat berisi huruf, angka, dan tanda hubung.',
  'alpha_num' => ' :attribute hanya dapat berisi huruf dan angka.',
  'array' => ' :attribute harus berupa array.',
  'before' => ' :attribute harus berupa tanggal sebelum :date.',
  'before_or_equal' => ' :attribute harus berupa tanggal sebelum atau sama dengan :date.',
  'between' => [
    'numeric' => ' :attribute harus antara :min dan :max.',
    'file' => ' :attribute harus antara :min dan :max kilobyte.',
    'string' => ' :attribute harus antara karakter :min dan :max.',
    'array' => ' :attribute harus memiliki antara item :min dan :max.',
  ],
  'boolean' => 'Bidang :attribute harus benar atau salah.',
  'confirmed' => 'Konfirmasi :attribute tidak cocok.',
  'date' => ' :attribute bukan tanggal yang valid.',
  'date_format' => ' :attribute tidak cocok dengan format :format.',
  'different' => ' :attribute dan :other harus berbeda.',
  'digits' => 'Angka :attribute harus berupa angka :digits.',
  'digits_between' => ' :attribute harus antara digit :min dan :max.',
  'dimensions' => ' :attribute memiliki dimensi gambar yang tidak valid.',
  'distinct' => 'Bidang :attribute memiliki nilai duplikat.',
  'email' => ' :attribute harus berupa alamat email yang valid.',
  'exists' => ' :attribute yang dipilih tidak valid.',
  'file' => ' :attribute harus berupa file.',
  'filled' => 'Bidang :attribute harus memiliki nilai.',
  'gt' => [
  ],
  'gte' => [
  ],
  'image' => ' :attribute harus berupa gambar.',
  'in' => ' :attribute yang dipilih tidak valid.',
  'in_array' => 'Bidang :attribute tidak ada di :other.',
  'integer' => ' :attribute harus berupa bilangan bulat.',
  'ip' => ' :attribute harus berupa alamat IP yang valid.',
  'ipv4' => ' :attribute harus alamat IPv4 yang valid.',
  'ipv6' => ' :attribute harus alamat IPv6 yang valid.',
  'json' => ' :attribute harus berupa string JSON yang valid.',
  'lt' => [
  ],
  'lte' => [
  ],
  'max' => [
    'numeric' => ' :attribute mungkin tidak lebih besar dari :max.',
    'file' => ' :attribute mungkin tidak lebih besar dari :max kilobyte.',
    'string' => ' :attribute mungkin tidak lebih besar dari :max karakter.',
    'array' => ' :attribute mungkin tidak memiliki lebih dari :max item.',
  ],
  'mimes' => ' :attribute harus berupa file tipe: :values.',
  'mimetypes' => ' :attribute harus berupa file tipe: :values.',
  'min' => [
    'numeric' => ' :attribute harus setidaknya :min.',
    'file' => ' :attribute harus minimal :min kilobyte.',
    'string' => ' :attribute minimal harus :min karakter.',
    'array' => ' :attribute harus memiliki setidaknya :min item.',
  ],
  'not_in' => ' :attribute yang dipilih tidak valid.',
  'numeric' => ' :attribute harus berupa angka.',
  'present' => 'Bidang :attribute harus ada.',
  'regex' => 'Format :attribute tidak valid.',
  'required' => 'Bidang :attribute diperlukan.',
  'required_if' => 'Bidang :attribute diperlukan saat :other adalah :value.',
  'required_unless' => 'Bidang :attribute diperlukan kecuali :other di :values.',
  'required_with' => 'Bidang :attribute diperlukan saat :values ada.',
  'required_with_all' => 'Bidang :attribute diperlukan saat :values ada.',
  'required_without' => 'Bidang :attribute diperlukan saat :values tidak ada.',
  'required_without_all' => 'Bidang :attribute diperlukan ketika tidak ada :values hadir.',
  'same' => ' :attribute dan :other harus cocok.',
  'size' => [
    'numeric' => ' :attribute harus :size.',
    'file' => ' :attribute harus :size kilobyte.',
    'string' => ' :attribute harus berupa karakter :size.',
    'array' => ' :attribute harus berisi item :size.',
  ],
  'string' => ' :attribute harus berupa string.',
  'timezone' => ' :attribute harus merupakan zona yang valid.',
  'unique' => ' :attribute sudah diambil.',
  'uploaded' => 'Ukuran file melebihi batas unggahan maksimum di server Anda. Silakan periksa file php.ini.',
  'url' => 'Format :attribute tidak valid.',
  'composite_unique' => ' :attribute :value sudah ada.',
  'register_email_unique' => 'Alamat email ini sudah memiliki akun. Silakan coba yang lain.',
  'role_type_required' => 'Pilih jenis peran.',
  'attribute_id_required' => 'Pilih atribut.',
  'attribute_type_id_required' => 'Pilih tipe atribut.',
  'attribute_code_required' => 'Bidang kode atribut diperlukan.',
  'attribute_value_required' => 'Bidang nilai atribut diperlukan.',
  'category_list_required' => 'Pilih setidaknya satu kategori.',
  'manufacturer_required' => 'Bidang pabrikan diperlukan.',
  'origin_required' => 'Kolom asal harus diisi.',
  'offer_start_required' => 'Ketika Anda memiliki harga penawaran, tanggal mulai penawaran diperlukan.',
  'offer_start_after' => 'Waktu mulai promosi tidak boleh lewat waktu.',
  'offer_end_required' => 'Ketika Anda memiliki harga penawaran, tanggal akhir penawaran diperlukan.',
  'offer_end_after' => 'Waktu akhir penawaran harus waktu setelah waktu mulai penawaran.',
  'variants_required' => 'Varian yang dibutuhkan',
  'sku-unique' => 'Sku :value telah diambil. Coba yang baru.',
  'sku-distinct' => 'Varian :attribute memiliki nilai sku duplikat.',
  'offer_price-numeric' => 'bukan nilai harga yang valid. Harga penawaran harus berupa angka.',
  'email_template_id_required' => 'Diperlukan templat email.',
  'brand_logo_max' => 'Logo merek mungkin tidak lebih besar dari :max kilobyte.',
  'brand_logo_mimes' => 'Logo merek harus berupa file tipe: :values.',
  'avatar_required' => 'Pilih avatar.',
  'subject_required_without' => 'Subjek diperlukan jika Anda tidak menggunakan templat.',
  'message_required_without' => 'Pesan diperlukan jika Anda tidak menggunakan templat.',
  'template_id_required_without_all' => 'Pilih templat atau komposer pesan baru.',
  'customer_required' => 'Pilih pelanggan.',
  'reply_required_without' => 'Dibutuhkan balasan yang diajukan.',
  'template_id_required_without' => 'Pilih templat diperlukan saat repling dengan templat.',
  'shipping_zone_tax_id_required' => 'Pilih profil pajak untuk zona tersebut',
  'shipping_zone_country_ids_required' => 'Pilih setidaknya satu negara',
  'rest_of_the_world_composite_unique' => 'Sisa dari zona pengiriman dunia sudah ada.',
  'something_went_wrong' => 'Ada yang tidak beres. Silakan periksa dan coba lagi.',
  'shipping_rate_required_unless' => 'Berikan tarif pengiriman atau pilih opsi \'Pengiriman gratis\'',
  'shipping_range_minimum_min' => 'Kisaran minimum tidak boleh berupa nilai negatif',
  'shipping_range_maximum_min' => 'Kisaran maksimum tidak boleh kurang dari nilai minimum',
  'csv_mimes' => ' :attribute harus berupa file tipe csv.',
  'import_data_required' => 'Dataset tidak valid untuk diimpor. Silakan periksa data Anda dan coba lagi.',
  'do_action_required' => 'Anda tidak memberikan input.',
  'do_action_invalid' => 'Kata kunci / input yang diberikan tidak valid.',
  'recaptcha' => 'Harap pastikan bahwa Anda adalah manusia!',
  'custom' => [
    'attribute-name' => [
      'rule-name' => 'pesan khusus',
    ],
  ],
  'attributes' => [
  ],
  'upload_rows' => 'Anda dapat mengunggah maksimum catatan :rows per batch.',
  'csv_upload_invalid_data' => 'Beberapa baris berisi data yang tidak valid yang tidak dapat diproses. Silakan periksa data Anda dan coba lagi.',
  'slider_image_required' => 'Gambar slider diperlukan',
  'banner_image_required' => 'Diperlukan gambar spanduk',
  'select_the_item' => 'Pilih itemnya',
  'banner_group_id_required' => 'Silakan pilih Grup Banner',
];