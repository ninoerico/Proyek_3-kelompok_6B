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

Route::get('/forgotPassword', function () {
    return view('forgotPassword');
})->name('forgot.password');

Route::post('/forgotPassword', [AuthController::class, 'forgotPassword'])->name('forgot.password.submit');

Route::get('/signUp', function () {
    return view('signUp');
})->name('sign.up');

Route::post('/signUp', [AuthController::class, 'signUp'])->name('sign.up.submit');

// Admin-only routes
Route::prefix('admin')->middleware('role:admin')->group(function () {
    Route::get('/adminDashboard', function () {
        return view('admin.adminDashboard');
    })->name('admin.dashboard');

    Route::get('/listActivity', function () {
        return view('admin.listActivity');
    });

    Route::get('/createActivity', function () {
        return view('admin.createActivity');
    });
});

// Kegiatan routes
Route::prefix('kegiatan')->group(function () {
    Route::get('/create', [KegiatanController::class, 'create'])->middleware('role:admin')->name('kegiatan.create');
    Route::get('/evaluasi', [KegiatanController::class, 'evaluasi'])->middleware('role:admin')->name('kegiatan.evaluasi');
});

// Kritik Saran - only for users
Route::get('/kritikSaran', [KegiatanController::class, 'kritikSaran'])->middleware('role:user')->name('kritik.saran');

// User Dashboard route
Route::get('/user/userDashboard', function () {
    return view('user.userDashboard');
})->middleware('role:user')->name('user.dashboard');

