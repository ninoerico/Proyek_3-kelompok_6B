<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    // Menampilkan daftar kegiatan
    public function index()
    {
        // Logika untuk mendapatkan dan menampilkan data kegiatan
        return view('kegiatan.list'); // Arahkan ke view 'kegiatan.list'
    }

    // Menampilkan form untuk membuat kegiatan
    public function create()
    {
        return view('kegiatan.create'); // Arahkan ke view 'kegiatan.create'
    }

    // Menampilkan halaman evaluasi kegiatan
    public function evaluasi()
    {
        return view('kegiatan.evaluasi'); // Arahkan ke view 'kegiatan.evaluasi'
    }
}
