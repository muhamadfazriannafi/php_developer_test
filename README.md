# PHP Developer Test - Klinik Management System

Repository ini berisi aplikasi Klinik sederhana yang menggunakan **Laravel** dengan **Filament** sebagai admin panel untuk pengelolaan data pasien, obat, tindakan, dan resep.

---

## Instalasi dan Setup Filament

1. Clone repo ini  
    ```bash
    git clone https://github.com/muhamadfazriannafi/php_developer_test.git
    cd php_developer_test
    ```

2. Install dependencies Laravel  
    ```bash
    composer install
    ```

3. Salin file `.env.example` menjadi `.env`  
    ```bash
    cp .env.example .env
    ```

4. Sesuaikan konfigurasi database pada file `.env`  
    Contoh konfigurasi:
    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database
    DB_USERNAME=user_database
    DB_PASSWORD=password_database
    ```

5. Jalankan migrasi dan seeder database  
    ```bash
    php artisan migrate --seed
    ```

6. Jalankan server Laravel  
    ```bash
    php artisan serve
    ```

7. Akses panel Filament di browser:  
    1. [localhost:8000/pendaftaran](http://localhost:8000/pendaftaran) (Pendaftaran)
    2. [localhost:8000/apotek](http://localhost:8000/apotek) (Apotek)
    3. [localhost:8000/perawat](http://localhost:8000/perawat) (Perawat)
    4. [localhost:8000/dokter](http://localhost:8000/dokter) (Dokter)
    5. [localhost:8000/superadmin](http://localhost:8000/superadmin) (Superadmin)

---

## Alur Pengisian Data Berdasarkan Panel

Aplikasi ini terdiri dari beberapa panel sesuai peran dan fungsi dalam klinik. Berikut penjelasan alur pengisian data:


### a. Pasien (Pendaftaran)
Digunakan untuk memasukkan data pasien baru, seperti nama, tanggal lahir, alamat, dan kontak.

### b. Obat (Apotek)
Mengelola data obat yang tersedia di apotek, meliputi nama obat, jenis, stok, dan informasi terkait.

### c. Pasien Daftar (Pendaftaran)
Mendaftarkan pasien ke kunjungan atau pemeriksaan tertentu, menghubungkan pasien dengan jadwal atau layanan klinik.

### d. Vital Sign (Perawat)
Perawat memasukkan data tanda-tanda vital pasien seperti tekanan darah, suhu tubuh, denyut nadi, dan lainnya.

### e. Tindakan (Dokter)
Dokter mencatat tindakan medis yang diberikan kepada pasien selama kunjungan, termasuk diagnosa, prosedur, dan catatan medis lain.

### f. Resep Obat (Apotek)
Apoteker mengelola resep obat yang diberikan oleh dokter, berisi daftar obat yang diresepkan beserta dosis dan aturan pakai.

### g. Hasil Pemeriksaan (Pendaftaran)
Menampilkan hasil pemeriksaan pasien selama kunjungan, termasuk vital sign, tindakan, dan resep obat, untuk monitoring dan review data pasien.

### h. Superadmin (Superadmin)
Superadmin mengelola seluruh data dan pengguna dalam sistem.

---

Terima kasih telah menggunakan aplikasi ini. Jika ada pertanyaan atau kontribusi, silakan buat issue atau pull request.

Developed by Muhamad Fazri Annafi
