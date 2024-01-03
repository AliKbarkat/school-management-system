<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Quizz extends Model
{
    public function question(){
        return $this->hasMany(Question::class);
    }
}
