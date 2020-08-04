<?php defined('BASEPATH') or exit('No direct script access allowed');

class Suppliers_m extends CI_Model
{
    public function get($id = NULL)
    {
        $this->db->select('*');
        $this->db->from('supplier');
        if ($id != NULL) {
            $this->db->where('supplier_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['name']     = $post['name'];
        $params['phone']    = $post['phone'];
        $params['address']  = $post['address'];

        $this->db->insert('supplier', $params);
    }
}
