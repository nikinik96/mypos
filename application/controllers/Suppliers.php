<?php defined('BASEPATH') or exit('No direct script access allowed');

class Suppliers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->library('form_validation');
        $this->load->model('Suppliers_m');
    }

    public function index()
    {
        $data['row'] = $this->Suppliers_m->get()->result();
        $this->template->load('v_template', 'suppliers/v_suppliers', $data);
    }

    public function add()
    {

        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('v_template', 'suppliers/v_suppliers_add');
        } else {
            $post = $this->input->post(NULL, TRUE);


            $this->Suppliers_m->add($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
                redirect('Suppliers');
            }
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['row'] = $this->Suppliers_m->get($id)->row();

            $this->template->load('v_template', 'suppliers/v_suppliers_edit', $data);
        } else {
            $post = $this->input->post(NULL, TRUE);


            $this->Suppliers_m->edit($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
                redirect('Suppliers');
            }
        }
    }

    public function del($id)
    {
        $this->Suppliers_m->del($id);

        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Data tidak dapat dihapus, karena suda berelasi dengan table lain</div>');
            redirect('Customers');
        }


        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Success!</strong> Data berhasil dihapus </div>');
            redirect('Customers');
        }
    }
}
