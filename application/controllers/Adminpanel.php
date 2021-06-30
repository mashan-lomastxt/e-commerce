<?php

class Adminpanel extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/form_login');
    }

    public function dashboard()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $this->template->load('layout_admin', 'admin/dashboard');
    }
    public function dashboard2()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $this->template->load('layout_admin2', 'admin/dashboard');
    }
}
