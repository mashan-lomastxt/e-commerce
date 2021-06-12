<?php

class Home extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Mfrontend');
    }

    public function index(){
        //$data['kota'] = $this->Mfrontend->get_all_kota()->result();
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $this->template->load('layout_frontend','frontend/home', $data);
    }
}