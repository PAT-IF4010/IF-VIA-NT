<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

Berikut adalah versi lengkap dari README.md yang telah Anda minta, dengan URL dalam format kode:

# Blog Application

## Pendahuluan

Aplikasi Blog ini adalah sebuah platform dimana pengguna dapat menulis dan mempublikasikan postingan mereka dalam berbagai kategori. Aplikasi ini menyediakan fitur-fitur seperti membuat, mengedit, dan menghapus postingan, serta mengelola kategori postingan.

## Teknologi

Aplikasi Blog ini dibangun menggunakan beberapa teknologi diantaranya:

-   Laravel 8: The PHP Framework for Web Artisans, digunakan untuk membangun backend aplikasi.
-   Bootstrap: Framework CSS yang bersifat open-source dan gratis, digunakan untuk pengembangan front-end yang responsif dan mobile-first.
-   JavaScript: Bahasa pemrograman yang menjadi salah satu teknologi inti dari World Wide Web, digunakan untuk interaktivitas dan dinamika di sisi klien.

## Fitur Aplikasi

### Halaman Blog

-   **Deskripsi:** Halaman ini merupakan halaman utama aplikasi yang menampilkan semua postingan terbaru dari semua kategori.
-   **Komponen Utama:**
    -   Daftar postingan terbaru dengan kategori dan penulis.
    -   Pencarian postingan.

### Dashboard

-   **Deskripsi:** Halaman ini hanya dapat diakses oleh administrator untuk mengelola postingan dan kategori.
-   **Komponen Utama:**
    -   **My Posts:** Menampilkan daftar semua postingan yang dibuat oleh administrator.
    -   **Post Categories:** Menampilkan daftar kategori postingan beserta opsi untuk menambah, mengedit, dan menghapus kategori.

### Kategori Postingan

-   **Deskripsi:** Menampilkan daftar semua kategori postingan yang tersedia.
-   **Komponen Utama:**
    -   Nomor urut kategori.
    -   Nama kategori.
    -   Aksi (Tambah, Edit, Hapus).

### Login

-   **Deskripsi:** Halaman login untuk administrator.
-   **Komponen Utama:**
    -   Form login dengan inputan username dan password.

### Postingan

-   **Deskripsi:** Menampilkan detail dari setiap postingan yang dipilih.
-   **Komponen Utama:**
    -   Judul postingan.
    -   Penulis.
    -   Tanggal dan waktu penulisan.
    -   Isi postingan.

## Struktur Database

1. **Users**

    - `id` (INT, PRIMARY KEY)
    - `username` (VARCHAR)
    - `password` (VARCHAR)

2. **Posts**

    - `id` (INT, PRIMARY KEY)
    - `title` (VARCHAR)
    - `content` (TEXT)
    - `category_id` (INT, FOREIGN KEY)
    - `author` (VARCHAR)
    - `created_at` (TIMESTAMP)

3. **Categories**
    - `id` (INT, PRIMARY KEY)
    - `name` (VARCHAR)

## Panduan Penggunaan

### Mengakses Halaman Blog

1. Buka aplikasi dan Anda akan melihat halaman Blog yang menampilkan semua postingan terbaru.
2. Gunakan fitur pencarian untuk mencari postingan berdasarkan kata kunci.

### Login sebagai Administrator

1. Klik tombol "Login" di halaman utama.
2. Masukkan username dan password, lalu klik "Login".

### Mengelola Postingan

1. Setelah login, akses halaman Dashboard.
2. Di bawah "My Posts", Anda dapat melihat semua postingan yang telah Anda buat.
3. Gunakan tombol "Create new post" untuk menambah postingan baru.
4. Klik pada judul postingan untuk mengedit atau menghapusnya.

### Mengelola Kategori

1. Di halaman Dashboard, klik "Post Categories".
2. Anda akan melihat daftar semua kategori yang ada.
3. Gunakan tombol "Create new category" untuk menambah kategori baru.
4. Klik pada nama kategori untuk mengedit atau menghapusnya.

## Instalasi

1. Clone Project atau Unduh secara manual.
2. Aktifkan XAMPP Control Panel, lalu akses ke [phpMyAdmin](http://localhost/phpmyadmin/).
3. Buat database dengan nama 'laravel8'.
4. Jika melakukan Clone Project, rename file `.env.example` menjadi `.env` dan hubungkan database dengan mengisikan nama database: `DB_DATABASE=laravel8`
5. Ketik pada terminal:
    ```sh
    php artisan migrate:fresh --seed
    ```
6. Jalankan aplikasi:
    ```sh
    php artisan serve
    ```
7. Akses Aplikasi di Web browser:
    ```sh
    127.0.0.1:8000
    ```

## Demo Login

-   **Admin**
    -   Email: admin@gmail.com
    -   Password: 12345

## Catatan

Apabila gambar tidak muncul, hapus storage di folder public, kemudian ketik pada terminal:

```sh
php artisan config:cache
php artisan storage:link
```

Kemudian jalankan kembali aplikasi.

# Kelompok

-   Renal Sugiana (A2.2100107)
-   Farhan Afrizal Muttaqin (A2.2100046)
-   Angga Ihsan Nugraha (A2.2100019)
-   Jumadi Muhammad Rizal (A2.2000141)
