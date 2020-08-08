<?php defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('Categories_m');
    }

    public function index()
    {
        $data['row'] = $this->Categories_m->get()->result();
        $this->template->load('v_template', 'products/categories/v_categories', $data);
    }

    public function add()
    {
        $this->template->load('v_template', 'products/categories/v_categories_add');
    }

    public function edit($id)
    {
        $data['row'] = $this->Categories_m->get($id)->row();

        $this->template->load('v_template', 'products/categories/v_categories_edit', $data);
    }

    public function process_edit()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->Categories_m->edit($post);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
            redirect('Categories');
        }
    }


    public function process_add()
    {
        $post = $this->input->post(NULL, TRUE);
        $this->Categories_m->add($post);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
            redirect('Categories');
        }
    }

    public function del($id)
    {
        $this->Categories_m->del($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Success!</strong> Data berhasil dihapus </div>');
            redirect('Categories');
        }
    }
}
