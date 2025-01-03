<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class SiparisDetaylariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('siparis_detaylari')->insert([
                'siparis_id' => rand(1, 10), // Randomly assign an order
                'urun_id' => rand(1, 10), // Randomly assign a product
                'miktar' => $faker->randomFloat(2, 1, 10),
                'birim_fiyat' => $faker->randomFloat(2, 10, 500),
                'toplam_fiyat' => $faker->randomFloat(2, 10, 500),
            ]);
        }
    }
}
