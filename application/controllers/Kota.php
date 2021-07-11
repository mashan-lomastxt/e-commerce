<?php

class Kota extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Mcrud');
	}

	public function index() {
		$data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
		$this->template->load('layout_admin','admin/kota/index', $data);
	}

	public function add() {
		$this->template->load('layout_admin','admin/kota/form_add');
	}

	public function save() {
		$namaKota = $this->input->post('namaKota');
		$dataInsert = array('namaKota' => $namaKota);
		$this->Mcrud->insert('tbl_kota', $dataInsert);
		redirect('kota');
	}

	public function getid($id) {
		$dataWhere = array('idKota' => $id);
		$data['kota'] = $this->Mcrud->get_by_id('tbl_kota', $dataWhere)->row_object();
		$this->template->load('layout_admin','admin/kota/form_edit', $data);
	}

	public function edit() {
		$id = $this->input->post('id');
		$namaKota = $this->input->post('namaKota');
		$dataUpdate = array('namaKota' => $namaKota);
		$this->Mcrud->update('tbl_kota', $dataUpdate, 'idKota', $id);
		redirect('kota');	
	}

	public function delete($id) {
		$this->Mcrud->delete('tbl_kota', 'idKota', $id);
		$this->session->set_flashdata('notif', 'Berhasil dihapus Say');
        redirect('kota');
	}
}