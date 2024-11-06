<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KegiatanController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/admin/adminDashboard', function () {
    return view('admin.adminDashboard');
})->middleware('auth');

Route::get('/calendar', function () {
    return view('calendar');
});


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

Route::put('/kegiatan/update/{id}', [KegiatanController::class, 'update'])->name('kegiatan.updates');


Route::prefix('admin')->group(function () {
    Route::resource('listActivity', KegiatanController::class);
});