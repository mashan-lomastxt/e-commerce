<?php

class Login extends CI_Controller
{
    public function aksi_login()
    {
        $this->load->model('Mlogin'); //load model
        $u = $this->input->post('username'); //menangkap inputan form login -> username
        $p = $this->input->post('password'); //=> password
        $cek = $this->Mlogin->cek_login($u, $p)->num_rows();
        if ($cek == 1) {
            $data_session = array(
                'userName' => $u,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            redirect('adminpanel/dashboard');
        } else {
            redirect('adminpanel');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('adminpanel');
    }
}