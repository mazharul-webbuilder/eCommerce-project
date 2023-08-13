<?php 
return [
  'password_updated' => [
    'subject' => 'Kata sandi :marketplace Anda berhasil diperbarui!',
    'greeting' => 'Halo :user!',
    'message' => 'Kata sandi login akun Anda telah berhasil diubah! Jika Anda tidak membuat perubahan ini, harap hubungi kami secepatnya! Klik tombol di bawah untuk masuk ke halaman profil Anda.',
    'button_text' => 'Kunjungi Profil Anda',
  ],
  'invoice_created' => [
    'subject' => ':marketplace Faktur biaya langganan bulanan',
    'greeting' => 'Halo :merchant!',
    'message' => 'Terima kasih atas dukungan Anda. Kami telah melampirkan salinan faktur Anda untuk catatan Anda. Beri tahu kami jika Anda memiliki pertanyaan atau masalah!',
    'button_text' => 'Pergi ke Dashboard',
  ],
  'customer_registered' => [
    'subject' => 'Selamat datang di pasar :marketplace!',
    'greeting' => 'Selamat :customer!',
    'message' => 'Akun Anda berhasil dibuat! Klik tombol di bawah untuk memverifikasi alamat email Anda.',
    'button_text' => 'Verifikasi saya',
  ],
  'customer_updated' => [
    'subject' => 'Informasi akun berhasil diperbarui!',
    'greeting' => 'Halo :customer!',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa akun Anda telah berhasil diperbarui!',
    'button_text' => 'Kunjungi profil Anda',
  ],
  'customer_password_reset' => [
    'subject' => 'Atur Ulang Pemberitahuan Kata Sandi',
    'greeting' => 'Halo!',
    'message' => 'Anda menerima email ini karena kami menerima permintaan pengaturan ulang kata sandi untuk akun Anda. Jika Anda tidak meminta penyetelan ulang kata sandi, Abaikan saja pemberitahuan ini dan tidak diperlukan lagi button_text.',
    'button_text' => 'Atur Ulang Kata Sandi',
  ],
  'dispute_acknowledgement' => [
    'subject' => '[Order ID: :order_id] Sengketa telah berhasil dikirim',
    'greeting' => 'Halo :customer',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa kami telah menerima sengketa Anda untuk ID Pesanan: :order_id, tim dukungan kami akan segera menghubungi Anda.',
    'button_text' => 'Lihat sengketa',
  ],
  'dispute_created' => [
    'subject' => 'Sengketa baru untuk ID Pesanan: :order_id',
    'greeting' => 'Halo :merchant!',
    'message' => 'Anda telah menerima sengketa baru untuk ID Pesanan: :order_id. Harap tinjau dan selesaikan masalah tersebut dengan pelanggan.',
    'button_text' => 'Lihat sengketa',
  ],
  'dispute_updated' => [
    'subject' => '[ID Pesanan: :order_id] Status Sengketa telah diperbarui!',
    'greeting' => 'Halo :customer!',
    'message' => 'Sengketa untuk Order ID :order_id telah diperbarui dengan pesan ini dari vendor ": reply". Silakan periksa di bawah dan hubungi kami jika Anda membutuhkan bantuan.',
    'button_text' => 'Lihat sengketa',
  ],
  'dispute_appealed' => [
    'subject' => '[ID Pesanan: :order_id] Sengketa diajukan banding!',
    'greeting' => 'Halo!',
    'message' => 'Sengketa untuk Order ID :order_id telah diajukan banding dengan pesan ini ": reply". Silakan periksa di bawah untuk detailnya.',
    'button_text' => 'Lihat sengketa',
  ],
  'appealed_dispute_replied' => [
    'subject' => '[ID Pesanan: :order_id] Tanggapan baru untuk sengketa banding!',
    'greeting' => 'Halo!',
    'message' => 'Sengketa untuk Order ID :order_id telah ditanggapi dengan pesan ini: </br> </br> ": reply"',
    'button_text' => 'Lihat sengketa',
  ],
  'low_inventory_notification' => [
    'subject' => 'Peringatan inventaris rendah!',
    'greeting' => 'Halo!',
    'message' => 'Satu atau lebih item inventaris Anda semakin sedikit. Saatnya menambahkan lebih banyak inventaris agar item tetap hidup di pasar.',
    'button_text' => 'Perbarui Inventaris',
  ],
  'inventory_bulk_upload_procceed_notice' => [
    'subject' => 'Permintaan impor inventaris massal Anda telah diproses.',
    'greeting' => 'Halo!',
    'message' => 'Kami senang untuk memberi tahu Anda bahwa permintaan impor inventaris massal Anda telah diproses. Jumlah total baris yang berhasil diimpor ke platform :success, Jumlah baris gagal :failed',
    'failed' => 'Temukan file terlampir untuk baris yang gagal.',
    'button_text' => 'Lihat Inventaris',
  ],
  'new_message' => [
    'subject' => ':subject',
    'greeting' => 'Halo :receiver',
    'message' => ':message',
    'button_text' => 'Lihat pesan di situs',
  ],
  'message_replied' => [
    'subject' => ':user menjawab :subject',
    'greeting' => 'Halo :receiver',
    'message' => ':reply',
    'button_text' => 'Lihat pesan di situs',
  ],
  'order_created' => [
    'subject' => '[ID Pesanan: :order] pesanan Anda telah berhasil dilakukan!',
    'greeting' => 'Halo :customer',
    'message' => 'Terima kasih telah memilih kami! Pesanan Anda [Order ID :order] telah berhasil dilakukan. Kami akan memberi tahu Anda status pesanan.',
    'button_text' => 'Kunjungi toko',
  ],
  'merchant_order_created_notification' => [
    'subject' => 'Pesanan baru [ID Pesanan: :order] telah ditempatkan di toko Anda!',
    'greeting' => 'Halo :merchant',
    'message' => 'Pesanan baru [ID Pesanan :order] telah dibuat. Silakan periksa detail pesanan dan penuhi pesanan secepatnya.',
    'button_text' => 'Penuhi pesanan',
  ],
  'order_updated' => [
    'subject' => '[ID Pesanan: :order] status pesanan Anda telah diperbarui!',
    'greeting' => 'Halo :customer',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa pesanan Anda [Order ID :order] telah diperbarui. Silakan lihat di bawah untuk detail pesanan. Anda juga dapat memeriksa pesanan Anda dari dasbor Anda.',
    'button_text' => 'Kunjungi toko',
  ],
  'order_fulfilled' => [
    'subject' => '[ID Pesanan: :order] Pesanan Anda sedang dikirim!',
    'greeting' => 'Halo :customer',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa pesanan Anda [Order ID :order] telah dikirim dan sedang dalam proses. Silakan lihat di bawah untuk detail pesanan. Anda juga dapat memeriksa pesanan Anda dari dasbor Anda.',
    'button_text' => 'Kunjungi toko',
  ],
  'order_paid' => [
    'subject' => '[ID Pesanan: :order] Pesanan Anda berhasil dibayar!',
    'greeting' => 'Halo :customer',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa pesanan Anda [Order ID :order] telah berhasil dibayar dan sedang diproses. Silakan lihat di bawah untuk detail pesanan. Anda juga dapat memeriksa pesanan Anda dari dasbor Anda.',
    'button_text' => 'Kunjungi toko',
  ],
  'order_payment_failed' => [
    'subject' => '[ID Pesanan: pembayaran :order] gagal!',
    'greeting' => 'Halo :customer',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa pesanan Anda [Pembayaran ID Pesanan :order] telah gagal. Silakan lihat di bawah untuk detail pesanan. Anda juga dapat memeriksa pesanan Anda dari dasbor Anda.',
    'button_text' => 'Kunjungi toko',
  ],
  'cancellation_request_acknowledgement' => [
    'subject' => '[ID Pesanan: :order] permintaan pembatalan Anda telah berhasil dilakukan!',
    'greeting' => 'Halo :customer',
    'message' => 'Terima kasih telah memilih kami! Pesanan Anda [Permintaan pembatalan ID Pesanan :order] telah berhasil dilakukan. Kami akan memberi tahu Anda status pesanan.',
    'button_text' => 'Kunjungi toko',
  ],
  'merchant_order_cancellation_notification' => [
    'subject' => 'Permintaan pembatalan pesanan baru telah dibuat di toko Anda [ID Pesanan: :order].',
    'greeting' => 'Halo :merchant',
    'message' => 'Pesanan [Permintaan pembatalan ID Pesanan :order] telah dibuat. Silakan periksa detail pesanan dan tanggapi permintaan secepatnya.',
    'button_text' => 'Tanggapi permintaan tersebut',
  ],
  'cancellation_request_approved' => [
    'subject' => 'Permintaan pembatalan [Order ID: :order] item (s) Anda telah disetujui!',
    'greeting' => 'Halo :customer',
    'message' => 'Permintaan pembatalan [Order ID :order] item (s) Anda telah disetujui oleh vendor. Terima kasih telah memilih kami!',
    'button_text' => 'Kunjungi toko',
  ],
  'cancellation_request_declined' => [
    'subject' => 'Terlambat untuk membatalkan [Order ID: :order]',
    'greeting' => 'Halo :customer',
    'message' => 'Kami sangat menyesal! Sudah terlambat untuk menerima permintaan pembatalan [Order ID :order] item (s) oleh vendor. Jika Anda tidak ingin memiliki barang tersebut, Anda masih dapat mengembalikannya.',
    'button_text' => 'Kunjungi toko',
  ],
  'order_canceled' => [
    'subject' => '[ID Pesanan: :order] pesanan Anda telah dibatalkan!',
    'greeting' => 'Halo :customer',
    'message' => 'Pesanan Anda [Order ID :order] telah dibatalkan. Terima kasih telah memilih kami!',
    'button_text' => 'Kunjungi toko',
  ],
  'refund_initiated' => [
    'subject' => '[ID Pesanan: :order] pengembalian dana telah dilakukan!',
    'greeting' => 'Halo :customer',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa kami telah memulai permintaan pengembalian dana untuk pesanan Anda :order. Salah satu anggota tim kami akan segera meninjau permintaan tersebut. Kami akan memberi tahu Anda status permintaan tersebut.',
  ],
  'refund_approved' => [
    'subject' => '[ID Pesanan: :order] permintaan pengembalian dana telah disetujui!',
    'greeting' => 'Halo :customer',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa kami telah menyetujui permintaan pengembalian dana untuk pesanan Anda :order. Jumlah yang dikembalikan adalah :amount. Kami telah mengirimkan uang ke metode pembayaran Anda, mungkin perlu waktu beberapa hari untuk menerapkan akun Anda. Hubungi penyedia pembayaran Anda jika Anda tidak melihat uang tersebut diterapkan dalam beberapa hari.',
  ],
  'refund_declined' => [
    'subject' => '[ID Pesanan: :order] permintaan pengembalian dana telah ditolak!',
    'greeting' => 'Halo :customer',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa permintaan pengembalian dana telah ditolak untuk pesanan Anda :order. Jika Anda tidak puas dengan solusi pedagang, Anda dapat menghubungi pedagang langsung dari platform atau bahkan Anda dapat mengajukan banding atas sengketa di :marketplace. Kami akan turun tangan untuk menyelesaikan masalah tersebut.',
  ],
  'shop_created' => [
    'subject' => 'Toko Anda siap digunakan!',
    'greeting' => 'Selamat :merchant!',
    'message' => 'Toko Anda :shop_name telah berhasil dibuat! Klik tombol di bawah ini untuk masuk ke panel admin toko.',
    'button_text' => 'Pergi ke Dashboard',
  ],
  'shop_updated' => [
    'subject' => 'Informasi toko berhasil diperbarui!',
    'greeting' => 'Halo :merchant!',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa toko Anda :shop_name telah berhasil diperbarui!',
    'button_text' => 'Pergi ke Dashboard',
  ],
  'shop_config_updated' => [
    'subject' => 'Konfigurasi toko berhasil diperbarui!',
    'greeting' => 'Halo :merchant!',
    'message' => 'Konfigurasi toko Anda berhasil diperbarui! Klik tombol di bawah ini untuk masuk ke panel admin toko.',
    'button_text' => 'Pergi ke Dashboard',
  ],
  'shop_down_for_maintainace' => [
    'subject' => 'Toko Anda rusak!',
    'greeting' => 'Halo :merchant!',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa toko Anda :shop_name sedang down! Tidak ada pelanggan yang dapat mengunjungi toko Anda sampai toko tersebut kembali beroperasi.',
    'button_text' => 'Buka halaman Config',
  ],
  'shop_is_live' => [
    'subject' => 'Toko Anda kembali ke LIVE!',
    'greeting' => 'Halo :merchant',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa toko :shop_name Anda telah kembali hidup dengan sukses!',
    'button_text' => 'Pergi ke Dashboard',
  ],
  'shop_deleted' => [
    'subject' => 'Toko Anda telah dihapus dari :marketplace!',
    'greeting' => 'Halo Pedagang!',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa toko Anda telah dihapus dari penanda kami! Kami akan merindukanmu.',
  ],
  'system_is_down' => [
    'subject' => 'Pasar :marketplace Anda turun sekarang!',
    'greeting' => 'Halo :user!',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa pasar :marketplace Anda sedang turun! Tidak ada pelanggan yang dapat mengunjungi pasar Anda sampai pasar kembali hidup.',
    'button_text' => 'Buka halaman konfigurasi',
  ],
  'system_is_live' => [
    'subject' => 'Marketplace :marketplace Anda kembali ke LIVE!',
    'greeting' => 'Halo :user!',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa pasar :marketplace Anda telah kembali beroperasi dengan sukses!',
    'button_text' => 'Pergi ke Dashboard',
  ],
  'system_info_updated' => [
    'subject' => ':marketplace - informasi pasar berhasil diperbarui!',
    'greeting' => 'Halo :user!',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa pasar :marketplace Anda telah berhasil diperbarui!',
    'button_text' => 'Pergi ke Dashboard',
  ],
  'system_config_updated' => [
    'subject' => ':marketplace - konfigurasi pasar berhasil diperbarui!',
    'greeting' => 'Halo :user!',
    'message' => 'Konfigurasi pasar :marketplace Anda telah berhasil diperbarui! Klik tombol di bawah untuk masuk ke panel admin.',
    'button_text' => 'Lihat pengaturan',
  ],
  'new_contact_us_message' => [
    'subject' => 'Pesan baru melalui formulir hubungi kami: :subject',
    'greeting' => 'Halo!',
    'message_footer_with_phone' => 'Anda dapat membalas email ini atau menghubungi langsung ke telepon :phone ini',
    'message_footer' => 'Anda dapat membalas email ini secara langsung.',
  ],
  'ticket_acknowledgement' => [
    'subject' => '[ID Tiket: :ticket_id] :subject',
    'greeting' => 'Halo :user',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa kami telah berhasil menerima tiket Anda :ticket_id! Tim dukungan kami akan segera menghubungi Anda.',
    'button_text' => 'Lihat tiketnya',
  ],
  'ticket_created' => [
    'subject' => 'Tiket Dukungan Baru [ID Tiket: :ticket_id] :subject',
    'greeting' => 'Halo!',
    'message' => 'Anda telah menerima ID tiket dukungan baru :ticket_id, Pengirim :sender dari vendor :vendor. Tinjau dan serahkan tiket ke tim dukungan.',
    'button_text' => 'Lihat tiketnya',
  ],
  'ticket_assigned' => [
    'subject' => 'Sebuah tiket baru saja diberikan kepada Anda [Tiket JIKA: :ticket_id] :subject',
    'greeting' => 'Halo :user',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa tiket [ID Tiket: :ticket_id] :subject baru saja diberikan kepada Anda. Tinjau dan balas tiket secepat mungkin.',
    'button_text' => 'Balas tiketnya',
  ],
  'ticket_replied' => [
    'subject' => ':user membalas tiket [ID Tiket: :ticket_id] :subject',
    'greeting' => 'Halo :user',
    'message' => ':reply',
    'button_text' => 'Lihat tiketnya',
  ],
  'ticket_updated' => [
    'subject' => 'Sebuah Tiket [ID Tiket: :ticket_id] :subject telah diperbarui!',
    'greeting' => 'Halo :user!',
    'message' => 'Salah satu ID tiket dukungan Anda #: ticket_id :subject telah diperbarui. Silakan hubungi kami jika Anda membutuhkan bantuan.',
    'button_text' => 'Lihat tiketnya',
  ],
  'user_created' => [
    'subject' => ':admin menambahkan Anda ke pasar :marketplace!',
    'greeting' => 'Selamat :user!',
    'message' => 'Anda telah ditambahkan ke :marketplace oleh :admin! Klik tombol di bawah untuk masuk ke akun Anda. Gunakan sandi sementara untuk login awal.',
    'alert' => 'Jangan lupa untuk mengubah kata sandi Anda setelah login.',
    'button_text' => 'Kunjungi profil Anda',
  ],
  'user_updated' => [
    'subject' => 'Informasi akun berhasil diperbarui!',
    'greeting' => 'Halo :user!',
    'message' => 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa akun Anda telah berhasil diperbarui!',
    'button_text' => 'Kunjungi profil Anda',
  ],
  'verdor_registered' => [
    'subject' => 'Vendor baru baru saja mendaftar!',
    'greeting' => 'Selamat!',
    'message' => 'Marketplace :marketplace Anda baru saja mendapatkan verdor baru dengan nama toko <strong>: shop_name </strong> dan alamat email pedagang :merchant_email',
    'button_text' => 'Pergi ke Dashboard',
  ],
  'email_verification' => [
    'subject' => 'Verifikasi akun :marketplace Anda!',
    'greeting' => 'Selamat :user!',
    'message' => 'Akun Anda berhasil dibuat! Klik tombol di bawah untuk memverifikasi alamat email Anda.',
    'button_text' => 'Verifikasi Email Saya',
  ],
  'dispute_solved' => [
    'subject' => 'Sengketa [ID Pesanan: :order_id] telah ditandai sebagai terselesaikan!',
    'greeting' => 'Halo :customer!',
    'message' => 'Sengketa ID Pesanan: :order_id telah ditandai sebagai terselesaikan. Terima kasih karena telah bersama kami.',
    'button_text' => 'Lihat sengketa',
  ],
  'new_chat_message' => [
    'subject' => 'Pesan baru melalui live chat form :sender',
    'greeting' => 'Halo :receipent!',
    'message' => 'Anda mendapat pesan baru melalui jendela obrolan langsung ": pesan". Silakan masuk ke dasbor toko untuk membalas.',
    'button_text' => 'Lihat di dashboard',
  ],
];