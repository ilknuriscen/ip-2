<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class CiftciSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('ciftciler')->insert([
                'kullanici_id' => rand(1, 10), // Randomly assign a user
                'ciftlik_adi' => $faker->company,
                'bolge_id' => rand(1, 10), // Randomly assign a region
                'urun_turu' => $faker->word,
            ]);
        }
    }
}
