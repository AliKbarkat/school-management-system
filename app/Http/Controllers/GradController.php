<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\GradeRequest;
use App\Models\ClassRoom;
use App\Models\Grade;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class GradController extends Controller
{
    public function index()
    {

        $grades = Grade::get();
        return view('grade.grades', compact('grades'));
   
    }
    public function create()
    {
    
    }
    public function store(GradeRequest $request)
    {  
        
        Grade::create([

            'name' => ['en' =>$request['name_en'] ,'ar' =>$request['name_ar'] ] ,
            'descreption' => $request['descreption'],
     
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('grad.index');
    
    }
    public function edit($grade_id)
    {

        $grade = Grade::findOrfail($grade_id);

        Grade::select(['name_en', 'name_ar', 'descreption']);
        return view('grade.edit_grade ', compact('grade'));
    
    }
    public function update(GradeRequest $request, $grade_id)
    {

        $id = Grade::findOrfail($grade_id);
        if (!$id)
            return redirect()->back();

        $id->update($request->all());
        return redirect()->route('grad.index');
    
    }
    public function destroy(Request $request)
    {

        $class_id = ClassRoom::where('grade_id', $request->id)->pluck('grade_id');
        if ($class_id->count() == 0) 
        {
        
            Grade::findOrFail($request->id)->delete();
            return redirect()->route('grad.index');
        } 
        else{

            toastr()->error('يوجد داخل المرحلة صفوف');
        }

    }
    public function show()
    {
        
    }

}