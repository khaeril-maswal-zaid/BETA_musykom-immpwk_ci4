<?php

namespace App\Controllers;

use App\Models\FormaturModel;
use App\Models\PemilihModel;

class Home extends BaseController
{
    protected $formaturmodel;
    protected $pemilihmodel;

    protected $templatelayout;
    protected $classbody;

    public function __construct()
    {
        $this->formaturmodel = new FormaturModel();
        $this->pemilihmodel = new PemilihModel();

        $this->templatelayout = ['layout/nav-admin', 'layout/footer-admin'];
        $this->classbody = 'admin';
    }
    //--------------------------------------------------------


    //Tampilan pemilihan 13 Formatur
    //........................................................
    public function index($data)
    {
        //Tangkap data NIM dari URL di Qris 
        $numRow = $this->pemilihmodel->where('nim', $data)->countAllResults();

        //Apakah nim ada di Database
        if ($numRow != 1) {
            echo 'Anda tidak terdaftar sebagai peserta pemilih.';
            return false;
        }

        //cek status pilih, jika 'true/1' maka telah meemilih
        $dataRow = $this->pemilihmodel->where('nim', $data)->first();

        if ($dataRow['statuspilih'] === '1') {
            echo 'Terima Kasih, Anda telah menggunakan hak pilih anda.';
            return false;
        }

        $data = [
            'title'             => 'SIPFOKIAT',
            'templatelayout'    =>  ['layout/nav-pages', 'layout/footer-pages'],
            'classbody'         =>  'home',

            'datapemilih'       => $dataRow,
            'calonformatur'     => $this->formaturmodel->findAll()
        ];

        return view('home/index', $data);
    }
}
