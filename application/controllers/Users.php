<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('users_m');
    }

    public function index()
    {
        $data['row']    = $this->users_m->get()->result();
        $this->template->load('v_template', 'users/v_users_data', $data);
    }

    public function edit($id)
    {
        $data  = $this->users_m->get($id)->row();

        $array = [
            'row'   => $data
        ];

        $this->template->load('v_template', 'users/v_users_edit', $array);
    }
}
