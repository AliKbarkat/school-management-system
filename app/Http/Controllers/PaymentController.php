<?php

namespace App\Http\Controllers;

use App\models\Payment;
use App\Repositry\PaymentInterface;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $payment;
    function __construct(PaymentInterface $payment)
 {

   $this->payment=$payment;

 }
 public function index()
 {
  
    return $this->payment->index();
 
 }

 public function show($id)
 {
   
    return $this->payment->show($id);

 }
 public function store($request)
 {
  
    return $this->payment->store($request);
 
 }

 public function edit($id){
    return $this->payment->edit($id);
 }

 public function update($request)
 {
    return $this->payment->update($request);
 }

 public function destroy($request)
 {
    return $this->payment->delete($request);
 }
  
}
