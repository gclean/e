<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Item extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['item'] = $this->Admin_model->getJoinItem();
        $data['title'] = 'Item - Page';
        $data['judul'] = 'Item';
        $data['content'] = 'admin/item';
        $this->load->view('admin/templates/index', $data);
    }

    public function addItem()
    {
        $this->form_validation->set_rules('id_kategori', 'Id-Kategori', 'required');
        $this->form_validation->set_rules('nama_desain', 'Nama Desain', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['category'] = $this->Admin_model->getAll('kategori_produk');
            $data['title'] = 'Item - Page';
            $data['judul'] = 'Form Add Item';
            $data['content'] = 'admin/additem';
            $this->load->view('admin/templates/index', $data);
        } else {
            $config['upload_path'] = './assets/front/images/';
            $config['allowed_types'] = 'jpg|png';
            $config['overwrite'] =  true;
            $config['max_size'] = 2000;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $img = $this->upload->data();
                $foto = $img['file_name'];
                $items = [
                    "id_kategori" => $this->input->post('id_kategori', true),
                    "nama_desain" => $this->input->post('nama_desain', true),
                    "gambar" => $foto,
                    "deskripsi" => $this->input->post('deskripsi', true)
                ];
                $this->Admin_model->add('tabel_item', $items);
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('admin/item');
            }
        }
    }

    public function detailItem()
    {
        $id = $this->uri->segment(4);
        $data['details'] = $this->Admin_model->getById($id);
        $data['title'] = 'Item - Page';
        $data['judul'] = 'Detail Item';
        $data['content'] = 'admin/detailItem';
        $this->load->view('admin/templates/index', $data);
        // $data['item'] = $this->Admin_model->getJoinItem();
        // $data['title'] = 'Item - Page';
        // $data['judul'] = 'Item';
        // $data['content'] = 'admin/detailItem';
        // $this->load->view('admin/templates/index',$data);
    }

    public function deleteItem($id)
    {
        $row = 'User-icon.png';
        @unlink(base_url('assets/img/product/User-icon.png'));
        $this->Admin_model->delete($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/item');
    }

    public function updateItem()
    {

        $id = $this->uri->segment(4);
        $data['item'] = $this->Admin_model->getById($id);
        $this->form_validation->set_rules('id_kategori', 'Id-Kategori', 'required');
        $this->form_validation->set_rules('nama_desain', 'Nama Desain', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['category'] = $this->Admin_model->getAll('kategori_produk');
            $data['title'] = 'Item - Page';
            $data['judul'] = 'Form Ubah Item';
            $data['content'] = 'admin/edititem';
            $this->load->view('admin/templates/index', $data);
        } else {

            $id_item = $this->input->post('id_item');
            $id_kategori = $this->input->post('id_kategori');
            $nama_desain = $this->input->post('nama_desain');
            $deskripsi = $this->input->post('deskripsi');

            $config['upload_path'] = './assets/front/images/';
            $config['allowed_types'] = 'jpg|png';
            $config['overwrite'] =  true;
            $config['max_size'] = 2000;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $img = $this->upload->data();
                $foto = $img['file_name'];
                $data = [
                    "id_kategori" => $id_kategori,
                    "nama_desain" => $nama_desain,
                    "gambar" => $foto,
                    "deskripsi" => $deskripsi
                ];

                $where = array(
                    'id_item' => $id_item
                );

                $this->Item_model->updateData($data, 'tabel_item', $where);
                redirect('admin/item');
            }
        }



















        // public function index()
        // {
        //     $data['item'] = $this->Item_model->getAllItem();
        //     $data['title'] = 'Item - Page';
        //     $data['judul'] = 'Item';
        //     $data['content'] = 'admin/item';
        //     $this->load->view('admin/templates/index',$data);

        // }

        // public function addItem()
        // {
        //     $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        //     $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        //     $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
        //     $this->form_validation->set_rules('berat', 'Berat', 'required|numeric');
        //     $this->form_validation->set_rules('id_kategori', 'Id_Kategori', 'required');
        //     $this->form_validation->set_rules('status', 'Status', 'required');
        //     // $this->form_validation->set_rules('foto', 'Foto', 'required');
        //     $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        //     if ($this->form_validation->run() == FALSE) {
        //         $data['category'] = $this->Kategori_model->getAllCategory();
        //         $data['title'] = 'Item - Page';
        //         $data['judul'] = 'Form Add Item';
        //         $data['content'] = 'admin/additem';
        //         $this->load->view('admin/templates/index',$data);
        //     } else {
        //         $this->Item_model->addItem();
        //         $this->session->set_flashdata('flash', 'Ditambahakan');
        //         redirect('admin/item');
        //     }

        // }

        // public function updateItem($id)
        // {
        //     $data['item'] = $this->Item_model->getItemById($id);

        //     $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        //     $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        //     $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
        //     $this->form_validation->set_rules('berat', 'Berat', 'required|numeric');
        //     $this->form_validation->set_rules('id_kategori', 'Id_Kategori', 'required');
        //     $this->form_validation->set_rules('status', 'Status', 'required');
        //     // $this->form_validation->set_rules('foto', 'Foto', 'required');
        //     $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        //     if ($this->form_validation->run() == FALSE) {
        //         $data['category'] = $this->Kategori_model->getAllCategory();
        //         $data['title'] = 'Item - Page';
        //         $data['judul'] = 'Form Update Item';
        //         $data['content'] = 'admin/ubahitem';
        //         $this->load->view('admin/templates/index',$data);
        //     } else {
        //         $this->Item_model->addItem();
        //         $this->session->set_flashdata('flash', 'Diubah');
        //         redirect('admin/item');
        //     }

        // }

        // public function deleteItem($id)
        // {
        //     $this->Item_model->deleteItem($id);
        //     $this->session->set_flashdata('flash', 'Dihapus');
        //     redirect('admin/item');
        // }

        // public function detail

    }
}
/* End of file Item.php */
