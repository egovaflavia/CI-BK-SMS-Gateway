<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Siswas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('Msiswas');
        $this->load->library("form_validation");
    }

    // List all your items
    public function index($offset = 0)
    {
        $data['datasiswas'] = $this->Msiswas->getAll();
        $this->load->view('siswas/index', $data);
    }

    // Add a new item
    public function add()
    {
        $this->load->view('siswas/add');
    }

    public function save()
    {
        $Msiswas = $this->Msiswas;
        $Msiswas->save();
        redirect('siswas/index', 'refresh');
    }

    //Update one item
    public function update($id = NULL)
    {
    }

    //Delete one item
    public function delete($id = NULL)
    {
    }
}

/* End of file Controllername.php */
