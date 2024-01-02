<?php
namespace App\Repositry;

use App\models\ProcessingFee;
use App\Models\Student;

class ProcessingFeeRepsitry implements ProcessingFeeInterface{

    public function index(){
        $processing=ProcessingFee::all();
        return view('processing.index',compact('processing'));
    }

    public function show($id){
        $student=Student::findOrfail($id);
        return view('',compact('student'));
    }
    public function edit($id){
        $processing=ProcessingFee::findOrFail($id);
        return view('processing.edit',compact('processing'));
    }

    public function store($request){
        
    }

   
    public function update($request){
        
    }

    public function delete($request){
        
    }
}