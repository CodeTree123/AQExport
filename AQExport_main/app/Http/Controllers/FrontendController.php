<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    public function header()
    {
        return view('header');
    }
    public function footer()
    {
        return view('footer');
    }
}
