<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Graduted extends Model
{
    use HasTranslations;
    public $translatable = ['name'];
    
    public $fillable=['name','notes'];
}
