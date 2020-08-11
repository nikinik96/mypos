<?php defined('BASEPATH') or exit('No direct script access allowed');

class Lap_pengeluaran extends CI_Controller
{

    public function index()
    {
        $this->template->load('v_template', 'laporan/laporan_pengeluaran/v_lap_pengeluaran');
    }

    public function get_data()
    {
        $post = $this->input->post(NULL, TRUE);

        var_dump($post['start']);
        die();
    }
}
