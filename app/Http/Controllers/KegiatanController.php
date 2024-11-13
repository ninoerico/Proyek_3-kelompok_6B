<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\KategoriKegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatan = Kegiatan::with('kategori')->get();
        $kategori = KategoriKegiatan::all();
        return view('admin.listActivity', compact('kegiatan', 'kategori'));
    }

    public function create()
    {
        $kategori_kegiatan = KategoriKegiatan::all();
        return view('admin.createActivity', compact('kategori_kegiatan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'status' => 'required|boolean',
            'kategori_id' => 'required|exists:kategori_kegiatan,id'
        ]);

        Kegiatan::create($request->all());

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $kategori_kegiatan = KategoriKegiatan::all();

        return view('admin.editActivity', compact('kegiatan', 'kategori_kegiatan'));
    }

    public function update(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'status' => 'required|boolean',
            'kategori_id' => 'required|exists:kategori_kegiatan,id'
        ]);

        $kegiatan->update($request->all());

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->delete();

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil dihapus.');
    }
}
