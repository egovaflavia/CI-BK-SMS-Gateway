<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Musers extends CI_Model
{
    private $_table = "users";
    public $username;
    public $password;
    public $nama;
    public $jabatan;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}

/* End of file Musers.php */
