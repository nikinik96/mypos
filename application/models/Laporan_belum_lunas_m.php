<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_belum_lunas_m extends CI_Model
{
	public function get_result($id = NULL)
	{
		$this->db->select('*, sales_detail.qty as qty_sales, sales.date as date_sale, user.name as user_name, sales_detail.total as total_sales, sales.create as create_sales, sales.customers_id as sales_customers');
		$this->db->from('sales');
		$this->db->join('sales_detail', 'sales_detail.sale_id = sales.sale_id', 'LEFT');
		$this->db->join('item', 'item.item_id = sales_detail.item_id', 'LEFT');
		$this->db->join('categories', 'categories.categories_id = item.categories_id', 'LEFT');
		$this->db->join('user', 'user.user_id = sales.user_id', 'LEFT');
		$this->db->join('customers', 'customers.customers_id = sales.customers_id', 'LEFT');
		if ($id != null) {
			$this->db->where('sales.sale_id', $id);
		}
		$get = $this->db->get();
		return $get;
	}

	public function get_row($id = NULL)
	{
		$this->db->select('*, sales_detail.qty as qty_sales, sales.date as date_sale, user.name as user_name, sales_detail.total as total_sales, sales.create as create_sales, sales.customers_id as sales_customers');
		$this->db->from('sales');
		$this->db->join('sales_detail', 'sales_detail.sale_id = sales.sale_id', 'LEFT');
		$this->db->join('item', 'item.item_id = sales_detail.item_id', 'LEFT');
		$this->db->join('categories', 'categories.categories_id = item.categories_id', 'LEFT');
		$this->db->join('user', 'user.user_id = sales.user_id', 'LEFT');
		$this->db->join('customers', 'customers.customers_id = sales.customers_id', 'LEFT');
		if ($id != null) {
			$this->db->where('sales.sale_id', $id);
		}
		$this->db->where('sales.note !=', 1);
		$this->db->group_by('sales.invoice');
		$this->db->order_by('sales.invoice', 'DESC');
		$get = $this->db->get();
		return $get;
	}

	public function grand_total_penjualan($id = NULL)
	{
		$this->db->select('SUM(sales.final_price) as grand_total');
		$this->db->from('sales');
		if ($id != NULL) {
			$this->db->where('sales.sale_id', $id);
		}
		$post = $this->db->get();
		return $post;
	}

	public function edit($id)
	{
		$params['note'] 	= 1;

		$this->db->where('invoice', $id);
		$this->db->update('sales', $params);
	}
}
