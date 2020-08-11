<?php
defined('BASEPATH') or exit('No direct script access allowed');

class item_m extends CI_Model
{
    public function get($id = NULL)
    {
        $this->db->select('*');
        $this->db->from('item');
        $this->db->join('categories', 'categories.categories_id = item.categories_id');
        $this->db->join('supplier', 'supplier.supplier_id = item.supplier_id', 'LEFT');
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
        for ($i = 1; $i <= $post['jml_product']; $i++) {

            $params['item_name']       = $post['item_name_' . $i];
            $params['categories_id']   = $post['categories_id_' . $i];
            $params['harga_beli']      = $post['harga_beli_' . $i];
            $params['harga_jual']      = $post['harga_jual_' . $i];
            $params['supplier_id']     = $post['supplier_id_' . $i];
            $params['size']            = $post['size_' . $i];
            $params['stock']           = $post['stock_' . $i];

            $this->db->insert('item', $params);
        }
    }

    public function update_stock_in($data)
    {
        $qty    = $data['qty'];
        $id     = $data['item_id'];

        $sql    = "UPDATE item SET stock = stock + '$qty' WHERE item_id = '$id' ";
        $this->db->query($sql);
    }


    public function update_stock_out($data)
    {
        $qty    = $data['qty'];
        $id     = $data['item_id'];

        $sql    = "UPDATE item SET stock = stock - '$qty' WHERE item_id = '$id' ";
        $this->db->query($sql);
    }

    public function update_item($data)
    {
        $qty    = $data['qty'];
        $id     = $data['item_id'];

        $sql    = "UPDATE item SET stock = stock + '$qty' WHERE item_id = '$id' ";
        $this->db->query($sql);
    }

    public function delete_stock_in($data)
    {
        $qty    = $data['qty'];
        $id     = $data['item_id'];

        $sql    = "UPDATE item SET stock = stock - '$qty' WHERE item_id = '$id' ";
        $this->db->query($sql);
    }

    public function del_stock_out($id)
    {
        $this->db->where('item_id', $id);
        $this->db->delete('stock_out');
    }

    public function del($id)
    {
        $this->db->where('item_id', $id);
        $this->db->delete('item');
    }
}
