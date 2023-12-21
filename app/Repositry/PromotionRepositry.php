<?php

namespace App\Repositry;

class PromotionRepositry implements PromotionInterface
{
  function getPromotion(){
    return 'index';
  }
  function storePromotion($request){
return 'store';
  }
  function editPromotion($id){
return'edite';
  }
  function promotionUpdate($request){
return 'update';
  }
  function deletePromotion($id){
return 'delete';
  }

}