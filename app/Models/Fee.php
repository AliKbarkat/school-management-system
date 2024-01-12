<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Fee extends Model
{
    use HasTranslations;
    public $translatable = ['title'];
    public $guarded=[];

    public function grades()
    {
        return $this->belongsTo(Grade::class,'grade_id');
    }
    public function classes()
    {
        return $this->belongsTo(ClassRoom::class,'classroom_id');

    }
    public function fee_invoices()
    {
        return $this->hasMany(FeeInvoice::class);
    }

}
