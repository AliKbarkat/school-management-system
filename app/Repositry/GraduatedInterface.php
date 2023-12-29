<?php


namespace App\Repositry;

interface GraduatedInterface

{
  public function index();
  public function createGraduted();
  public function softDelete($request);
  public function returndData($request);
  public function destroy($request);

}