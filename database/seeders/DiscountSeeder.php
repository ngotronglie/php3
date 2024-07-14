<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $startDate = $faker->dateTimeBetween('-1 year', 'now');
            $endDate = $faker->dateTimeBetween($startDate, '+1 year');

            DB::table('discount')->insert([
                'name' => $faker->word,
                'code' => $faker->numberBetween(1, 100), // Tạo mã giảm giá ngẫu nhiên
                'startDate' => $startDate->format('Y-m-d H:i:s'),
                'endDate' => $endDate->format('Y-m-d H:i:s'),
                'active' => $faker->boolean,
            ]);
        }
    }
}
