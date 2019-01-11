<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cari extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_web');
        $this->load->model('Model_buku');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['judul'] = "Cari Buku";
        $data['web'] = $this->Model_web->profilweb();

        $this->load->view('templates/header', $data);
        $this->load->view('cari/cari');
        $this->load->view('templates/footer', $data);
    }

    public function hasil($idbuku)
    {
        $data['judul'] = "Cari Buku";
        $data['web'] = $this->Model_web->profilweb();
        $data['key'] = str_replace('%20', ' ',$idbuku);
        $data['hasil'] = $this->Model_buku->pencarian($idbuku);

        $this->load->view('templates/header', $data);
        $this->load->view('cari/hasil', $data);
        $this->load->view('templates/footer', $data);
    }

    public function proses()
    {

        $tombol = $this->input->post('cari');

        if ($tombol) {
            $key = $this->input->post('cari', true);

            redirect("cari/hasil/$key");
        } else {
            redirect('cari');
        }
    }
}
