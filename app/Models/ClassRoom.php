<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Model;


class ClassRoom extends Model
{
    public $fillable = [
        'id',
        'name',
        'grade_id',

    ];
  //relationship with grade
    public function grade()
    {
        return $this->BelongsTo(Grade::class,'grade_id','id','classrooms');
    }
  //relation ship with section
    public function section()
    {

        return $this->hasMany(Section::class);

    }
}
