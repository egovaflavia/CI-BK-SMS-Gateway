<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mbimbingans extends CI_Model
{
    private $_table = "bimbingan_siswa";
    public $id_bimbingan;
    public $nis;
    public $tg_bim;
    public $permasalahan;
    public $penyelesaian;
    public $ket_bim;
    public $nip;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function save()
    {
        $post               = $this->input->post();   // ambil data dari form 
        $this->nis          = $post['nis'];
        $this->tg_bim       = $post['tg_bim'];
        $this->permasalahan = $post['permasalahan'];
        $this->penyelesaian = $post['penyelesaian'];
        $this->ket_bim      = $post['ket_bim'];
        $this->nip          = $post['nip'];

        return $this->db->insert($this->_table, $this); // simpan ke database
        //==================================== $this isi field yang akan di simpan 
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_bimbingan" => $id));
    }
}

/* End of file Mtatibs.php */
