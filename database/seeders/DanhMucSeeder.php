<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DanhMuc; // Sửa thành model của bạn
use Faker\Factory as Faker;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 5) as $index) {
            DanhMuc::create([
                'hinh_anh' => $faker->imageUrl(640, 480, 'fashion', true), // Tạo URL hình ảnh giả
                'ten_danh_muc' => $faker->word, // Tạo tên danh mục giả
                'trang_thai' => $faker->boolean, // Tạo trạng thái ngẫu nhiên
            ]);
        }
    }
}
