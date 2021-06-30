<?php 
 
class toko extends CI_Controller{  
    function __construct(){ 
        parent::__construct(); 
        $this->load->model('Mcrud'); 
        $this->load->model('Madmin');
    
    }  
     
    private function cek_login(){ 
        if(empty($this->session->userdata('userName'))){ 
			redirect('adminpanel/dashboard');
		 } 
    }
    

    public function index(){   
        
        $data['toko']=$this->Madmin->get_toko('')->result();   
        $this->template->load('layout_admin','admin/toko/index', $data);
    }  
     
    public function aktif($id){  
   

        $dataUpdate = array('statusAktif' => 'Y');   
        $this->Mcrud->update('tbl_toko', $dataUpdate, 'idToko', $id); 
        redirect('toko');
    }  
     
    public function non_aktif($id){  
        $dataUpdate = array('statusAktif' => 'N');   
        $this->Mcrud->update('tbl_toko', $dataUpdate, 'idToko', $id); 
        redirect('toko');
    } 
     
    public function add(){  
          
        $data['toko']=$this->Mcrud->get_all_data('tbl_toko')->result();  
        $data['member']=$this->Mcrud->get_all_data('tbl_member')->result();  
        $this->template->load('layout_admin','admin/toko/form_add', $data); 
        
    } 
     
    public function save(){  
   
        $idToko = $this->input->post('idToko');
        $idKonsumen = $this->input->post('idKonsumen');  
        $namaToko = $this->input->post('namaToko');   
        $logo = $this->input->post('logo');  
        $deskripsi = $this->input->post('deskripsi');
        $dataInsert = array('idToko'=>$idToko, 'idKonsumen'=>$idKonsumen, 'namaToko'=>$namaToko ,'logo'=>$logo , 'deskripsi'=>$deskripsi); 
        $this->Mcrud->insert('tbl_toko', $dataInsert); 
        if($this->db->affected_rows() > 0 ) { 
            $this->session->set_flashdata('success','Data Berhasil Disimpan');    
            }
        redirect('toko');

    } 
     
    public function getid($id){  
   

        $datawhere = array('idToko'=>$id);  
        $data['kota']=$this->Mcrud->get_all_data('tbl_kota')->result();  
        $data['kurir']=$this->Mcrud->get_all_data('tbl_kurir')->result(); 
        $data['ongkir'] = $this->Mcrud->get_by_id('tbl_biaya_kirim', $datawhere)->row_object();
        $this->template->load('layout_admin','admin/ongkir/form_edit', $data);
    }  
     
     
    public function edit(){    
         

        $id = $this->input->post('id');   
        $idBiayaKirim = $this->input->post('idBiayaKirim');  
        $idKurir =$this->input->post('idKurir');   
        $idKotaAsal =$this->input->post('idKotaAsal'); 
        $idKotaTujuan =$this->input->post('idKotaTujuan'); 
        $biaya =$this->input->post('biaya');
        $dataUpdate = array('idBiayakirim'=>$idBiayaKirim, 'idKurir'=>$idKurir , 'idKotaAsal'=>$idKotaAsal, 'idKotaTujuan'=>$idKotaTujuan, 'biaya'=>$biaya); 
        
        $this->Mcrud->update('tbl_biaya_kirim', $dataUpdate, 'idBiayaKirim', $id);   
        if($this->db->affected_rows() > 0 ) {
        $this->session->set_flashdata('success','Data Berhasil Disimpan');    
        }
        redirect('ongkir');  
         
        

    }   
     
    public function getid1($id){  
        $datawhere = array('idBiayaKirim'=>$id); 
        $data['ongkir'] = $this->Mcrud->get_by_id('tbl_biaya_kirim', $datawhere)->row_object();
        $this->template->load('layout_admin','admin/ongkir/form_delete', $data);
    } 
     
    public function delete(){ 
        $id = $this->input->get('id');  
        $idBiayaKirim = $this->input->get('idBiayaKirim');
        $dataDelete = array('idBiayaKirim'=>$idBiayaKirim); 
         
        $this->Mcrud->delete('tbl_biaya_kirim', $dataDelete, 'idBiayaKirim', $id);  
        if($this->db->affected_rows() > 0 ) {
            $this->session->set_flashdata('success','Data Berhasil Dihapus');    
            }
        redirect('ongkir');

    }
     


}