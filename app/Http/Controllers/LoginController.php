<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login.index', ['title' => 'Login!']);
    }

    public function authenticate(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required|min:4',
            'password' => 'required'
        ]);

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('erorLogin', 'Username/Password anda salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->regenerate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
