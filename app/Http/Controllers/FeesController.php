<?php

namespace App\Http\Controllers;

use App\Repositry\FeesInterface;
use Illuminate\Http\Request;

class FeesController extends Controller
{
   protected $fees;
   public function __construct(FeesInterface $fees){

    $this->fees=$fees;
  
}
public function indexFees(){
return $this->fees->indexFees();
}
  public function createFees(){
    return $this->fees->createFees();
  }
  public function storeFees(Request $request){
    return $this->fees->storeFees($request);
  }
public function showFees($id){
    return $this->fees->showFees($id);
}
  public function editFees($id){
    return $this->fees->editFees($id);
  }

  public function updateFees(Request $request){
    return $this->fees->updateFees($request);
  }

  public function deleteFees(Request $request){
    return $this->fees->deleteFees($request);
  }
}
