<?php

namespace App\Http\Controllers;

use App\Repositry\AttendanceInterface;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    protected $attendance;
    public function __construct(AttendanceInterface $attendance)
    {

      $this->attendance = $attendance;
    
    }

    public function index()
    {
     
        return $this->attendance->index();
    
    }

    public function show($id)
    {
     
        return $this->attendance->show($id);
    
    }

    public function store(Request $request)
    {
     
        return $this->attendance->store($request);
    
    }
}
