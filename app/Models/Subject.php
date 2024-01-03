<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Subject extends Model
{
    use HasTranslations;
    public $translatable = ['name'];

    public $fillable=['name','grade_id','classroom_id','teacher_id'];

    public function grade()
    {
        return $this->BelongsTo(Grade::class,'grade_id');
    }

    public function clases()
    {
        return $this->BelongsTo(ClassRoom::class,'classroom_id');
    }
    public function teacher()
    {
        return $this->BelongsTo(Teacher::class,'teacher_id');
    }
}
