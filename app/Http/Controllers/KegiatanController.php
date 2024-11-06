<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function List()
    {
        return view('kegiatan.list');
    }

    public function create()
    {
        return view('kegiatan.create'); // Only for admin
    }

    public function evaluasi()
    {
        return view('kegiatan.evaluasi'); // Only for admin
    }

    public function kritikSaran()
    {
        return view('kegiatan.kritikSaran'); // Only for users
    }
}
