<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_buku');
        $this->load->model('Model_web');
        $this->load->model('Model_akun');
    }
    public function details($idbuku)
    {

        $data['judul'] = "Details Buku";
        $data['details'] = $this->Model_buku->details($idbuku);
        $data['web'] = $this->Model_web->profilweb();
        $data['pembeli'] = $this->Model_akun->displayakun($this->session->userdata('user'));

        if ($idbuku) {
            $this->load->view('templates/header', $data);
            $this->load->view('details/title', $data);
            $this->load->view('details/deskripsi', $data);
            $this->load->view('templates/footer', $data);
        }

    }

    public function konfdelete($idbuku)
    {
        $data['web'] = $this->Model_web->profilweb();
        $data['judul'] = "Details Buku";
        $data['details'] = $this->Model_buku->details($idbuku);

        if ($this->session->userdata('admin') == 1) {
            $this->load->view('templates/header', $data);
            $this->load->view('details/konfedit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            redirect('akun');
        }

    }

    public function delete($idbuku)
    {
        if ($this->session->userdata('admin') == 1) {

            $this->Model_buku->hapusbuku($idbuku);
            $this->session->set_flashdata('sukses', 'Berhasil menghapus data buku');
            redirect('akun');
        } else {
            redirect('home');
        }
    }
}
