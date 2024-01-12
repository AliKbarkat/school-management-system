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
      $Teachers->Email =$request->email;
      $Teachers->Password =Hash::make($request->password);
      $Teachers->Name =['en'=>$request->name_en ,'ar'=>$request->name_ar];
      $Teachers->specialization_id =$request->specialization_id;
      $Teachers->Gender_id =$request->gender_id;
      $Teachers->joining_Date =$request->joining_date;
      $Teachers->Address=$request->address;
      $Teachers->save();
      toastr()->success('تم حفظ البيانات');
      return redirect()->route('teacher.index');
      // return $request;

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
  public function teacherUpdate($request)
  {
    // return $request;
   try{
      $Teachers= Teacher::findOrFail($request->id);
    $Teachers->Email =$request->email;
    $Teachers->Password =Hash::make($request->password);
    $Teachers->Name =['en'=>$request->name_en ,'ar'=>$request->name_ar];
    $Teachers->specialization_id =$request->specialization_id;
    $Teachers->Gender_id =$request->Gender_id;
    $Teachers->joining_Date =$request->joining_date;
    $Teachers-> Address=$request->Address;
    $Teachers->save();
    toastr()->success('تم حفظ البيانات');
    return redirect()->route('teacher.index');
  
  
   }
   catch(\Exception $e)
   {
    return redirect()->back()->withErrors($e);
   }
   }

  public function deleteTeacher($request)
  {
    $Teacher=Teacher::findOrFail($request);
    $Teacher->delete();
    toastr()->success('the teacher not delete');
    return redirect()->route('teacher.index');
  }


}