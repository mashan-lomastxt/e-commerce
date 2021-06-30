<?php  
 
class Madmin extends CI_Model {  
  
    public function cek_dupli()
    {
       $data = array(
                      'idKotaAsal' => $this->input->post('idKotaAsal'),
                      'idKotaTujuan' => $this->input->post('idKotaTujuan')
       );
       $insert = $this->db->insert('tbl_biaya_kirim',$data);
       return $insert;
    }

}