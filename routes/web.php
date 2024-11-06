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
})->middleware('auth');

Route::get('/calendar', function () {
    return view('calendar');
});

// Route::get('/admin/listActivity', function () {
//     return view('admin.listActivity');
// });

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/admin/dev', function () {
    return view('admin.devKit');
});

Route::get('/signup', function () {
    return view('signUp');
});

Route::get('admin/listActivity', [KegiatanController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::resource('kegiatan', KegiatanController::class);
});
// Route::get('/adminDashboard', function () {
//     return view('admin.adminDashboard');
// });