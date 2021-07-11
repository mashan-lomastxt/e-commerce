<?php

class Home extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mfrontend');
        $this->load->model('Mcrud');
    }

    public function index(){
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['produkbaru'] = $this->Mcrud->get_product_limit(4)->result();
        $this->template->load('layout_frontend','frontend/home', $data);
    }

    public function register(){
        $data['kota']=$this->Mfrontend->get_all_kota()->result();
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $this->template->load('layout_frontend','frontend/register', $data);
    }

    public function act_reg(){
       $this->load->library('form_validation');

       $this->form_validation->set_rules('namaKonsumen','Nama','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('password_confirm','Password_confirm','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('kota','kota','required');
        $this->form_validation->set_rules('no_telpon','No_telpon','required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('/home/register');
        } else {

        $nama = $this->input->post('namaKonsumen');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');
        $alamat = $this->input->post('alamat');
        $kota = $this->input->post('kota');
        $no_telpon = $this->input->post('no_telpon');
        $data=array(

        'username' =>$username,
        'password' =>$password,
        'namaKonsumen' =>$nama,
        'alamat' =>$alamat,
        'idkota' =>$kota,
        'email' =>$email,
        'tlpn' =>$no_telpon,
        'statusAktif'=>'Y' );
        $this->Mfrontend->input_data($data, 'tbl_member');
        redirect('home/login');
        
    }
}

    public function login() {
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $this->template->load('layout_frontend','frontend/login', $data);
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }    
}