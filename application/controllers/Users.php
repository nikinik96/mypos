<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function index()
    {
        $this->template->load('v_template', 'users/v_users_data');
    }
}
