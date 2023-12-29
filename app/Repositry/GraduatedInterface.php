<?php


namespace App\Repositry;

interface GraduatedInterface

{

  public function getGraduted();
  public function createGraduted();
  public function storeGraduted($request);

  public function editGraduted($id);

  public function GradutedUpdate($request);

  public function deleteGraduted($id);

}