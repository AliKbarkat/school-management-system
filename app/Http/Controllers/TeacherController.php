<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Repositry\TeacherRepositry;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class TeacherController extends Controller
{
    protected $Teacher;
    function __construct(TeacherRepositry $Teacher)
    {
        $this->Teacher = $Teacher;
    }
    function index()
    {
        $teachers = $this->Teacher->getAllTeacher();
        return view('teachers.teachers',compact('teachers'));
    }
    function create()
    {
        $gender=$this->Teacher->getGender();
        $specialization=$this->Teacher->getSpecialization();
        return view('teachers.add_teacher',compact('gender','specialization'));
       
    }
    function store(TeacherRequest $request)
    {
    return $this->Teacher->teacherStore($request);
    }
    function edit($id){
    $Teacher=$this->Teacher->editTeacher($id); 
     $gender=$this->Teacher->getGender();
      $specialization=$this->Teacher->getSpecialization();
      return view('teachers.edit_teacher',compact( 'gender','specialization','Teacher'));
    }

    function update(Request $request)
    {

    return $this->Teacher->teacherUpdate($request);
    }
    function destroy($request){
     return $this->Teacher->deleteTeacher($request);

    }

}

