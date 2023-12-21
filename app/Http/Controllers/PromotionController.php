<?php

namespace App\Http\Controllers;

use App\Repositry\PromotionInterface;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PromotionController extends Controller
{
    protected $promotion;
 function __construct(PromotionInterface $promotion)

 {

   $this->promotion=$promotion;

 }

public function index() 

{

    return $this->promotion->getPromotion();

}

public function create() 
{
   return view();
}
public function store(Request $request)
{
    return $this->promotion->storePromotion($request);
}

public function edit()
{
} 
public function update()
{
}
public function destroy()
{
}
}
