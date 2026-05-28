<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    public $timestamps = false;
    protected $fillable = [
        'nip',
        'nama',
        'jabatan',
        'foto',
    ];

    public function academicBackgrounds()
    {
        return $this->hasMany(AcademicBackground::class);
    }
//     protected $casts = [
//     'nip' => 'integer',
// ];
}
