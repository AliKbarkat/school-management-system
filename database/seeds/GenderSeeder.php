<?php

use App\models\Gender;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->delete();

        $genders = [

            [
                'en' => 'female',
                'ar' => 'أنثى'
            ],
            [
                'en' => 'male',
                'ar' => 'ذكر'
            ],
            [
                'en' => 'Other',
                'ar' => 'غيرذلك'
            ],

        ];

        foreach ($genders as $R) {
            Gender::create(['Name' => $R]);

        }

    }
}
