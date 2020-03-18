<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggarans extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('Mpelanggarans');
        $this->load->library("form_validation");
    }

    // List all your items
    public function index($offset = 0)
    {
        $data['datapelanggarans'] = $this->Mpelanggarans->getAll();
        $this->load->view('pelanggarans/index', $data);
    }
    public function persiswa()
    {
        $data['datapelanggarans'] = $this->Mpelanggarans->getAllPerSiswa();
        // var_dump($data['datapelanggarans']);
        // exit;
        $this->load->view('pelanggarans/persiswa', $data);
    }
    public function save()
    {
        $Mpelanggarans = $this->Mpelanggarans;
        $Mpelanggarans->uPoin();
        $Mpelanggarans->save();

        // Add a new item
        redirect('pelanggarans/index', 'refresh');
    }
    public function add()
    {
        $data['datasiswas'] = $this->Mpelanggarans->getAllSiswa();
        $data['datagurus'] = $this->Mpelanggarans->getAllGuru();
        $data['datatatibs'] = $this->Mpelanggarans->getAllTatib();
        $this->load->view('pelanggarans/add', $data);
    }

    //Update one item
    public function edit($id = NULL)
    {
        $data['datapelanggaran'] = $this->Mpelanggarans->getById($id);
        $data['datasiswas'] = $this->Mpelanggarans->getAllSiswa();
        $data['datagurus'] = $this->Mpelanggarans->getAllGuru();
        $this->load->view('pelanggarans/edit', $data);
    }

    public function update()
    {
        $Mpelanggarans = $this->Mpelanggarans;
        $Mpelanggarans->aksi_update();

        redirect('pelanggarans/index', 'refresh');
    }

    //Delete one item
    public function delete($id = NULL)
    {
        if (!isset($id)) show_404();

        if ($this->Mpelanggarans->delete($id)) {
            redirect('pelanggarans/index', 'refresh');
        }
    }
}

/* End of file Controllername.php */
