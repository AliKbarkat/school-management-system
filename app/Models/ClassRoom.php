<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Model;


class ClassRoom extends Model
{
    public $fillable = [
        'id',
        'name_class_ar',
        'name_class_en',
        'grade_id',

    ];
  //relationship with grad
    public function grade()
    {
        return $this->BelongsTo(Grade::class,'grade_id','id','classrooms');
    }
  //relation ship with section
    public function Section()
    {

        return $this->hasMany(Section::class);

    }
}
