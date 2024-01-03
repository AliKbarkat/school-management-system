<?php


namespace App\Repositry;
class SubjectRepositry implements SubjectInterface{
    public function index(){
        return "This is from the Subject Repository";
    }

    public function show($id){
        //return $this->model->findOrFail($id);
        
    }
    public function create(){
     /* if(!empty(request()->all())){*/
    }
    public function store($request){
        /* $subject = new \App\Models\Subject();*/
        
    }

    public function edit($id){
        /*  $subject= $this->show($id);*/
        
    }

    public function update($request){
        /* $subject =$this->show($request->id);*/
        
    }

    public function delete($request){
        /*  $subject=$this->show($request->id);*/
        
    }
}