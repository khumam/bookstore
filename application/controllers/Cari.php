<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cari extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Cari Buku";
        $this->load->view('templates/header', $data);
        $this->load->view('cari/cari');
        $this->load->view('templates/footer');
    }

    public function hasil()
    {
        $data['judul'] = "Cari Buku";
        $this->load->view('templates/header', $data);
        $this->load->view('cari/hasil');
        $this->load->view('templates/footer');
    }
}
