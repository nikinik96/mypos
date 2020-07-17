<?php
defined('BASEPATH') or exit('No direct script access allowed');

class customers_m extends CI_Model
{
    public function add($post)
    {
        $params['customers_id'] = $post['customers_id'];
        $params['name_customers'] = $post['name_customers'];
        $params['gander_customers'] = $post['gander_customers'];
        $params['phone_customers'] = $post['phone_customers'];
        $params['address_customers'] = $post['address_customers'];

        $this->db->insert('customers', $params);
    }
}
