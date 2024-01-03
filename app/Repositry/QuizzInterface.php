<?php


namespace App\Repositry;

interface QuizzInterface{
    public function index();
    public function show($id);
    public function store($request);
}