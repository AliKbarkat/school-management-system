<?php


namespace App\Repositry;

use App\models\Question;
use App\models\Quizz;

class QuestionRepositry implements QuestionInterface 
{
    public function index(){
        $ques=Question::all();
        return view('questions.index',compact('ques'));
    }
   
    public function create()
    {
    
        $quizz=Quizz::get();
        return view('questions.create',compact('quizz'));


    }
    public function store($request){
        try{
            $ques=new Question();
            $ques->title=$request->title;
            $ques->answer =$request->answer;
            $ques->rirgt_answer=$request->rirgt_answer;
            $ques->scoure=$request->scoure;
            $ques->quizz_id=$request->quizz_id;
            $ques->save();
        }catch(\Exception $e){
return $e;
        }
    
    }
    public function edit($id){
        $ques= Question::findOrfail($id);
        $quizz=Quizz::get();
      return view('questions.create',compact('quizz','ques'));
    }
    public function update($request){
        
        try{
            $ques=Question::findOrfail($request->id);
            $ques->title=$request->title;
            $ques->answer =$request->answer;
            $ques->rirgt_answer=$request->rirgt_answer;
            $ques->scoure=$request->scoure;
            $ques->quizz_id=$request->quizz_id;
            $ques->save();
        }catch(\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }
    
    }
    public function destroy($request)
    {
        try {
            Question::destroy($request->id);
            toastr()->error(trans('messages.Delete'));
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
