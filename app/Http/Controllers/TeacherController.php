<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Repositry\TeacherRepositry;
use Illuminate\Http\Request;


class TeacherController extends Controller
{
    protected $teacher;

    public function __construct(TeacherRepositry $teacher)
    {

        $this -> teacher = $teacher;
    
    }

    public function index()
    {

        $teachers = $this -> teacher -> getAllTeacher();
        return view('teachers.teachers' , compact('teachers'));
    
    }

    public function create()
    {

        $gender = $this-> teacher -> getGender();
        $specialization = $this -> teacher -> getSpecialization();
        return view('teachers.add_teacher' , compact('gender' , 'specialization'));
       
    }

    public function store(TeacherRequest $request)
    {
        
        return $this -> teacher -> teacherStore($request);

    }

    public function edit($id)
    {
        
        $teacher = $this -> teacher -> editTeacher($id); 
        $gender = $this -> teacher -> getGender();
        $specialization = $this -> teacher -> getSpecialization();
        return view('teachers.edit_teacher' , compact( 'gender','specialization','teacher'));
    
    }

    public function update(Request $request)
    {

        return $this -> teacher -> teacherUpdate($request);
    
    }
    
    public function destroy($request)
    {
    
        return $this -> teacher -> deleteTeacher($request);

    }

}

