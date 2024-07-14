<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SanPham extends Model
{
    use HasFactory;


    public function getAllSanPham()
    {
        $san_phams = DB::table("san_pham")
        ->join('danh_muc', 'san_pham.danh_muc_id', '=', 'danh_muc.id')
        ->select("san_pham.*", "danh_muc.name_danh_muc")
        ->orderBy("san_pham.id","desc")
        ->get();

        return $san_phams;
    }
}
