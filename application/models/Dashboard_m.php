<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");
class dashboard_m extends CI_Model
{
    public function get_penjualan_hariini()
    {
        $date  = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM sales_detail JOIN sales ON sales.sales_id = sales_detail.sale_id WHERE sales.date = '$date'  ");
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
        $query = $this->db->query("SELECT * FROM customers");
        $count = $query->num_rows();
        return $count;
    }

    public function get_suppliers()
    {
        $query = $this->db->query("SELECT * FROM supplier");
        $count = $query->num_rows();
        return $count;
    }
}
