# PHP Developer Test - Klinik Management System

Proyek ini adalah aplikasi manajemen klinik berbasis **Laravel 10** dan **Filament PHP (v3)**. Aplikasi ini digunakan untuk mengelola data pasien, pemeriksaan, resep obat, stok obat, dan beberapa entitas lainnya melalui dua panel utama:

- **Superadmin Panel** – untuk akses semua fitur dan manajemen global
- **Panel Apotek & lainnya** – untuk akses khusus sesuai role/module

---

## 🚀 Fitur Utama

- Manajemen pasien dan pendaftaran pemeriksaan
- Rekam hasil pemeriksaan (vital sign, diagnosis, tindakan)
- Modul resep obat dan stok obat
- Panel multi-role dengan Filament v3
- Tampilan data interaktif dengan **Filament Table**, **Form**, dan **Infolist**
- Validasi stok obat otomatis saat membuat resep

---

## ⚙️ Instalasi

Pastikan kamu sudah menginstal PHP ≥ 8.1, Composer, dan database MySQL atau PostgreSQL.

```bash
# 1. Clone repositori
git clone https://github.com/muhamadfazriannafi/php_developer_test.git
cd php_developer_test

# 2. Instal dependensi Laravel & Filament
composer install

# 3. Salin file .env dan konfigurasi
cp .env.example .env

# 4. Generate key dan migrasi database
php artisan key:generate
php artisan migrate --seed

# 5. Jalankan server lokal
php artisan serve
