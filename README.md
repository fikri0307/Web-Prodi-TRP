# Web Program Studi (Prodi) - Teknologi Rekayasa Perangkat Lunak (TRP)

Selamat datang di repositori web Program Studi Teknologi Rekayasa Perangkat Lunak. Aplikasi ini dikembangkan menggunakan framework **Laravel**. 

Aplikasi ini berfungsi untuk mengelola dan menampilkan informasi mengenai program studi, berita dan informasi, profil dosen, data PLP, serta fasilitas laboratorium yang ada di program studi.

---

## 🚀 Fitur Utama
- **Profil Prodi**: Menampilkan visi, misi, dan informasi umum.
- **Berita & Informasi**: Manajemen dan publikasi berita terbaru untuk mahasiswa dan publik.
- **Data Dosen & PLP**: Informasi detail mengenai staf akademik, background pendidikan, dan posisinya.
- **Fasilitas & Laboratorium**: Detail fasilitas lab beserta kapasitas dan operasionalnya.
- **Admin Panel**: Menggunakan Filament (jika tersedia) untuk kemudahan manajemen konten.

---

## 🛠️ Prasyarat (Prerequisites)

Sebelum menjalankan aplikasi ini, pastikan sistem Anda memiliki hal-hal berikut:
- **PHP** (Minimal versi 8.2 atau yang disyaratkan oleh Laravel 11+)
- **Composer** (Untuk mengelola dependensi PHP)
- **Node.js & npm** (Untuk mengelola asset frontend/TailwindCSS)
- **MySQL** atau database MariaDB/PostgreSQL yang didukung
- **Git** (Opsional, untuk clone repositori)

---

## ⚙️ Panduan Setup & Instalasi (Setup Guide)

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek ini di perangkat lokal (local environment):

### 1. Clone Repositori
```bash
git clone https://github.com/fikri0307/Web-Prodi-TRP.git
cd Web-Prodi-TRP
```

### 2. Install Dependensi PHP
Jalankan Composer untuk mengunduh semua paket yang dibutuhkan oleh Laravel:
```bash
composer install
```

### 3. Install Dependensi Frontend (NPM)
Untuk memproses asset seperti Tailwind CSS:
```bash
npm install
```

### 4. Setup File Environment
Salin file konfigurasi bawaan ke `.env`:
```bash
cp .env.example .env
```
*(Pengguna Windows bisa menggunakan `copy .env.example .env` atau copy-paste manual)*

Setelah itu, **buka file `.env`** dan atur konfigurasi database Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_anda
DB_USERNAME=root
DB_PASSWORD=password_database_anda
```

### 5. Generate Application Key
Jalankan perintah ini agar aplikasi dapat mengenkripsi sesi dan data lainnya dengan aman:
```bash
php artisan key:generate
```

### 6. Migrasi & Seed Database
Aplikasi ini sudah dilengkapi dengan seeder untuk memudahkan setup awal data (Dosen, PLP, Berita, Fasilitas).
Jalankan perintah berikut untuk merender tabel dan mengisi data awal:
```bash
php artisan migrate:fresh --seed
```

### 7. Buat Symbolic Link (Storage)
Untuk memastikan gambar/foto (dari fasilitas, dosen, dll) yang diunggah dapat diakses dari browser, jalankan:
```bash
php artisan storage:link
```

---

## ▶️ Menjalankan Aplikasi

Anda membutuhkan 2 terminal terpisah untuk menjalankan aplikasi dengan sempurna:

**Terminal 1:** (Untuk menjalankan server PHP)
```bash
php artisan serve
```
Aplikasi akan dapat diakses di: [http://localhost:8000](http://localhost:8000)

**Terminal 2:** (Untuk melakukan *build* atau *hot-reload* asset frontend TailwindCSS)
```bash
npm run dev
```

---

## 🤝 Kontribusi

Jika Anda ingin berkontribusi pada repositori ini:
1. **Fork** repositori ini
2. Buat branch fitur baru (`git checkout -b fitur-baru`)
3. **Commit** perubahan Anda (`git commit -m 'Menambahkan fitur baru'`)
4. **Push** ke branch Anda (`git push origin fitur-baru`)
5. Buat **Pull Request**

---

<p align="center">
  Dibuat dengan ❤️ untuk Program Studi Teknologi Rekayasa Perangkat Lunak
</p>
