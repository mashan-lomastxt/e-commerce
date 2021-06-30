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
    public function register(){
        $data['kota'] = $this->Mfrontend->get_all_kota()->result();
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $this->template->load('layout_frontend','frontend/register', $data);
    }
    public function login(){
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $this->template->load('layout_frontend','frontend/login', $data);
    }
    public function act_reg(){
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('nama','NamaKonsumen','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required|min_lenght[8]');
        $this->form_validation->set_rules('password_confirm','Password_confirm','trim|required|min_lenght[8]');
        $this->form_validation->set_rules('alamat','Alamat','trim|required');
        $this->form_validation->set_rules('kota','kota','trim|required');
        $this->form_validation->set_rules('tlpn','Tlpn','trim|required');


       

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('frontend/register');
        }
        else
        {
            $nama = $this->input->post('namaKonsumen');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $alamat= $this->input->post('alamat');
            $kota= $this->input->post('kota');
            $no_telpon = $this->input->post('tlpn');
            $data=array(
                
                'username' =>$username,
                'password' =>$password,
                'namaKonsumen' =>$nama,
                'alamat' =>$alamat,
                'idkota' =>$kota,
                'email' =>$email,
                'tlpn' =>$no_telpon,
                'statusAktif'=>'Y'
            );
            $this->Mfrontend->input_data($data,'tbl_member');

        redirect('home/login');
        }     
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
    
}
 ?>