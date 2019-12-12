<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        if ($this->session->userdata('username') == FALSE) {
            redirect('admin/login/auth');
        } else {
            $data['user'] = $this->Admin_model->getCountUser();
            $data['karyawan'] = $this->Admin_model->getCountWorker();
            $data['content'] = 'admin/dashboard';
            $data['judul'] = 'Dashboard';
            $data['title'] = 'Dashboard - Page';
            $this->load->view('admin/templates/index', $data);
        }
    }
}
