<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class FeeInvoice extends Model
{
    public $fillable =
    [
        'id',
        'invoice_date',
        'grade_id',
        'clasroon_id',
        'student_id',
        'fee_id',
        'amount',
        'descreption'
    ];
public function grades()
{

    return $this->belongsTo(Grade::class,'grade_id');

}
public function classes()
{
 
    return $this->belongsTo(ClassRoom::class,'clasroon_id');

}
public function studens()
{

    return $this->belongsTo(Student::class,'student_id');

}
public function fees()
{
 
    return $this->belongsTo(Fee::class,'fee_id');

}


}

