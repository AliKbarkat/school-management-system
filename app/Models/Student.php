<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Student extends Model
{
    use HasTranslations;
    public $translatable = ['name'];
    public $guarded=[];

    //the relationship student with gender
    public function gender()

    {
   
        return $this->belongsTo(Gender::class,'gender_id');

    }
   
    //the relationship student with grade
    public function grade()

    {

        return $this->belongsTo(Grade::class,'grade_id');

    }
    //the relationship student with classroom
    public function classroom()

    {

        return $this->belongsTo(Classroom::class,'classroom_id');

    }
    //the relationship student with Section
    
    public function Section()

    {
        
        return $this->belongsTo(Section::class, 'section_id');
    
    }
    //the relationship student with images
    
    public function images()

    {

        return $this->morphMany(Image::class,'imageable');

    }

}
