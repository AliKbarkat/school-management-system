<?php

namespace App\Http\Controllers;

use App\Repositry\ProcessingFeeInterface;
use Illuminate\Http\Request;

class ProcessingFeeController extends Controller
{
    protected $prossing;
    function __construct(ProcessingFeeInterface $prossing)
 {

   $this->prossing=$prossing;

 }

    public function index(){
        
    }

    public function show($id){
        
    }
    public function store($request){
        
    }

    public function edit($id){
        
    }

    public function update($request){
        
    }

    public function delete($request){
        
    }
}
