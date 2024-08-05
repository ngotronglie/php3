<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; // Sửa lỗi import
use Yoeunes\Toastr\Facades\Toastr; // Đảm bảo sử dụng Facade của Toastr

class AuthController extends Controller
{
    // đăng nhập
    public function ShowViewLogin()
    {
        return view("client.pages.login");
    }

    public function LoginRequest(Request $request)
    {
        // Xác thực thông tin người dùng
        $credentials = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string'
        ]);

        // Thử đăng nhập
        if (Auth::attempt($credentials)) {
            // Lấy thông tin người dùng hiện tại
            $user = Auth::user();
            flash()->success('đăng nhập thành công');
            // Chuyển hướng người dùng theo vai trò
            if ($user->role == User::ROLE_ADMIN) {
                return redirect()->intended('/admin')->with('success', 'đăng nhập thành công');
            } else if ($user->role == User::ROLE_STAFF) {
                return redirect()->intended('/staff')->with('success', 'đăng nhập thành công');
            } else if ($user->role == User::ROLE_USER) {
                return redirect()->intended('/')->with('success', 'đăng nhập thành công');
            }

            // Mặc định chuyển hướng về trang chính
            return redirect()->intended('/')->with('success', 'đăng nhập thành công');
        }

        // Xử lý khi thông tin đăng nhập không chính xác
        return redirect()->back()->withErrors(['email' => 'Thông tin đăng nhập không chính xác']);
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

        $user = User::create($data);
        Auth::login($user);



        return redirect()->intended('/')->with('success', 'đăng kí thành công');
    }

    // đăng xuất
    public function logout()
    {
        Auth::logout();


        return redirect()->intended('/')->with('success', 'đăng xuất thành công');
    }
}
