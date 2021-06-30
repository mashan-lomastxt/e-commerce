<?php  
 
class Madmin extends CI_Model { 
     
    public function get_ongkir() { 
        $q = $this->db->query("SELECT b.idBiayaKirim, r.namaKurir, k.namaKota AS asal, t.namaKota AS tujuan, b.biaya FROM tbl_biaya_kirim b 
        JOIN tbl_kota k ON b.idKotaAsal=k.idKota JOIN tbl_kota t ON
        b.idKotaTujuan=t.idKota JOIN tbl_kurir r ON b.idKurir=r.idKurir"); 
        return $q;
    } 
     
    public function get_member(){ 
        $q = $this->db->query("select tbl_member.idKonsumen, tbl_member.username, tbl_member.password, tbl_member.namaKonsumen, tbl_member.alamat, tbl_kota.namaKota, tbl_member.email, tbl_member.tlpn, tbl_member.statusAktif
        from tbl_member
        join tbl_kota on tbl_member.idKota = tbl_kota.idKota 
        group by tbl_member.idKonsumen, tbl_member.username, tbl_member.password, tbl_member.namaKonsumen, tbl_member.alamat, tbl_kota.namaKota, tbl_member.email, tbl_member.tlpn, tbl_member.statusAktif"); 
        return $q;
    } 
     
    public function get_toko(){ 
        $q = $this->db->query("select tbl_toko.idToko, tbl_member.namaKonsumen, tbl_toko.namaToko, tbl_toko.logo, tbl_toko.deskripsi, tbl_toko.StatusAktif
        from tbl_toko
        join tbl_member on tbl_toko.idKonsumen = tbl_member.idKonsumen 
        group by tbl_toko.idToko, tbl_member.namaKonsumen, tbl_toko.namaToko, tbl_toko.logo, tbl_toko.deskripsi, tbl_toko.StatusAktif") ;
        return $q;
    } 

}