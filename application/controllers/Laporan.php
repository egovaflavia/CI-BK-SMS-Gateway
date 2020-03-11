<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('Msiswas');
        $this->load->model('Mbimbingans');
        $this->load->model('Mpelanggarans');
        $this->load->model('Mminatbakats');
        $this->load->library("form_validation");
    }

    public function index($offset = 0)
    {
        $this->load->view('laporan/index');
    }


    // List all your items
    public function siswa($offset = 0)
    {
        $data['datasiswas'] = $this->Msiswas->getAll();
        $this->load->view('laporan/siswa', $data);
    }

    public function bimbingan($offset = 0)
    {
        $data['databimbingans'] = $this->Mbimbingans->getAll();
        // var_dump($data['datasiswas']);
        // exit;
        // $data['databimbingans'] = $this->Mbimbingans->getAll();
        $this->load->view('laporan/bimbingan', $data);
    }
    public function pelanggaran($offset = 0)
    {
        $data['datapelanggarans'] = $this->Mpelanggarans->getAll();
        // var_dump($data['datasiswas']);
        // exit;
        // $data['databimbingans'] = $this->Mbimbingans->getAll();
        $this->load->view('laporan/pelanggaran', $data);
    }
    public function minatbakat($offset = 0)
    {
        $data['dataminatbakats'] = $this->Mminatbakats->getAll();
        // var_dump($data['datasiswas']);
        // exit;
        // $data['databimbingans'] = $this->Mbimbingans->getAll();
        $this->load->view('laporan/minatbakat', $data);
    }
}
/* End of file Controllername.php */
