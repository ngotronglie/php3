<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SanPhamRequest;
use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;

class AdminSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Danh sách san pham";
        $DanhSachSanPham = SanPham::orderByDesc('is_pype')->get();
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
        // Kiểm tra dữ liệu nhận được
        // dd($request->all());
        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            // chuyen doi gia tri check box thanh boolean
            $params['is_new'] = $request->has('is_new') ? 1 : 0;
            $params['is_hot'] = $request->has('is_hot') ? 1 : 0;
            $params['is_hot_deal'] = $request->has('is_hot_deal') ? 1 : 0;
            $params['is_show_home'] = $request->has('is_show_home') ? 1 : 0;
            // xu li anh 
            if ($request->hasFile('hinh_anh')) {
                $params['hinh_anh'] = $request->file('hinh_anh')->store('uploads/sanpham', 'public');
            } else {
                $params['hinh_anh'] = null;
            }
            // dd($params);
            $SanPham = SanPham::create($params);

            // lay id san pham vua them de them album
            $sanphamId = $SanPham->id;

            if ($request->hasFile('list_hinh_anh')) {
                foreach ($request->file('list_hinh_anh') as $image) {
                    if ($image) {
                        $path = $image->store('uploads/album/id_' . $sanphamId, 'public');
                        $SanPham->hinhAnhSanPham()->create(
                            [
                                'san_pham_id' => $sanphamId,
                                'hinh_anh' => $path,
                            ]
                        );
                    }
                }
            }
            toastr()->success('Them san pham thanh cong !');
            return redirect()->route('admin.products.list');
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
        $title = "Sua san pham " . $id;
        return view("admin.product.edit", compact("title"));
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
