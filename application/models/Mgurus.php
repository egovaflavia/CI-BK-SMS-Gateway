<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mgurus extends CI_Model
{
    private $_table = "guru";
    public $nip;
    public $nm_guru;
    public $jabatan;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function save()
    {
        $post = $this->input->post(); // ambil data dari form 
        $this->nm_guru = $post['nm_guru'];
        $this->jabatan = $post['jabatan'];
        $this->nip = $post['nip'];

        return $this->db->insert($this->_table, $this); // simpan ke database
        //===================================== $this isi field yang akan di simpan 
    }
    public function aksi_update()
    {
        $post = $this->input->post(); // ambil data dari form 

        $this->nm_guru = $post['nm_guru'];
        $this->jabatan = $post['jabatan'];
        $this->nip = $post['nip'];

        return $this->db->update($this->_table, $this, array('nip' => $post['nip']));
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("nip" => $id));
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['nip' => $id])->row();
    }
}

/* End of file Mtatibs.php */
