<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpegController extends Controller
{
    //
    public function index () 
    {
        return view('pages.koperasi');
    }
}
