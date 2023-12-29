<?php


namespace App\Repositry;

interface PromotionInterface

{

  public function getPromotion();
  public function createPromotion();
  public function storePromotion($request);

  public function editPromotion($id);

  public function promotionUpdate($request);

  public function deletePromotion($id);

}