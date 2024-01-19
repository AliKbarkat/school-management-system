<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClassRoomRequest;
use App\Models\Classroom;
use App\Models\Grade;
use Illuminate\Http\Request;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ClassRoomController extends Controller
{
    public function index()
    {

        $clases = ClassRoom::with(['grade'])->select(
            [
                'id',
                'name',
                'grade_id',
            ]
        )->get();

        return view('class_room.classroom', compact('clases'));
    
    }
    public function create()
    {

        $grades = Grade::all();
        return view('class_room.add_class', compact('grades'));
   
    }
    function store(ClassRoomRequest $request)
    {

        // return $request;
        Classroom::create([
            'name' => ['en' =>$request['name_en'] ,'ar' =>$request['name_ar'] ] ,
           
            'grade_id' => $request['grade_id'],
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('class.index');
    
    }
    public function edit($class_id)
    {

        $grade = Grade::all();
        $class = ClassRoom::find($class_id);

        ClassRoom::select([
           
            'name',
            'grade_id',
        ]);

        return view('class_room.edit_class', compact('class', 'grade'));
   
    }
    public function update(ClassRoomRequest $request, $class_id)
    {

        $class = ClassRoom::find($class_id);
        if (!$class)
            return redirect()->back();
        $class->update($request->all());
        
        toastr()->success('Data has been saved successfully!');

        return redirect()->route('class.index');
    }
    public function destroy($class_id)
    {
        $class = ClassRoom::find($class_id);
        $class->delete();
        toastr()->success('Data delete successfully!');
        return redirect()->route('class.index');
    }

}
