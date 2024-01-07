<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Student extends Authenticatable
{
    use SoftDeletes;
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

        return $this->morphMany('App\Models\Image','imageable');

    }

    public function myParent()

    {

        return $this->belongsTo(MyParant::class, 'parant_id');

    }
    public function studentAccount()

    {

        return $this->belongsTo(StudentAccount::class, 'student_id');

    }
    //add releationship nationalite to student.php
    public function nationalite()

    {
        return $this->belongsTo(Nationalitie::class, 'nationalite_id');

    }

    public function attendance()

    {
        return $this->hasMany(Attendance::class, 'student_id');

    }

}
