<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Translatable\HasTranslations;
class MyParant extends  Authenticatable
{
    use HasTranslations;
    public $translatable = [ 'name_father','job_father','name_mother','job_mother'];

   
    protected $table = 'my_parants';
    public $fillable = [
        'email',
        'password',
        'name_Father',
        'job_father',
        'national_id_father',
        'passport_id_father',
        'phone_father',
        'nationally_father_id',
        'blood_type_father_id',
        'religion_father_id',
        'address_father',
        'name_mother',
        'job_mother',
        'national_id_mother',
        'passport_id_mother',
        'phone_mother',
        'nationally_mother_id',
        'blood_type_mother_id',
        'religion_mother_id',
        'address_mother'
    ];
    public function student()
    {

        return $this->hasMany(Student::class,'id');

    }
}
