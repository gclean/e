<?php
class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($id = '')
    {
        $data['judul'] = 'Contact';
        $this->load->view('public/header', $data);
        $this->load->view('public/contact/index');
        $this->load->view('public/footer');
    }
}
