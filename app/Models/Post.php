<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // // dieu chinh ket noi den bang posts 
    // protected $table = 'posts';
    // protected $primaryKey = 'ten khoa chinh khac [id]';
    // // doi kieu du lieu cho khoa chinh moi
    // protected $keyType = 'kieu du lieu moi [string]';

    // // tat tang tu dong cho khoa chinh 
    // protected $incrementing = false;

    // // điều chỉnh connect db
    // protected $connection = 'ten ket noi[mysql]';
}
