<?php

namespace App\Http\Controllers;

use App\Repositry\LibraryInterface;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    protected $library;
    public function __construct(LibraryInterface $library)
    {
          $this->library=$library;
    }
    public function index(){
        return $this->library->index();
    }
    public function download($id){
        return $this->library->download($id);
    }
    public function create(){
        return $this->library->create();
        
    }
    public function edit($id){
        // return $this->library->edit($id);
        
    }
    public function store($request){
        return $this->library->store($request);
        
    }
    public function delete($id){
        return $this->library->delete($id);
        
    }
    public function update($request){
        return $this->library->update($request);
        
    }
}
