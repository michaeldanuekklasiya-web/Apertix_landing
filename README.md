<p align="center">
  <img src="https://github.com/user-attachments/assets/3e40d90c-38da-4331-be4d-2437c52383ff" width="200">
</p>

<h1 align="center">Sistem Manajemen Pembelian Hasil Foto Berbasis Web: Interaksi Efektif antara Pengguna dan Admin dengan Fitur CRUD</h1>

---

<div align="center">

| **Nama**                          | **NPM**       | **Universitas** |
|-----------------------------------|---------------|------------------|
| Jimly Assidiq Anwar               | 4522210018    | Pancasila        |
| Michael Danu Ekklasiya            | 4522210056    | Pancasila        |
| Muhamad Farhan                    | 4522210057    | Pancasila        |
| Muhammad Farhan Aprilianto        | 4522210058    | Pancasila        |
| Rizky Galih Dwiyanto              | 4522210074    | Pancasila        |

</div>



## Description

Aplikasi web ini dirancang untuk memfasilitasi interaksi antara pengguna dan admin dalam pembelian hasil foto, dengan mengutamakan prinsip CRUD (Create, Read, Update, Delete). Melalui sistem ini, pengguna dapat dengan mudah melakukan pemesanan, mengelola pengaduan, dan melihat status hasil foto, sementara admin dapat dengan efisien memproses permintaan dan memperbarui data. Dengan antarmuka yang intuitif dan responsif, aplikasi ini bertujuan untuk meningkatkan pengalaman pengguna serta mempermudah pengelolaan tiket, sehingga menciptakan solusi yang efektif bagi semua pihak yang terlibat.

## Dependencies

Sebelum menginstal dan mengembangkan aplikasi layanan internal ini, harap memastikan bahwa sistem Anda memenuhi persyaratan berikut:

### Sistem Operasi

- Windows 10 atau versi lebih baru
- macOS Mojave atau versi lebih baru
- Linux (Ubuntu 20.04 atau lebih baru, Debian 10 atau lebih baru)

### Perangkat Lunak dan Tools

| Komponen               | Detail                                         |
|------------------------|------------------------------------------------|
| **Web Server**         | Apache atau Nginx untuk server aplikasi        |
| **Database**           | MySQL atau PostgreSQL (versi terbaru disarankan) |
| **Bahasa Pemrograman** | PHP 8.3.12                                     |
| **Framework**          | Laravel 10.48.22                               |


### Libraries dan Packages

- **Filament**  
  Filament digunakan untuk mendukung pengelolaan dan tampilan data di aplikasi ini, mencakup:
  - Pembuatan halaman untuk mengelola pengguna, produk, kategori, dan data lainnya.
  - Pengelolaan panel admin, termasuk operasi CRUD, tabel, dan formulir.
  - Membuat formulir dinamis dengan dukungan Livewire.
  - Membangun dasbor aplikasi dengan grafik dan statistik waktu nyata.

> **Catatan**: Filament menggunakan teknologi **Livewire**, **Alpine.js**, dan **Tailwind CSS** untuk mendukung bagian front-end aplikasi.


### Lingkungan Pengembangan

- **IDE atau text editor yang disarankan**: 
  - Visual Studio Code
  - Sublime Text
- **Postman**: untuk pengujian API (jika aplikasi ini menggunakan API)

### Koneksi Internet
Diperlukan untuk mengunduh dependensi dan pembaruan yang diperlukan selama proses pengembangan.

---
**Instalasi Project Baru Laravel**

- Membuat Project Laravel Baru
 ```
  composer create-project laravel/laravel apertix_landing
 ```

- Masuk kedalam file :/apertix_landing
 ```
  cd apertix_landing
 ```
