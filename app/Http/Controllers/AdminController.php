<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash ;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function login(){
        return view('client.pages.login');
    }
    public function check_login(Request $request)
{
    $request->validate([
        'email' => 'required|email|exists:users,email',
        'password' => 'required'
    ]);

    $credentials = $request->only('email', 'password');

    if (auth()->attempt($credentials)) {
        return redirect()->route('home.index');
    }

    return redirect()->back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->withInput($request->except('password'));
}

    
        public function register(){
            return view('client.pages.register');
        }
        public function check_register(Request $request){
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6'
            ]);
        
            $data = $request->only('name', 'email', 'password');
            $data['password'] = bcrypt($data['password']);
        
            User::create($data);

            session()->flash('success', 'Đăng ký thành công!');
        
            return redirect()->route('admin.login');
        }
        


}
