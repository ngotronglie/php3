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

    // xu li them san pham


    public function createSanPham($data){ 
        DB::table("san_pham")->insert(
    [
            'image_san_pham' => $data['image'],
            'name_san_pham' => $data['name'],
            'quantity_san_pham' => $data['quantity'],
            'price_san_pham' => $data['price'],
            'created_at' => $data['createdAt'],
            'description_san_pham' => $data['description'],
            'danh_muc_id' => $data['Categories'],
            ]
        );
    }


    public function getID($id){
        $sanphamGetID = DB::table("san_pham")->select("*")->where("id",$id)->get();
        return $sanphamGetID;
    }

    
}
