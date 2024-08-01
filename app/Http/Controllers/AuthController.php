<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // đăng nhập

    public function ShowViewLogin()
    {
        return view("client.pages.login");
    }

    public function LoginRequest(Request $request)
    {
        $user = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string'
        ]);
        // dd($user);
        if(Auth::attempt($user)) {
            return redirect()->intended('/');
        }
        return redirect()->back()->withErrors(['email'=> 'Thong tin dang nhap khong chinh xac']);
    }
    // đăng kí
    public function ShowviewRegister()
     {
        return view("client.pages.register");
     }
     public function RegisterRequest(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|max:255'
        ]);
        $data['password'] = bcrypt($data['password']);

        $user = \App\Models\User::create($data);
        Auth::login($user);
        return redirect()->intended('/');

        // dd($data);


    }
    // đăng xuất


    public function logout()
    {
        Auth::logout();
        return redirect()->intended('/');
    }
}
