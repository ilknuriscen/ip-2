<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $roles = ['Admin', 'Çiftçi', 'Kullanıcı'];

        foreach ($roles as $role) {
            DB::table('roller')->insert([
                'rol_adi' => $role,
            ]);
        }

    }
}
