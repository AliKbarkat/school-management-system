<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Repositry\TeacherRepositry;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    protected $Teacher;
    function __construct(TeacherRepositry $Teacher)
    {
        $this->Teacher = $Teacher;
    }
    function index()
    {
        $Teachers = $this->Teacher->getAllTeacher();
        return view('teachers.teachers',compact('Teachers'));
    }
    function create()
    {
        $gender=$this->Teacher->getGender();
        $specialization=$this->Teacher->getSpecialization();
        return view('teachers.add_teacher',compact('gender','specialization'));
       
    }
    function store(TeacherRequest $request)
    {

    return $this->Teacher->TeacherStore($request);
    }
    function edit($id){
    $Teacher=$this->Teacher->editTeacher($id); 
     $gender=$this->Teacher->getGender();
      $specialization=$this->Teacher->getSpecialization();
      return view('teachers.edit_teacher',compact( 'gender','specialization','Teacher'));
    }

    function update(TeacherRequest $request)
    {

    return $this->Teacher->TeacherUpdate($request);
    }
    function destroy(TeacherRequest $request){
    return $this->Teacher->DeleteTeacher($request);

    }

}

