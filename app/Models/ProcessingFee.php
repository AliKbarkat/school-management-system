<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ProcessingFee extends Model
{
    
    public function student()
    {
    
        return $this->belongsTo(Student::class,'student_id');
    
    }
}
