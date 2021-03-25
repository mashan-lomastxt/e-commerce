<?php

class Kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
    }

    public function index()
    {
        $data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
        $this->template->load('layout_admin', 'admin/kategori/index', $data);
    }

    public function add()
    {
        $this->template->load('layout_admin', 'admin/kategori/form_add');
    }

    public function simpan()
    {
        $datakat = $this->input->post('namakat');
        $dataInsert = array('namakat' => $datakat);
        $this->Mcrud->insert('tbl_kategori', $dataInsert);
        redirect('kategori');
    }

    public function getid($id)
    {
        $datawhere = array('idkat' => $id);
        $data['kategori'] = $this->Mcrud->get_by_id('tbl_kategori', $datawhere)->row_object();
        $this->template->load('layout_admin', 'admin/kategori/form_edit', $data);
    }

    public function edit()
    {
        $id = $this->input->post('idkat');
        $namaKategori = $this->input->post('namakat');

        $dataUpdate = array('namakat' => $namaKategori);
        $this->Mcrud->update('tbl_kategori', $dataUpdate, 'idkat', $id);

        redirect('kategori');
    }

    public function delete($id)
    {
        $this->Mcrud->delete('tbl_kategori', 'idkat', $id);
        redirect('kategori');
    }
}
