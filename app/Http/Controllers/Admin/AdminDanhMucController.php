<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DanhMucResquet;
use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function store(DanhMucResquet $request)
    {
        if($request->ismethod('POST'))
        {
            $param = $request->except('_token');

            if($request->hasFile('hinh_anh'))
            {
                $filePath = $request->file('hinh_anh')->store('uploads/danhmucs', 'public');
            }
            else
            {
                $filePath = null;
            }
            $param['hinh_anh'] = $filePath;
            DanhMuc::create($param);
            toastr()->success('Thêm danh mục thành công !');
            return redirect()->route('admin.categories.list');
        }
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
        $DanhMuc = DanhMuc::findorFail($id);

        return view("admin.categories.edit", compact("title", "DanhMuc"));
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
        $DanhMuc = DanhMuc::findOrFail($id);

        // Kiểm tra nếu có file hình ảnh được upload
        if ($request->hasFile('hinh_anh')) {
            // Xóa file cũ nếu tồn tại
            if ($DanhMuc->hinh_anh && Storage::disk('public')->exists($DanhMuc->hinh_anh)) {
                Storage::disk('public')->delete($DanhMuc->hinh_anh);
            }
            // Lưu file mới và lấy đường dẫn
            $filePath = $request->file('hinh_anh')->store('uploads/danhmucs', 'public');
        } else {
            // Nếu không có file mới, giữ nguyên đường dẫn cũ
            $filePath = $DanhMuc->hinh_anh;
        }
        // Cập nhật đường dẫn hình ảnh vào dữ liệu
        $param['hinh_anh'] = $filePath;

        // Cập nhật danh mục
        $DanhMuc->update($param);

        // Thông báo thành công và chuyển hướng về danh sách danh mục
        toastr()->success('Cập nhật danh mục thành công!');
        return redirect()->route('admin.categories.list');
    }

    // Nếu phương thức không phải PUT, có thể trả về lỗi hoặc redirect
    return redirect()->back()->withErrors(['message' => 'Yêu cầu không hợp lệ']);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
