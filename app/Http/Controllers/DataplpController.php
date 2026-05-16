<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dataplp;

class DataplpController extends Controller
{
           public function dataplp()
    {
         $dataplp = Dataplp::all();

         return view('pages.daftar_plp', compact('dataplp'));
    }
}
