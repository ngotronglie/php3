<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detailSanPham(string $id)
    {
        $sanPham = SanPham::find($id);
        $listSanPham = SanPham::where('id', '!=', $sanPham->id)->get();
        return view('client.pages.product-detail', compact('sanPham', 'listSanPham'));
    }
}
