<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        if (Hash::check($credentials['password'], User::where('email', $credentials['email'])->first()->password)) { // check if the password is the same as the hashed password
            $request->session()->regenerate(); 
            return redirect()->intended('/dashboard');
        } else {
            // Login failed
        }
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

