<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Items extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['units_m', 'categories_m', 'item_m']);
        $this->load->library('form_validation');
        check_not_login();
    }


    public function index()
    {
        $data['row'] = $this->item_m->get()->result();

        $this->template->load('v_template', 'products/items/v_items', $data);
    }

    public function add()
    {
        $units      = $this->units_m->get()->result();
        $categories = $this->categories_m->get()->result();
        $ai         = $this->item_m->ai_code();

        $nourut = substr($ai, 5, 4);
        $kd_ai  = $nourut + 1;

        $data = [
            'units' => $units,
            'categories' => $categories,
            'row' => $kd_ai
        ];

        $this->form_validation->set_rules('barcode', 'Barcode', 'trim|required');
        $this->form_validation->set_rules('categories_id', 'Categories', 'trim|required');
        $this->form_validation->set_rules('item_name', 'Item Name', 'trim|required');
        $this->form_validation->set_rules('units_id', 'Units', 'trim|required');
        $this->form_validation->set_rules('price', 'Price', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('v_template', 'products/items/v_items_add', $data);
        } else {

            $post = $this->input->post(NULL, TRUE);

            $this->item_m->add($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
                redirect('Items');
            }
        }
    }
}
