<?php 
class Mmember extends CI_Model 
{
    private $table = "tbl_member";
    public $idKonsumen;
    public $username;
    public $password;
    public $namaKonsumen;
    public $alamat;
    public $idKota;
    public $email;
    public $tlpn;
    public $statusAktif;

    public function rules() {
        return [
            ['field' => 'username',
            'label' => 'username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'password',
            'rules' => 'required'],

            ['field' => 'namaKonsumen',
            'label' => 'namaKonsumen',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],

            ['field' => 'idKota',
            'label' => 'idKota',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required'],

            ['field' => 'tlpn',
            'label' => 'tlpn',
            'rules' => 'required'],
        ];
    }

    public function getAll() {
        return $this->db->get($this->table)->result();
    }

    public function getKota() {
        return $this->db->get('tbl_kota')->result();
    }

    public function getById($id) {
        return $this->db->get_where($this->table, ["idKonsumen" => $id])->row();
    }

    public function save() {
        $post = $this->input->post();
        //$this->idKat = uniqid();
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->namaKonsumen = $post["namaKonsumen"];
        $this->alamat = $post["alamat"];
        $this->idKota = $post["idKota"];
        $this->email = $post["email"];
        $this->tlpn = $post["tlpn"];
        $this->statusAktif = $post["statusAktif"];
        return $this->db->insert($this->_table, $this);
    }
    
    public function statusAktif($id) {
        $this->db->set('statusAktif', "Y");
            return $this->db->update($this->table, array("idKonsumen" => $id));
    }

    public function statusNonaktif($id) {
        $this->db->set('statusAktif', "N");
            return $this->db->update($this->table, array("idKonsumen" => $id));
    }

    public function delete($id) {
        return $this->db->delete($this->table, array("idKonsumen" => $id));
    }

    public function joinTblKota() {
        $this->db->select('*');
        $this->db->from('tbl_member');
        $this->db->join('tbl_kota', 'tbl_member.idKota = tbl_kota.idKota');
        $query = $this->db->get();
        return $query;
    }

   
} 