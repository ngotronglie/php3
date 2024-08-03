<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use Illuminate\Http\Request;

class AdminDanhMucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Danh muc san pham";


        $listDanhMuc = DanhMuc::orderByDesc('trang_thai')->get();

        return view("admin.categories.list", compact("title", "listDanhMuc"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Them danh muc san pham";

        return view("admin.categories.add", compact("title"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'hinh_anh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ten_danh_muc' => 'required|string|max:255',
            'trang_thai' => 'required|boolean',
        ]);

        toastr()->success('Thêm danh mục thành công !');
        return redirect()->route('admin.categories.list');

    
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
    public function edit(string $id)
    {
        $title = "Sua danh muc san pham";

        return view("admin.categories.edit", compact("title"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
