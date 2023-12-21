<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Hash;
class AcountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
        DB::table('users')->insert([
            'name'=>'Ali barakat',
            'email'=>'ali@gmail.com',
            'password'=> Hash::make('123456'),
            'created_at'=>now(),
            'updated_at'=>now(),
            'remember_token'=> token_name('11111111111'),
        ]);
    }
}
