<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Musers extends CI_Model
{
    private $_table = "users";
    public $id_user;
    public $username;
    public $password;
    public $nama;
    public $jabatan;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function save()
    {
        $post = $this->input->post(); // ambil data dari form 
        $this->username = $post['username'];
        $this->password = $post['password'];
        $this->nama = $post['nama'];
        $this->jabatan = $post['jabatan'];

        return $this->db->insert($this->_table, $this); // simpan ke database
        //===================================== $this isi field yang akan di simpan 
    }
}

/* End of file Musers.php */
