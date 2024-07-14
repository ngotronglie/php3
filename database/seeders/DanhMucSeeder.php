<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryNames = [
            'Đồng hồ', 
            'Điện Thoại', 
            'Máy tính PC', 
            'Lap top', 
            'Loa', 
            'ipad', 
            'chuột', 
            'màn hình', 
            'sạc', 
            'Tai nghe'
        ];

        $categories = [];

        foreach ($categoryNames as $name) {
            $categories[] = [
                'name_danh_muc' => $name,
            ];
        }

        DB::table('danh_muc')->insert($categories);
    }
}
