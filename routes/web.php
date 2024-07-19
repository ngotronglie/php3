<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hihi', function () {
    return view('index');
});
Route::get('/categories', function () {
        //=================================================================
   $data = DB::table('categories')->get();  // lấy ra tất cả bản ghi trong bảng categories
        //    $data = DB::table('categories')->first(); // lọc ra bản ghi đầu tiên trong bảng categories

        // $data = DB::table('categories')
        //     -> where('id', 1)->get(); // lấy category co id = 1 trong bảng categories
            // ->toRawSql(); xem dữ liệu sql


        // $data  = DB::table('categories')
        //     ->select('id', 'name')->get();  // chỉ lấy cột id và name show ra



        // like====================================================================

        // $data = DB::table('categories')
        //     ->where('name', 'like', '%lie%')->get();    

        // toán tử  =====================================================================

        // $data = DB::table('categories')
        //     ->where('id', '>=', 2)->get();   // => id =2

        // ==========================================================================================
        // and

            //   c1: 

            // $data = DB::table('categories')
            //     ->where('id', '>=', 1)
            //     ->where('name', 'like', '%lie%')->get();
            // c2:
                // $data = DB::table('categories')
                // ->where([
                //     ['id', '>=', 1],
                //     ['name', 'like', '%lie%']
                // ])->get();

        //==============================================

        // or 

            // $data = DB::table('categories')
            //     -> where('id', '>=', 3)
            //     ->orWhere('name', 'like', '%a%')->get()->toArray();

            // ===========================================================================================================

        // whereBetween , whereNotBetween 
        // whereDate , whereMonth , whereYear , whereTime , whereDay 

            // ===========================================================================================================

        // join , leftjoin , rightjoin 

        // $data = DB::table('categories')
        //     ->join('products', 'categories.id', '=', 'products.categories_id')
        //     // ->select('categories.name as category_name', 'products.name as product_name')
        //     ->get();
            //---------------------------------------------------------------------
        // $data = DB::table('categories')
        // ->leftjoin('products', 'categories.id', '=', 'products.categories_id')
        // select('categories.name as category_name', 'products.nameelect('categories.*', 'products.name_product as product_name')
        // ->get();
            //-------------------------------------
        // $data = DB::table('categories')
        // ->rightJoin('products', 'categories.id', '=', 'products.categories_id')
        // -> select('categories.*', 'products.name_product as product_name')
        // ->get();




    dd($data);
    return $data;
});

Route::get('/post', function () {

    // truy vấn lấy tất 

    // $data = App\Models\Post::all(); 
    // $data = App\Models\Post::get()->toArray();
    $data = App\Models\Post::query()->get()->toArray(); // có query thì sài như query buider
    dd($data);

    return view('index');
});