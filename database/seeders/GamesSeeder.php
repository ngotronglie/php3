<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('games')->insert([
                'game_title' => $faker->sentence(3), // Tên game ngẫu nhiên
                'cover_art' => $faker->imageUrl(200, 300, 'games', true), // URL ảnh ngẫu nhiên
                'developer' => $faker->company, // Tên nhà phát triển ngẫu nhiên
                'release_year' => $faker->year, // Năm phát hành ngẫu nhiên
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
