<?php
namespace App\Repositry;

use App\Models\Student;

class ProcessingFeeRepsitry implements ProcessingFeeInterface{

    public function index(){
        
    }

    public function show($id){
        $student=Student::findOrfail($id);
        return view('',compact('$student'));
    }
    public function store($request){
        
    }

    public function edit($id){
        
    }

    public function update($request){
        
    }

    public function delete($request){
        
    }
}