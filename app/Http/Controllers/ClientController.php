<?php

namespace App\Http\Controllers;

use Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function shop()
    {
        return view("");
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
        $SanPham = DB::table("san_phams")->where('is_type', 1)->Get();

        // dd($Banner);
        // dd($SanPham);
        return view("client.includes.main", compact("Banner", "SanPham"));
    }
}
