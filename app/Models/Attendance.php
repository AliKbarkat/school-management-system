<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public $fillable=
    [
        'id',
        'student_id',
        'grade_id',
        'classroom_id',
        'section_id',
        'teacher_id',
        'attendence_date',
        'attendence_status'
    ];
}
