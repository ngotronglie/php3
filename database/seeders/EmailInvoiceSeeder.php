<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmailInvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('email_invoice')->insert([
                'orderId' => $faker->numberBetween(1, 10), // Giả sử order_id từ 1 đến 10
                'subject' => $faker->sentence(),
                'sentDate' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
