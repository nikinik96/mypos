<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_show extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $this->template->load('v_template', 'v_dashboard_show');
    }
}
