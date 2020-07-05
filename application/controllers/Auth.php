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
		$email		= $this->input->post('email');
		$pswd		= $this->input->post('password');

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('v_login');
		} else {
			$data = $this->db->get_where('user', array('email' => $email))->row_array();

			if ($data != NULL) {
				if ($data['is_active'] == 1) {
					if ($data['is_active'] == 2) {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Akun anda terblokir, harap konfirmasi ke admin</div>');
						redirect('Auth');
					} else {
						if (password_verify($pswd, $data['password'])) {
							$data = [
								'user_id' 	=> $data['user_id'],
								'level'		=> $data['level']
							];

							$this->session->set_userdata($data);
							redirect('Dashboard');
						} else {
							$this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Kata sandi anda salah</div>');
							redirect('Auth');
						}
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Akun anda tidak aktif, harap konfirmasi ke Admin</div>');
					redirect('Auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Data tidak ditemukan</div>');
				redirect('Auth');
			}
		}
	}

	public function register()
	{

		$this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]|trim');
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
