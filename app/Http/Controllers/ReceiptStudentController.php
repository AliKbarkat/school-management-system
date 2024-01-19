<?php

namespace App\Http\Controllers;

use App\Repositry\ReceiptStudentIntrface;
use Illuminate\Http\Request;

class ReceiptStudentController extends Controller
{
      protected $receipt;
    public function __construct(ReceiptStudentIntrface $receipt)
    {

      $this -> receipt = $receipt;
    
    }

    public function index()
    {

      return $this->receipt->index();

    }
 
    public function show($id)
 
    {
      
      return $this->receipt->show($id);
    
    }

    public function store($request)
    {

      return $this->receipt->store($request);

    }
    
    public function update($request)
    {

    }

}
