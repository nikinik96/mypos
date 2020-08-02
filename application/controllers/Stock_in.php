<?php defined('BASEPATH') or exit('No direct script access allowed');

class Stock_in extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->library('form_validation');
        $this->load->model(['item_m', 'stock_in_m']);
    }

    public function index()
    {
        $this->template->load('v_template', 'transaksi/stock_in/v_stock_in');
    }

    public function stock_in_add()
    {
        $item = $this->item_m->get()->result();
        $item = $this->item_m->get()->result();

        $data = [
            'item' => $item
        ];

        $this->form_validation->set_rules('date', 'Date', 'trim|required');
        $this->form_validation->set_rules('barcode', 'Barcode', 'trim|required');
        $this->form_validation->set_rules('product', 'Product', 'trim|required');
        $this->form_validation->set_rules('stock', 'Stock', 'trim|required');
        $this->form_validation->set_rules('supplier_id', 'Supplier ID', 'trim|required');
        $this->form_validation->set_rules('qty', 'Qty', 'trim|required');
        $this->form_validation->set_rules('detail', 'Detail', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('v_template', 'transaksi/stock_in/v_stock_in_add', $data);
        } else {
            $post = $this->input->post(NULL, TRUE);

            $this->stock_in_m->add($post);
            $this->item_m->update_stock_in($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
                redirect('Stock_in');
            }
        }
    }
}
