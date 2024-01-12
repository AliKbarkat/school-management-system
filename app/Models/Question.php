<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $guarded=[];
    public function quizz()
    {
        return $this->belongsTo(Quizz::class);
    }
}
