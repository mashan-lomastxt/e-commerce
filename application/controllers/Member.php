<?php 
 
class Member extends CI_Controller{  
  
    function __construct(){
        parent::__construct();
        $this->load->model('Mfrontend');
        $this->load->model('Mmember');
    }

    function act_login(){
        $u= $this->input->post('username');
        $p= $this->input->post('password');
        $cek = $this->Mmember->cek_login($u,$p)->num_rows();
        $result = $this->Mmember->cek_login($u, $p)->result();
        
        
        if($cek==1){
            $data_session= array(
                'username'=> $u, 
                'id'=>$result[0]->idKonsumen,
                'status'=>'login' );
        $this->session->set_userdata($data_session);
        redirect('member/index');
        }
        else{
            $this->load->view('pesan_login');
            $this->session->set_flashdata('pesan','Username/Password Tidak Sesuai');
            
            redirect('home/login');
        }
    }
    public function cek_login($u, $p){
        $q = $this->db->get_where('tbl_member', array('userName'=>$u, 'password'=>$p));
        return $q;
    }

     
    public function index(){
        //$data['kota'] = $this->Mfrontend->get_all_kota()->result();
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $this->template->load('layout_frontend','frontend/user_menu', $data);
    }
    public function transaksi(){
        //$data['kota'] = $this->Mfrontend->get_all_kota()->result();
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $this->template->load('layout_frontend','frontend/member_transaksi', $data);
    }

    public function menu(){
        //$data['kota'] = $this->Mfrontend->get_all_kota()->result();
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $this->template->load('layout_frontend','frontend/menu_member', $data);
    }
    public function toko(){
        //$data['kota'] = $this->Mfrontend->get_all_kota()->result();
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        
        $this->template->load('layout_frontend','frontend/member_toko', $data);
    }
    public function buattoko(){
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        
        $this->template->load('layout_frontend','frontend/form_create_toko', $data);
    }
 
}