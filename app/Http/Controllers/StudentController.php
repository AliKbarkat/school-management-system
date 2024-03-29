<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\models\Image;
use App\Models\Section;
use App\Models\Student;
use App\Repositry\StudentRepositryInterface;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    public $student;
   function __construct(StudentRepositryInterface $student)
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

   public function store(StudentRequest $request)
   {
      

   return $this->student->studentStore($request);

   }

   public function edit($id)
   {

      return $this->student->editStudent($id); 
   
   }

   public function update(StudentRequest $request)
   {
   
      return $this->student->studentUpdate($request);

   }

   public function destroy(StudentRequest $request)
   {

      return $this->student->destroyStudent($request);
   
   }

   public function show($id)
   {

      return $this->student->showStudent($id);

   }
   public function uploadFile(Request $request)
   {

      return $this->student->uploadFile($request);

   }
   public function downloadAttachment($file_name,$student_name)
   {

      return $this->student->downloadAttach($file_name,$student_name);

   }
   public function deleteAttach()

   {

   }
   public function getSections($id)
   {

   $list_section = Section::where('classroom_id', $id)->pluck('name', 'id');

   return $list_section;

   }
}
