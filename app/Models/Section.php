<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Section extends Model
{
    use HasTranslations;
    public $translatable = ['name'];
    public $fillable = [
        'id',
        'name',
     
        'status',
        'grade_id',
        'classroom_id',
    ];

    //A relationship between the academic stages and departments to display the name of the stage in the departments
    public function grade()
    {
        return $this->BelongsTo(Grade::class,'grade_id');
    }

    //Relationship between department and rows to display the name of the row in sections
    public function classroom()
    {

        return $this->belongsTo(Classroom::class,'classroom_id');

    }
   
    //A relationship between teachers and departments to display the teacher's name
    public function teachers()
    {

        return $this->belongsTo(Classroom::class);

    }
}
