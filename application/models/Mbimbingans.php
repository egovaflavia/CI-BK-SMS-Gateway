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
}

/* End of file Mtatibs.php */
