<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class TeslimatAdresiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('teslimat_adresleri')->insert([
                'kullanici_id' => rand(1, 10), // Randomly assign a user
                'adres' => $faker->address,
                'sehir' => $faker->city,
                'posta_kodu' => $faker->postcode,
            ]);
        }
    }
}
