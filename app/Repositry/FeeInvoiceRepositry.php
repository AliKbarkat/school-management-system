<?php


namespace App\Repositry;

use App\models\Fee;
use App\Models\Student;

class FeeInvoiceRepositry  implements FeeInvoiceInterface
{
    public function index(){

    }

    public function show($id){
        $student=Student::findOrfail($id);
        $fee=Fee::where('clasroom_id',$student->clasroom_id)->get();
        return view('fee_invoice.add',compact('student','fee'));

    }
   function store($request){

   }
function edit($id){

}
function update($request){

}
function delete($request){
    
}
}