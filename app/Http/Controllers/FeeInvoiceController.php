<?php

namespace App\Http\Controllers;

use App\Repositry\FeeInvoiceInterface;
use Illuminate\Http\Request;

class FeeInvoiceController extends Controller
{
    protected $fee_invoice;
    public function __construct(FeeInvoiceInterface $fee_invoice){
 
     $this->fee_invoice=$fee_invoice;
   
 }

public function show($id){
    return $this->fee_invoice->show($id);
}
}
