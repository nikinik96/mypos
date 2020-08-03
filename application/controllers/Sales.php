<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sales extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['sales_m', 'item_m']);
    }

    public function index()
    {
        $item = $this->item_m->get()->result();
        $cart = $this->sales_m->get_cart();

        $data = [
            'item'    => $item,
            'cart'    => $cart,
            'invoice' => $this->sales_m->invoice_no(),
        ];

        $this->template->load('v_template', 'transaksi/sales/v_sales', $data);
    }

    public function cart_data()
    {
        $cart = $this->sales_m->get_cart();
        $data['cart'] = $cart;
        $this->load->view('transaksi/sales/cart_data', $data);
    }

    public function process()
    {
        $post = $this->input->post(NULL, TRUE);

        $item_id    = $this->input->post('item_id');
        $check_cart = $this->sales_m->get_cart(['cart.item_id' => $item_id]);
        if ($check_cart->num_rows() > 0) {
            $this->sales_m->update_cart_qty($post);
        } else {
            $this->sales_m->add_cart($post);
        }

        if ($this->db->affected_rows() > 0) {
            $params = array("success" => true);
        } else {
            $params = array("success" => false);
        }
        echo json_encode($params);
    }

    public function cart_del()
    {
        $cart_id = $this->input->post('cart_id');
        $this->sales_m->del_cart(['cart_id' => $cart_id]);

        if ($this->db->affected_rows() > 0) {
            $params = array("success" => true);
        } else {
            $params = array("success" => false);
        }
        echo json_encode($params);
    }
}
