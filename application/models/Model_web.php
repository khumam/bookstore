<?php

class Model_web extends CI_Model
{

    public function profilweb()
    {
        return $this->db->get_where('web', ['id' => 1])->row_array();
    }

    public function updateWeb($cek)
    {

        if ($cek == true) {
            $dataakun = [
                "namaweb" => $this->input->post('namaweb', true),
                "deskripsiweb" => $this->input->post('deskripsiweb', true),
                "pemilikweb" => $this->input->post('pemilikweb', true),
                "logoapps" => $this->upload->data('file_name')
            ];
            $this->db->where('id', 1);
            $this->db->update('web', $dataakun);
        }

        if ($cek == false) {
            $dataakun = [
                "namaweb" => $this->input->post('namaweb', true),
                "deskripsiweb" => $this->input->post('deskripsiweb', true),
                "pemilikweb" => $this->input->post('pemilikweb', true),
            ];
            $this->db->where('id', 1);
            $this->db->update('web', $dataakun);
        }

    }

    public function listkategori()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('kategori')->result();
    }

    public function addpromo()
    {

        $datapromo = [
            "image" => $this->upload->data('file_name'),
            "title" => $this->input->post('namapromo', true),
            "slogan" => $this->input->post('slogan', true),

        ];

        $this->db->insert('promo', $datapromo);
    }

    public function listpromo()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('promo')->result();
    }

    public function hapuskategori($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kategori');
    }

    public function hapuspromo($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('promo');
    }
}