<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gurus extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('Mgurus');
        $this->load->library("form_validation");
    }

    // List all your items
    public function index($offset = 0)
    {
        $data['datagurus'] = $this->Mgurus->getAll();
        $this->load->view('gurus/index', $data);
    }

    // Add a new item
    public function add()
    {
        $this->load->view('gurus/add');
    }

    public function save()
    {
        $Mgurus = $this->Mgurus;
        $Mgurus->save();
        redirect('gurus/index', 'refresh');
    }

    //Update one item
    public function edit($id = NULL)
    {
        $data['dataguru'] = $this->Mgurus->getById($id);
        $this->load->view('gurus/edit', $data);
    }

    public function update()
    {
        $Mgurus = $this->Mgurus;
        $Mgurus->aksi_update();
        // exit;
        redirect('gurus/index', 'refresh');
    }
    //Delete one item
    public function delete($id = NULL)
    {
        if (!isset($id)) show_404();

        if ($this->Mgurus->delete($id)) {
            redirect('gurus/index', 'refresh');
        }
    }
}
/* End of file Controllername.php */
