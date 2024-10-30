<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KegiatanController;

// Route untuk redirect root ke halaman login
Route::get('/', function () {
    return redirect()->route('login');
});

// Route untuk form login (GET)
Route::get('/login', function () {
    return view('login');
})->name('login');

// Route untuk menangani login (POST) menggunakan AuthController
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Route untuk dashboard admin (diakses hanya setelah login)
Route::get('/admin/adminDashboard', function () {
    return view('admin.adminDashboard');
})->middleware('auth'); // Pastikan hanya admin yang bisa mengakses

Route::get('/calendar', function () {
    return view('calendar'); // pastikan nama view-nya sesuai
});

Route::get('/admin/listActivity', function () {
    return view('admin.listActivity'); // pastikan nama view-nya sesuai
});

Route::get('/donate', function () {
    return view('donate'); // pastikan nama view-nya sesuai
});

Route::get('/admin/dev', function () {
    return view('admin.devKit'); // pastikan nama view-nya sesuai
});

Route::prefix('kegiatan')->group(function () {
    Route::get('/', [KegiatanController::class, 'index'])->name('kegiatan.list'); // List kegiatan
    Route::get('/create', [KegiatanController::class, 'create'])->name('kegiatan.create'); // Buat kegiatan
    Route::get('/evaluasi', [KegiatanController::class, 'evaluasi'])->name('kegiatan.evaluasi'); // Evaluasi kegiatan
});
// Route::get('/adminDashboard', function () {
//     return view('admin.adminDashboard');
// });
