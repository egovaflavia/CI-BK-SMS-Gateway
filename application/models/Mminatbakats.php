<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mminatbakats extends CI_Model
{
    private $_table = "minat_bakat";
    public $id_mb;
    public $nis;
    public $tgl_mb;
    public $minat;
    public $bakat;
    public $ket_mb;
    public $nip;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function save()
    {
        $post               = $this->input->post();   // ambil data dari form 
        $this->nis          = $post['nis'];
        $this->tgl_mb        = $post['tgl_mb'];
        $this->minat         = $post['minat'];
        $this->bakat         = $post['bakat'];
        $this->ket_mb          = $post['ket_mb'];
        $this->nip             = $post['nip'];

        return $this->db->insert($this->_table, $this); // simpan ke database
        //===================================== $this isi field yang akan di simpan 
    }
    public function aksi_update()
    {
        $post = $this->input->post(); // ambil data dari form 

        $this->nis          = $post['nis'];
        $this->tgl_mb        = $post['tgl_mb'];
        $this->minat         = $post['minat'];
        $this->bakat         = $post['bakat'];
        $this->ket_mb          = $post['ket_mb'];
        $this->nip             = $post['nip'];
        $this->id_mb           = $post['id'];

        $this->db->update($this->_table, $this, array('id_mb' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_mb" => $id));
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_mb' => $id])->row();
    }
}

/* End of file Mtatibs.php */
