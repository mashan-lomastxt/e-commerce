<?php

class Member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mmember');
    }

    public function index()
    {
        $data['member'] = $this->Mmember->getAll('tbl_member');
        $this->template->load('layout_admin', 'admin/member/index', $data);
    }

    public function add()
    {
        $this->template->load('layout_admin', 'admin/member/form_add');
    }

    public function simpan()
    {
        $datakat = $this->input->post('namaKonsumen');
        $dataInsert = array('namakonsumen' => $datakonsumen);
        $this->Mcrud->insert('tbl_member', $dataInsert);
        redirect('member');
    }

    public function getid($id)
    {
        $datawhere = array('idKonsumen' => $id);
        $data['member'] = $this->Mcrud->getById('tbl_member', $datawhere)->row_object();
        $this->template->load('layout_admin', 'admin/member/form_edit', $data);
    }

    public function edit()
    {
        $id = $this->input->post('idKonsumen');
        $namaKategori = $this->input->post('namakonsumen');

        $dataUpdate = array('namaKonsumen' => $namaKonsumen);
        $this->Mcrud->update('tbl_member', $dataUpdate, 'idKonsumen', $id);

        redirect('member');
    }

    public function delete($id)
    {
        $this->Mcrud->delete('tbl_member', 'idKonsumen', $id);
        redirect('member');
    }
}