<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('Musers');
        $this->load->library("form_validation");
    }

    // List all your items
    public function index($offset = 0)
    {
        $data['datausers'] = $this->Musers->getAll();
        $this->load->view('users/index', $data);
    }

    // Add a new item
    public function add()
    {
        $this->load->view('users/add');
    }

    public function simpan()
    {
        $Musers = $this->Musers;
        $Musers->save();

        redirect('users/index', 'refresh');
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