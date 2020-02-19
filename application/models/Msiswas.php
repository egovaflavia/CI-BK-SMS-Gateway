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
}

/* End of file Mtatibs.php */
