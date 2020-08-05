<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard_m extends CI_Model
{
    public function get_penjualan_hariini()
    {
        $this->db->select('');
    }

    public function get_pengeluaran()
    {
        $query = $this->db->query("SELECT SUM(grand_total) AS grand_total FROM item");
        return $query->row()->grand_total;
    }

    public function get_items()
    {
        $query = $this->db->query("SELECT * FROM item");
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
