<?php


namespace App\Repositry;

use App\models\Fee;
use App\models\FeeInvoice;
use App\Models\Student;
use App\models\StudentAccount;
use Illuminate\Support\Facades\DB;

class FeeInvoiceRepositry  implements FeeInvoiceInterface
{
    public function index(){

    }

    public function show($id)
    {
        $student=Student::findOrfail($id);
        $fee=Fee::where('clasroom_id',$student->clasroom_id)->get();
        return view('fee_invoice.add',compact('student','fee'));

    }
   function store($request)
   {
    $list_fees = $request->List_Fees;

    DB::beginTransaction();

    try {

        foreach ($list_fees as $list_fee) {
            // Save data in the tuition billing table
            $Fees = new FeeInvoice();
            $Fees->invoice_date = date('Y-m-d');
            $Fees->student_id = $list_fee['student_id'];
            $Fees->grade_id = $request->Grade_id;
            $Fees->classroom_id = $request->Classroom_id;;
            $Fees->fee_id = $list_fee['fee_id'];
            $Fees->amount = $list_fee['amount'];
            $Fees->description = $list_fee['description'];
            $Fees->save();

            //Save data in the student accounts table
 
            $studentAccount = new StudentAccount();
            $studentAccount->date = date('Y-m-d');
            $studentAccount->type = 'invoice';
            $studentAccount->fee_invoice_id = $Fees->id;
            $studentAccount->student_id = $list_fee['student_id'];
            $studentAccount->debit = $list_fee['amount'];
            $studentAccount->credit = 0.00;
            $studentAccount->description = $list_fee['description'];
            $studentAccount->save();
        }
    

    DB::commit();

    toastr()->success(trans('messages.success'));
    return redirect()->route('fee_invoice.index');
} catch (\Exception $e) {
    DB::rollback();
    return redirect()->back()->withErrors(['error' => $e->getMessage()]);
   }
}
function edit($id)
{
    $fee_invoices = FeeInvoice::findorfail($id);
    $fees = Fee::where('classroom_id',$fee_invoices->classroom_id)->get();
    return view('fee_invoice.edit',compact('fee_invoices','fees'));
}
function update($request)
{

    DB::beginTransaction();
    
    try {

        // Modify the data in the tuition billing table
        $fees = FeeInvoice::findorfail($request->id);
        $fees->fee_id = $request->fee_id;
        $fees->amount = $request->amount;
        $fees->description = $request->description;
        $fees->save();

        // Edit data in the student accounts table
        $studentAccount = StudentAccount::where('fee_invoice_id',$request->id)->first();
        $studentAccount->debit = $request->amount;
        $studentAccount->description = $request->description;
        $studentAccount->save();
        DB::commit();

        toastr()->success(trans('messages.Update'));
        return redirect()->route('fee_invoice.index');
    }
     catch (\Exception $e)
      {

        DB::rollback();
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }

}
function destroy($request)
{
    try {

        FeeInvoice::destroy($request->id);
        toastr()->error(trans('messages.Delete'));
        return redirect()->back();
    }

    catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}

}
   