<?php

namespace App\Http\Controllers;


use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanPhamController extends Controller
{


    public $san_phams;
    public function __construct()
    {
        $this->san_phams = new SanPham();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ListSanPham = $this->san_phams->getAllSanPham();
        // dd($ListSanPham);

        // goi den view de hien thi ra

        return view("admin.product.list-product", ["listSanPham"=> $ListSanPham]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listDanhMuc = DB::table("danh_muc")->select("*")->get();
        return view("admin.product.add-product" , ['danh_mucs' => $listDanhMuc]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // xu ly van de post du lieu nen
        if($request->hasFile('image')){
            // neu co anh thi 
            $filename = $request->file('image')->store('uploads/sanpham', 'public');
        }else{
            $filename = null; 
        }
        $dataInsert = [
            'image' => $filename,
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'createdAt' => $request->createdAt,
            'description' => $request->description,
            'Categories' => $request->Categories,

        ];
        // dd($dataInsert);

        $this ->san_phams->createSanPham( $dataInsert);
        return redirect()->route('sanpham.index');

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
        //
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
