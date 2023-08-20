<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\FormaturModel;
use App\Models\PemilihModel;
use App\Models\BiliksuaraModel;

class Admin extends BaseController
{
    protected $session;

    protected $adminmodel;
    protected $formaturmodel;
    protected $pemilihmodel;
    protected $biliksuaramodel;

    public function __construct()
    {
        $this->session = session();

        $this->adminmodel = new AdminModel();
        $this->formaturmodel = new FormaturModel();
        $this->pemilihmodel = new PemilihModel();
        $this->biliksuaramodel = new BiliksuaraModel();

        $this->templatelayout = ['layout/nav-admin', 'layout/footer-admin'];
        $this->classbody = 'admin';

        //Jika sesi admin aktif ambil
        if ($this->session->get("adminlogin")) {
            //Ambil id admin login untuk queri
            $id = $this->session->get("adminlogin");
            $this->adminlogin = $this->adminmodel->where('id', $id)->first();
        }
    }
    //--------------------------------------------------------


    //Tampilan pemilihan 13 Formatur
    //........................................................
    public function index()
    {
        // echo (password_hash("mufakat165", PASSWORD_DEFAULT));
        // die;

        $data = [
            'title' => 'Admin | Login',
            'templatelayout' =>  ['layout/nav-pages', 'layout/footer-pages'],
            'classbody' =>  'home'
        ];

        echo view('admin/index/index', $data);

        hapussession($this->session, 'adminlogin');
    }

    public function home()
    {
        if (!$this->session->get("adminlogin")) {
            return redirect()->to(URL . 'admin');
        }


        $data = [
            'title' => "Admin | " . $this->adminlogin['nama'],
            'templatelayout' =>  $this->templatelayout,
            'classbody' =>  $this->classbody,

            'adminlogin' => $this->adminlogin,
        ];

        return view('admin/home/home', $data);
    }

    public function hasilPemilihan()
    {
        if (!$this->session->get("adminlogin")) {
            return redirect()->to(URL . 'admin');
        }

        $hasilsuara = $this->biliksuaramodel->select('nim')->findAll();
        $jumlahsuara = $this->biliksuaramodel->select('nim')->countAllResults();

        $row = [];

        for ($i = 0; $i < $jumlahsuara; $i++) {
            $row[] = $hasilsuara[$i]['nim'];
        }

        $imp = implode('*||*', $row);
        $exp = explode('*||*', $imp);

        $unique = array_unique($exp);  // belum tergunkan
        $countvalues = array_count_values($exp);

        $data = [
            'title' => "Admin | " . $this->adminlogin['nama'],
            'templatelayout' =>  $this->templatelayout,
            'classbody' =>  $this->classbody,

            'adminlogin' => $this->adminlogin,

            'calonformatur'   => $this->formaturmodel->findAll(),
            'hasilpemilihan'  => [$countvalues, $unique],
            'datacard'    => [
                $this->pemilihmodel->countAllResults(),
                $jumlahsuara - $this->formaturmodel->countAllResults(), //Jumlah suara - jumlah formatur
                $this->pemilihmodel->where('statuspilih', '1')->countAllResults(),
                $this->pemilihmodel->where('statuspilih', '0')->countAllResults()
            ]
        ];

        return view('admin/hasilpemilihan/index', $data);
    }

    public function dataPemilihan()
    {
        if (!$this->session->get("adminlogin")) {
            return redirect()->to(URL . 'admin');
        }

        $data = [
            'title' => "Admin | " . $this->adminlogin['nama'],
            'templatelayout' =>  $this->templatelayout,
            'classbody' =>  $this->classbody,

            'adminlogin' => $this->adminlogin,
            'datapemilih' => $this->pemilihmodel->findAll(),
        ];

        return view('admin/dtbpemilih/index', $data);
    }

    public function dataFormatur()
    {
        if (!$this->session->get("adminlogin")) {
            return redirect()->to(URL . 'admin');
        }

        $data = [
            'title' => "Admin | " . $this->adminlogin['nama'],
            'templatelayout' =>  $this->templatelayout,
            'classbody' =>  $this->classbody,

            'adminlogin' => $this->adminlogin,
            'dataformatur' => $this->formaturmodel->findAll(),
        ];

        return view('admin/dtbformatur/index', $data);
    }
}
