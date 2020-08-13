<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Items extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['categories_m', 'item_m', 'Suppliers_m']);
        $this->load->library('form_validation');
        check_not_login();
    }

    public function index()
    {
        $data['row'] = $this->item_m->get()->result();

        $this->template->load('v_template', 'products/items/v_items', $data);
    }

    public function add_lopp()
    {
        $data = $this->input->post(NULL, TRUE);

        $jml_product = $data['jml_product'];
        $categories  = $this->categories_m->get()->result();
        $suppliers   = $this->Suppliers_m->get()->result();

        $data = [
            'categories' => $categories,
            'suppliers'  => $suppliers,
            'jml_product' => $jml_product
        ];
        $this->template->load('v_template', 'products/items/v_items_add', $data);
    }

    public function add()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->item_m->add($post);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
            redirect('Items');
        }
    }

    public function del($id)
    {
        $this->item_m->del_stock_out($id);
        $this->item_m->del($id);

        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Data tidak dapat dihapus, karena suda berelasi dengan table lain</div>');
            redirect('Items');
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Success!</strong> Data berhasil dihapus</div>');
            redirect('Items');
        }
    }
}
