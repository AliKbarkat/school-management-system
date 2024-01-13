<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Bload extends Model
{
  use HasTranslations;
  public $translatable = ['name'];
    public $fillable = ['name'];

}
