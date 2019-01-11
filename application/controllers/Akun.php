<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_akun');
        $this->load->model('Model_web');
        $this->load->model('Model_buku');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Akun";
        $data['web'] = $this->Model_web->profilweb();
        if ($this->session->userdata('log') == 'logged') {
            $user = $this->session->userdata('user');
            $data['pengguna'] = $this->Model_akun->displayAkun($user);

            $this->load->view('templates/header', $data);
            $this->load->view('akun/dashboard', $data);
            $this->load->view('templates/footer', $data);
        }
        if ($this->session->userdata('admin') == 1) {
            redirect('akun/admin');
        } else {
            redirect('home');
        }

    }

    public function editakun()
    {
        $data['web'] = $this->Model_web->profilweb();
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
                $this->load->view('templates/footer', $data);

            } else {

                $config['upload_path'] = './assets/img/userimg';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['min_width'] = '150';
                $config['min_height'] = '150';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('fotoprofil')) {
                    //$erorupload = array('uploaddata' => $this->upload->display_errors());
                    //$this->session->set_flashdata('eroredit', $erorupload);

                    $this->Model_akun->updateAkun($user, false);
                    $this->session->set_flashdata('sukses', 'Data berhasil diubah');

                    if ($this->session->userdata['admin'] == 1) {
                        redirect('akun/admin');
                    } else {
                        redirect('akun/index');
                    }
                } else {

                    $this->Model_akun->updateAkun($user, true);
                    $this->session->set_flashdata('sukses', 'Data berhasil diubah');

                    if ($this->session->userdata['admin'] == 1) {
                        redirect('akun/admin');
                    } else {
                        redirect('akun/index');
                    }

                }


            }


        } else {
            redirect('home/index');
        }
    }

    public function admin()
    {
        $data['judul'] = "Admin";
        $data['web'] = $this->Model_web->profilweb();
        $data['kat'] = $this->Model_web->listkategori();
        $data['pro'] = $this->Model_web->listpromo();
        if ($this->session->userdata('admin') == 1) {

            $data['pengguna'] = $this->Model_akun->displayAkun($this->session->userdata('user'));
            $this->load->view('templates/header', $data);
            $this->load->view('akun/admin', $data);
            $this->load->view('akun/admin-apps', $data);
            $this->load->view('akun/admin-addbuku', $data);
            $this->load->view('akun/admin-editkategori', $data);
            $this->load->view('akun/admin-promo', $data);
            $this->load->view('templates/footer', $data);


        } else {
            redirect('akun/index');
        }

    }

    public function admin_editapps()
    {
        $data['judul'] = "Edit apps";
        $data['web'] = $this->Model_web->profilweb();

        $this->form_validation->set_rules('namaweb', 'Nama Web', 'required');
        $this->form_validation->set_rules('pemilikweb', 'Pemilik Web', 'required');
        $this->form_validation->set_rules('deskripsiweb', 'Deskripsi Web', 'required');

        if ($this->form_validation->run() == false) {

            if ($this->session->userdata('admin') == 1) {
                $this->load->view('templates/header', $data);
                $this->load->view('akun/admin_editapps', $data);
                $this->load->view('templates/footer', $data);
            } else {
                redirect('home/index');
            }

        } else {

            if ($this->session->userdata('admin') == 1) {

                $config['upload_path'] = './assets/img/weblogo';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['min_width'] = '150';
                $config['min_height'] = '150';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('logoapps')) {

                    $this->Model_web->updateWeb(false);
                    $this->session->set_flashdata('sukses', 'Berhasil mengubah data');
                    redirect('akun/admin');

                } else {
                    $this->Model_web->updateWeb(true);
                    $this->session->set_flashdata('sukses', 'Berhasil mengubah data');
                    redirect('akun/admin');
                }


            } else {
                redirect('home/index');
            }
        }


    }

    public function tambahkat()
    {

        if ($this->session->userdata('admin') == 1) {

            $tombol = $this->input->post('editkategori');

            if ($tombol) {

                $kat = [
                    "nama" => $this->input->post('namakategori', true),
                    "ikon" => $this->input->post('ikonkategori', true),
                ];

                $query = $this->db->insert('kategori', $kat);

                if ($query) {
                    $this->session->set_flashdata('sukses', 'Sukses menambahkan kategori');
                    redirect('akun/admin');
                }
                if (!$query) {
                    $this->session->set_flashdata('gagal', 'Gagal menambahkan kategori');
                }

            }

            if (!$tombol) {
                redirect('akun');
            }

        } else {
            redirect('akun');
        }

    }

    public function tambahbuku()
    {

        $tombol = $this->input->post('tambahbuku');

        if ($this->session->userdata['admin'] == 1) {

            if ($tombol) {

                $this->load->model('Model_buku');
                $config['upload_path'] = './assets/img/sampulbuku/';
                $config['allowed_types'] = 'jpg|png|jpeg';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('sampulbuku')) {
                    $this->Model_buku->tambahbuku(false);
                    $this->session->set_flashdata('sukses', 'Berhasil menambahkan buku, sampul tidak ditambahkan');
                    redirect('akun/admin');
                } else {
                    $this->Model_buku->tambahbuku(true);
                    $this->session->set_flashdata('sukses', 'Berhasil menambahkan data buku');
                    redirect('akun/admin');
                }
            } else {
                redirect('akun');
            }
        } else {
            redirect('home');
        }

    }

    public function editbuku($idbuku)
    {

        if ($this->session->userdata('admin') == 1) {
            $data['judul'] = "Edit Buku";
            $data['details'] = $this->Model_buku->details($idbuku);
            $data['web'] = $this->Model_web->profilweb();
            $data['kat'] = $this->Model_web->listkategori();

            $this->load->view('templates/header', $data);
            $this->load->view('akun/admin-editbuku', $data);
            $this->load->view('templates/footer', $data);
        }



    }

    public function editbook()
    {

        $tombol = $this->input->post('editbuku');

        if ($this->session->userdata['admin'] == 1) {

            if ($tombol) {

                $this->load->model('Model_buku');
                $config['upload_path'] = './assets/img/sampulbuku/';
                $config['allowed_types'] = 'jpg|png|jpeg';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('sampulbuku')) {
                    //$erorupload = array('uploaddata' => $this->upload->display_errors());
                    //$this->session->set_flashdata('eroredit', $erorupload);

                    $this->Model_buku->editbuku(false);
                    $this->session->set_flashdata('sukses', 'Berhasil mengedit data buku, sampul tidak diubah');
                    redirect('akun/admin');
                } else {
                    $this->Model_buku->editbuku(true);
                    $this->session->set_flashdata('sukses', 'Berhasil mengedit data buku');
                    redirect('akun/admin');
                }
            } else {
                redirect('akun');
            }
        } else {
            redirect('home');
        }
    }

    public function tambahpromo()
    {

        $tombol = $this->input->post('editpromo');

        if ($this->session->userdata['admin'] == 1) {

            if ($tombol) {

                $this->load->model('Model_buku');
                $config['upload_path'] = './assets/img/promo/';
                $config['allowed_types'] = 'jpg|png|jpeg';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('background')) {
                    //$erorupload = array('uploaddata' => $this->upload->display_errors());
                    //$this->session->set_flashdata('eroredit', $erorupload);

                    $this->session->set_flashdata('eroredit', 'Gagal menambah promo, pastikan upload background');
                    redirect('akun/admin');
                } else {
                    $this->Model_web->addpromo();
                    $this->session->set_flashdata('sukses', 'Berhasil menambah promo');
                    redirect('akun/admin');
                }
            } else {
                redirect('akun');
            }
        } else {
            redirect('home');
        }
    }

    public function hapuskategori($id)
    {
        if ($this->session->userdata('admin') == 1) {
            $this->Model_web->hapuskategori($id);
            $this->session->set_flashdata('sukses', 'Berhasil menghapus kategori');
            redirect('akun/admin');
        } else {
            redirect('home');
        }
    }

    public function hapuspromo($id)
    {
        if ($this->session->userdata('admin') == 1) {
            $this->Model_web->hapuspromo($id);
            $this->session->set_flashdata('sukses', 'Berhasil menghapus promo');
            redirect('akun/admin');
        } else {
            redirect('home');
        }
    }
}