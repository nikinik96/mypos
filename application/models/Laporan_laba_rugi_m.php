<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_laba_rugi_m extends CI_Model
{
    public function get_pengeluaran()
    {
        $this->db->select('SUM(harga_beli * stock_awal) as grand_pengeluaran');
        $this->db->from('item');
        $this->db->join('categories', 'categories.categories_id = item.categories_id', 'LEFT');
        $this->db->join('supplier', 'supplier.supplier_id = item.supplier_id', 'LEFT');
        // if ($post != NULL) {
        //     $this->db->where('item.created >=', $post['start']);
        //     $this->db->where('item.created <=', $post['end']);
        // }
        $post = $this->db->get();
        return $post;
    }

    public function get_penjualan()
    {
        $this->db->select('SUM(sales.final_price) as grand_penjualan');
        $this->db->from('sales');
        // if ($post != NULL) {
        //     $this->db->where('sales.date >=', $post['start']);
        //     $this->db->where('sales.date <=', $post['end']);
        // }
        $post = $this->db->get();
        return $post;
    }
}
