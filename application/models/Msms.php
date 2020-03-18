<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Msms extends CI_Model
{
    private $_table = "sms";
    public $nis;
    public $nohp;
    public $pesan;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function save()
    {
        $post        = $this->input->post();  // ambil data dari form 
        $this->nis   = $post['nis'];
        $this->nohp  = $post['nohp'];
        $this->pesan = $post['pesan'];

        $array_fields['phone_number'] = $post['nohp']; // set nohp
        $array_fields['message'] = $post['pesan']; // set pesan
        $array_fields['device_id'] = 116051; // set device id. cek di dashboard web smsgateway.me


        // token didapat dari smsgateway.me
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU4NDUwMzQ4NiwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjc4MjkyLCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.A3OA1oiOdflNYotXhjZ9nSqsElWm-_Hfo6Q-ty0T6ck";

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
        return $this->db->insert($this->_table, $this); // simpan ke database
        //===================================== $this isi field yang akan di simpan 
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_sms" => $id));
    }
}

/* End of file Mtatibs.php */
