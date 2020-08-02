<?php
defined('BASEPATH') or exit('No direct script access allowed');

class item_m extends CI_Model
{
    public function get($id = NULL)
    {
        $this->db->select('*');
        $this->db->from('item');
        $this->db->join('categories', 'categories.categories_id = item.categories_id');
        if ($id != NULL) {
            $this->db->where('item_id');
        }
        $post = $this->db->get();
        return $post;
    }

    public function ai_code()
    {
        $query = $this->db->query("SELECT MAX(barcode) as barcode from item");
        $hasil = $query->row();
        return $hasil->barcode;
    }

    public function add($post)
    {
        $params['barcode']         = $post['barcode'];
        $params['item_name']       = $post['item_name'];
        $params['categories_id']   = $post['categories_id'];
        $params['units_id']        = $post['units_id'];
        $params['price']           = $post['price'];
        $params['size']             = $post['size'];

        $this->db->insert('item', $params);
    }

    public function update_stock_in($data)
    {
        $qty    = $data['qty'];
        $id     = $data['item_id'];

        $sql    = "UPDATE item SET stock = stock + '$qty' WHERE item_id = '$id' ";
        $this->db->query($sql);
    }
}
