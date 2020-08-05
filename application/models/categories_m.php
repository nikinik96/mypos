<?php defined('BASEPATH') or exit('No direct script access allowed');

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

    public function del($post)
    {
        $this->db->where('categories_id', $post);
        $this->db->delete('categories');
    }
}
