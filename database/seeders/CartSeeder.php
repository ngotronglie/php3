<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('cart')->insert([
                'userId' => $faker->numberBetween(1, 10), 
                'productId' => $faker->numberBetween(1, 10), 
                'quantity' => $faker->numberBetween(1, 100), 
            ]);
        }
    }
}
