<?php


namespace App\Repositry;

interface QuestionInterface

{
    public function index();
    public function show($id);
    public function create();
    public function store($request);
    public function edit($id);
    public function update($request);
}