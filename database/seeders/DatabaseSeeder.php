<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'),
            ]
        );

        DB::table('academic_backgrounds')->delete();
        DB::table('dosen')->delete();
        DB::table('dataplp')->delete();
        DB::table('galeris')->delete();
        DB::table('berita')->delete();
        DB::table('fasilitas')->delete();

        $faker = \Faker\Factory::create('id_ID');

        // Data Realistis Laboratorium
        $labNames = [
            'Laboratorium Kimia Pangan',
            'Laboratorium Mikrobiologi Pangan',
            'Laboratorium Rekayasa Proses Pangan',
            'Laboratorium Pengujian Mutu Pangan',
            'Laboratorium Sensori dan Pengembangan Produk'
        ];

        // Seeder Fasilitas (5)
        foreach ($labNames as $labName) {
            DB::table('fasilitas')->insert([
                'nama' => $labName,
                'deskripsi_singkat' => 'Laboratorium yang menunjang kegiatan praktikum dan penelitian mahasiswa.',
                'deskripsi_lengkap' => $faker->paragraph(3),
                'gambar' => 'lab_rpl.png',
                'luas_area' => $faker->numberBetween(50, 150) . ' m2',
                'kapasitas_mahasiswa' => (string) $faker->numberBetween(20, 50),
                'status_operasional' => 'Aktif',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        // Data Realistis Judul Berita (Max 50 char)
        $judulBerita = [
            'Mahasiswa TRP Kembangkan Pangan Fungsional',
            'Kunjungan Industri TRP ke Pabrik Susu',
            'Seminar Nasional Keamanan Pangan 2026',
            'Dosen TRP Terbitkan Jurnal Internasional',
            'Pelatihan Sertifikasi Halal Lulusan TRP',
            'Mahasiswa TRP Juara 1 Inovasi Pangan',
            'Pengenalan Alat Spektrofotometer Lab Kimia',
            'Workshop Kewirausahaan Pangan Lokal',
            'Kerjasama TRP & Industri Pangan Nasional',
            'Pendaftaran Praktikum Semester Ganjil'
        ];

        // Seeder Berita (10)
        foreach ($judulBerita as $judul) {
            DB::table('berita')->insert([
                'judul' => $judul,
                'isi' => $faker->paragraphs(3, true),
                'gambar' => 'berita_1.png',
                'tanggal_dibuat' => $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
                'kategori' => $faker->randomElement(['Informasi umum', 'Akademik', 'Kemahasiswaan']),
            ]);
        }

        // Seeder Dosen (5)
        for ($i = 0; $i < 5; $i++) {
            $dosenId = DB::table('dosen')->insertGetId([
                'nip' => $faker->numerify('198#######200#####'),
                'nama' => $faker->title() . ' ' . $faker->name() . ', M.Kom.',
                'jabatan' => $faker->randomElement(['Lektor', 'Asisten Ahli', 'Lektor Kepala']),
                'foto' => 'budi.png',
            ]);

            DB::table('academic_backgrounds')->insert([
                'dosen_id' => $dosenId,
                'degree' => 'S2 Teknik Informatika',
                'institution' => 'Universitas ' . $faker->city(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        // Seeder Dataplp (5)
        for ($i = 0; $i < 5; $i++) {
            DB::table('dataplp')->insert([
                'nip' => $faker->numerify('199#######201#####'),
                'nama' => $faker->name() . ', S.Kom.',
                'jabatan' => 'PLP Ahli Pertama',
                'foto' => 'andi.png',
            ]);
        }

        // Data Realistis Judul Galeri
        $judulGaleri = [
            'Praktikum Teknologi Pangan Terpadu di Laboratorium Utama',
            'Kunjungan Industri Mahasiswa ke Pabrik Pengolahan Susu Nasional',
            'Seminar Nasional Ketahanan Pangan Berkelanjutan 2025',
            'Lomba Inovasi Olahan Pangan Lokal Tingkat Nasional',
            'Kegiatan Pengabdian Masyarakat Penyuluhan Gizi Balita',
            'Pameran Expo Hasil Karya Inovasi Mahasiswa Teknologi Rekayasa Pangan',
            'Pelatihan Sertifikasi Kompetensi Uji Sensoris Pangan',
            'Penandatanganan MoU dengan Mitra Industri Pangan Terkemuka',
            'Kuliah Tamu Praktisi: Manajemen Ekspor Impor Produk Pertanian',
            'Acara Yudisium dan Pelepasan Lulusan Mahasiswa Angkatan 2022'
        ];

        // Seeder Galeri (10)
        foreach ($judulGaleri as $judul) {
            DB::table('galeris')->insert([
                'judul' => $judul,
                'gambar' => 'galeri_1.png', // Or use a default empty placeholder if applicable
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
