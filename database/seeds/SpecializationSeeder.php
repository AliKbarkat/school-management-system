<?php

use App\models\Specialization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specializations')->delete();

        $specializations = [

            [
                'en' => 'Arabic',
                'ar' => 'عربي'
            ],
            [
                'en' => 'English',
                'ar' => 'انكليزي'
            ],
            [
                'en' => 'vantor',
                'ar' => 'علوم',
            ],
            [
                'en' => 'computer',
                'ar' => 'حاسوب',
            ],

        ];

        foreach ($specializations as $R) {
            Specialization::create(['Name' => $R]);

        }

    }
}
