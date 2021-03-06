<?php defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");
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

    public function edit($post)
    {
        $params['name']     = $post['name'];
        $params['phone']    = $post['phone'];
        $params['address']  = $post['address'];
        $params['updated']  = date('Y-m-d H:i:s');


        $this->db->where('supplier_id', $post['supplier_id']);
        $this->db->update('supplier', $params);
    }

    public function del($id)
    {
        $this->db->where('supplier_id', $id);
        $this->db->delete('supplier');
    }
}
