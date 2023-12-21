<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public $fillable = [
        'id',
        'name_en',
        'name_ar',
        'status',
        'grade_id',
        'classroom_id',
    ];
    public function grade()
    {
        return $this->BelongsTo(Grade::class,'grade_id');
    }

    //علاقة بين القسم والصفوف لعرض اسم الصف في الاقسام
    public function classroom()
    {

        return $this->belongsTo(Classroom::class,'classroom_id');

    }
    public function teachers()
    {

        return $this->belongsTo(Classroom::class);

    }
}
