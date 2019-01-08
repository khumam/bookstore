<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{
    public function details()
    {
        $data['judul'] = "Details Buku";
        $this->load->view('templates/header', $data);
        $this->load->view('details/title');
        $this->load->view('details/deskripsi');
        $this->load->view('details/komentar');
        $this->load->view('templates/footer');
    }
}
