<?php defined('BASEPATH') or exit('No direct script access allowed');

class categories_m extends CI_Model
{
    public function get()
    {
        $this->db->select('*');
        $this->db->from('categories');
        return $this->db->get();
    }
}
