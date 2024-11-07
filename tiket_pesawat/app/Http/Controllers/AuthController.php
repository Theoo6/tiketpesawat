<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup(){
        return view('auth.signup');
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
}