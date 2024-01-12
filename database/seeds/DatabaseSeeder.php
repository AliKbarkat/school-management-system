<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {   
        
        $this->call(BloadTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(RseligionTableSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(SpecializationSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(UserTableSeeder::class);
 

    }
}
