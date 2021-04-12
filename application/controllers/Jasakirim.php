<?php
class Jasakirim extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
    }


    // ===================== //
    // === CRUD Kota === //
    // ===================== //

    public function kota()
    {
        $data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
        $data["userName"] = $this->session->userdata('userName');
        $this->template->load('layout_admin', 'admin/jasakirim/kota/kota', $data);
    }

    public function addKota()
    {
        $data["usrName"] = $this->session->userdata('userName');
        $this->template->load('layout_admin', 'admin/jasakirim/kota/form_add', $data);
    }

    public function saveKota()
    {
        $namaKota = $this->input->post('namaKota');
        $dataInsert = array('namaKota' => $namaKota);

        $this->Mcrud->insert('tbl_kota', $dataInsert);
        redirect('jasakirim/kota');
    }

    public function getidKota($id)
    {
        $dataWhere = array('idKota' => $id);
        $data['kota'] = $this->Mcrud->get_by_id('tbl_kota', $dataWhere)->row_object();
        $data["usrName"] = $this->session->userdata('userName');

        $this->template->load('layout_admin', 'admin/jasakirim/kota/form_edit', $data);
    }

    public function editKota()
    {
        $id = $this->input->post('id');
        $namaKategori = $this->input->post('namaKota');

        $dataUpdate = array('namaKota' => $namaKategori);
        $this->Mcrud->update('tbl_kota', $dataUpdate, 'idKota', $id);
        redirect('jasakirim/kota');
    }

    //public function delKota($id)
    //{
    //    $where = array('idkota' => $id);
    //    $this->Mcrud->delete('tbl_kota', 'id_kota', $id);
    //    redirect('jasakirim/kota');
    //}

    public function delkota($id)
    {
        $dataDelete = array('idKota' => $id);
        $this->Mcrud->delete('tbl_kota', $dataDelete);
        redirect('jasakirim/kota');
    }

    // ====================== //
    // === CRUD Kurir === //
    // ====================== //

    public function kurir()
    {
        $data['kurir'] = $this->Mcrud->get_all_data('tbl_kurir')->result();
        $data["usrName"] = $this->session->userdata('userName');
        $this->template->load('layout_admin', 'admin/jasakirim/kurir/kurir', $data);
    }

    public function addKurir()
    {
        $data["usrName"] = $this->session->userdata('userName');
        $this->template->load('layout_admin', 'admin/jasakirim/kurir/form_add', $data);
    }

    public function saveKurir()
    {
        $namaKurir = $this->input->post('namaKurir');
        $dataInsert = array('namaKurir' => $namaKurir);

        $this->Mcrud->insert('tbl_kurir', $dataInsert);
        redirect('jasakirim/kurir');
    }

    public function getidKurir($id)
    {
        $dataWhere = array('idKurir' => $id);
        $data['kurir'] = $this->Mcrud->get_by_id('tbl_kurir', $dataWhere)->row_object();
        $data["usrName"] = $this->session->userdata('userName');

        $this->template->load('layout_admin', 'admin/jasakirim/kurir/form_edit', $data);
    }

    public function editKurir()
    {
        $id = $this->input->post('id');
        $namaKurir = $this->input->post('namaKurir');

        $dataUpdate = array('namaKurir' => $namaKurir);
        $this->Mcrud->update('tbl_kurir', $dataUpdate, 'idKurir', $id);
        redirect('jasakirim/kurir');
    }

    public function delKurir($id)
    {
        $where = array('idKurir' => $id);
        $this->Mcrud->delete('tbl_kurir', 'idkurir', $id);
        redirect('jasakirim/kurir');
    }

    // ============================= //
    // === CRUD Ongkos Kirim === //
    // ============================= //

    public function ongkir()
    {
        $data['ongkir'] = $this->Mcrud->ongkir()->result();
        $data["usrName"] = $this->session->userdata('userName');
        $this->template->load('layout_admin', 'admin/jasakirim/ongkir/ongkir', $data);
    }

    public function addOngkir()
    {
        $data['kurir'] = $this->Mcrud->get_all_data('tbl_kurir')->result();
        $data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();

        $data["usrName"] = $this->session->userdata('userName');
        $this->template->load('layout_admin', 'admin/jasakirim/ongkir/form_add', $data);
    }

    public function saveOngkir()
    {
        $idKurir = $this->input->post('idKurir');
        $kotaAsal = $this->input->post('kotaAsal');
        $kotaTujuan = $this->input->post('kotaTujuan');
        $biaya = $this->input->post('biaya');

        $dataInsert = array(
            'idKurir' => $idKurir,
            'idKotaAsal' => $kotaAsal,
            'idKotaTujuan' => $kotaTujuan,
            'biaya' => $biaya
        );

        $this->Mcrud->insert('tbl_biaya_kirim', $dataInsert);
        redirect('jasakirim/ongkir');
    }

    public function getidOngkir($id)
    {
        $dataWhere = array('idBiayaKirim' => $id);

        $data['kurir'] = $this->Mcrud->get_all_data('tbl_kurir')->result();
        $data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
        $data['ongkir'] = $this->Mcrud->get_by_id('tbl_biaya_kirim', $dataWhere)->row_object();
        $data["usrName"] = $this->session->userdata('userName');

        $this->template->load('layout_admin', 'admin/jasakirim/ongkir/form_edit', $data);
    }

    public function editOngkir()
    {
        $id = $this->input->post('id');
        $idKurir = $this->input->post('idKurir');
        $kotaAsal = $this->input->post('kotaAsal');
        $kotaTujuan = $this->input->post('kotaTujuan');
        $biaya = $this->input->post('biaya');

        $dataInsert = array(
            'idBiayaKirim' => $id,
            'idKurir' => $idKurir,
            'idKotaAsal' => $kotaAsal,
            'idKotaTujuan' => $kotaTujuan,
            'biaya' => $biaya
        );

        $this->Mcrud->update('tbl_biaya_kirim', $dataInsert, 'idBiayaKirim', $id);
        redirect('jasakirim/ongkir');
    }

    public function delOngkir($id)
    {
        $where = array('idBiayaKirim' => $id);
        $this->Mcrud->delete('tbl_biaya_kirim', 'idBiayaKirim', $id);
        redirect('jasakirim/ongkir');
    }
}
