<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                'name' => $faker->word,
                'price' => $faker->randomFloat(2, 1000, 100000),
                'pathImg' => $faker->imageUrl(640, 480, 'products', true),
                'description' => $faker->sentence,
                'status' => $faker->randomElement(['0', '1']),
                'categoriesId' => $faker->numberBetween(1, 10), // Giả sử category_id từ 1 đến 10
            ]);
        }
    }
}
