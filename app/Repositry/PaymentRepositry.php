<?php


namespace App\Repositry;

use App\models\FoundAcount;
use App\models\PaymentStudent;
use App\Models\Student;
use App\models\StudentAccount;
use Illuminate\Support\Facades\DB;

class PaymentRepositry implements PaymentInterface{
 
    
    public function index()
    {

        $student_payment=PaymentStudent::all();
        return view('pament.index',compact('student_payment'));
    }

    public function show($id)
    {

        $student=Student::findOrfail($id);
        return view('payment.add',compact('student'));

    }
    public function store($request)
    {
        DB::beginTransaction();
 
        try{

            // تعديل البيانات في جدول سندات الصرف
           $payment=new PaymentStudent();
           $payment->date=date('Y-M-D');
           $payment->student_id=$request->student_id;
           $payment->amount=$request->debit;
           $payment->description=$request->description;
           $payment->save();

            // حفظ البيانات في جدول الصندوق
           $faund_account=new FoundAcount();
           $faund_account->date=date('y-m-d');
           $faund_account->payment_id=$payment->id;
           $faund_account->debit=0.00;
           $faund_account->credit=$request->debit;
           $faund_account->descreption=$request->descreption;
           $faund_account->save();

            // حفظ البيانات في جدول حساب الطلاب
           $student_account=new StudentAccount();
           $student_account->date=date('Y-M-D');
           $student_account->tybe='recepit';
           $student_account->student_id=$request->student_id;
           $student_account->payment_id=$request->student_id;
           $student_account->debit=0.00;
           $student_account->descreption=$request->descreption;
           $payment->save();
           DB::commit();
           return redirect()->route('Payment.index');
        }catch(\Exception $e)
        {

        }
    }

    public function edit($id)
    {
        $student_payment=PaymentStudent::findOrfail($id);
        return view('pament.edit',compact('student_payment'));
    }

    public function update($request)
    {
        DB::beginTransaction();
 
        try{

            // تعديل البيانات في جدول سندات الصرف
            $payment=PaymentStudent::findOrfail($request->id);
            $payment->date=date('Y-M-D');
            $payment->student_id=$request->student_id;
            $payment->amount=$request->debit;
            $payment->description=$request->description;
            $payment->save();
 
            // حفظ البيانات في جدول الصندوق
            $faund_account=FoundAcount::where('paymant_id',$request->id)->first();
            $faund_account->date=date('y-m-d');
            $faund_account->payment_id=$payment->id;
            $faund_account->debit=0.00;
            $faund_account->credit=$request->debit;
            $faund_account->descreption=$request->descreption;
            $faund_account->save();
 

            // حفظ البيانات في جدول حساب الطلاب
            $student_account=StudentAccount::where('paymant_id',$request->id)->first();
            $student_account->date=date('Y-M-D');
            $student_account->tybe='recepit';
            $student_account->student_id=$request->student_id;
            $student_account->payment_id=$request->student_id;
            $student_account->debit=0.00;
            $student_account->descreption=$request->descreption;
            $payment->save();
            DB::commit();
            return redirect()->route('Payment.index');
         }catch(\Exception $e)
         {
 
         }
    }

    public function destroy($request)
    {

        try {
            PaymentStudent::destroy($request->id);
            toastr()->error(trans('messages.Delete'));
            return redirect()->back();
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }  
}