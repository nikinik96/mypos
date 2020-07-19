<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Items extends CI_Controller
{
    public function index()
    {
        $this->template->load('v_template', 'products/items/v_items');
    }

    public function add()
    {
        $this->template->load('v_template', 'products/items/v_items_add');
    }
}
