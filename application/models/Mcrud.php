<?php
class Mcrud extends CI_Model
{

    public function get_all_data($tabel)
    {
        $q = $this->db->get($tabel);
        return $q;
    }

    public function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    public function get_by_id($tabel, $kondisi)
    {
        return $this->db->get_where($tabel, $kondisi);
    }

    public function update($tabel, $data, $pk, $id)
    {
        $this->db->where($pk, $id);
        $this->db->update($tabel, $data);
    }

    public function delete($tabel, $pk, $id)
    {
        $this->db->delete($tabel, array($pk => $id));
    }

    public function ongkir()
    {
        $this->db->select('idBiayaKirim, namaKurir, a.namaKota AS kotaAsal, t.namaKota AS kotaTujuan, biaya');
        $this->db->from('tbl_biaya_kirim');
        $this->db->join('tbl_kurir', 'tbl_biaya_kirim.idKurir=tbl_kurir.idKurir');
        $this->db->join('tbl_kota a', 'a.idKota=idKotaAsal');
        $this->db->join('tbl_kota t', 't.idKota=idKotaTujuan');
        return $this->db->get();
    }
}
