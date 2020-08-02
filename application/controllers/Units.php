<?php defined('BASEPATH') or exit('No direct script access allowed');

class Units extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('units_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->units_m->get()->result();
		$this->template->load('v_template', 'products/units/v_units', $data);
	}

	public function add()
	{
		$this->form_validation->set_rules('units_name', 'Units Name', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->template->load('v_template', 'products/units/v_units_add');
		} else {
			$post = $this->input->post(NULL, TRUE);

			$this->units_m->add($post);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
				redirect('Units');
			}
		}
	}
}
