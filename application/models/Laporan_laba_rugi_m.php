<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");

class Laporan_laba_rugi_m extends CI_Model
{
	public function get_penjualan_daily()
	{
		$date = date('Y-m-d');

		$this->db->select('SUM(sales.final_price) as grand_penjualan_daily');
		$this->db->from('sales');
		$this->db->where('sales.date', $date);
		$this->db->where('sales.note =', 1);

		$post = $this->db->get();
		return $post;
	}

	public function get_pengeluaran_daily()
	{
		$date = date('Y-m-d');

		$this->db->select('SUM(item.harga_beli * sales_detail.qty) as grand_pengeluaran_daily');
		$this->db->from('sales');
		$this->db->join('sales_detail', 'sales_detail.sale_id = sales.sale_id', 'LEFT');
		$this->db->join('item', 'item.item_id = sales_detail.item_id', 'LEFT');

		$this->db->where('sales.date', $date);
		$this->db->where('sales.note =', 1);

		$post = $this->db->get();
		return $post;
	}

	// 

	public function get_penjualan_keseluruhan()
	{
		$this->db->select('SUM(sales.final_price) as grand_penjualan_keseluruhan');
		$this->db->from('sales');
		$this->db->where('sales.note =', 1);

		$post = $this->db->get();
		return $post;
	}

	public function get_pengeluaran_keseluruhan()
	{
		$this->db->select('SUM(item.harga_beli * sales_detail.qty) as grand_pengeluaran_keseluruhan');
		$this->db->from('sales');
		$this->db->join('sales_detail', 'sales_detail.sale_id = sales.sale_id', 'LEFT');
		$this->db->join('item', 'item.item_id = sales_detail.item_id', 'LEFT');
		$this->db->where('sales.note =', 1);

		$post = $this->db->get();
		return $post;
	}

	// 

	public function get_penjualan()
	{
		$this->db->select('SUM(sales.final_price) as grand_penjualan');
		$this->db->from('sales');
		$this->db->where('sales.note =', 1);

		$post = $this->db->get();
		return $post;
	}

	public function get_pengeluaran()
	{
		$this->db->select('SUM(harga_beli * stock_awal) as grand_pengeluaran');
		$this->db->from('item');
		$this->db->join('categories', 'categories.categories_id = item.categories_id', 'LEFT');
		$this->db->join('supplier', 'supplier.supplier_id = item.supplier_id', 'LEFT');

		// $this->db->where('sales.note =', 1);

		$post = $this->db->get();
		return $post;
	}
}
