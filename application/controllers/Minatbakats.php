<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Minatbakats extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('Mminatbakats');
        $this->load->library("form_validation");
    }

    // List all your items
    public function index($offset = 0)
    {
        $data['dataminatbakats'] = $this->Mminatbakats->getAll();
        $this->load->view('minatbakats/index', $data);
    }
    public function save()
    {
        $Mminatbakats = $this->Mminatbakats;
        $Mminatbakats->save();

        redirect('minatbakats/index', 'refresh');
    }
    public function add()
    {
        $data['datasiswas'] = $this->Mminatbakats->getAllSiswa();
        $data['datagurus'] = $this->Mminatbakats->getAllGuru();
        $this->load->view('minatbakats/add', $data);
    }
    //Update one item
    public function edit($id = NULL)
    {
        $data['dataminatbakat'] = $this->Mminatbakats->getById($id);
        $this->load->view('minatbakats/edit', $data);
    }

    public function update()
    {
        $Mminatbakats = $this->Mminatbakats;
        $Mminatbakats->aksi_update();

        redirect('minatbakats/index', 'refresh');
    }
    public function delete($id = NULL)
    {
        if (!isset($id)) show_404();

        if ($this->Mminatbakats->delete($id)) {
            redirect('minatbakats/index', 'refresh');
        }
    }
}

/* End of file Controllername.php */
