<?php
class Offers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
    }

    public function index($id = '')
    {
        $data['judul'] = 'Offers';
        $data['produk'] = $this->Item_model->getNewProduct();
        $this->load->view('public/header', $data);
        $this->load->view('public/offers/index');
        $this->load->view('public/footer');
    }
}
