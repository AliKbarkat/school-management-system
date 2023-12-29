<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    public $guarded=[];

    public function student()

    {
   
        return $this->belongsTo(Student::class,'student_id');

    }

    public function f_grade()

    {
   
        return $this->belongsTo(Grade::class,'from_grade');

    }

    public function f_class()

    {
   
        return $this->belongsTo(ClassRoom::class,'from_class_room');

    }
    public function f_section()

    {
   
        return $this->belongsTo(Section::class,'from_section');

    }
    public function to_grade()

    {
   
        return $this->belongsTo(Grade::class,'from_grade');

    }

    public function to_class()

    {
   
        return $this->belongsTo(ClassRoom::class,'from_class_room');

    }
    public function to_section()

    {
   
        return $this->belongsTo(Section::class,'from_section');

    }

    
}
