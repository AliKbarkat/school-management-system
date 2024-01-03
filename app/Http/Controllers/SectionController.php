<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionRequest;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Section;
use App\models\Teacher;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    function index()
    {

     $Grades = Grade::with('Section')->get();
     return view('section.section', compact('Grades'));
    }

    function create()
    {
            $grades = Grade::all(); 
            $classes = ClassRoom::all();
            $teacher=Teacher::all();
            return view('section.add_section', compact('grades', 'classes','teacher'));
    
        }

    function store(SectionRequest $section)
    {

        Section::create([
            'name_en' => $section['name_en'],
            'name_ar' => $section['name_ar'],
            'status' => $section['status'],
            'grade_id' => $section['grade_id'],
            'classroom_id' => $section['classroom_id'],
        ]);
        toastr()->success('Data has been saved successfully!');

        return redirect()->route('section.index');
    }
   function edit($id)
   {

        $grades = Grade::all(); 
        $classes = ClassRoom::all();
        $section = Section::find($id);
        return view('section.edit_section',compact('section','grades','classes'));
 
   }
   
   function update(SectionRequest $request,$id){
   Section::findOrFail($id)->update($request->all());
   toastr()->success('Data has been saved successfully!');

    return redirect()->route('section.index');
    }

     function destroy($id){
     Section::findOrFail($id)->delete();
     toastr()->error('Data Deleted');

     return redirect()->back();  
     }
    function getclasses($id)
    {
        $list_class = Classroom::where('grade_id', $id)->pluck('name_class_ar', 'id');
        return $list_class;

    }

}
