<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadeAuth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
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
        return view('auth.regiester');
    }

    public function authregister(Request $request) {
        $password = Hash::make($request->password);
        Users::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => $password,
            'email' => $request->email,
        ]);
    }

    public function logout() {
        
    }
}

