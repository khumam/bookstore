<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Model_akun');
        $this->load->model('Model_web');
        $this->load->model('Model_buku');


    }

    public function index()
    {
        $data['judul'] = "LL Store";
        $data['web'] = $this->Model_web->profilweb();
        $data['topseller'] = $this->Model_buku->listbeli();
        $data['added'] = $this->Model_buku->listlast();
        // $data['trend'] = $this->Model_buku->listtrend();
        $data['kategori'] = $this->Model_web->listkategori();
        $data['promo'] = $this->Model_web->listpromo();

        $this->load->view('templates/header', $data);
        $this->load->view('home/slide', $data);
        $this->load->view('home/topseller', $data);
        $this->load->view('home/newadded', $data);
        $this->load->view('home/kategori', $data);
        $this->load->view('templates/footer', $data);
    }

    public function login()
    {
        $data['judul'] = "Login";
        $data['web'] = $this->Model_web->profilweb();
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('home/login');
            $this->load->view('templates/footer', $data);

        } else {

            $pengguna = $this->input->post('username');
            $pass = md5($this->input->post('password'));
            $cek = $this->Model_akun->validasiLogin($pengguna, $pass);
            $admin = $this->Model_akun->displayAkun($pengguna);
            $ya = $admin['is_admin'];

            if ($cek == true) {

                $login = [
                    "user" => $pengguna,
                    "log" => "logged",
                    "admin" => $ya
                ];

                $this->session->set_userdata($login);
                $this->session->set_flashdata('sukseslogin', 'Selamat datang di toko kami!');
                redirect('home');
            }

            if ($cek == false) {
                $this->session->set_flashdata('erorlogin', 'Username atau Password salah');
                redirect('home/login');
            }
        }


    }

    public function register()
    {
        $data['judul'] = "Register";
        $data['web'] = $this->Model_web->profilweb();
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|alpha_dash');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('ulangipassword', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('home/daftar');
            $this->load->view('templates/footer', $data);

        } else {

            $cek = $this->Model_akun->insertNewAkun();

            if ($cek == true) {
                $this->session->set_flashdata('sukses', 'Silahkan masuk untuk mulai menggunakan aplikasi');
                redirect('home/login');
            }

            if ($cek == false) {
                $this->session->set_flashdata('erordaftar', 'Username sudah digunakan, silahkan coba yang lain.');
                redirect('home/register');
            }


        }


    }

    public function logout()
    {
        $this->Model_akun->logout();
        redirect('home/index');
    }

}
