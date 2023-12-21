<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {   
        $this->call(AcountSeeder::class);
        $this->call(BloadTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(RseligionTableSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(SpecializationSeeder::class);
 

    }
}
