<?php
defined('BASEPATH') or exit('No direct script access allowed');

class stock_out_m extends CI_Model
{
    public function add($post)
    {
        $params['item_id']      = $post['item_id'];
        $params['type']         = 'Out';
        $params['detail']       = $post['detail'];
        $params['date']         = $post['date'];
        $params['qty']          = $post['qty'];
        $params['user_id']      = $this->session->userdata('user_id');

        $this->db->insert('stock', $params);
    }
}
