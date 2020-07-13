<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->library('form_validation');
        $this->load->model('users_m');
    }

    public function index()
    {
        $this->template->load('v_template', 'users/v_users_data');
    }

    public function v_users_data_member()
    {
        $this->template->load('v_template', 'users/v_users_data_member');
    }

    public function v_users_admin()
    {
        check_admin_users();
        $data['row']    = $this->users_m->get()->result();
        $this->template->load('v_template', 'users/v_users_admin', $data);
    }

    public function edit()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->users_m->edit($post);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil diubah </div>');
            redirect('Users');
        }
    }

    public function edit_admin($id)
    {
        $this->form_validation->set_rules('name', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[4]|matches[retype_password]');
        $this->form_validation->set_rules('retype_password', 'Password Confirmation', 'trim|matches[password]');
        $this->form_validation->set_rules('is_active', 'Is Active', 'trim|required');
        $this->form_validation->set_rules('level', 'Level', 'trim|required');

        if ($this->form_validation->run() == FALSE) {

            $data  = $this->users_m->get($id)->row();

            $array = [
                'row'   => $data
            ];

            $this->template->load('v_template', 'users/v_users_edit', $array);
        } else {

            $post = $this->input->post(NULL, TRUE);

            $this->users_m->edit($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil diubah </div>');
                redirect('Users');
            }
        }
    }

    public function del()
    {
        $post = $this->uri->segment(3);

        $this->users_m->delet($post);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil dihapus </div>');
            redirect('Users');
        }
    }
}
