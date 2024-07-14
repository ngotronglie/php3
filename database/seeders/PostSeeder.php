<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('post')->insert([
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'pathImg' => $faker->imageUrl(640, 480, 'post', true),
                'UserId' => $faker->numberBetween(1, 0), 
                'created' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                'status' => $faker->numberBetween(1, 0),
            ]);
        }
    }
}
