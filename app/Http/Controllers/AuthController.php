<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadeAuth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

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
            $user = $request->session()->regenerate(); 
            Alert::success('Success Title', 'Login Berhasil');
            return view('user/dashboard');
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

    public function logout(Request $request) {
        FacadeAuth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

