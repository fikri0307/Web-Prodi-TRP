<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';

    protected $fillable = [
        'nama',
        'deskripsi_singkat',
        'deskripsi_lengkap',
        'gambar',
        'luas_area',
        'kapasitas_mahasiswa',
        'status_operasional',
    ];
}
