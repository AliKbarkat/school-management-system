<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class ClassRoom extends Model
{
    use HasTranslations;
    public $translatable = ['name'];
    public $fillable = [
        'id',
        'name',
        'grade_id',

    ];

  //relationship with grade

    public function grade()
    {

        return $this->BelongsTo(Grade::class,'grade_id');
    
    }

  //relation ship with section

    public function section()
    {

        return $this->hasMany(Section::class,'section_id');

    }
}
