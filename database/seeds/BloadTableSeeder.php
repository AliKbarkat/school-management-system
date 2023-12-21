<?php

use App\models\Bload;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bloads')->delete();
        $bgs = ['O-', 'O+', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-'];
        foreach ($bgs as $bg) {
            Bload::create(['name' => $bg]);
        }
    }
}
