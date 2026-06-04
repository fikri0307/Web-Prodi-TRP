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

        DB::table('fasilitas')->insert([
            'nama' => 'Laboratorium Rekayasa Perangkat Lunak',
            'deskripsi_singkat' => 'Lab untuk praktikum rekayasa perangkat lunak',
            'deskripsi_lengkap' => 'Laboratorium ini difasilitasi dengan komputer spesifikasi tinggi untuk menunjang kegiatan belajar mengajar mahasiswa.',
            'gambar' => 'lab_rpl.png',
            'luas_area' => '100 m2',
            'kapasitas_mahasiswa' => '40',
            'status_operasional' => 'Aktif',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('berita')->insert([
            'judul' => 'Pengumuman Perkuliahan',
            'isi' => 'Diberitahukan bahwa perkuliahan semester ganjil akan segera dimulai.',
            'gambar' => 'berita_1.png',
            'tanggal_dibuat' => Carbon::now()->toDateString(),
            'kategori' => 'Akademik',
        ]);

        $dosenId = DB::table('dosen')->insertGetId([
            'nip' => '198001012005011001',
            'nama' => 'Dr. Budi Santoso, M.Kom.',
            'jabatan' => 'Lektor',
            'foto' => 'budi.png',
        ]);

        DB::table('academic_backgrounds')->insert([
            'dosen_id' => $dosenId,
            'degree' => 'S3 Ilmu Komputer',
            'institution' => 'Universitas Indonesia',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('dataplp')->insert([
            'nip' => '199001012015011002',
            'nama' => 'Andi Darmawan, S.Kom.',
            'jabatan' => 'PLP Ahli Pertama',
            'foto' => 'andi.png',
        ]);
    }
}
