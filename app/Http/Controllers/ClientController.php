<?php

namespace App\Http\Controllers;

use Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function shop()
    {
        $SanPham = DB::table("san_phams")->where('is_type', 1)->Get();
        $DanhMuc = DB::table("danh_mucs")->where('trang_thai', 1)->Get();
        return view('client.pages.shop', compact("SanPham", "DanhMuc"));
    }
    public function banner()
    {
        DB::table("banners")->Get();
        return view("");
    }
    public function contact()
    {
        return view("");
    }
    public function index()
    {
        $Banner = DB::table("banners")->where("trang_thai", 1)->Get();
        return view("client.includes.main", compact("Banner"));
    }

    public function shop_danh_muc(string $id)
    {
        $SanPham = DB::table("san_phams")->where("danh_muc_id", $id)->where('is_type', 1)->Get();
        $DanhMuc = DB::table("danh_mucs")->where('trang_thai', 1)->Get();
        return view('client.pages.shop', compact("SanPham", "DanhMuc"));
    }
}
