<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class MyParant extends Model
{
    protected $table = 'my_parants';
    public $fillable = [
        'Email',
        'Password',
        'Name_Father',
        'Name_Father_en',
        'Job_Father',
        'Job_Father_en',
        'National_ID_Father',
        'Passport_ID_Father',
        'Phone_Father',
        'Nationally_father_id',
        'Blood_Type_Father_id',
        'Religion_Father_id',
        'Address_Father',
        'Name_Mother',
        'Name_Mother_en',
        'Job_Mother',
        'Job_Mother_en',
        'National_ID_Mother',
        'Passport_ID_Mother',
        'Phone_Mother',
        'Nationally_Mother_id',
        'Blood_Type_Mother_id',
        'Religion_Mother_id',
        'Address_Mother'
    ];
    public function student()
    {

        return $this->hasMany(Student::class,'id');

    }
}
