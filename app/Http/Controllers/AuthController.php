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
        'password' => 'required|string',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Jika login berhasil
        $request->session()->regenerate();

        // Redirect ke dashboard admin jika role adalah admin
        if (Auth::user()->role === 'admin') {
            return redirect()->intended('/admin/adminDashboard');
        } else {
            return redirect()->intended('/user/userDashhboard');
        }
    }

    // Jika login gagal
    return back()->withErrors([
        'email' => 'Login gagal. Coba lagi.',
    ]);
}

}

