# bucin-mailer
Kirim kata - kata bucin ke pengguna gmail

1. Siapkan akun gmail sebagai host (gmail ini akan digunakan untuk mengirim email ke setiap pengguna dan pastikan akun gmail tersebut bukan akun utama, melainkan akun cadangan saja karena kita perlu mengijinkan akses aplikasi yang kurang aman)
2. Pergi ke myaccount.google.com (pastikan telah memilih akun cadangan sebagai host, lihat dibagian pojok kanan atas. Kalau belum diganti saja dengan cara klik profile lalu pilih akun cadangan)
3. Masuk ke bagian 'Keamanan' -> 'Akses aplikasi yang kurang aman' lalu aktifkan (seret kekanan)
4. Masuk ke file 'check-email.php' kemudian masukkan akun host yang telah disetting pada baris '$mail->Username' dan '$mail->Password'

NB: Jika pengiriman email tetap gagal, lakukan unlock captcha pada https://accounts.google.com/DisplayUnlockCaptcha (pastikan akun yang digunakan adalah akun host tersebut)
