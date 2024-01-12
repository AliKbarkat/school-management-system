<?php


namespace App\Repositry;

use App\models\Attendance;
use App\Models\Grade;
use App\Models\Student;
use App\models\Teacher;

class AttendanceRepositry  implements AttendanceInterface{
    public function index()
    {
    
        $Grades = Grade::with('Section')->get();
        $list_grade=Grade::all();
        $teacher=Teacher::all();
        return view('attendance.section',compact('Grades','list_grade','teacher'));
    
    }

    public function show($id)
    {

        $students=Student::with('attendance')->where('section_id',$id)->get();
        return view('attendance.show',compact('students'));
    }
    public function store($request){
        try {

            foreach ($request->attendences as $studentid => $attendence) {

                if( $attendence == 'presence' ) {
                    $attendence_status = true;
                } else if( $attendence == 'absent' ){
                    $attendence_status = false;
                }

                Attendance::create([
                    'student_id'=> $studentid,
                    'grade_id'=> $request->grade_id,
                    'classroom_id'=> $request->classroom_id,
                    'section_id'=> $request->section_id,
                    'teacher_id'=> 1,
                    'attendence_date'=> date('Y-m-d'),
                    'attendence_status'=> $attendence_status
                ]);

            }

            toastr()->success(trans('messages.success'));
            return redirect()->back();

        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


}