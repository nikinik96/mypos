<?php defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        // $this->load->model('categories_m');
    }

    public function index()
    {
        $this->template->load('v_template', 'products/categories/categories_data');
    }

    public function add()
    {
        $this->template->load('v_template', 'products/categories/categories_add');
    }
}
