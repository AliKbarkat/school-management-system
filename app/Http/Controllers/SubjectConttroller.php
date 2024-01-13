<?php

namespace App\Http\Controllers;

use App\Repositry\SubjectInterface;
use Illuminate\Http\Request;

class SubjectConttroller extends Controller
{
    protected $subject;
    function __construct(SubjectInterface $subject)
    {
        $this->subject = $subject;
    }
    public function index()
    {
    
        return $this->subject->index();
    
    }
   
    public function create()
    {
    
        return $this->subject->create();
    
    }
    public function store(Request $request)
    {
    
        return $this->subject->store($request);
    
    }
    public function update(Request $request)
    {
    
        return $this->subject->update($request);
    
    }
    public function destroy($request)
    {
    
        return $this->subject->destroy($request);
    
    }
}
