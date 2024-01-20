<?php

namespace App\Repositry;

use App\Models\Grade;
use App\Models\Section;
use App\Models\Student;


class GruadtedRepositry implements GraduatedInterface
{
    public function index()
    {

      $students = Student::onlyTrashed()->get();
      return view('graduated.index',compact('students'));

    }
    public function createGraduted()
    {

      $grades = Grade::all();
      $sections = Section::all();
      return view('graduated.create',compact('grades','sections'));

    }

    public function softDelete($request)
    {

    
        $students = Student::where('grade_id' , $request -> grade_id) -> where('classroom_id' , $request -> classroom_id) -> where('section_id' , $request -> section_id);

        if($students->count() < 1){
          return redirect()->back()->with('error_Graduated', __('لاتوجد بيانات في جدول الطلاب'));

          
        }
      
        foreach($students as $student)
        {

          $ides = explode('.' , $student -> id);
          Student::whereIn('id', $ides)->Delete();
        }
       return redirect()->route('graduated.index');
        

    }  

    public function returndData($request)
    {

      Student::onlyTrashed()->where('id' , $request -> id)->restore();
      return redirect()->back();

    }

    public function destroy($request)
    {

      Student::onlyTrashed()->where('id' , $request -> id)->forceDelete();
      return redirect()->back();

    }

}