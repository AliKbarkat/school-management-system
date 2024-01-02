<?php


namespace App\Repositry;

use App\models\FoundAcount;
use App\models\ReceiptStudent;
use App\Models\Student;
use App\models\StudentAccount;
use Illuminate\Support\Facades\DB;

class ReceiptStudentRepositry implements ReceiptStudentIntrface{
    public function index(){
       
    }
    public function show($id){
        $student=Student::findOrfail($id);
        return view ('repecit.add',compact('student'));
    }
    public function store($request)
    {

        DB::beginTransaction();
        try{
            $receipt_student=new ReceiptStudent();
            $receipt_student->date=date('y-m-d');
            $receipt_student->student_id=$request->student_id;
            $receipt_student->debit=$request->debit;
            $receipt_student->descreption=$request->descreption;
            $receipt_student->save();


            $faund_account=new FoundAcount();
            $faund_account->date=date('y-m-d');
            $faund_account->recipet_id=$receipt_student->id;
            $faund_account->debit=$request->debit;
            $faund_account->credit=0.00;
            $faund_account->descreption=$request->descreption;
            $faund_account->save();


           $student_account=new StudentAccount();
           $student_account->date=date('y-m-d');
           $student_account->tybe='recipet';
           $student_account->student_id=$request->student_id;
           $student_account->recipet_id=$receipt_student->id;
           $student_account->debit=0.00;
           $student_account->credit=$request->debit;
           $student_account->descreption=$request->descreption;
           $student_account->save();



            DB::commit();
            toastr()->success('تم الحفظ بنجاح');


        }
        catch(\Exception $e) {
            return $e;
        }
    }
}