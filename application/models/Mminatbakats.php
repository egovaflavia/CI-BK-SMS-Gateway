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
}

/* End of file Mtatibs.php */
