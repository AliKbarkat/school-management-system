<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Teacher extends Model
{
    use HasTranslations;
    public $translatable = ['Name'];
public $fillable=['Email','Password','Name','Specialization_id','Gender_id','joining_Date','Address'];

public function speciallztions()

 {
    return $this->belongsTo(Specialization::class,'Specialization_id');
 }

public function genders()

{
    return $this->belongsTo(Gender::class,'Gender_id');
}

}
