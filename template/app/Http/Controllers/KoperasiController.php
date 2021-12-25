<?php

namespace App\Http\Controllers;
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
        // var_dump($data);
        $data=$this->koperasirepositories->getUmkmPerkelas();
        $dataKlasifikasi=$this->koperasirepositories->getDataKlasifikasi();
        $dataPendidikan=$this->koperasirepositories->getDataPendidikan();
        $dataKabupaten=$this->koperasirepositories->getDataKabupaten();
        $dataEkraf=$this->koperasirepositories->getDataEkraf();
        $dataGroup=$this->koperasirepositories->getDataPerGroup();
        $dataDisabilitas=$this->koperasirepositories->getDataDisabilitas();
        return view('pages.umkm',compact('data','dataKlasifikasi','dataPendidikan','dataKabupaten','dataEkraf','dataGroup','dataDisabilitas'));
    }

    public function kopindex()
    { 
        $data =$this->koperasirepositories->getKeragaanKoperasi();
        $dataJenis =$this->koperasirepositories->getJenisKoperasi();
        return view('pages.koperasi',compact('data','dataJenis'));
    }

}
