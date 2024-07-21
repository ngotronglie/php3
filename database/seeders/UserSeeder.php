<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $roles = ['1', '0'];

        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'username' => $faker->userName,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'), // Mã hóa mật khẩu mặc định là 'password'
                'phone' => $faker->unique()->safePhone($faker->phoneNumber),
                'role' => $roles[array_rand($roles)], // Chọn ngẫu nhiên giữa 'admin' và 'user'
            ]);
        }
    }
}
