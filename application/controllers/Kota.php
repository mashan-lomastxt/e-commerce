<?php 
 
class kota extends CI_Controller{  
    function __construct(){ 
        parent::__construct(); 
        $this->load->model('Mcrud');
    }  
     
    private function cek_login(){ 
        if(empty($this->session->userdata('userName'))){ 
			redirect('adminpanel/dashboard');
		 } 
    }
    
    public function index(){   

        $data['kota']=$this->Mcrud->get_all_data('tbl_kota')->result();
        $this->template->load('layout_admin','admin/jasapengiriman/kota/index', $data);
    }   
     
    public function add(){  


        $this->template->load('layout_admin','admin/jasapengiriman/kota/form_add');
    } 
     
    public function save(){  
   

        $namaKota = $this->input->post('namaKota'); 
        $dataInsert = array('namaKota'=>$namaKota); 
        $this->Mcrud->insert('tbl_kota', $dataInsert); 
        if($this->db->affected_rows() > 0 ) {
            $this->session->set_flashdata('success','Data Berhasil Ditambah');    
            } 
                redirect('kota');
    
    } 
     
    public function getid($id){  
   

        $datawhere = array('idkota'=>$id); 
        $data['kota'] = $this->Mcrud->get_by_id('tbl_kota', $datawhere)->row_object();
        $this->template->load('layout_admin','admin/jasapengiriman/kota/form_edit', $data);
    }  
     
     
    public function edit(){   
  

        $id = $this->input->post('id');  
        $namaKota = $this->input->post('namaKota');   
        $dataUpdate = array('namaKota'=>$namaKota); 
         
        $this->Mcrud->update('tbl_kota', $dataUpdate, 'idKota', $id);  
        if($this->db->affected_rows() > 0 ) {
            $this->session->set_flashdata('success','Data Berhasil Diubah');    
            }    
        redirect('kota'); 
    }   
     
    public function getid1($id){  
        $datawhere = array('idKota'=>$id); 
        $data['kota'] = $this->Mcrud->get_by_id('tbl_kota', $datawhere)->row_object();
        $this->template->load('layout_admin','admin/jasapengiriman/kota/form_delete', $data);  

    } 
     
    public function delete(){ 
        $id = $this->input->get('id');  
        $namaKota = $this->input->get('namaKota');
        $dataDelete = array('namaKota'=>$namaKota); 
         
        $this->Mcrud->delete('tbl_kota', $dataDelete, 'idKota', $id);  
        if($this->db->affected_rows() > 0 ) {
            $this->session->set_flashdata('success','Data Berhasil Dihapus');  
               
        } 
        redirect('kota');
    }
}