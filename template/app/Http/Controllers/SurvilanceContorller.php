<?php

namespace App\Http\Controllers;

use App\Repositories\SurvilanecRepositories;
use Illuminate\Http\Request;

class SurvilanceContorller extends Controller
{
    //
    private $survilance;
    public function __construct (SurvilanecRepositories $survilanecRepositories) 
    {
        $this->survilance= $survilanecRepositories;
    }
    public function index () 
    {
        // dd('helo');
        $getBodyShaming= $this->survilance->getData();
       
        return view('pages.survilance',compact('getBodyShaming'));
    }
}
