<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tatibs extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('Mtatibs');
        $this->load->library("form_validation");
    }

    // List all your items
    public function index($offset = 0)
    {
        $data['tatibs'] = $this->Mtatibs->getAll();
        $this->load->view('tatibs/index', $data);
    }

    // Add a new item
    public function add()
    {
        $this->load->view('tatibs/add');
    }

    public function save()
    {
        $Mtatibs = $this->Mtatibs;
        $Mtatibs->save();
        redirect('tatibs/index', 'refresh');
    }
    public function edit($id = NULL)
    {
        $data['datatatib'] = $this->Mtatibs->getById($id);
        $this->load->view('tatibs/edit', $data);
    }

    public function update()
    {
        $Mtatibs = $this->Mtatibs;
        $Mtatibs->aksi_update();

        redirect('tatibs/index', 'refresh');
    }
    //Delete one item
    public function delete($id = NULL)
    {
        if (!isset($id)) show_404();

        if ($this->Mtatibs->delete($id)) {
            redirect('tatibs/index', 'refresh');
        }
    }
}

/* End of file Controllername.php */
