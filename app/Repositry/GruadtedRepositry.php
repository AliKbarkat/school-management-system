<?php

namespace App\Repositry;

use App\Models\Grade;
use App\models\Graduted;
use App\models\Promotion;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class GruadtedRepositry implements GraduatedInterface
{
  function getGraduted(){
    $gruadted=Graduted::all();
    return view('promotion.index',compact('$graduted'));
  }
  function createGraduted(){
   $graduted=Graduted::all();
    return view('promotion.add_promotion',compact('$graduted'));
  }
  function storeGraduted($request)
  {
    $students=Student::where('grade_id',$request->grade->id)->where('class_room_id',$request->classroom->id)->get();
try{
  DB::beginTransaction(); 
  foreach($students as $student)
  {
    $ides=explode('.',$student->id);
    $student::whereIn('id',$ides)
      ->data([
     'grade_id'=>$request->grade_id_new,
     'class_room_id'=>$request->classroom_new,
     'section_id'=>$request->section_id_new,
  ]);

 

  Promotion::creatOrupdate([
    'student_id'=>$request->student_id,
    'from_grade'=>$request->from_grade,
    'from_Classroom'=>$request->from_grade,
    'from_section'=>$request->from_section,
    'to_grade'=>$request->to_grade,
    'to_Classroom'=>$request->to_Classroom,
    'to_section'=>$request->to_section,
  ]);
DB::commit();
}
}catch(\Exception $e){
  return $e;

}
       

}
  function editGraduted($id){
return'edite';
  }
  function GradutedUpdate($request){
return 'update';
  }
  function deleteGraduted($request){
    DB::beginTransaction();
try{
  if($request->page_id==1){
    $promotions=Graduted::all();
  foreach($promotions as $promotion){
    $ides=explode('.',$promotion->student_id);
    Student::whereIn('id',$ides)
      ->data([
     'grade_id'=>$promotion->from_grade,
     'class_room_id'=>$promotion->from_Classroom,
     'section_id'=>$promotion->from_section,
  ]);

  Promotion::truncate();
  DB::commit();
  return redirect()->back();
  }
}
 else{
  $promotion=Promotion::findOrfail($request->id);
  Student::where('id',$promotion->student_id)
      ->data([
     'grade_id'=>$promotion->from_grade,
     'class_room_id'=>$promotion->from_Classroom,
     'section_id'=>$promotion->from_section,
  ]);
  Promotion::destroy($request->id);
}

}catch(\Exception $e){

}
  }

}