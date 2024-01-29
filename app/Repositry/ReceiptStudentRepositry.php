<?php


namespace App\Repositry;

use App\models\FoundAccount;
use App\models\FoundAcount;
use App\models\ReceiptStudent;
use App\Models\Student;
use App\models\StudentAccount;
use Illuminate\Support\Facades\DB;

class ReceiptStudentRepositry implements ReceiptStudentIntrface{

    public function index()
    {
       $receipt_student = ReceiptStudent::all();
       return view('receipt_student.index',compact('receipt_student'));
    
    }

    public function show($id)
    {

        $student=Student::findOrfail($id);
        return view('receipt_student.add',compact('student'));
    
    }

    public function store($request)
    {

        DB::beginTransaction();
        try{

            // حفظ البيانات في جدول ايصالات الطالب
            $receipt_student = new ReceiptStudent();
            $receipt_student -> date = date('y-m-d');
            $receipt_student -> student_id = $request -> student_id;
            $receipt_student -> debit = $request -> debit;
            $receipt_student -> descreption = $request -> descreption;
            $receipt_student -> save();

            // حفظ البيانات في جدول الحساب 
            $faund_account = new FoundAccount();
            $faund_account -> date = date('y-m-d');
            $faund_account -> recipet_id = $receipt_student -> id;
            $faund_account -> debit = $request -> debit;
            $faund_account -> credit = 0.00;
            $faund_account -> descreption = $request -> descreption;
            $faund_account -> save();

            // حفظ البيانات في جدول حسابات الطالب
            $student_account = new StudentAccount();
            $student_account -> date = date('y-m-d');
            $student_account -> tybe = 'recipet';
            $student_account -> student_id = $request -> student_id;
            $student_account -> recipet_id = $receipt_student -> id;
            $student_account -> debit = 0.00;
            $student_account -> credit = $request-> debit;
            $student_account -> descreption = $request -> descreption;
            $student_account -> save();



            DB::commit();
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->route('receipt_students.index');

        }
        catch(\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function update($request)
    {
        DB::beginTransaction();

        try {
            // تعديل البيانات في جدول سندات القبض
            $receipt_students = ReceiptStudent::findorfail($request->id);
            $receipt_students -> date = date('Y-m-d');
            $receipt_students -> student_id = $request -> student_id;
            $receipt_students -> debit = $request -> Debit;
            $receipt_students -> description = $request -> description;
            $receipt_students -> save();

            // تعديل البيانات في جدول الصندوق
            $fund_accounts = FoundAccount::where('receipt_id' , $request -> id)->first();
            $fund_accounts -> date = date('Y-m-d');
            $fund_accounts -> receipt_id = $receipt_students -> id;
            $fund_accounts -> debit = $request -> debit;
            $fund_accounts -> credit = 0.00;
            $fund_accounts -> description = $request -> description;
            $fund_accounts -> save();

            // تعديل البيانات في جدول الصندوق

            $fund_accounts = StudentAccount::where('receipt_id' , $request -> id)->first();
            $fund_accounts -> date = date('Y-m-d');
            $fund_accounts -> type = 'receipt';
            $fund_accounts -> student_id = $request -> student_id;
            $fund_accounts -> receipt_id = $receipt_students -> id;
            $fund_accounts -> debit = 0.00;
            $fund_accounts -> credit = $request -> Debit;
            $fund_accounts -> description = $request -> description;
            $fund_accounts -> save();


            DB::commit();
            toastr()->success(trans('messages.Update'));
            return redirect()->route('receipt_students.index');

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request)
    {
        try {
            ReceiptStudent::destroy($request->id);
            toastr()->error(trans('messages.Delete'));
            return redirect()->back();
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}