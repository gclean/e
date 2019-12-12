
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Item_model extends CI_model
{
    public function getNewProduct()
    {
        return $this->db->get('berita')->result_array();
    }


    public function tampilData($id)
    {
        return $this->db->where('id_transaksi', $id)
            ->get('transaksi')
            ->row();
    }

    public function getAllItem()
    {

        $query = $this->db->query('SELECT * FROM transaksi');

        return $query->result_array();
    }

    public function getPelanggan()
    {
        $query = $this->db->query('');
    }

    // public function cari($keyword)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tabel_item');
    //     $this->db->like('nama_desain', $keyword);
    //     return $this->db->get()->result_array();
    // }

    public function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($data, $table);
    }
}
