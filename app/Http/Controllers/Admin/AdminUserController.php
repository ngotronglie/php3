<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Danh sach user";
        $User = User::all();
        return view("admin.user.list", compact("title", "User"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.add', [
            'title' => 'Create User'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:5',
            'role' => 'required|integer',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.users.list')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // Phương thức hiển thị form chỉnh sửa người dùng
    // Phương thức hiển thị form chỉnh sửa vai trò người dùng
    public function edit(string $id)
    {
        $title = "Sua danh muc san pham";
        $User = User::findorFail($id);

        return view("admin.user.edit", compact("title", "User"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Kiểm tra phương thức của request là PUT
        if ($request->isMethod('put')) {
            // Lấy dữ liệu ngoại trừ _token và _method
            $param = $request->except('_token', '_method');

            // Tìm danh mục theo ID
            $User = User::findOrFail($id);

            // Kiểm tra nếu có file hình ảnh được upload


            // Cập nhật danh mục
            $User->update($param);

            return redirect()->route('admin.users.list')->with('success', 'User đã được cập nhật');
        }

        // Nếu phương thức không phải PUT, có thể trả về lỗi hoặc redirect
        return redirect()->back()->withErrors(['message' => 'Yêu cầu không hợp lệ']);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $User = User::findOrFail($id);
        $User->delete();

        return redirect()->route('admin.users.list')->with('success', 'Xoa user thanh cong !');
    }
}
