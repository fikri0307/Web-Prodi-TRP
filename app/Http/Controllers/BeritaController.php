<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;


class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $beritas = Berita::all();

        
    
        $query = Berita::query();

        // Filter kategori
        if ($request->kategori && $request->kategori != 'semua') {
            $query->where('kategori', $request->kategori);
        }

        // Sort terbaru
        $beritas = $query->orderBy('tanggal_dibuat', 'desc')->get();

        return view('pages.kanal_berita', compact('beritas'));
    }
}
