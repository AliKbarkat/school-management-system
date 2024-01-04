<?php
namespace App\Repositry;

interface LibraryInterface
{
    public function index();
    public function download($id);
    public function create();
    public function edit($id);
    public function store($request);
    public function delete($id);
    public function update($request);
}