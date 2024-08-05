<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SanPham;
use Faker\Factory as Faker;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            SanPham::create([
                'ma_san_pham' => $faker->unique()->bothify('SP-#####'),
                'ten_san_pham' => $faker->words(3, true),
                'hinh_anh' => $faker->imageUrl(640, 480, 'fashion', true),
                'gia_san_pham' => $faker->randomFloat(2, 1000, 10000),
                'gia_khuyen_mai' => $faker->optional()->randomFloat(2, 500, 9000),
                'mo_ta_ngan' => $faker->sentence,
                'noi_dung' => $faker->paragraph,
                'so_luong' => $faker->numberBetween(1, 100),
                'luot_xem' => $faker->numberBetween(0, 1000),
                'ngay_nhap' => $faker->date,
                'danh_muc_id' => $faker->numberBetween(1, 5), // Giả sử bạn có 5 danh mục
                'is_type' => $faker->boolean,
                'is_new' => $faker->boolean,
                'is_hot' => $faker->boolean,
                'is_hot_deal' => $faker->boolean,
                'is_show_home' => $faker->boolean,
            ]);
        }
    }
}
