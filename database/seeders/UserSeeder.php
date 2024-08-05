<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
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
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('123123'), // Đặt mật khẩu mặc định là 123123 và mã hóa nó
                'role' => $faker->randomElement([User::ROLE_USER, User::ROLE_ADMIN, User::ROLE_STAFF]),
            ]);
        }
    }
}
