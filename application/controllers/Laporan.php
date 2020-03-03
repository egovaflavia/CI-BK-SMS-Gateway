<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('Msiswas');
        $this->load->library("form_validation");
    }

    // List all your items
    public function siswa($offset = 0)
    {
        $data['datasiswas'] = $this->Msiswas->getAll();
        $this->load->view('laporan/siswa', $data);
    }
}
/* End of file Controllername.php */
