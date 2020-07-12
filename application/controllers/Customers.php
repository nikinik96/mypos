<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customers extends CI_Controller
{
    public function index()
    {
        $this->template->load('v_template', 'customers/v_customers');
    }

    public function add()
    {
        $this->template->load('v_template', 'customers/v_customers_add');
    }
}
