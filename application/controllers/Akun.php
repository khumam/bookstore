<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_akun');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Akun";

        if ($this->session->userdata('log') == 'logged') {
            $user = $this->session->userdata('user');
            $data['pengguna'] = $this->Model_akun->displayAkun($user);

            $this->load->view('templates/header', $data);
            $this->load->view('akun/dashboard', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('home/index');
        }

    }

    public function editakun()
    {

        if ($this->session->userdata('log') == 'logged') {

            $user = $this->session->userdata('user');
            $data['pengguna'] = $this->Model_akun->displayAkun($user);
            $data['judul'] = "Edit akun";

            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('nohp', 'No HP', 'required|numeric|min_length[8]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[8]');

            if ($this->form_validation->run() == false) {


                $this->load->view('templates/header', $data);
                $this->load->view('akun/editakun', $data);
                $this->load->view('templates/footer');
            } else {
                $this->Model_akun->updateAkun($user);
                $this->session->set_flashdata('sukses', 'Data berhasil diubah');
                redirect('akun/index');
            }


        } else {
            redirect('home/index');
        }
    }

    public function admin()
    {
        $data['judul'] = "Admin";

        if ($this->session->userdata('admin') == 1) {

            $data['pengguna'] = $this->Model_akun->displayAkun($this->session->userdata('user'));
            $this->load->view('templates/header', $data);
            $this->load->view('akun/admin', $data);
            $this->load->view('akun/admin-apps');
            $this->load->view('akun/admin-addbuku');
            $this->load->view('templates/footer');

        } else {
            redirect('akun/index');
        }

    }
}