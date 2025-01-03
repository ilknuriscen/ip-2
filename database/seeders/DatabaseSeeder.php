<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ciftci;
use App\Models\Kullanici;
use App\Models\Odeme;
use App\Models\Rol;
use App\Models\Siparis;
use App\Models\TeslimatAdresi;
use App\Models\UrunKategorisi;
use App\Models\Urun;
use App\Models\Yorum;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolSeeder::class);
        $this->call(KullaniciSeeder::class);
        $this->call(CiftciSeeder::class);
        $this->call(UrunKategorisiSeeder::class);
        $this->call(UrunSeeder::class);
        $this->call(SiparisSeeder::class);
        $this->call(TeslimatAdresiSeeder::class);
        $this->call(OdemeSeeder::class);
        $this->call(YorumSeeder::class);
}}
