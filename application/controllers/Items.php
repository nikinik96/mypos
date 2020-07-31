<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Items extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['units_m', 'categories_m']);
        check_not_login();
    }


    public function index()
    {
        $this->template->load('v_template', 'products/items/v_items');
    }

    public function add()
    {
        $units      = $this->units_m->get()->result();
        $categories = $this->categories_m->get()->result();


        $data = [
            'units' => $units,
            'categories' => $categories
        ];
        $this->template->load('v_template', 'products/items/v_items_add', $data);
    }
}
