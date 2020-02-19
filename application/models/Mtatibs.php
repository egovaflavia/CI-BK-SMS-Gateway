<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mtatibs extends CI_Model
{
    private $_table = "tatatertib";
    public $tatib;
    public $b_poin;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function save()
    {
        $post = $this->input->post(); // ambil data dari form 
        $this->tatib = $post['tatib'];
        $this->b_poin = $post['b_poin'];

        return $this->db->insert($this->_table, $this); // simpan ke database
        //===================================== $this isi field yang akan di simpan 
    }
}

/* End of file Mtatibs.php */
