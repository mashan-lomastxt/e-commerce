<?php

class Mlogin extends CI_Model
{
    public function cek_login($u, $p)
    {
        $q = $this->db->get_where('tbl_admin', array('userName' => $u, 'password' => $p));
        return $q;
    }
}
