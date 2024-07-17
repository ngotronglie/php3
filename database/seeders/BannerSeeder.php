<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('banner')->insert([
                'name' => $faker->word,
                'pathImg' => $faker->imageUrl(),
                'startDate' => $faker->dateTimeBetween('-1 month', '+1 month'),
                'status' => rand(0, 2),
            ]);
        }
    }
}
