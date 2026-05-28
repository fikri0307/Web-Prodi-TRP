<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicBackground extends Model
{
    protected $table = 'academic_backgrounds';
    protected $fillable = [
        'dosen_id',
        'degree',
        'institution',
    ];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}
