<?php

class Kategori extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Mcrud');
	}

	public function index() {
		$data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
		$this->template->load('layout_admin','admin/kategori/index', $data);
	}

	public function add() {
		$this->template->load('layout_admin','admin/kategori/form_add');
	}

	public function save() {
		$namaKategori = $this->input->post('namaKategori');
		$dataInsert = array('namaKat' => $namaKategori);
		$this->Mcrud->insert('tbl_kategori', $dataInsert);
		redirect('kategori');
	}

	public function getid($id) {
		$dataWhere = array('idKat' => $id);
		$data['kategori'] = $this->Mcrud->get_by_id('tbl_kategori', $dataWhere)->row_object();
		$this->template->load('layout_admin','admin/kategori/form_edit', $data);
	}

	public function edit() {
		$id = $this->input->post('id');
		$namaKategori = $this->input->post('namaKategori');
		$dataUpdate = array('namaKat' => $namaKategori);
		$this->Mcrud->update('tbl_kategori', $dataUpdate, 'idKat', $id);
		redirect('kategori');	
	}

	public function delete($id) {
		$this->Mcrud->delete('tbl_kategori', 'idkat', $id);
		$this->session->set_flashdata('notif', 'Berhasil dihapus Say');
        redirect('kategori');
	}
}