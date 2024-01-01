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
    $fees=Fee::all();
    $grades=Grade::all();
    return view('fees.index',compact('fees','grades'));
    }
    public function createFees()
    {
        $Grades=Grade::all();
        $class=ClassRoom::all();
        $section=Section::all();
        return view('fees.add_fees',compact('Grades','class','section'));
    }
 
    public function storeFees($request)
    {

    try
    {
        $fees=new Fee();
        $fees->title=['ar' => $request->title_ar ,'en' => $request->title_en ];
        $fees->ammount=$request->ammount;
        $fees->descreption=$request->descreption;
        $fees->grade_id=$request->grade_id;        
        $fees->classroom_id=$request->classroom_id;
        $fees->section_id=$request->section_id;
        $fees->year=$request->year;
        $fees->save();
        
        toastr()->success('Data has been saved successfully!');

        return redirect()->route('Fees.create');

        }catch(\Exception $e){
            return redirect()->back()->withErrors(["error" => $e->getMessage()]);

        }
    }
  
    public function editFees($id)

    {
        $fee= Fee::findOrfail($id); 
        $Grades=Grade::all();
        $class=ClassRoom::all();
        $section=Section::all();
     
       return view('fees.edit_fees',compact('Grades','fee','class','section'));
        
    }
  
    public function updateFees($request)
    {
        try{

            $fees= Fee::findOrfail($request->id);
            $fees->title=['ar' => $request->title_ar ,'en' => $request->title_en ];
            $fees->ammount=$request->ammount;
            $fees->descreption=$request->descreption;
            $fees->grade_id=$request->grade_id;        
            $fees->classroom_id=$request->classroom_id;
            $fees->section_id=$request->section_id;
            $fees->year=$request->year;
            $fees->save();
            toastr()->success('Data has been saved successfully!');

         return redirect()->route('Fees.index');

        }catch(\Exception $e){
            return redirect()->back()->withErrors(["error" => $e->getMessage()]);

        }
       
        

    }
  
    public function deleteFees($request)
    {
        $teacher= Fee::findOrFail($request->id);
        toaster()->error('the teacher not delete');
        $teacher->delete();
        return redirect()->route('teacher.index');

    }

}