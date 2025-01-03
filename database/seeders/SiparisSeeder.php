<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class SiparisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('siparisler')->insert([
                'kullanici_id' => rand(1, 10), // Randomly assign a user
                'siparis_tarihi' => $faker->dateTimeThisYear,
                'toplam_tutar' => $faker->randomFloat(2, 50, 500),
                'siparis_durumu' => $faker->randomElement(['Yeni', 'Hazırlanıyor', 'Teslim Edildi']),
            ]);
        }
    }
}
