# 🌐 ORGANA – Organization Management System

<p align="center">
  <strong>Web-Based Organization Management System</strong>
  <br>
  Aplikasi Pengelolaan Organisasi Mahasiswa Berbasis Web
  <br><br>
  <img src="https://img.shields.io/badge/Laravel-13-FF2D20?style=for-the-badge&logo=laravel&logoColor=white">
  <img src="https://img.shields.io/badge/PHP-Backend-777BB4?style=for-the-badge&logo=php&logoColor=white">
  <img src="https://img.shields.io/badge/Blade-Templating-orange?style=for-the-badge">
  <img src="https://img.shields.io/badge/Status-Development-success?style=for-the-badge">
</p>

---

## 📌 Tentang Project

**ORGANA (Organization Management System)** merupakan aplikasi berbasis web yang dirancang untuk membantu menampilkan dan mengelola informasi organisasi mahasiswa melalui antarmuka yang modern, sederhana, dan responsif.

Aplikasi ini dikembangkan sebagai pemenuhan tugas **Ujian Tengah Semester (UTS) mata kuliah Pemrograman Berbasis Web Tahun 2026**.

ORGANA dibangun menggunakan framework Laravel dengan menerapkan konsep arsitektur MVC (Model View Controller), Blade Templating, Request Handling, serta Dynamic Array Rendering.

Aplikasi ini berfokus pada simulasi proses login menggunakan username, meneruskan data pengguna ke halaman Dashboard dan Profile, serta menampilkan data anggota organisasi secara dinamis melalui halaman Pengelolaan.

## 🎯 Tujuan Pembuatan

- Menerapkan konsep arsitektur MVC (Model View Controller).
- Memahami alur Request dan Response pada Laravel.
- Mengimplementasikan simulasi login menggunakan username.
- Meneruskan data username ke halaman Dashboard dan Profile.
- Memahami penggunaan Blade Templating Laravel.
- Mengimplementasikan Blade Directive dan Blade Component.
- Menampilkan data dinamis menggunakan Array dan perulangan `@foreach`.
- Membuat tampilan website yang menarik, terstruktur, dan responsif.

## ✨ Fitur Utama

### 1. Login
Halaman login digunakan sebagai pintu masuk aplikasi dengan memasukkan username pengguna. Sistem menggunakan simulasi login tanpa database.

### 2. Dashboard
Halaman utama aplikasi yang menampilkan sapaan pengguna berdasarkan username yang diterima melalui Request Parameter.

### 3. Pengelolaan
Halaman untuk menampilkan informasi anggota organisasi secara dinamis menggunakan data Array yang dikirimkan dari Controller menuju View.

### 4. Profile
Halaman profil yang menampilkan informasi pengguna berdasarkan username yang diteruskan melalui Request Parameter.

### 5. Navbar Component
Komponen navigasi yang digunakan untuk memudahkan pengguna berpindah antarhalaman aplikasi.

### 6. Footer Component
Komponen footer yang digunakan secara konsisten pada halaman aplikasi.

---

## 🛠️ Teknologi yang Digunakan

| Teknologi | Keterangan |
|---|---|
| PHP | Bahasa pemrograman backend |
| Laravel 13 | Framework pengembangan aplikasi web |
| Blade Template | Sistem templating Laravel |
| HTML5 | Struktur halaman website |
| CSS3 | Styling dan responsive design |
| JavaScript | Interaksi pada halaman web |

---

## 🏗️ Arsitektur Aplikasi

Aplikasi ORGANA menggunakan pola arsitektur **MVC (Model View Controller)** dengan pembagian sebagai berikut:

### Model
Pengelolaan data menggunakan Array PHP tanpa menggunakan database.

### View
Menampilkan antarmuka aplikasi menggunakan Blade Template Laravel.

### Controller
Mengatur logika aplikasi, memproses Request, serta mengirimkan data menuju View.

### Route
Mengatur alamat URL dan menghubungkan Request dengan Controller.

## 📂 Struktur File Project

```text
UTS_PWEB_252410102100/
│
├── app/
│   └── Http/
│       └── Controllers/
│           └── PageController.php
│
├── routes/
│   └── web.php
│
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       │
│       ├── components/
│       │   ├── navbar.blade.php
│       │   └── footer.blade.php
│       │
│       ├── login.blade.php
│       ├── dashboard.blade.php
│       ├── pengelolaan.blade.php
│       └── profile.blade.php
│
├── screenshots/
│   ├── Login.png
│   ├── Dashboard.png
│   ├── Pengelolaan.png
│   └── Profil.png
│
├── public/
├── database/
├── storage/
├── tests/
│
└── README.md
```

---

## ⚙️ Implementasi Laravel

### 1. MVC Pattern

Menerapkan pemisahan antara Route, Controller, dan View agar struktur aplikasi lebih terorganisir dan mudah dikembangkan.

### 2. Blade Templating

Menggunakan Blade Directive Laravel untuk mengelola tampilan aplikasi.

Directive yang diterapkan:

- `@extends`
- `@section`
- `@endsection`
- `@yield`
- `@include`
- `@foreach`

### 3. Blade Components

Menggunakan komponen Blade yang dapat digunakan kembali untuk menjaga konsistensi tampilan aplikasi.

Komponen yang digunakan:

- `<x-navbar />`
- `<x-footer />`

### 4. Request Handling

Username dikirim melalui form login menggunakan HTTP POST, kemudian diproses oleh Controller dan diteruskan ke halaman Dashboard serta Profile menggunakan Request Parameter.

### 5. Array Rendering

Data anggota organisasi disimpan dalam Array pada Controller dan ditampilkan secara dinamis menggunakan perulangan `@foreach` pada halaman Pengelolaan.

---

## 📸 Dokumentasi Tampilan Aplikasi

Berikut merupakan dokumentasi tampilan aplikasi ORGANA.

### 1. Halaman Login

Halaman login digunakan sebagai pintu masuk aplikasi dengan memasukkan username pengguna.

![Login ORGANA](screenshots/Login.png)

### 2. Halaman Dashboard

Dashboard merupakan halaman utama yang menampilkan sapaan pengguna dan informasi aplikasi ORGANA.

![Dashboard ORGANA](screenshots/Dashboard.png)

### 3. Halaman Pengelolaan

Halaman pengelolaan digunakan untuk menampilkan data anggota organisasi secara dinamis menggunakan Array dan Blade Directive `@foreach`.

![Pengelolaan ORGANA](screenshots/Pengelolaan.png)

### 4. Halaman Profile

Halaman profile menampilkan informasi pengguna berdasarkan username yang diteruskan melalui Request Parameter.

![Profile ORGANA](screenshots/Profil.png)

---

## 🚀 Cara Menjalankan Project

Untuk menjalankan aplikasi ORGANA secara lokal, pastikan perangkat sudah memiliki:

- PHP
- Composer
- Git
- Visual Studio Code (opsional)

### 1. Clone Repository

```bash
git clone https://github.com/regaputra/UTS_PWEB_252410102100.git
```

### 2. Masuk ke Folder Project

```bash
cd UTS_PWEB_252410102100
```

### 3. Install Dependency

```bash
composer install
```

### 4. Konfigurasi Environment

Salin file `.env.example` menjadi `.env`.

Untuk Windows PowerShell:

```powershell
Copy-Item .env.example .env
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Jalankan Aplikasi

```bash
php artisan serve
```

### 7. Buka Browser

Akses aplikasi melalui alamat berikut:

```text
http://127.0.0.1:8000
```

Aplikasi ORGANA siap dijalankan melalui browser.

---

## 🎓 Identitas Pengembang

| Keterangan | Informasi |
|---|---|
| Nama | Rega Putra Dwi Susanto |
| NIM | 252410102100 |
| Program Studi | Teknologi Informasi |
| Mata Kuliah | Pemrograman Berbasis Web |
| Jenis Tugas | Ujian Tengah Semester (UTS) |
| Tahun | 2026 |

---

## 📚 Informasi Tugas

Project ini dibuat sebagai implementasi materi Pemrograman Berbasis Web dengan fokus pada:

- Laravel MVC Architecture.
- HTTP Request and Response.
- Blade Templating Engine.
- Blade Components.
- Request Parameter.
- Dynamic Array Rendering.
- Responsive Web Design.

---

<p align="center">
  <strong>ORGANA – Organization Management System</strong>
  <br>
  Built with Laravel ❤️
  <br><br>
  <strong>UTS Pemrograman Berbasis Web 2026</strong>
  <br>
  © 2026 ORGANA. All Rights Reserved.
</p>
