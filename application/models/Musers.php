<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Musers extends CI_Model
{
    private $_table = "users";
    public $id_user;
    public $username;
    public $password;
    public $nama;
    public $jabatan;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function save()
    {
        $post = $this->input->post(); // ambil data dari form 
        $this->username = $post['username'];
        $this->password = $post['password'];
        $this->nama = $post['nama'];
        $this->jabatan = $post['jabatan'];

        return $this->db->insert($this->_table, $this); // simpan ke database
        //===================================== $this isi field yang akan di simpan 
    }

    public function aksi_update()
    {
        $post = $this->input->post(); // ambil data dari form 

        $this->username = $post['username'];
        $this->password = $post['password'];
        $this->nama = $post['nama'];
        $this->jabatan = $post['jabatan'];
        // $this->id_user = $post['id'];


        return $this->db->update($this->_table, $this, array('id_user' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_user" => $id));
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_user' => $id])->row();
    }
    public function doLogin()
    {
        $post = $this->input->post();
        // cari user berdasakan email dan username
        $this->db->where('username', $post["username"]);

        $user = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if ($user) {
            // periksa password nya
            $isPasswordTrue = $post["password"] ==  $user->password;
            // jika password benar dan dia admin
            if ($isPasswordTrue) {
                // login sukses yay
                $this->session->set_userdata(['user_logged' => $user]);
                return true;
            }
        }
        // jika login gagal
        return false;
    }

    public function isNotLogin()
    {
        return $this->session->userdata('user_logged') === null;
    }
}

/* End of file Musers.php */
