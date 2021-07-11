<?php

class Kurir extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Mcrud');
	}

	public function index() {
		$data['kurir'] = $this->Mcrud->get_all_data('tbl_kurir')->result();
		$this->template->load('layout_admin','admin/kurir/index', $data);
	}

	public function add() {
		$this->template->load('layout_admin','admin/kurir/form_add');
	}

	public function save() {
		$namaKurir = $this->input->post('namaKurir');
		$dataInsert = array('namaKurir' => $namaKurir);
		$this->Mcrud->insert('tbl_kurir', $dataInsert);
		redirect('kurir');
	}

	public function getid($id) {
		$dataWhere = array('idKurir' => $id);
		$data['kurir'] = $this->Mcrud->get_by_id('tbl_kurir', $dataWhere)->row_object();
		$this->template->load('layout_admin','admin/kurir/form_edit', $data);
	}

	public function edit() {
		$id = $this->input->post('id');
		$namaKurir = $this->input->post('namaKurir');
		$dataUpdate = array('namaKurir' => $namaKurir);
		$this->Mcrud->update('tbl_kurir', $dataUpdate, 'idKurir', $id);
		redirect('kurir');	
	}

	public function delete($id) {
		$this->Mcrud->delete('tbl_kurir', 'idKurir', $id);
		$this->session->set_flashdata('notif', 'Berhasil dihapus Say');
        redirect('kurir');

	}
}