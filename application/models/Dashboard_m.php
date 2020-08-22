<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");
class dashboard_m extends CI_Model
{
	public function get_penjualan_hariini()
	{
		$date  = date('Y-m-d');
		$query = $this->db->query("SELECT * FROM sales_detail JOIN sales ON sales.sale_id = sales_detail.sale_id WHERE sales.date = '$date'  ");
		$count = $query->num_rows();
		return $count;
	}

	public function get_items()
	{
		$query = $this->db->query("SELECT * FROM item");
		$count = $query->num_rows();
		return $count;
	}

	public function get_customers()
	{
		$query = $this->db->query("SELECT * FROM categories");
		$count = $query->num_rows();
		return $count;
	}

	public function get_suppliers()
	{
		$query = $this->db->query("SELECT * FROM supplier");
		$count = $query->num_rows();
		return $count;
	}

	public function grand_total_keuntungan()
	{
		$date = date('Y-m-d');

		$this->db->select('SUM((item.harga_jual - item.harga_beli) * sales_detail.qty) as grand_total');
		$this->db->from('sales');
		$this->db->join('sales_detail', 'sales_detail.sale_id = sales.sale_id', 'LEFT');
		$this->db->join('item', 'item.item_id = sales_detail.item_id', 'LEFT');
		$this->db->where('sales.date =', $date);
		$this->db->where('sales.note =', 1);

		$post = $this->db->get();
		return $post;
	}
}
