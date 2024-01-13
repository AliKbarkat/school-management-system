<?php

namespace App\Http\Controllers;

use App\Repositry\FeeInvoiceInterface;
use Illuminate\Http\Request;

class FeeInvoiceController extends Controller
{
    protected $fee_invoice;
    public function __construct(FeeInvoiceInterface $fee_invoice){
 
     $this->fee_invoice = $fee_invoice;
   
    }


    public function index()
    {

        return $this->fee_invoice->index();
    
    }

    public function show($id)
    {
        
        return $this->fee_invoice->show($id);

    }
    public function store($request)
    {
        return $this->fee_invoice->store($request);

    }

    public function edit($id)
    {
       
        return $this->fee_invoice->edit($id);

    }

    public function update($request)
    {
        return $this->fee_invoice->update($request);

    }

    public function destroy($request)
    {
        return $this->fee_invoice->destroy($request);

    }
}
