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
    public function aksi_update()
    {
        $post = $this->input->post(); // ambil data dari form 

        $this->tatib = $post['tatib'];
        $this->b_poin = $post['b_poin'];
        $this->id_tatib = $post['id'];

        return $this->db->update($this->_table, $this, array('id_tatib' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_tatib" => $id));
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_tatib' => $id])->row();
    }
}

/* End of file Mtatibs.php */
