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
    try{


        }catch(\Exception $e){

        }
    }
  
    public function editFees($id)
    {
        return view('fees.edit_fees');
    }
  
    public function updateFees($request)
    {

    }
  
    public function deleteFees($id)
    {

    }

}