<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_penjualan_m extends CI_Model
{
	public function get_result($post = NULL)
	{
		$this->db->select('*, sales_detail.qty as qty_sales, sales.date as date_sale, user.name as user_name, sales_detail.total as total_sales,  sales.customers_id as sales_customers');
		$this->db->from('sales');
		$this->db->join('sales_detail', 'sales_detail.sale_id = sales.sale_id', 'LEFT');
		$this->db->join('item', 'item.item_id = sales_detail.item_id', 'LEFT');
		$this->db->join('categories', 'categories.categories_id = item.categories_id', 'LEFT');
		$this->db->join('user', 'user.user_id = sales.user_id', 'LEFT');
		if ($post != NULL) {
			$this->db->where('sales.date >=', $post['start']);
			$this->db->where('sales.date <=', $post['end']);
		}
		$this->db->where('sales.note =', 1);

		$post = $this->db->get();
		return $post;
	}

	public function grand_total_penjualan($post = NULL)
	{
		$this->db->select('SUM(sales.final_price) as grand_total');
		$this->db->from('sales');
		if ($post != NULL) {
			$this->db->where('sales.date >=', $post['start']);
			$this->db->where('sales.date <=', $post['end']);
		}
		$this->db->where('sales.note =', 1);
		$post = $this->db->get();
		return $post;
	}
}
