<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB; 
use Faker\Factory as Faker; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ttavattutableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('ttavattu')->insert([
                'ttaMaVTu' => $faker->unique()->numerify('DD###'),  // Mã vật tư: 'DD' + 3 số ngẫu nhiên, đảm bảo duy nhất
                'ttaTenVTu' => $faker->word() . ' ' . $faker->word(),  // Tên vật tư: kết hợp 2 từ ngẫu nhiên
                'ttaDvTinh' => $faker->randomElement(['Bộ', 'Cái', 'Kg', 'Lít']),  // Đơn vị tính ngẫu nhiên
                'ttaPhanTram' => $faker->randomFloat(2, 1, 100),  // Phần trăm: số thập phân ngẫu nhiên từ 1 đến 100
            ]);
        }
    }
}
