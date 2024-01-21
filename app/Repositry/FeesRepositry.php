<?php
namespace App\Repositry;

use App\Models\ClassRoom;
use App\models\Fee;
use App\Models\Grade;
use App\Models\Section;
use App\Repositry\FeesInterface;
use Illuminate\Support\Facades\DB;


class FeesRepositry  implements FeesInterface
{

    public function indexFees()
    {

        $fees = Fee::all();
        $grades = Grade::all();
        return view('fees.index',compact('fees','grades'));
    
    }

    public function createFees()
    {

        $grades = Grade::all();
        $class = ClassRoom::all();
        $section = Section::all();
        return view('fees.add_fees',compact('grades','class','section'));
    
    }
 
    public function storeFees($request)
    {

        
    try
    {
        $fees = new Fee();
        $fees -> title = ['ar' => $request -> title_ar ,'en' => $request -> title_en ];
        $fees -> ammount = $request -> ammount;
        $fees -> tybe = $request -> tybe;
        $fees -> grade_id = $request -> grade_id;        
        $fees -> classroom_id = $request -> classroom_id;
        $fees -> section_id = $request -> section_id;
        $fees -> year = $request -> year;
        $fees -> descreption = $request -> descreption;
        $fees -> save();
        
        toastr()->success('Data has been saved successfully!');

        return redirect()->route('fees.index');

        }catch(\Exception $e){
            return redirect()->back()->withErrors(["error" => $e->getMessage()]);

        }
    }
  
    public function editFees($id)

    {
        $fee = Fee::findOrfail($id); 
        $grades = Grade::all();
        $class = ClassRoom::all();
        $section = Section::all();
     
       return view('fees.edit_fees' , compact('grades' , 'fee' , 'class' , 'section'));
        
    }
  
    public function updateFees($request)
    {
        try{

            $fees = Fee::findOrfail($request -> id);
            $fees -> title = ['ar' => $request->title_ar ,'en' => $request->title_en ];
            $fees -> ammount = $request -> ammount;
            $fees -> descreption = $request -> descreption;
            $fees -> grade_id = $request -> grade_id;        
            $fees -> classroom_id = $request -> classroom_id;
            $fees -> section_id = $request -> section_id;
            $fees -> year = $request -> year;
            $fees -> tybe = $request -> tybe;
            
            $fees->save();
            toastr()->success('Data has been saved successfully!');

         return redirect()->route('fees.index');

        }catch(\Exception $e){
            return redirect()->back()->withErrors(["error" => $e->getMessage()]);

        }
       
        

    }
  
    public function deleteFees($request)
    {
        $delete_fee = Fee::findOrFail($request->id);
        $delete_fee->delete();

        toastr()->error('the teacher not delete');
        return redirect()->back();
    }

}