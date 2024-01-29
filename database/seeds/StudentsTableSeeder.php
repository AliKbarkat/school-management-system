<?php

use App\models\Bload;
use App\Models\ClassRoom;
use App\Models\Grade;
use App\models\MyParant;
use App\Models\Nationalitie;
use App\Models\Section;
use App\Models\Student;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->delete();
        $students = new Student();
        $students->name = ['ar' => 'علي بركات', 'en' => 'ali barakat'];
        $students->email = 'a@gmail.com';
        $students->password = Hash::make('123456789');
        $students->gender_id = 1;
        $students->nationalite_id = Nationalitie::all()->unique()->random()->id;
        $students->bload_id =Bload::all()->unique()->random()->id;
        $students->date_birth = date('1995-7-8');
        $students->grade_id = Grade::all()->unique()->random()->id;
        $students->classroom_id =ClassRoom::all()->unique()->random()->id;
        $students->section_id = Section::all()->unique()->random()->id;
        $students->parant_id = MyParant::all()->unique()->random()->id;
        $students->academic_year ='2024';
        $students->save();
    }
}