<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mbimbingans extends CI_Model
{
    private $_table = "bimbingan_siswa";
    private $_tablesiswa = "siswa";
    private $_tableguru = "guru";
    public $id_bimbingan;
    public $nis;
    public $tg_bim;
    public $permasalahan;
    public $penyelesaian;
    public $ket_bim;
    public $nip;

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join($this->_tablesiswa, 'bimbingan_siswa.nis = siswa.nis');
        $this->db->join($this->_tableguru, 'bimbingan_siswa.nip = guru.nip');
        return $this->db->get()->result();
    }

    public function getAllSiswa()
    {
        return $this->db->get($this->_tablesiswa)->result();
    }

    public function getAllPerSiswa()
    {
        $nis = $this->session->userdata('user_logged')->username;
        // return $this->db->get_where($this->_table, array('nis' => $nis))->result();
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join($this->_tablesiswa, 'bimbingan_siswa.nis = siswa.nis');
        $this->db->join($this->_tableguru, 'bimbingan_siswa.nip = guru.nip');
        $this->db->where('bimbingan_siswa.nis', $nis);
        return $this->db->get()->result();
    }


    public function getAllGuru()
    {
        return $this->db->get($this->_tableguru)->result();
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
    public function aksi_update()
    {
        $post = $this->input->post(); // ambil data dari form 

        $this->nis          = $post['nis'];
        $this->tg_bim       = $post['tg_bim'];
        $this->permasalahan = $post['permasalahan'];
        $this->penyelesaian = $post['penyelesaian'];
        $this->ket_bim      = $post['ket_bim'];
        $this->nip          = $post['nip'];
        $this->id_bimbingan = $post['id'];
        // var_dump($post);
        // exit;

        $this->db->update($this->_table, $this, array('id_bimbingan' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_bimbingan" => $id));
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_bimbingan' => $id])->row();
    }
}

/* End of file Mtatibs.php */
