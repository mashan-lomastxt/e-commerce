<?php 

class Member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
    }

    public function index()
    {
        $data['member']=$this->Mcrud->get_all_data('tbl_member')->result();
        $this->template->load('layout_admin','admin/member/index', $data);
    }

    public function add() {
		$this->template->load('layout_admin','admin/member/form_add');
	}

    public function getid($id)
    {
        $dataWhere = array('idkonsumen'=>$id);
        $data['member'] = $this->Mcrud->get_by_id('tbl_member', $dataWhere)->row_object();
        $this->template->load('layout_admin','admin/member/form_edit',$data);
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $namaKonsumen = $this->input->post('namaKonsumen');
        $dataUpdate = array('namaKonsumen' => $namaKonsumen);
        $this->Mcrud->update('tbl_member', $dataUpdate, 'idkonsumen', $id);
        redirect('member');
    }

    public function delete($id)
    {
        $where = array('idKonsumen' => $id);
        $this->Mcrud->hapus('tbl_member', $where);
        $this->session->set_flashdata('notif', 'Berhasil say');
        redirect('Member');
    }


}