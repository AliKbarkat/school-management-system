<?php

namespace App\Repositry;

use App\Models\Grade;
use App\models\Graduted;
use App\models\Promotion;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class GruadtedRepositry implements GraduatedInterface
{
  public function index()
  {
  
     $student=Student::onlyTrashed()->get();
     return view('promotion.index',compact('$graduted'));
  
  }
  public function createGraduted()
  {

    $grades=Grade::all();
    return view('graduated.create',compact('grades'));
  
  }
 
  public function softDelete($request)
  {

    $students=Student::where('grade_id',$request->grade_id)->where('classroom_id',$request->classroom_id)->where('section_id',$request->section_id);
  
    if($students->count() < 1){
      return redirect()->back()->withErrors('error','لايوجد اية طلاب');
    }
   
    foreach($students as $student){
      $ides=explode('.',$student->id);
    Student::whereIn('id',$ides)->Delete();
    }
      return redirect()->back();
 
 }  
 public function returndData($request)
 {

  Student::onlyTrashed()->where('id',$request->id)->restore();
  return redirect()->back();

 }

 public function destroy($request)
 {

  Student::onlyTrashed()->where('id',$request->id)->forceDelete();
  return redirect()->back();

 }
}