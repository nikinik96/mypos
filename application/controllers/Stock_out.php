<?php defined('BASEPATH') or exit('No direct script access allowed');

class Stock_out extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->library('form_validation');
        $this->load->model(['item_m', 'stock_out_m']);
    }

    public function index()
    {
        $this->template->load('v_template', 'transaksi/stock_out/v_stock_out');
    }

    public function stock_in_out()
    {
        $item = $this->item_m->get()->result();
        $item = $this->item_m->get()->result();

        $data = [
            'item' => $item
        ];

        $this->form_validation->set_rules('date', 'Date', 'trim|required');
        $this->form_validation->set_rules('item_id', 'item_id', 'trim|required');
        $this->form_validation->set_rules('product', 'Product', 'trim|required');
        $this->form_validation->set_rules('stock', 'Stock', 'trim|required');
        $this->form_validation->set_rules('qty', 'Qty', 'trim|required');
        $this->form_validation->set_rules('detail', 'Detail', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('v_template', 'transaksi/stock_out/v_stock_out_add', $data);
        } else {
            $post = $this->input->post(NULL, TRUE);

            $this->stock_out_m->add($post);
            $this->item_m->update_stock_out($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
                redirect('Stock_out');
            }
        }
    }
}