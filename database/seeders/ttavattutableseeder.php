<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ttavattutableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ttavattu')->insert([
            'ttaMaVTu'=>'DD01',
            'ttaTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            'ttaDvTinh'=>'Bộ',
            'ttaPhanTram'=>40,
        ]);
    }
}
