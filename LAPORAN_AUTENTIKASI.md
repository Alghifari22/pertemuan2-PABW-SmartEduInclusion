# Laporan Autentikasi SmartEdu

## Pilihan metode

Autentikasi dibuat dengan **Laravel Breeze (Blade)**. Breeze dipilih karena menyediakan alur login, pendaftaran, logout, validasi, perlindungan CSRF, regenerasi session setelah login, serta pembatasan percobaan login. Scaffold tersebut terintegrasi dengan Laravel dan lebih konsisten dipelihara daripada membuat alur autentikasi dari awal. Tampilan dan tujuan redirect disesuaikan dengan halaman peran SmartEdu yang sudah tersedia.

## Fitur autentikasi

- Login: `GET/POST /login`. Email wajib valid; kredensial salah menampilkan pesan “Email atau kata sandi tidak sesuai.” Percobaan login dibatasi.
- Register: `GET/POST /register`. Nama, email unik dan valid, kata sandi minimal sesuai aturan Laravel, serta konfirmasi kata sandi wajib benar. Akun publik baru diberi peran `Siswa`.
- Logout: tombol **Keluar** pada sidebar mengirim `POST /logout` dengan CSRF token. Session diakhiri dan pengguna kembali ke halaman login.
- Sesudah login atau pendaftaran berhasil, pengguna diarahkan ke `/siswa/dashboard` (atau URL tujuan login yang sebelumnya diminta).

## Halaman yang dilindungi

Seluruh halaman operasional, baik `guru/*`, `staff-tu/*`, `siswa/*`, maupun `orang-tua/*`, termasuk POST pengelolaan modul dan pengguna, berada di dalam grup middleware `auth` pada `routes/web.php`. Tamu dialihkan ke `/login`. Route register dan login hanya dapat diakses oleh tamu.

## Akun demo dan seeder

`DatabaseSeeder.php` memanggil `SmartEduSeeder` dan `DummyUsersSeeder`. Seeder yang pertama menyediakan 10 akun demo lintas peran; yang kedua membuat 5 akun siswa dengan nama dan email Faker. Kata sandi kelima akun Faker adalah `password123`. Semua password di-hash melalui cast `hashed` pada model `User` (serta hash bawaan pada akun demo). Seeder modul memakai `updateOrCreate`, sehingga dapat dijalankan ulang tanpa bentrok kode modul.

Menjalankan seeder:

```sh
php artisan db:seed
```

Kredensial akun demo yang dapat langsung dipakai: misalnya `agus.setiawan@smartedu.test` dengan kata sandi `password123`. Akun Faker memakai alamat email acak; lihat `users` untuk email aktualnya.

## Pemeriksaan di phpMyAdmin

Konfigurasi `.env` proyek menunjuk ke database `db_smarteduinclusion`. Di phpMyAdmin, pilih database tersebut lalu tabel **users** → **Browse/Jelajahi** untuk menampilkan id, nama, email, role, dan kolom password. Query berikut menampilkan ringkasan yang sama tanpa mengekspos hash lengkap:

```sql
SELECT id, name, email, role, LEFT(password, 4) AS hash_prefix,
       LENGTH(password) AS hash_length
FROM users
ORDER BY id;
```

Verifikasi pada database proyek menghasilkan **15 akun**. Prefix password yang tersimpan adalah `$2y$` dan panjangnya 60 karakter, sesuai hash bcrypt; tidak ada password teks biasa yang ditampilkan.
