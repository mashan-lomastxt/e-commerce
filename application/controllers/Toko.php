<?php

class Toko extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mfrontend');
        $this->load->model('Mtoko');
    }

    public function main($idToko){
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['namaToko'] = $this->Mtoko->get_toko($idToko)->row_object();
        $this->template->load('layout_frontend', 'frontend/toko_home', $data);
    }

    public function produk($idToko){
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['namaToko'] = $this->Mtoko->get_toko($idToko)->row_object();
        $data['produk'] = $this->Mtoko->get_produk_by_toko($idToko)->result_array();
        $this->template->load('layout_frontend', 'frontend/toko_produk', $data);
    }

    public function create_produk($idToko){
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['namaToko'] = $this->Mtoko->get_toko($idToko)->row_object(;
        $data['idToko'] = $idToko;
        $this->template->load('layout_frontend', 'frontend/toko_create_produk', $data);
    }
}