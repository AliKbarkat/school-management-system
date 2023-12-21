<?php

namespace App\Repositry;

use App\models\Gender;
use App\models\Specialization;
use App\models\Teacher;
use Illuminate\Support\Facades\Hash;
class TeacherRepositry implements TeacherRepositryInterface
{

      public function getAllTeacher()
      {
        return Teacher::all();
      }

      public function getGender()
      {
        return Gender::all();
      }

      public function getSpecialization()
      {
        return Specialization::all();
      }
      public function teacherStore($request)
      {
       try{
      $Teachers=new Teacher();
      $Teachers->Email =$request->Email;
      $Teachers->Password =Hash::make($request->Password);
      $Teachers->Name =['en'=>$request->Name_en ,'ar'=>$request->Name_ar];
      $Teachers->specialization_id =$request->specialization_id;
      $Teachers->Gender_id =$request->Gender_id;
      $Teachers->joining_Date =$request->joining_Date;
      $Teachers-> Address=$request->Address;
      $Teachers->save();
      return redirect()->route('teacher.index');

    }
    catch(\Exception $e)
    {
    return redirect()->back()->withErrors($e);
    }

      }
   public function editTeacher($id)
   {
    return Teacher::findOrfail($id);
   }
  public function TeacherUpdate($request)
  {
   try{
    $Teachers= Teacher::findOrFail($request->id);
    $Teachers->Email =$request->Email;
    $Teachers->Password =Hash::make($request->Password);
    $Teachers->Name =['en'=>$request->Name_en ,'ar'=>$request->Name_ar];
    $Teachers->specialization_id =$request->specialization_id;
    $Teachers->Gender_id =$request->Gender_id;
    $Teachers->joining_Date =$request->joining_Date;
    $Teachers-> Address=$request->Address;
    $Teachers->save();
    return redirect()->route('teacher.index');
  
   }
   catch(\Exception $e)
   {
    return $e;
   }
   }

  public function deleteTeacher($request)
  {
   $teacher= Teacher::findOrFail($request->id);
   toaster()->error('the teacher not delete');
   $teacher->delete();
   return redirect()->route('teacher.index');
  }


}