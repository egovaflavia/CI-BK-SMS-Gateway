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
    public $point;

    public function SMS()
    {
        $array_fields['phone_number'] = $_POST['nohp']; // set nohp
        $array_fields['message'] = $_POST['pesan']; // set pesan
        $array_fields['device_id'] = 116051; // set device id. cek di dashboard web smsgateway.me


        // token didapat dari smsgateway.me
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU4Mzg5NTc0OCwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjc4MjkyLCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.zgqD0Xm4ceTuPyYyr59VsoMofPjBPMC7qJjPERJNaoM";

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://smsgateway.me/api/v4/message/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "[  " . json_encode($array_fields) . "]",
            CURLOPT_HTTPHEADER => array(
                "authorization: $token",
                "cache-control: no-cache"
            ),
        ));
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join($this->_tablesiswa, 'pelanggaran_siswa.nis = siswa.nis');
        $this->db->join($this->_tabletatib, 'tatatertib.id_tatib = pelanggaran_siswa.id_tatib');
        $this->db->join($this->_tableguru, 'pelanggaran_siswa.nip = guru.nip');
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
        $this->point        = $post['point'];

        return $this->db->insert($this->_table, $this); // simpan ke database
        //===================================== $this isi field yang akan di simpan 
    }


    public function uPoin()
    {
        $post = $this->input->post();
        $id = $post['nis'];
        $siswa = $this->db->get_where($this->_tablesiswa, ['nis' => $id])->row();
        $poin_pelanggaran = $post['point'];
        $poin_siswa = $siswa->point;
        $hasil = $poin_siswa - $poin_pelanggaran;

        $this->point = $hasil;
        return $this->db->query("UPDATE siswa SET point = '$hasil' WHERE nis= '$id'");
        // return $this->db->update($this->_tablesiswa, $this, array('nis' => $id));
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
