<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dataplp extends Model
{
    protected $table = 'dataplp';
    public $timestamps = false;
    protected $fillable = [
        'nip',
        'nama',
        'jabatan',
        'foto',
    ];
}
