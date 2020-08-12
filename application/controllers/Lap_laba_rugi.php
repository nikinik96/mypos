<?php defined('BASEPATH') or exit('No direct script access allowed');

class Lap_laba_rugi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('Laporan_laba_rugi_m');
    }

    public function index()
    {

        $lap_pengeluaran = $this->Laporan_laba_rugi_m->get_pengeluaran()->result();
        $lap_penjualan   = $this->Laporan_laba_rugi_m->get_penjualan()->result();

        $data = [
            'grand_pengeluaran' => $lap_pengeluaran,
            'grand_penjualan'   => $lap_penjualan
        ];

        $this->template->load('v_template', 'laporan/laporan_laba_rugi/v_lap_laba_rugi', $data);
    }
}
