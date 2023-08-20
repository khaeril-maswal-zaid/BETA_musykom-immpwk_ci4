<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\FormaturModel;
use App\Models\BiliksuaraModel;

class AdminProses extends BaseController
{
    protected $session;

    protected $adminmodel;
    protected $formaturmodel;
    protected $biliksuaramodel;

    public function __construct()
    {
        $this->session = session();

        $this->adminmodel = new AdminModel;
        $this->formaturmodel = new FormaturModel();
        $this->biliksuaramodel = new BiliksuaraModel();

        if ($this->session->get("adminlogin")) {

            //Ambil id admin login untuk queri
            $id = $this->session->get("adminlogin");
            $this->adminlogin = $this->adminmodel->where('id', $id)->first();
        }
    }
    //--------------------------------------------------------


    //Proses Login Admin
    //........................................................
    public function proseslogin()
    {
        $this->adminmodel = new AdminModel();

        if ($this->request->getVar('csrf_test_name')) {

            $username = stripcslashes($this->request->getVar('username'));
            $password = stripcslashes($this->request->getVar('password'));

            $numRows = $this->adminmodel->where('username', $username)->countAllResults();

            // Cek username
            if ($numRows === 1) {

                $row = $this->adminmodel->where('username', $username)->first();

                // cek password
                if (password_verify($password, $row['password'])) {

                    // jika berhasil login set session
                    $this->session->set('adminlogin', $row['id']);

                    return redirect()->to(URL . 'admin/' . url_title($row['nama'], '-', true));
                    exit;
                } else {
                    session()->setFlashdata('akunSalah', ['Password anda salah !', 'danger']);
                    return redirect()->to(URL . 'admin');
                    exit;
                }
            } //Jika username salah
            else {
                session()->setFlashdata('akunSalah', ['Username anda tidak ditemukan !', 'danger']);
                return redirect()->to(URL . 'admin');
                exit;
            }
        }
    }

    public function startBiliksuara()
    {
        $dataformatur = $this->formaturmodel->findAll();

        $this->biliksuaramodel->truncate();

        foreach ($dataformatur as $furmaturs) {
            $this->biliksuaramodel->save([
                'id' => '',

                'nama'  => $furmaturs['nama'],
                'nim'  => $furmaturs['nim'],
                'angkatan'  => $furmaturs['angkatan'],
            ]);
        }


        // dd($this->biliksuaramodel->findAll(), $dataformatur);
    }
}
