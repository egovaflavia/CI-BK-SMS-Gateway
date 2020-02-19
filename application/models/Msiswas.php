<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Msiswas extends CI_Model
{
    private $_table = "siswa";
    public $nis;
    public $ta;
    public $nm_siswa;
    public $kelas;
    public $jekel;
    public $alamat;
    public $no_hp_ortu;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function save()
    {
        $post = $this->input->post(); // ambil data dari form 
        $this->nis = $post['nis'];
        $this->ta = $post['ta'];
        $this->nm_siswa = $post['nama'];
        $this->kelas = $post['kelas'];
        $this->jekel = $post['jekel'];
        $this->alamat = $post['alamat'];
        $this->no_hp_ortu = $post['no_hp'];

        return $this->db->insert($this->_table, $this); // simpan ke database
        //===================================== $this isi field yang akan di simpan 
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("nis" => $id));
    }
}

/* End of file Mtatibs.php */
