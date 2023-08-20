<?php

namespace App\Controllers;

use App\Models\PemilihModel;
use App\Models\BiliksuaraModel;
use App\Models\FormaturModel;

class UserProses extends BaseController
{
    protected $pemilihmodel;
    protected $biliksuaramodel;
    protected $formaturmodel;

    public function __construct()
    {
        $this->pemilihmodel = new PemilihModel();
        $this->biliksuaramodel = new BiliksuaraModel();
        $this->formaturmodel = new FormaturModel();
    }
    //--------------------------------------------------------


    //Tampilan pemilihan 13 Formatur
    //........................................................
    public function ProsesPemilihan()
    {
        $jumlahformatur = count($this->request->getVar()) - 3;
        if ($jumlahformatur != 13) {
            echo 'Pastikan Memilih 13 Formatur!, Proses Gagal. Ulangi !!!';
            die;
        }

        if ($this->request->getVar('csrf_test_name')) {

            $imp = implode('*||*', $this->request->getVar());
            $data = explode('*||*', $imp);



            for ($i = 2; $i < 15; $i++) {
                $this->biliksuaramodel->save([
                    'id'            => '',

                    'nama'       =>  $this->formaturmodel->select('nama')->where('nim', $data[$i])->first(),
                    'nim'        =>  $data[$i],
                    'angkatan'   =>  $this->formaturmodel->select('angkatan')->where('nim', $data[$i])->first()
                ]);
            }

            $this->pemilihmodel->save([
                'id'            => $this->request->getVar('idpemilih'),
                'statuspilih'   => '1'
            ]);

            //session()->setFlashdata('alert', 'Terima kasih telah menggunakan hak pilih anda');

            return redirect()->to(URL . $this->request->getVar('nim'));
        }
    }
}
