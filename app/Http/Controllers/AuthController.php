<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadeAuth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() {
        return view('login');
    }

    public function authlogin(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (FacadeAuth::attempt($credentials)) {
            $request->session()->regenerate();
        };
    }

    public function register() {
        return view('auth.register');
    }

    public function authregister(Request $request) {
        $password = Hash::make($request->password);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => $password,
            'email' => $request->email,
        ]);
    }

    public function logout() {
        
    }
}

