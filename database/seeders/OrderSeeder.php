<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('orders')->insert([
                'userId' => $faker->numberBetween(1, 10), // Giả sử user_id từ 1 đến 10
                'orderDate' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
                'totalAmount' => $faker->randomFloat(2, 1000, 9999999),
                'status' => $faker->randomElement(['0', '1', '2']), // 0: pending, 1: processing, 2: completed

            ]);
        }
    }
}
