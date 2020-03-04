<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Musers");
        if ($this->Musers->isNotLogin()) redirect('login');
    }
    public function index()
    {
        $this->load->view('overview');
    }
}

/* End of file Admin.php */
