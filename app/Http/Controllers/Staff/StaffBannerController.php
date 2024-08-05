<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaffBannerController extends Controller
{
    public function index()
    {
        $title = "Banner san pham";
        $listBanner = Banner::orderByDesc('trang_thai')->get();
        return view("staff.banner.list", compact("title", "listBanner"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Them banner san pham";

        return view("staff.banner.add", compact("title"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->ismethod('POST')) {
            $param = $request->except('_token');

            if ($request->hasFile('image')) {
                $filePath = $request->file('image')->store('uploads/banner', 'public');
            } else {
                $filePath = null;
            }
            $param['image'] = $filePath;
            Banner::create($param);

            return redirect()->route('staff.banners.list')->with('success', 'Them banner thanh cong !');
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
        $Banner = Banner::findorFail($id);

        return view("staff.banner.edit", compact("title", "Banner"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->isMethod('put')) {
            // Lấy dữ liệu ngoại trừ _token và _method
            $param = $request->except('_token', '_method');

            // Tìm danh mục theo ID
            $Banner = Banner::findOrFail($id);

            // Kiểm tra nếu có file hình ảnh được upload
            if ($request->hasFile('image')) {
                // Xóa file cũ nếu tồn tại
                if ($Banner->image && Storage::disk('public')->exists($Banner->image)) {
                    Storage::disk('public')->delete($Banner->image);
                }
                // Lưu file mới và lấy đường dẫn
                $filePath = $request->file('image')->store('uploads/banner', 'public');
            } else {
                // Nếu không có file mới, giữ nguyên đường dẫn cũ
                $filePath = $Banner->image;
            }
            // Cập nhật đường dẫn hình ảnh vào dữ liệu
            $param['image'] = $filePath;

            // Cập nhật danh mục
            $Banner->update($param);

            // Thông báo thành công và chuyển hướng về danh sách danh mục
            return redirect()->route('staff.banners.list')->with('success', 'Sua banner thanh cong !');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $Banner = Banner::findOrFail($id);
        $Banner->delete();
        if ($Banner->image && Storage::disk('public')->exists($Banner->image)) {
            Storage::disk('public')->delete($Banner->image);
        }
        return redirect()->route('staff.banners.list')->with('success', 'Xoa banner thanh cong !');
    }
}
