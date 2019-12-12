<?php
class Offers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($id = '')
    {
        $data['judul'] = 'Offers';
        $this->load->view('public/header', $data);
        $this->load->view('public/offers/index');
        $this->load->view('public/footer');
    }
}
