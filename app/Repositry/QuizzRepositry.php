<?php


namespace App\Repositry;

use App\Models\Grade;
use App\models\Quizz;
use App\models\Subject;
use App\models\Teacher;

class QuizzRepositry implements QuizzInterface{
    public function index()
    {
       $quizz=Quizz::get();
       return view('quizzes.index',compact('quizz'));
    }
    public function create(){
        $data['teachers']=Teacher::all();
        $data['grades']=Grade::all();
        $data['sudjects']=Subject::all();
        return view('quizzes.create',$data);
    }
    public function show($id){

    }
    public function store($request){
        try{
            $quizz=new Quizz();
            $quizz->name=['ar'=> $request->name_ar,'en'=>$request->name_en];
            $quizz->subject_id =$request->subject_id;
            $quizz->grade_id=$request->grade_id;
            $quizz->classroom_id=$request->teacher_id;
            $quizz->section_id=$request->section_id;
            $quizz->teacher_id=$request->teacher_id;
            $quizz->save();
        }catch(\Exception $e){
return $e;
        }
    }
    public function edit($id)
    {
        $quizz=Quizz::findOrfail($id);
        $data['teachers']=Teacher::all();
        $data['grades']=Grade::all();
        $data['sudjects']=Subject::all();
        return view('quizzes.create',$data,compact('quizz'));
    }
    public function update($request){
        try{
            $quizz= Quizz::findOrfail($request->id);;
            $quizz->name=['ar'=> $request->name_ar,'en'=>$request->name_en];
            $quizz->subject_id =$request->subject_id;
            $quizz->grade_id=$request->grade_id;
            $quizz->classroom_id=$request->teacher_id;
            $quizz->section_id=$request->section_id;
            $quizz->teacher_id=$request->teacher_id;
            $quizz->save();
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }
    }

    public function destroy($request)
    {
        try {
            Quizz::destroy($request->id);
            toastr()->error(trans('messages.Delete'));
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    
}