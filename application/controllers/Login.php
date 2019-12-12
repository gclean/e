<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($id = '')
    {
        $data['judul'] = 'Login';
        $this->load->view('public/header', $data);
        $this->load->view('public/footer');
    }
}
