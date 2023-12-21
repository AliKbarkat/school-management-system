<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Repositry\StudentRepositry;
use Illuminate\Support\Facades\Request;


class StudentController extends Controller
{
    public $student;
    function __construct(StudentRepositry $student)
    {
        $this->student = $student;
    }
    public function index()
    {
      return $this->student->getAllStudent();
    }

    public function create()
    {
    return $this->student->craetestudent();
    }

    public function store(Request $request)
    {
     return $this->student->studentStore($request);
    
    }

    public function edit($id)
    {
     return $this->student->editStudent($id); 
    }

    public function update(StudentRequest $request)
    {
    return $this->student->studentsUpdate($request);
    }

    public function destroy(StudentRequest $request)
    {
      return $this->student->deleteStudent($request);
    }
}
