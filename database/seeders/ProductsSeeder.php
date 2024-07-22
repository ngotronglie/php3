<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('products')->insert([
                'name_product' => $faker->word,
                'image' => $faker->imageUrl(640, 480, 'product', true),
                'price' => $faker->randomFloat(2, 1, 1000),
                'description' => $faker->paragraph,
                'status' => $faker->boolean,
                'categories_id' => $faker->numberBetween(1, 3),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
}