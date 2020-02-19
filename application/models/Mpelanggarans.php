<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mpelanggarans extends CI_Model
{
    private $_table = "pelanggaran_siswa";
    public $id_pelanggaran;
    public $nis;
    public $tgl_plg;
    public $id_tatib;
    public $poin;
    public $ket_plg;
    public $nip;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}

/* End of file Mtatibs.php */
