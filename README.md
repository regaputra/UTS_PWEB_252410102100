# 🌐 ORGANA – Organization Management System

**ORGANA** merupakan aplikasi web pengelolaan organisasi mahasiswa yang dikembangkan untuk memenuhi tugas **Ujian Tengah Semester (UTS) Pemrograman Berbasis Web Tahun 2026**.

Aplikasi ini dibuat menggunakan framework Laravel dengan menerapkan konsep arsitektur MVC (Model View Controller), Blade Templating, Request Handling, serta Dynamic Array Rendering.

---

## 📌 Deskripsi Aplikasi

ORGANA (Organization Management System) adalah aplikasi berbasis web yang dirancang untuk menampilkan informasi dan membantu pengelolaan data organisasi mahasiswa melalui tampilan yang modern, sederhana, dan responsif.

Aplikasi ini mengimplementasikan simulasi login menggunakan username, menampilkan informasi pengguna pada halaman Dashboard dan Profile, serta menampilkan data anggota organisasi secara dinamis melalui halaman Pengelolaan.

## ✨ Fitur Aplikasi

- **Login** – Simulasi login menggunakan username tanpa database.
- **Dashboard** – Menampilkan halaman utama dan informasi pengguna.
- **Pengelolaan** – Menampilkan data anggota organisasi secara dinamis menggunakan Array.
- **Profile** – Menampilkan informasi profil berdasarkan username.
- **Navbar Component** – Komponen navigasi untuk berpindah antarhalaman.
- **Footer Component** – Komponen footer yang digunakan secara konsisten.

## 🛠️ Teknologi yang Digunakan

| Teknologi | Keterangan |
|---|---|
| PHP | Bahasa pemrograman backend |
| Laravel | Framework PHP |
| Blade Template | Sistem templating Laravel |
| HTML5 | Struktur halaman web |
| CSS3 | Desain dan styling |
| JavaScript | Interaksi halaman web |

## 🏗️ Konsep dan Implementasi

Aplikasi ORGANA menggunakan arsitektur **MVC (Model View Controller)** dengan pembagian sebagai berikut:

- **Model:** Pengelolaan data menggunakan Array tanpa database.
- **View:** Menampilkan antarmuka menggunakan Blade Template.
- **Controller:** Mengatur logika aplikasi dan mengirimkan data ke View.
- **Route:** Mengatur URL dan menghubungkan request dengan Controller.

### Implementasi Blade Templating

Beberapa Blade Directive yang diterapkan:

- `@extends`
- `@section`
- `@endsection`
- `@yield`
- `@include`
- `@foreach`

### Blade Components

- `<x-navbar />`
- `<x-footer />`

### Request Handling

Username dikirim melalui form login menggunakan HTTP POST, kemudian diproses oleh Controller dan diteruskan ke halaman Dashboard serta Profile menggunakan Request Parameter.

### Array Rendering

Data anggota organisasi disimpan dalam Array pada Controller dan ditampilkan secara dinamis menggunakan perulangan `@foreach` pada halaman Pengelolaan.

## 📂 Struktur File

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
│   ├── login.png
│   ├── dashboard.png
│   ├── pengelolaan.png
│   └── profile.png
│
└── README.md
```

## 📸 Dokumentasi Tampilan Aplikasi

### 1. Halaman Login

Halaman login digunakan sebagai pintu masuk aplikasi dengan memasukkan username pengguna.

![Login Page](screenshots/login.png)

### 2. Halaman Dashboard

Dashboard merupakan halaman utama yang menampilkan sapaan pengguna dan informasi aplikasi ORGANA.

![Dashboard Page](screenshots/dashboard.png)

### 3. Halaman Pengelolaan

Halaman pengelolaan digunakan untuk menampilkan data anggota organisasi secara dinamis menggunakan Array dan Blade Directive `@foreach`.

![Pengelolaan Page](screenshots/pengelolaan.png)

### 4. Halaman Profile

Halaman profile menampilkan informasi pengguna berdasarkan username yang diteruskan melalui Request Parameter.

![Profile Page](screenshots/profile.png)

## 🚀 Cara Menjalankan Aplikasi

Pastikan PHP dan Composer sudah terinstal pada perangkat.

**1. Clone Repository**

```bash
git clone https://github.com/USERNAME/UTS_PWEB_252410102100.git
```

**2. Masuk ke Folder Project**

```bash
cd UTS_PWEB_252410102100
```

**3. Install Dependency**

```bash
composer install
```

**4. Salin File Environment**

```bash
cp .env.example .env
```

**5. Generate Application Key**

```bash
php artisan key:generate
```

**6. Jalankan Laravel**

```bash
php artisan serve
```

**7. Buka Aplikasi**

Akses melalui browser:

```text
http://127.0.0.1:8000
```

## 🎓 Identitas Pengembang

| Keterangan | Informasi |
|---|---|
| Nama | Rega Putra Dwi Susanto |
| NIM | 252410102100 |
| Program Studi | Teknologi Informasi |
| Mata Kuliah | Pemrograman Berbasis Web |
| Tugas | Ujian Tengah Semester (UTS) |
| Tahun | 2026 |

---

<p align="center">
  <strong>ORGANA – Organization Management System</strong>
  <br>
  Built with Laravel | UTS Pemrograman Web 2026
  <br><br>
  © 2026 ORGANA. All Rights Reserved.
</p>
