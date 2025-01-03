<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class KullaniciSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('kullanicilar')->insert([
                'ad_soyad' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'telefon' => $faker->phoneNumber,
                'sifre' => bcrypt('password123'),
                'rol_id' => rand(1, 3),  // Randomly assign a role (1=Admin, 2=Çiftçi, 3=Kullanıcı)
            ]);
    }
}}
