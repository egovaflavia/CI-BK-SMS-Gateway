<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sms extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('Msms');
        $this->load->model('Msiswas');
        $this->load->library("form_validation");
    }

    // List all your items
    public function index($offset = 0)
    {
        $data['datasmss'] = $this->Msms->getAll();
        $this->load->view('sms/index', $data);
    }

    // Add a new item
    public function add()
    {
        $data['datasiswas'] = $this->Msiswas->getAll();
        $this->load->view('sms/add', $data);
    }

    public function save()
    {
        $Msms = $this->Msms;
        $Msms->save();
        redirect('sms/index', 'refresh');
    }

    //Delete one item
    public function delete($id = NULL)
    {
        if (!isset($id)) show_404();

        if ($this->Msms->delete($id)) {
            redirect('sms/index', 'refresh');
        }
    }
}
/* End of file Controllername.php */
