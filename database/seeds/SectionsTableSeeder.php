<?php

use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('sections')->delete();

        $Sections = [
            ['en' => 'A', 'ar' => 'ا'],
            ['en' => 'B', 'ar' => 'ب'],
            ['en' => 'C', 'ar' => 'ت'],
        ];
        foreach ($Sections as $section) {
            Section::create([
                'name' => $section,
                'status' => 't',
                'grade_id' => Grade::all()->unique()->random()->id,
                'classroom_id' => ClassRoom::all()->unique()->random()->id
            ]);
        }
    }
}