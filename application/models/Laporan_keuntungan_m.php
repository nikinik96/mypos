<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_keuntungan_m extends CI_Model
{
	public function show_all_data($post = NULL)
	{
		$this->db->select('*, sales_detail.qty as qty_sale, sales.date as tgl_jual, user.name as kasir');
		$this->db->from('sales');
		$this->db->join('sales_detail', 'sales_detail.sale_id = sales.sale_id', 'LEFT');
		$this->db->join('item', 'item.item_id = sales_detail.item_id', 'LEFT');
		$this->db->join('categories', 'categories.categories_id = item.categories_id', 'LEFT');
		$this->db->join('user', 'user.user_id = sales.user_id', 'LEFT');
		if ($post != NULL) {
			$this->db->where('sales.date >=', $post['start']);
			$this->db->where('sales.date <=', $post['end']);
		}
		$post = $this->db->get();
		return $post;
	}

	public function grand_total_keuntungan($post = NULL)
	{
		$this->db->select('SUM((item.harga_jual - item.harga_beli) * sales_detail.qty) as grand_total');
		$this->db->from('sales');
		$this->db->join('sales_detail', 'sales_detail.sale_id = sales.sale_id', 'LEFT');
		$this->db->join('item', 'item.item_id = sales_detail.item_id', 'LEFT');
		if ($post != NULL) {
			$this->db->where('sales.date >=', $post['start']);
			$this->db->where('sales.date <=', $post['end']);
		}
		$post = $this->db->get();
		return $post;
	}
}
