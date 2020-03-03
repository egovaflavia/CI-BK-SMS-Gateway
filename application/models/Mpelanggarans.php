<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mpelanggarans extends CI_Model
{
    private $_table = "pelanggaran_siswa";
    private $_tablesiswa = "siswa";
    private $_tabletatib = "tatatertib";
    private $_tableguru = "guru";
    public $id_pelanggaran;
    public $nis;
    public $tgl_plg;
    public $id_tatib;
    public $ket_plg;
    public $nip;

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join($this->_tablesiswa, 'pelanggaran_siswa.nis = siswa.nis');
        $this->db->join($this->_tabletatib, 'tatatertib.id_tatib = pelanggaran_siswa.id_tatib');
        $this->db->join($this->_tableguru, 'guru.nip = guru.nip');
        return $this->db->get()->result();
        return $this->db->get($this->_table)->result();
    }
    public function getAllSiswa()
    {
        return $this->db->get($this->_tablesiswa)->result();
    }
    public function getAllTatib()
    {
        return $this->db->get($this->_tabletatib)->result();
    }
    public function getAllGuru()
    {
        return $this->db->get($this->_tableguru)->result();
    }
    public function save()
    {
        $post               = $this->input->post();   // ambil data dari form 
        $this->nis          = $post['nis'];
        $this->tgl_plg      = $post['tgl_plg'];
        $this->id_tatib     = $post['id_tatib'];
        $this->ket_plg      = $post['ket_plg'];
        $this->nip          = $post['nip'];

        return $this->db->insert($this->_table, $this); // simpan ke database
        //===================================== $this isi field yang akan di simpan 
    }
    public function aksi_update()
    {
        $post = $this->input->post(); // ambil data dari form 

        $this->nis            = $post['nis'];
        $this->tgl_plg        = $post['tgl_plg'];
        $this->id_tatib       = $post['id_tatib'];
        $this->ket_plg        = $post['ket_plg'];
        $this->nip            = $post['nip'];
        $this->id_pelanggaran = $post['id'];
        // var_dump($post);
        // exit;

        $this->db->update($this->_table, $this, array('id_pelanggaran' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pelanggaran" => $id));
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_pelanggaran' => $id])->row();
    }
}

/* End of file Mtatibs.php */
