<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public $fillable = [
        'id',
        'name_en',
        'name_ar',
        'procsess',
    ];
    // The relationship of grades with the academic levels for each grade
    public function classes()
    {

        return $this->hasMany(ClassRoom::class,'id');

    }
    //The relationship between the academic stages to bring the sections related to each stage
    public function Section()
    {

        return $this->hasMany(Section::class, 'grade_id');

    }
}
