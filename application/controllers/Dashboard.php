<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['dashboard_m']);
    }

    public function index()
    {
        $items              = $this->dashboard_m->get_items();
        $suppliers          = $this->dashboard_m->get_suppliers();
        $customers          = $this->dashboard_m->get_customers();
        $penjualan_hariini  = $this->dashboard_m->get_penjualan_hariini();

        $data = [
            'items'         => $items,
            'suppliers'     => $suppliers,
            'customers'     => $customers,
            'penjualan'     => $penjualan_hariini
        ];

        $this->template->load('v_template', 'v_dashboard', $data);
    }
}
