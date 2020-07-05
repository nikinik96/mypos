<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('v_login');
		} else {
			$this->load->view('formsuccess');
		}
	}

	public function register()
	{

		$this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[password]|min_length[4]');
		$this->form_validation->set_rules('retype_password', 'Password Confirmation', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('v_register');
		} else {

			$post = $this->input->post(NULL, TRUE);

			$params['name']			= $post['name'];
			$params['email']		= $post['email'];
			$params['alamat']		= $post['alamat'];
			$params['image']		= 'user.png';
			$params['is_active']	= 0;
			$params['level']		= 2;
			$params['password']		= password_hash($post['password'], PASSWORD_DEFAULT);

			$this->db->insert('user', $params);
			$this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
			redirect('Auth');
		}
	}
}
