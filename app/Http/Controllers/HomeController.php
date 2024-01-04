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
    // public function index()
    // {
    //     return view('dashboard');
    // }
    public function empty(){
        return view('empty');
    }
}
