<?php

namespace App\Repositry;

use App\models\Student;
use App\models\Bload;
use App\Models\ClassRoom;
use App\models\Gender;
use App\Models\Grade;
use App\models\MyParant;
use App\models\Nationalitie;
use App\Models\Religion;
use App\Models\Section;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Hash;



class StudentRepositry implements StudentRepositryInterface
{

      public function getAllStudent()
      {
       $students=Student::all();
       return view('students.students',compact('students'));
      }

      public function craeteStudent(){
        $data['parants']=MyParant::all();
        $data['genders']=Gender::all();
        $data['nationals']=Nationalitie::all();
        $data['bloods']=Bload::all();
        $data['grades']=Grade::all();
        $data['sections']=Section::all();
        $data['class_room']=ClassRoom::all();
        return view('students.add_student',$data);
      }

      public function studentStore($request)
      {   
        
    
try{
      $students=new Student();
      $students->name = ['ar' => $request->name_ar ,'en' => $request->name_en ];
      $students->email = $request->email;
      $students->password = Hash::make($request->password);
      $students->gender_id = $request->gender_id;
      $students->nationalite_id= $request->nationalite_id;
      $students->bload_id = $request->bload_id;
      $students->date_Birth = $request->date_Birth;
      $students->grade_id = $request->grade_id;
      $students->classroom_id = $request->classroom_id;
      $students->section_id= $request->section_id;
      $students->parant_id= $request->parant_id;
      $students->academic_year= $request->academic_year;  

      $students->save();

      toastr()->success('Data has been saved successfully!');
      return redirect()->route('students.index');
      
     }
     
catch(\Exception $e){

  return redirect()->back()->withErrors(["error" => $e->getMessage()]);
}
      }
      public function editStudent($id)
      {
        $data['my_class']=ClassRoom::all();
        $data['myParant']=MyParant::all();
        $data['genders']=Gender::all();
        $data['nationals']=Nationalitie::all();
        $data['bloods']=Bload::all();
        $data['grades']=Grade::all();
        $data['sections']=Section::all();
        $data['riligaion']=Religion::all();
        $student=Student::findOrFail($id);
        return view('students.edit_student',$data,compact('student'));
      }

  public function studentUpdate($request){
   try{
      $students= Student::findOrfail($request->id);
      $students->name = ['ar' => $request->name_ar ,'en' => $request->name_en ];
      $students->email = $request->email;
      $students->password = Hash::make($request->password);
      $students->gender_id = $request->gender_id;
      $students->nationalite_id= $request->nationalite_id;
      $students->bload_id = $request->bload_id;
      $students->date_Birth = $request->date_Birth;
      $students->grade_id = $request->grade_id;
      $students->classroom_id = $request->classroom_id;
      $students->section_id= $request->section_id;
      $students->parant_id= $request->parant_id;
      $students->academic_year= $request->academic_year; 

      $students->save();

    // return $request;
      toastr()->success('Data has been saved successfully!');

     return redirect()->route('students.index');
     
  
   }
   
   catch(\Exception $e)
{
  return redirect()->back()->withErrors(["error" => $e->getMessage()]);
}
    

  }

  public function destroyStudent($request)
  {
    Student::destroy($request);
     toastr()->success('Data has been saved successfully!');
     return redirect()->route('students.index');
    }


}