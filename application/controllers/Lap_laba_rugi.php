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

        $lap_pengeluaran                = $this->Laporan_laba_rugi_m->get_pengeluaran()->result();
        $lap_penjualan                  = $this->Laporan_laba_rugi_m->get_penjualan()->result();
        // 
        $lap_penjualan_daily            = $this->Laporan_laba_rugi_m->get_penjualan_daily()->result();
        $lap_pengeluaran_daily          = $this->Laporan_laba_rugi_m->get_pengeluaran_daily()->result();
        // 
        $lap_penjualan_keseluruhan      = $this->Laporan_laba_rugi_m->get_penjualan_keseluruhan()->result();
        $lap_pengeluaran_keseluruhan    = $this->Laporan_laba_rugi_m->get_pengeluaran_keseluruhan()->result();

        $data = [
            'grand_pengeluaran'               => $lap_pengeluaran,
            'grand_penjualan'                 => $lap_penjualan,
            // 
            'grand_penjualan_daily'           => $lap_penjualan_daily,
            'grand_pengeluaran_daily'         => $lap_pengeluaran_daily,
            // 
            'grand_penjualan_keseluruhan'     => $lap_penjualan_keseluruhan,
            'grand_pengeluaran_keseluruhan'   => $lap_pengeluaran_keseluruhan,
        ];

        $this->template->load('v_template', 'laporan/laporan_laba_rugi/v_lap_laba_rugi', $data);
    }
}
