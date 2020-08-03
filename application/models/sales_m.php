<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sales_m extends CI_Model
{
    public function invoice_no()
    {
        $sql    = "SELECT MAX(MID(invoice,9,4)) as invoice_no 
                   FROM sales 
                   WHERE MID(invoice,3,6) = DATE_FORMAT(CURDATE(), '%y%m%d')";

        $query  = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $n   = ((int)$row->invoice_no) + 1;
            $no  = sprintf("%'.04d", $n);
        } else {
            $no = "0001";
        }
        $invoice = "MP" . date('dmy') . $no;
        return $invoice;
    }

    public function get_cart($id = null)
    {
        $this->db->select('*, item.item_name as item_name, cart.price as cart_price');
        $this->db->from('cart');
        $this->db->join('item', 'item.item_id = cart.item_id');
        if ($id != NULL) {
            $this->db->where($id);
        }
        $this->db->where('user_id', $this->session->userdata('user_id'));
        $query = $this->db->get();
        return $query;
    }

    public function add_cart($post)
    {
        $query = $this->db->query("SELECT MAX(cart_id) as cart_no FROM cart");
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $cart_no = ((int)$row->cart_no) + 1;
        } else {
            $cart_no = 1;
        }

        $params = array(
            'cart_id'   => $cart_no,
            'item_id'   => $post['item_id'],
            'price'     => $post['price'],
            'discount_item'   => 0,
            'qty'       => $post['qty'],
            'total'     => ($post['price'] * $post['qty']),
            'user_id'   => $this->session->userdata('user_id')
        );

        $this->db->insert('cart', $params);
    }

    public function update_cart_qty($post)
    {
        $sql = "UPDATE cart SET price = '$post[price]',
                qty = qty + '$post[qty]',
                total = '$post[price]' * qty
                WHERE item_id = '$post[item_id]'";

        $this->db->query($sql);
    }

    public function del_cart($post = null)
    {
        if ($post != null) {
            $this->db->where($post);
        }

        $this->db->delete('cart');
    }
}
