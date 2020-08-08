<?php defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");
class categories_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('categories');
        if ($id != NULL) {
            $this->db->where('categories_id', $id);
        }

        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['name_categories'] = $post['name_categories'];

        $this->db->insert('categories', $params);
    }

    public function edit($post)
    {
        $params['name_categories'] = $post['name_categories'];
        $params['updated']         = date('Y-m-d H:i:s');

        $this->db->where('categories_id', $post['categories_id']);
        $this->db->update('categories', $params);
    }

    public function del($post)
    {
        $this->db->where('categories_id', $post);
        $this->db->delete('categories');
    }
}
