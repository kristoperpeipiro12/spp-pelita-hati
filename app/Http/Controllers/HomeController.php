<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\authorize;


class HomeController extends Controller
{
    
    public function index()
    {
        return view('dashboard.dashboard');
    }
   
}
