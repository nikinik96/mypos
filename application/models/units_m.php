<?php defined('BASEPATH') or exit('No direct script access allowed');

class units_m extends CI_Model
{
    public function get()
    {
        $this->db->select('*');
        $this->db->from('units');
        return $this->db->get();
    }

    public function add($post)
    {
        $params['units_name'] = $post['units_name'];
        $this->db->insert('units', $params);
    }
}
