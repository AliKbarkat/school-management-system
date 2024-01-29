<?php

use App\models\Bload;
use App\models\MyParant;
use App\Models\Nationalitie;
use App\Models\Religion;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ParentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_parants')->delete();
        $my_parents = new MyParant();
        $my_parents->email = 'khaled@gmail.com';
        $my_parents->password = Hash::make('12345678');
        $my_parents->name_father = ['en' => 'Khaled', 'ar' => ' خالد'];
        $my_parents->national_id_father = '1234567810';
        $my_parents->passport_id_father = '1234567810';
        $my_parents->phone_father = '1234567810';
        $my_parents->job_father = ['en' => 'programmer', 'ar' => 'مبرمج'];
        $my_parents->nationality_father_id = Nationalitie::all()->unique()->random()->id;
        $my_parents->bload_type_father_id =Bload::all()->unique()->random()->id;
        $my_parents->religion_father_id = Religion::all()->unique()->random()->id;
        $my_parents->address_father ='سوريا';
        $my_parents->name_mother = ['en' => 'sedar', 'ar' => 'سيدر'];
        $my_parents->national_id_mother = '1234567810';
        $my_parents->passport_id_mother = '1234567810';
        $my_parents->phone_mother = '1234567810';
        $my_parents->job_mother = ['en' => 'home', 'ar' => 'مدبرة منزل'];
        $my_parents->nationality_mother_id = Nationalitie::all()->unique()->random()->id;
        $my_parents->blood_type_mother_id =Bload::all()->unique()->random()->id;
        $my_parents->religion_mother_id = Religion::all()->unique()->random()->id;
        $my_parents->address_mother ='سوريا';
        $my_parents->save();

}
    }