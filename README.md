<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://laravel.com/img/logotype.min.svg" width="400" alt="Laravel Logo">
    </a>
</p>
● Web API Manajemen Produk

● Deskripsi

Project ini merupakan implementasi Web API berbasis Laravel yang digunakan untuk mengelola data produk. API ini mendukung proses autentikasi pengguna serta operasi CRUD (Create, Read, Update, Delete) terhadap data produk.

API dikembangkan sebagai bagian dari tugas UTS Mobile Programming Lanjut.



●Tujuan

- Mengimplementasikan Web API menggunakan framework Laravel
- Menerapkan autentikasi menggunakan token
- Mengelola data produk secara efisien
- Memahami konsep RESTful API



●Teknologi yang Digunakan

- PHP
- Laravel
- MySQL
- Thunder Client untuk Pengujian API



●Authentication

Sistem menggunakan autentikasi berbasis token.
Setelah login, user akan mendapatkan token yang digunakan untuk mengakses endpoint tertentu.

Contoh penggunaan token:

Authorization: Bearer {token}



●Fitur Utama

- Registrasi User
- Login User
- Dashboard (ringkasan data)
- Manajemen Produk:
  - Tambah Produk
  - Lihat Produk
  - Edit Produk
  - Hapus Produk



● Daftar Endpoint

● Authentication

- "POST /api/register" → Registrasi user
- "POST /api/login" → Login user

● User

- "GET /api/profile" → Menampilkan data user

● Dashboard

- "GET /api/dashboard" → Menampilkan ringkasan data

● Produk

- "GET /api/products" → Menampilkan semua produk
- "POST /api/products" → Menambahkan produk
- "PUT /api/products/{id}" → Mengupdate produk
- "DELETE /api/products/{id}" → Menghapus produk



●Dokumentasi

Pengujian API dilakukan menggunakan Thunder Client dan ditampilkan dalam laporan berupa screenshot setiap endpoint.



 Anggota Kelompok

- Ikvina H.N_STI202303738 
- Ayu Safitri_STI202303752 



 Catatan

Project ini dibuat untuk keperluan pembelajaran dan pengembangan kemampuan dalam membangun Web API berbasis Laravel.
