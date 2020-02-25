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
    public function edit($id = NULL)
    {
        $data['datauser'] = $this->Musers->getById($id);
        $this->load->view('users/edit', $data);
    }

    public function update($id = NULL)
    {
        $Musers = $this->Musers;
        $Musers->aksi_update();

        redirect('users/index', 'refresh');
    }

    //Delete one item
    public function delete($id = NULL)
    {
        if (!isset($id)) show_404();

        if ($this->Musers->delete($id)) {
            redirect('users/index', 'refresh');
        }
    }
}

/* End of file Controllername.php */
