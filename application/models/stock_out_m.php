<?php
defined('BASEPATH') or exit('No direct script access allowed');

class stock_out_m extends CI_Model
{
    public function get($id = NULL)
    {
        $this->db->select('*');
        $this->db->from('stock_out');
        $this->db->join('item', 'item.item_id = stock_out.item_id', 'LEFT');
        $this->db->join('user', 'user.user_id = stock_out.user_id', 'LEFT');
        if ($id != NULL) {
            $this->db->where('stock_id', $id);
        }

        return $this->db->get();
    }

    public function add($post)
    {
        $params['item_id']      = $post['item_id'];
        $params['type']         = 'Out';
        $params['detail']       = $post['detail'];
        $params['date']         = $post['date'];
        $params['qty']          = $post['qty'];
        $params['user_id']      = $this->session->userdata('user_id');

        $this->db->insert('stock_out', $params);
    }

    public function del_stock_out($id)
    {
        $this->db->where('stock_id', $id);
        $this->db->delete('stock_out');
    }
}
