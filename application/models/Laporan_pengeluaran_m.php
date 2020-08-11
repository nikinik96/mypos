<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_pengeluaran_m extends CI_Model
{
    public function get($post)
    {
        $this->db->select('*, item.created as tgl_pembelian');
        $this->db->from('item');
        $this->db->join('categories', 'categories.categories_id = item.categories_id', 'LEFT');
        $this->db->join('supplier', 'supplier.supplier_id = item.supplier_id', 'LEFT');
        $this->db->where('item.created >=', $post['start']);
        $this->db->where('item.created <=', $post['end']);
        $post = $this->db->get();
        return $post;
    }

    public function get_total($post)
    {
        $this->db->select('SUM(harga_beli * stock) as grand_total');
        $this->db->from('item');
        $this->db->join('categories', 'categories.categories_id = item.categories_id', 'LEFT');
        $this->db->join('supplier', 'supplier.supplier_id = item.supplier_id', 'LEFT');
        $this->db->where('item.created >=', $post['start']);
        $this->db->where('item.created <=', $post['end']);
        $post = $this->db->get();
        return $post;
    }
}
