<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
{
    // Validasi input
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    // Cek kredensial
    if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
        // Jika berhasil login, redirect ke dashboard
        return redirect()->route('dashboard');
    }

    // Jika gagal login, kembali ke login dengan pesan error
    return back()->withErrors([
        'username' => 'Username atau password salah.',
    ])->withInput($request->only('username'));
}

    // // Menampilkan halaman login
    // public function showLoginForm()
    // {
    //     return view('auth.login');
    // }

    // // Proses login
    // public function login(Request $request)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'username' => 'required|string',
    //         'password' => 'required|string',
    //     ]);

    //     // Cek kredensial
    //     if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
    //         // Jika berhasil, redirect ke dashboard
    //         return redirect()->intended('dashboard');
    //     }

    //     // Jika gagal, kembali ke login dengan pesan error
    //     return back()->withErrors([
    //         'username' => 'Username atau password salah.',
    //     ])->withInput($request->only('username'));
    // }

    // // Logout
    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect()->route('login');
    // }
}

