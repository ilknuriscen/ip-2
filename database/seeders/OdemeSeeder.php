<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class OdemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('odemeler')->insert([
                'siparis_id' => rand(1, 10), // Randomly assign an order
                'odeme_turu' => $faker->randomElement(['Kredi Kartı', 'Havale', 'Kapıda Ödeme']),
                'odeme_tarihi' => $faker->dateTimeThisYear,
                'tutar' => $faker->randomFloat(2, 50, 500),
            ]);
        }
    }
}
