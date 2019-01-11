<?php

class Model_buku extends CI_Model
{
    public function tambahbuku($cek)
    {

        if ($cek == true) {
            $kunci = $this->input->post('judulbuku', true) . ' | ' . $this->input->post('penulis', true) . ' | ' .
                $this->input->post('tglterbit', true) . ' | ' . $this->input->post('penerbit', true) . ' | ' .
                $this->input->post('isbn', true);

            $databbuku = [
                "judulbuku" => $this->input->post('judulbuku', true),
                "penulis" => $this->input->post('penulis', true),
                "tglterbit" => $this->input->post('tglterbit', true),
                "penerbit" => $this->input->post('penerbit', true),
                "isbn" => $this->input->post('isbn', true),
                "deskripsi" => $this->input->post('deskripsi', true),
                "kategori" => $this->input->post('kategori', true),
                "sampul" => $this->input->post('sampulbuku', true),
                "kunci" => $kunci,
                "harga" => $this->input->post('harga', true),
                "keterangan" => $this->input->post('keterangan', true)
            ];

            $this->db->insert('buku', $databbuku);
        }

        if ($cek == false) {
            $kunci = $this->input->post('judulbuku', true) . ' | ' . $this->input->post('penulis', true) . ' | ' .
                $this->input->post('tglterbit', true) . ' | ' . $this->input->post('penerbit', true) . ' | ' .
                $this->input->post('isbn', true);

            $databbuku = [
                " judulbuku " => $this->input->post('judulbuku', true),
                " penulis " => $this->input->post('penulis', true),
                " tglterbit " => $this->input->post('tglterbit', true),
                " penerbit " => $this->input->post('penerbit', true),
                " isbn " => $this->input->post('isbn', true),
                " deskripsi " => $this->input->post('deskripsi', true),
                " kategori " => $this->input->post('kategori', true),
                "sampul" => "sampuldefault.jpg",
                " kunci " => $kunci,
                " harga " => $this->input->post('harga', true),
                "keterangan" => $this->input->post('keterangan', true)
            ];

            $this->db->insert('buku', $databbuku);

        }

    }

    public function listbeli()
    {
        $this->db->order_by('dibeli', 'desc');
        // return $this->db->get('buku', 1, 10)->result();
        return $this->db->get('buku')->result();
    }

    public function listlast()
    {

        $this->db->order_by('idbuku', 'desc');
        // return $this->db->get('buku', 1, 10)->result();
        return $this->db->get('buku')->result();
    }

    public function listtrend()
    {

        $this->db->where('trending', 1);
        return $this->db->get('buku');
    }

    public function details($idbuku)
    {

        $this->db->where('idbuku', $idbuku);
        return $this->db->get('buku')->row_array();
    }

    public function pencarian($kunci2)
    {
        if ($kunci2 == 'new') {
            $this->db->order_by('idbuku', 'desc');
            return $this->db->get('buku')->result();
        }

        if ($kunci2 == 'topseller') {
            $this->db->order_by('dibeli', 'desc');
            return $this->db->get('buku')->result();
        } else {
            $kunci = str_replace('%20', ' ', $kunci2);
            $this->db->like('kunci', $kunci);
            return $this->db->get('buku')->result();
        }

    }

    public function hapusbuku($id)
    {

        $this->db->where('idbuku', $id);
        $this->db->delete('buku');
    }

    public function editbuku($cek)
    {

        if ($cek == true) {
            $kunci = $this->input->post('judulbuku', true) . ' | ' . $this->input->post('penulis', true) . ' | ' .
                $this->input->post('tglterbit', true) . ' | ' . $this->input->post('penerbit', true) . ' | ' .
                $this->input->post('isbn', true);
            $idbook = $this->input->post('idbuku');

            $databbuku = [
                "judulbuku" => $this->input->post('judulbuku', true),
                "penulis" => $this->input->post('penulis', true),
                "tglterbit" => $this->input->post('tglterbit', true),
                "penerbit" => $this->input->post('penerbit', true),
                "isbn" => $this->input->post('isbn', true),
                "deskripsi" => $this->input->post('deskripsi', true),
                "kategori" => $this->input->post('kategori', true),
                "sampul" => $this->input->post('sampulbuku', true),
                "kunci" => $kunci,
                "harga" => $this->input->post('harga', true),
                "keterangan" => $this->input->post('keterangan', true)
            ];
            $this->db->where('idbuku', $idbook);
            $this->db->update('buku', $databbuku);
        }

        if ($cek == false) {

            $kunci = $this->input->post('judulbuku', true) . ' | ' . $this->input->post('penulis', true) . ' | ' .
                $this->input->post('tglterbit', true) . ' | ' . $this->input->post('penerbit', true) . ' | ' .
                $this->input->post('isbn', true);
            $idbook = $this->input->post('idbuku');

            $databbuku = [
                " judulbuku " => $this->input->post('judulbuku', true),
                " penulis " => $this->input->post('penulis', true),
                " tglterbit " => $this->input->post('tglterbit', true),
                " penerbit " => $this->input->post('penerbit', true),
                " isbn " => $this->input->post('isbn', true),
                " deskripsi " => $this->input->post('deskripsi', true),
                " kategori " => $this->input->post('kategori', true),
                " kunci " => $kunci,
                " harga " => $this->input->post('harga', true),
                "keterangan" => $this->input->post('keterangan', true)
            ];

            $this->db->where('idbuku', $idbook);
            $this->db->update('buku', $databbuku);



        }


    }
}