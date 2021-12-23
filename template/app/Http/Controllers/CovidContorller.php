<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CovidContorller extends Controller
{
    public function index () 
    {
        return view('pages.koperasi');
    }
}
