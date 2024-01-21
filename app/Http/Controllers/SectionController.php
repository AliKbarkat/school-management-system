<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionRequest;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Section;
use App\models\Teacher;

class SectionController extends Controller
{
    public function index()
    {

        $grades = Grade::with('section')->get();
        return view('section.section', compact('grades'));
    
    }

    public function create()
    {
        $grades = Grade::all(); 
        $classes = ClassRoom::all();
        $teacher = Teacher::all();
        return view('section.add_section', compact('grades', 'classes','teacher'));

    }

    public function store(SectionRequest $section)
    {

        Section::create([

            'name' => ['ar' => $section['name_ar'] , 'en' => $section['name_en']] ,
            'status' => $section['status'],
            'grade_id' => $section['grade_id'],
            'classroom_id' => $section['classroom_id'],
            
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('section.index');
    
    }
    
    public function edit($id)
    {

        $grades = Grade::all(); 
        $classes = ClassRoom::all();
        $section = Section::find($id);
        return view('section.edit_section',compact('section','grades','classes'));

    }

    public function update(SectionRequest $request,$id)
    {
    
        Section::findOrFail($id)->update($request->all());
        flash('saved');
        // toastr()->success('Data has been saved successfully!');

        return redirect()->route('section.index');
    
    }

    public function destroy($id)
    {

        Section::findOrFail($id)->delete();
        toastr()->error('Data Deleted');

        return redirect()->back();  
    }

    public function getClasses($id)
    {

    $list_class = ClassRoom::where('grade_id', $id)->pluck('name' , 'id');

    return $list_class;

    }
   

}
