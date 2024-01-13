<?php

namespace App\Http\Controllers;

use App\Repositry\LibraryInterface;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    protected $library;
    public function __construct(LibraryInterface $library)
    {
          $this->library = $library;
    }
    public function index()
    {

        return $this->library->index();
    
    }
    public function create()
    {
    
        return $this->library->create();
        
    }
  
    public function store($request)
    {
        return $this->library->store($request);
        
    }
   
    public function edit($id)
    {
       return $this->library->edit($id);
        
    }
    
    public function update($request)
    {
        return $this->library->update($request);
        
    }

    
    public function delete($request)
    {
        return $this->library->delete($request);
        
    }
   
    public function download($id)
    {
    
        return $this->library->download($id);
    
    }
}
