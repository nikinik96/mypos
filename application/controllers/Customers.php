<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customers extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('customers_m');
    }

    public function index()
    {
        $this->template->load('v_template', 'customers/v_customers');
    }

    public function add()
    {
        $this->form_validation->set_rules('name_customers', 'Nama Costumers', 'trim|required');
        $this->form_validation->set_rules('gander_customers', 'Gander', 'trim|required');
        $this->form_validation->set_rules('phone_customers', 'No Tlp', 'trim|required');
        $this->form_validation->set_rules('address_customers', 'Alamat Costumers', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('v_template', 'customers/v_customers_add');
        } else {
            $post = $this->input->post(NULL, TRUE);

            $this->customers_m->add($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
                redirect('Customers');
            }
        }
    }
}
