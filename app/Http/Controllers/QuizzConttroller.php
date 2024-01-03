<?php

namespace App\Http\Controllers;

use App\Repositry\QuizzInterface;
use Illuminate\Http\Request;

class QuizzConttroller extends Controller
{
    protected $quizz;
    public function __construct(QuizzInterface $quizz)
    {
      $this->quizz=$quizz;
    }
    public function index()
    {
        return $this->quizz->index();
    }
    public function show(){

    }
    public function create(){
      return $this->quizz->create();
    }
    public function store(Request $request){
      return $this->quizz->store($request);
    }

    public function edit($id){
      return $this->quizz->edit($id);
    }
    public function update(Request $request){
      return $this->quizz->update($request);
    }
    public function destroy(){

    }
}
