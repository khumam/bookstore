<?php

class Model_akun extends CI_Model
{

    public function insertNewAkun()
    {

        $dataakun = [
            "username" => $this->input->post('username', true),
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "password" => md5($this->input->post('password', true)),
            "gambar" => 'defaultuseravatarbest.png',
        ];

        $this->db->where('username', $dataakun['username']);
        $query = $this->db->get('user');

        if ($query->num_rows() == 1) {
            return false;
        } else {
            $this->db->insert('user', $dataakun);
            return true;
        }
    }

    public function updateAkun($user, $valid)
    {

        if ($valid == true) {
            $dataakun = [
                "nama" => $this->input->post('nama', true),
                "email" => $this->input->post('email', true),
                "nohp" => $this->input->post('nohp', true),
                "alamat" => $this->input->post('alamat', true),
                "gambar" => $this->upload->data('file_name')
            ];

            $this->db->where('username', $user);
            $this->db->update('user', $dataakun);
        }

        if ($valid == false) {
            $dataakun = [
                "nama" => $this->input->post('nama', true),
                "email" => $this->input->post('email', true),
                "nohp" => $this->input->post('nohp', true),
                "alamat" => $this->input->post('alamat', true),
            ];

            $this->db->where('username', $user);
            $this->db->update('user', $dataakun);
        }

    }

    public function displayAkun($username)
    {

        return $this->db->get_where('user', ['username' => $username])->row_array();

    }

    public function validasiLogin($pengguna, $pass)
    {

        $this->db->where('username', $pengguna);
        $this->db->where('password', $pass);
        $query = $this->db->get('user');

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function logout()
    {
        $userdata = ['user', 'log', 'admin'];
        $this->session->unset_userdata($userdata);
    }
}