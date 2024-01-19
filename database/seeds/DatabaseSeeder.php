<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {   
        
        $this->call([
    
        BloadTableSeeder::class,
        UserSeeder::class,
        NationalitiesTableSeeder::class,
        GenderSeeder::class,
        SpecializationSeeder::class,
        SettingsTableSeeder::class,
        ReligionSeeder::class,
        
     ]);
    }
}
