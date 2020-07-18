<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Items extends CI_Controller
{
    public function index()
    {
        $this->template->load('v_template', 'items/v_items');
    }
}
