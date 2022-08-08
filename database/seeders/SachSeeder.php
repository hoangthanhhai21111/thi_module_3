<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class SachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Sach')->insert([
            'ten_sach' => "aaaaaaa",
            'ma_sach' =>123,
            'tac_gia' =>"hoàng thanh hải",
            'so_trang' =>"123",
            'the_loai' =>"thơ",
            'nam_xuat_ban' =>"2019",
        ],[
            'ten_sach' => "22222",
            'ma_sach' =>345,
            'tac_gia' =>"hoàng thanh a",
            'so_trang' =>"123",
            'the_loai' =>"thơ",
            'nam_xuat_ban' =>"2019",
        ]
    );
    }
}
