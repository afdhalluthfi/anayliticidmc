<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\KoperasiRepositories;

class KoperasiController extends Controller
{
    //
    private $koperasirepositories;
    public function __construct (KoperasiRepositories $koperasirepositories) 
    {
        $this->koperasirepositories =$koperasirepositories;
    }


    public function index () 
    {
        $data=$this->koperasirepositories->getUmkmPerkelas();
        // var_dump($data);
        return view('pages.koperasi',compact('data'));
    }

}
