<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SanPhamRequest;
use App\Models\DanhMuc;
use App\Models\HinhAnhSanPham;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Danh sách san pham";
        $DanhSachSanPham = SanPham::orderByDesc('is_type')->get();
        return view("admin.product.list", compact("title", "DanhSachSanPham"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Them san pham";
        $list_danh_muc = DanhMuc::where('trang_thai', true)
            ->orderByDesc('created_at') // Sắp xếp theo ngày tạo giảm dần
            ->get();

        return  view("admin.product.add", compact("title", "list_danh_muc"));
    }

    /**
     * Store a newly created resource in storage.
     */
    // Trong controller
    public function store(SanPhamRequest $request)
    {
        // Kiểm tra giá trị request
        // dd($request->all());

        if ($request->isMethod('POST')) {
            $params = $request->except('_token');

            // Chuyển đổi giá trị checkbox thành boolean
            $checkboxFields = ['is_type', 'is_new', 'is_hot', 'is_hot_deal', 'is_show_home'];
            foreach ($checkboxFields as $field) {
                $params[$field] = $request->has($field) ? 1 : 0;
            }

            // Kiểm tra giá trị params
            // dd($params);

            // Xử lý ảnh đại diện
            if ($request->hasFile('hinh_anh')) {
                $params['hinh_anh'] = $request->file('hinh_anh')->store('uploads/sanpham', 'public');
            } else {
                $params['hinh_anh'] = null;
            }

            // Tạo sản phẩm mới
            $SanPham = SanPham::create($params);

            // Lấy ID sản phẩm vừa thêm để thêm album
            $sanphamId = $SanPham->id;

            // Xử lý danh sách ảnh trong album
            if ($request->hasFile('list_hinh_anh')) {
                foreach ($request->file('list_hinh_anh') as $image) {
                    if ($image) {
                        $path = $image->store('uploads/album/id_' . $sanphamId, 'public');
                        $SanPham->hinhAnhSanPham()->create([
                            'san_pham_id' => $sanphamId,
                            'hinh_anh' => $path,
                        ]);
                    }
                }
            }


            return redirect()->route('admin.products.list')->with('success', 'Product add successfully.');
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
    public function edit($id)
    {

        $SanPhamEdit = SanPham::findOrFail($id);
        $list_danh_muc = DanhMuc::where('trang_thai', true)
            ->orderByDesc('created_at') // Sắp xếp theo ngày tạo giảm dần
            ->get();
        $title = 'Chỉnh sửa sản phẩm';

        return view('admin.product.edit', compact('SanPhamEdit', 'list_danh_muc', 'title'));
    }

    // Cập nhật sản phẩm
    public function update(SanPhamRequest $request, $id)
    {
        $SanPhamEdit = SanPham::findOrFail($id);
        $input = $request->all();

        // Update product
        $SanPhamEdit->update([
            'ma_san_pham' => $input['ma_san_pham'],
            'ten_san_pham' => $input['ten_san_pham'],
            'gia_san_pham' => $input['gia_san_pham'],
            'gia_khuyen_mai' => $input['gia_khuyen_mai'],
            'danh_muc_id' => $input['danh_muc_id'],
            'so_luong' => $input['so_luong'],
            'ngay_nhap' => $input['ngay_nhap'],
            'is_type' => $request->has('is_type'),
            'is_new' => $request->has('is_new'),
            'is_hot' => $request->has('is_hot'),
            'is_hot_deal' => $request->has('is_hot_deal'),
            'is_show_home' => $request->has('is_show_home'),
            'hinh_anh' => $request->file('hinh_anh') ? $request->file('hinh_anh')->store('public/images') : $SanPhamEdit->hinh_anh,
            'mo_ta_ngan' => $input['mo_ta_ngan'],
            'noi_dung' => $input['noi_dung'],
        ]);

        // Handle album images
        $existingImages = $SanPhamEdit->hinhAnhSanPham->pluck('id')->toArray();
        $uploadedImages = [];
        foreach ($request->file('list_hinh_anh', []) as $key => $file) {
            if ($file instanceof \Illuminate\Http\UploadedFile) {
                $uploadedImages[] = $file->store('public/images');
            }
        }

        // Delete images that are no longer in the list
        $deletedImageIds = json_decode($request->input('deleted_images'), true);
        if ($deletedImageIds) {
            foreach ($deletedImageIds as $deletedId) {
                if (($index = array_search($deletedId, $existingImages)) !== false) {
                    unset($existingImages[$index]);
                    HinhAnhSanPham::where('id', $deletedId)->delete();
                }
            }
        }

        // Insert new images into the database
        foreach ($uploadedImages as $uploadedImage) {
            HinhAnhSanPham::create([
                'san_pham_id' => $SanPhamEdit->id,
                'hinh_anh' => $uploadedImage,
            ]);
        }

        return redirect()->route('admin.products.list')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Tìm sản phẩm hoặc báo lỗi nếu không tìm thấy
        $SanPham = SanPham::query()->findOrFail($id);

        // Xóa hình ảnh đại diện nếu tồn tại và không null
        if (!empty($SanPham->hinh_anh) && Storage::disk('public')->exists($SanPham->hinh_anh)) {
            Storage::disk('public')->delete($SanPham->hinh_anh);
        }

        // Xóa từng hình ảnh trong album nếu tồn tại
        if ($SanPham->hinhAnhSanPham) {
            foreach ($SanPham->hinhAnhSanPham as $hinhAnh) {
                if (!empty($hinhAnh->path) && Storage::disk('public')->exists($hinhAnh->path)) {
                    Storage::disk('public')->delete($hinhAnh->path);
                }
                $hinhAnh->delete();
            }
        }

        // Xóa thư mục album nếu tồn tại
        $path = 'uploads/album/id_' . $id;
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->deleteDirectory($path);
        }

        // Xóa sản phẩm
        $SanPham->delete();

        // Hiển thị thông báo thành công
        toastr()->success('Xóa sản phẩm thành công!');
        return redirect()->route('admin.products.list');
    }
}
