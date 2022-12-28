<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{
    public function index()
    {
        return view('Login.index', ['title' => 'CRUD | Login!']);
    }

    public function authenticate(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required|min:4',
            'password' => 'required'
        ]);

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            return redirect()->intended('/dasboard');
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

    public function updatePassword(Request $request, $id)
    {
        $model = User::find($id);
        $data = ['password' => 'required|min:3|max:5'];
        $validatedData = $request->validate($data);
        User::where('password', $model->password)
            ->update($validatedData);
        $pass = Hash::make($request->password);
        $model->password = $pass;
        $model->save();
        // @dd($model);
        return redirect('/account')->with('status', 'Password Has Been Update');
    }

    public function deleteAccount($id)
    {
        $model = User::find($id);
        $model->delete();
        return redirect('/')->with('status', 'Account Has Been Deleted');
    }

}
