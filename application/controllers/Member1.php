<?php

class Member1 extends CI_Controller{

	function __construct(){
		
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Mfrontend');
		$this->load->model('M_member');
	}

	public function act_login(){
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$cek = $this->M_member->cek_login($u,$p)->num_rows();
		$result = $this->M_member->cek_login($u,$p)->result();
		$result[0]->idKonsumen;

		if($cek==1){
			$data_session=array(
				'username'=>$u,
				'id'=> $result[0]->idKonsumen,
				'status' =>'login'
			);
			$this->session->set_userdata($data_session);
			redirect('member1');
		}
		else{
			$this->session->set_flashdata('pesan','username/ Password Tidak Sesuai');
			redirect('home/login');
		}
	}

	public function index(){
		$data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
		$this->template->load('layout_frontend','frontend/user_menu', $data);
	}

	public function transaksi(){
		$data['kategori']=$this->Mfrontend->get_all_kategori()->result();
		$this->template->load('layout_frontend','frontend/member_transaksi', $data);
	}

	public function riwayat_transaksi(){
		$data['kategori']=$this->Mfrontend->get_all_kategori()->result();
		$this->template->load('layout_frontend','frontend/member_transaksi', $data);
	}

	public function toko(){
		$data['kategori']=$this->Mfrontend->get_all_kategori()->result();
		$data['toko'] = $this->M_member->get_toko_by_member()->result();
		$this->template->load('layout_frontend','frontend/member_toko', $data);
	}

	public function create_toko(){
		$data['kategori']=$this->Mfrontend->get_all_kategori()->result();
		$this->template->load('layout_frontend','frontend/form_create_toko', $data);
	}

	public function insert_toko(){
		$id = $this->session->user_data('id');
		$nama_toko = $this->input->post('nama_toko');
		$deskripsi = $this->input->post('deskripsi');

		$config['upload_path'] = './upload_logo_toko/';
		$config['allowed_types'] = 'jpg|png|jpeg';

		$this->load->library('upload', $config);

		if($this->upload->do_upload('logo_toko')){
			$data_file = $this->upload->data();

			$data_insert=array('idKonsumen' => $id,
								'nama_toko' => $nama_toko,
								'logo' => $data_file['file_nama'],
								'deskripsi' => $deskripsi,
								'statussktif' => 'Y');
			$thid->M_member->insert_toko($data_insert);
			redirect('member/toko');
		}
		else {
			redirect('member/create_toko');
		}
	}

	
}