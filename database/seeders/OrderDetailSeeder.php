<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $productId = $faker->numberBetween(1, 10); 
            $orderId = $faker->numberBetween(1, 10); 
            $quantity = $faker->numberBetween(1, 100); 
            $price = $faker->randomFloat(2, 1000, 99999999);

            DB::table('order_detail')->insert([
                'productId' => $productId,
                'orderId' => $orderId,
                'quantity' => $quantity,
                'price' => $price,
            ]);
        }
    }
}
