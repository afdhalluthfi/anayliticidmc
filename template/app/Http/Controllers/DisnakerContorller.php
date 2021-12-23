<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisnakerContorller extends Controller
{
    //
    public function index () 
    {
        return view('pages.koperasi');
    }
}
