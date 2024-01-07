<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('auth.selection');
    }
    public function dashboard()
    {
         return view('dashboard');
    }
    public function empty(){
        return view('empty');
    }
  public function studentDashboard() {
        return view('students.dashboard');
  }
}
