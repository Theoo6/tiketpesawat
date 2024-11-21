<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function storeSignup(Request $request){
        $request->validate([
            'name' => 'required',
            'email'=> 'required|unique:users',
            'password'=> 'required',
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)
        ]);

        return redirect()->back()->with('success','Berhasil!');
    }

    public function login()
    {
        return view('auth.login');
    }


}
