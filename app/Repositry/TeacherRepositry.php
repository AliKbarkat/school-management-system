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
      $teachers=new Teacher();
      $teachers->email =$request->email;
      $teachers->password =Hash::make($request->password);
      $teachers->name =['en'=> $request->name_en ,'ar'=>$request->name_ar];
      $teachers->specialization_id =$request->specialization_id;
      $teachers->gender_id =$request->gender_id;
      $teachers->joining_Date =$request->joining_date;
      $teachers->address=$request->address;
      $teachers->save();

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
    $Teachers->email =$request->email;
    $Teachers->Password =Hash::make($request->password);
    $Teachers->name =['en'=>$request->name_en ,'ar'=>$request->name_ar];
    $Teachers->specialization_id =$request->specialization_id;
    $Teachers->gender_id =$request->Gender_id;
    $Teachers->joining_Date =$request->joining_date;
    $Teachers-> address=$request->Address;
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