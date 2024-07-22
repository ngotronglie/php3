<?php
namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;



class Product extends Authenticatable
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'image',
        'price',
        'description',
        'status',
        'categories_id',
        'created_at',
        'updated_at',
    ];
    public $timestamps = false;


    public function loadDataProduct(){
        // chua co tim kiem ma chi co phan trang, co truy van
        // ORM
        $query = Product::query()->latest('id')   // sap xep tu duuoi len tren 
        ->paginate(10); // 10 ban ghi 1 trang
        return $query;
    }


}
