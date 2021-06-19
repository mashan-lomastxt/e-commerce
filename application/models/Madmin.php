<?php

class Madmin extends CI_Model{

    public function getidOngkir(){
        $q = $this->db->query("SELECT b.idBiayakirim, k.namaKota AS asal, j.namaKota 
        AS tujuan, b.biaya, r.namakurir FROM tbl_biaya_kirim b
        JOIN tbl_kota k ON b.idKotaAsal=k.idKota JOIN tbl_kota J ON b.idKotaTujuan=j.idKota JOIN
        tbl_kurir r ON b.idKurir=r.idKurir");
        return $q;
    }

    public function cek_kota($id){
        $q = $this->db->query("SELECT * FROM tbl_biaya_kirim WHERE idKotaAsal='$id' OR idKotaTujuan='$id'");
        return $q;
    }

    public function cek_duplikat_ongkir($asal, $tujuan, $kurir){
        $q = $this->db->query("SELECT * FROM tbl_biaya_kirim WHERE idKotaAsal='$asal' AND idKotaTujuan='$tujuan' AND 'idKurir='$kurir'");
        return $q;
    }

}