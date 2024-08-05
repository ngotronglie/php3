<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;
use Faker\Factory as Faker;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Banner::create([
                'name' => $faker->words(3, true),
                'image' => $faker->imageUrl(640, 480, 'business', true),
                'trang_thai' => $faker->boolean,
            ]);
        }
    }
}
