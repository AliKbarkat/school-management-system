<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  public $fillable = ['id','file_name','imageable_id','imageable_tybe'];
  public $timestamps = false;
  public function imageable()
  
  {
      return $this->morphTo();

  }
}
