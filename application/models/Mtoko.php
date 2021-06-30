<?php

class Mtoko extends CI_Model{

    public function get_toko($idToko){
        $q = $this->db->get_where('tbl_toko', array('idToko'=>$idToko));
        return $q;
    }

    public function get_produk_by_toko($idToko){
        $q = $this->db->get_where('tbl_produk', array('idToko'=>$idToko));
        return $q;
    }

    public function insert_produk($data){
        $this->db->insert('tbl_produk', $data);
    }
}