<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['dashboard_m', 'item_m']);
    }

    public function index()
    {
        $customers  = $this->dashboard_m->get_customers();
        $items      = $this->dashboard_m->get_items();

        $data = [
            'customers' => $customers,
            'items'     => $items
        ];

        $this->template->load('v_template', 'v_dashboard', $data);
    }
}
