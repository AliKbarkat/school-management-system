<?php

namespace App\Http\Controllers;

use App\Repositry\GraduatedInterface;
use Illuminate\Http\Request;

class GraduatedController extends Controller
{
    protected $graduted;
    public function __construct(GraduatedInterface $graduted){
        $this->graduted=$graduted;
    }
  public function index(){
    return $this->graduted->index();
  }
public function create(){
    return $this->graduted->createGraduted();
}
public function store(Request $request){
 
    return $this->graduted->softDelete($request);   
}
public function update(Request $request) {

    return $this->graduted->returndData($request);
}

 public function destroy(Request $request)
 {

    return $this->graduted->destroy($request);
}

}
