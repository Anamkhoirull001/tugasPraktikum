<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Register.index', [
            'title' => 'CRUD | Register'
        ]);
    }

    public function store(Request $request)
    {
        $register = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:4|max:20|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|max:100'
        ]);

        // $register['password'] = bcrypt($register['password']); // mengenkripsi password opsi 1 sama saja dengan opsi ke 2
        $register['password'] = Hash::make($register['password']); // mengenkripsi password opsi 2

        User::create($register);

        return redirect('login')->with('success', 'Register successfull! pelase Login now!');
    }

    // public function show()
    // {
    //     dd("berhasil");
    // }
}
