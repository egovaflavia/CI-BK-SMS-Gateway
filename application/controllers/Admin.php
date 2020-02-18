<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $this->load->view('overview');
    }

    // public function home()
    // {
    //     echo "home";
    // }
}

/* End of file Admin.php */
