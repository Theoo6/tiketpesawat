<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function storeSignup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->with('success', 'Berhasil!');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function storeLogin(Request $request)
    {
        // Validasi data yang diterima dari form login
        $request->validate([
            'email' => 'required|email',  // pastikan email valid
            'password' => 'required',     // password wajib diisi
        ]);

        // Mencoba login menggunakan kredensial yang diberikan
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            // Login berhasil, arahkan ke halaman home
            return redirect()->route('halaman')->with('success', 'Login berhasil!');
        }

        // Jika login gagal, beri pesan kesalahan
        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ]);
    }
}
