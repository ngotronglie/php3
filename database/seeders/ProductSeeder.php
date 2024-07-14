<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\DanhMuc;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $categories = DanhMuc::all()->pluck('id')->toArray();

        $products = [];

        for ($i = 1; $i <= 10; $i++) {
            $products[] = [
                'name_san_pham' => $faker->word,
                'image_san_pham' => $faker->imageUrl(640, 480, 'technics', true),
                'quantity_san_pham' => $faker->numberBetween(1, 100),
                'price_san_pham' => $faker->randomFloat(2, 10, 1000),
                'description_san_pham' => $faker->paragraph,
                'danh_muc_id' => $faker->randomElement($categories),
            ];
        }

        DB::table('san_pham')->insert($products);
    }
}
