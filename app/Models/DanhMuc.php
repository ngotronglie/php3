<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DanhMuc extends Model
{
    use HasFactory;



     // Xác định tên bảng
     protected $table = 'danh_muc';

     // Nếu bạn cần bảo vệ các thuộc tính cụ thể, hãy thêm điều này:
     protected $fillable = ['name', 'description'];

     
    /**
     * cach 1 : su dung query buider
     */


     public function getAll()
     {
        $danh_mucs = DB::table("danh_muc")->select("*")->get();
        return $danh_mucs;
     }
}
