<?php


namespace App\Repositry;

use App\Models\Grade;
use App\models\Subject;
use App\models\Teacher;

class SubjectRepositry  implements SubjectInterface
{
    public function index()
    {
     
      $subjects = Subject::all();
      return view('subjects.index' , compact('subjects'));
    
    }

    public function create()
    {
      
      $grades = Grade::get();
      $teachers = Teacher::get();
      return view('subjects.create' , compact('grades' , 'teachers'));
    
    }

    public function store($request)
    {

      try
      {
        $subject = new Subject();
        $subject -> name = ['ar' => $request -> name_ar,'en' => $request -> name_en];
        $subject -> grade_id = $request -> grade_id;
        $subject -> classroom_id = $request -> classroom_id;
        $subject -> teacher_id = $request -> teacher_id;
        $subject -> save();
       
      }catch(\Exception $e){
    
        return redirect()->back()->withErrors($e);

      }
    }

    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        return view('subjects.edit',compact('subject'));
   
    }

    public function update($request)
    {
        try
        {
          $subject = Subject::findOrfail($request->id);
          $subject -> name = ['ar' => $request -> name_ar,'en'=> $request -> name_en];
          $subject -> grade_id = $request -> grade_id;
          $subject -> classroom_id = $request -> classroom_id;
          $subject -> teacher_id = $request -> teacher_id;
          $subject -> save();
         
        }catch(\Exception $e){

          return redirect()->back()->withErrors(['error' => $e->getMessage()]);
  
       
        }
        
    }

    public function destroy($request)
    {
        try {

            Subject::destroy($request->id);

            toastr()->error(trans('messages.Delete'));

            return redirect()->back();
        
          }

        catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}