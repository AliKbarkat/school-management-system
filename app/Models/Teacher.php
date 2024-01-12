<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Teacher extends Model
{
    use HasTranslations;
    public $translatable = ['name'];
    public $fillable=[
        'email',
        'password',
        'name',
        'specialization_id',
        'gender_id',
        'joining_date',
        'address'
    ];

public function speciallztions()

 {
    return $this->belongsTo(Specialization::class,'specialization_id');
 }

public function genders()

{
    return $this->belongsTo(Gender::class,'gender_id');
}

}
