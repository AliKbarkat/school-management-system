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
        $data['Genders']=Gender::all();
        $data['Nationals']=Nationalitie::all();
        $data['bloods']=Bload::all();
        $data['Grades']=Grade::all();
        return view('students.add_student',$data);
      }

      public function studentStore($request)
      {   
        
    
try{
      $students=new Student();
      $students->name = ['en' => $request->name_en ,'ar' => $request->name_ar];
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
      return redirect()->route('students.create');
      
}catch(\Exception $e){
  return redirect()->back()->withErrors(["error" => $e->getMessage()]);
}
      }
      public function editStudent($id)
      {
        $data['my_class']=ClassRoom::all();
        $data['parants']=MyParant::all();
        $data['Genders']=Gender::all();
        $data['Nationals']=Nationalitie::all();
        $data['bloods']=Bload::all();
        $data['Grades']=Grade::all();
        $data['sections']=Section::all();
        $data['riligaion']=Religion::all();
        $Student=Student::findOrfail($id);
        return view('students.edit_student',$data,compact('Student'));
      }

  public function studentsUpdate($request){
   try{
     $Students= Student::findOrfail($request->id);
     $Students->Email =$request->Email;
     $Students->Password =Hash::make($request->Password);
     $Students->Name =['en'=>$request->Name_en ,'ar'=>$request->Name_ar];
     $Students->nationalitie_id =$request->nationalitie_id;
     $Students->bload_id =$request->bload_id;
     $Students->gender_id =$request->gender_id;
     $Students->grade_id =$request->grade_id;
     $Students->classroom_id =$request->classroom_id;
     $Students->parant_id=$request->parant_id;
     $Students->academic_year=$request->academic_year;      
     $Students->Date_Birth =$request->Date_Birth;
     $Students-> section_id=$request->section_id;
     $Students->save();
     return redirect()->route('students.index');
  
   }catch(\Exception $e)
{
  return $e;
}
    

  }

  public function deleteStudent($request)
  {
     $student=Student::findOrFail($request->id);
     $student->delete();
     return redirect()->route('students.index');
    }


}