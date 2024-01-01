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
public function index(){
return $this->fees->indexFees();
}
  public function create(){
    return $this->fees->createFees();
  }
  public function store(Request $request){
    return $this->fees->storeFees($request);
  }

  public function edit($id){
  
   return $this->fees->editFees($id);
 
 
  }

  public function update(Request $request){
    return $this->fees->updateFees($request);
  }

  public function delete(Request $request){
    return $this->fees->deleteFees($request);
  }
}
