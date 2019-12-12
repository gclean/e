<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($id = '')
    {

        $data['judul'] = 'Home';
        $this->load->view('public/header', $data);
        $this->load->view('public/home/index');
        $this->load->view('public/footer');
    }
}
