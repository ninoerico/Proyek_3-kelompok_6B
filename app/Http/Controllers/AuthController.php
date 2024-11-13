<?php

// app/Http/Controllers/AuthController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string|min:6',
    ], [
        'email.required' => 'Email harus diisi.',
        'email.email' => 'Format email tidak valid.',
        'password.required' => 'Password harus diisi.',
        'password.min' => 'Password harus terdiri dari minimal :min karakter.',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        if (Auth::user()->role === 'admin') {
            return redirect()->intended('/admin/adminDashboard');
        } else {
            return redirect()->intended('/user/userDashboard');
        }
    }

    return back()->withErrors([
        'email' => 'Email tidak terdaftar atau Kata Sandi salah.',
    ]);
}

}

