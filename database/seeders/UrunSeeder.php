<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class UrunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('urunler')->insert([
                'ciftci_id' => rand(1, 10), // Randomly assign a farmer
                'kategori_id' => rand(1, 10), // Randomly assign a category
                'urun_adi' => $faker->word,
                'birim_fiyat' => $faker->randomFloat(2, 10, 500), // Random price between 10 and 500
                'stok_miktari' => $faker->randomFloat(2, 1, 100),
                'birim' => $faker->word,
            ]);
        }
    }
}
