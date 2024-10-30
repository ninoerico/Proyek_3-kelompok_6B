<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


Route::get('/profile', function () {
    return view('profile');
})->name('profile');
// Route::get('/adminDashboard', function () {
//     return view('admin.adminDashboard');
// });