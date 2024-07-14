<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
