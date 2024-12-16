<?php
namespace Database\Seeders;
use Faker\Factory as Faker; 

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ttaNhaCCtableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo đối tượng Faker
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('ttanhacc')->insert([
                'ttaMaNCC' => $faker->uuid(),
                'ttaTenNCC' => $faker->company(),
                'ttaDiachi' => $faker->address(),
                'ttaDienthoai' => $faker->phoneNumber(),
                'email' => $faker->email(),
                'status' => $faker->boolean(),
            ]);
        }
    }
}
