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
    public function save()
    {
        $Mpelanggarans = $this->Mpelanggarans;
        $Mpelanggarans->save();
        // Add a new item
        redirect('pelanggarans/index', 'refresh');
    }
    public function add()
    {
        $this->load->view('pelanggarans/add');
    }

    //Update one item
    public function update($id = NULL)
    {
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
