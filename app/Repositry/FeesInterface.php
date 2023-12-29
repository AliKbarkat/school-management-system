<?php


namespace App\Repositry;

interface FeesInterface

{

  public function indexFees();
  
  public function createFees();

  public function storeFees($request);

  public function showFees($id);

  public function editFees($id);

  public function updateFees($request);

  public function deleteFees($id);

}