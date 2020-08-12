<?php defined('BASEPATH') or exit('No direct script access allowed');

class Lap_penjualan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('Laporan_penjualan_m');
    }

    public function index()
    {
        $show_result = $this->Laporan_penjualan_m->get_result()->result();
        $grand_total = $this->Laporan_penjualan_m->grand_total_penjualan()->result();

        $data = [
            'result'        => $show_result,
            'grand_total'   => $grand_total
        ];

        $this->template->load('v_template', 'laporan/laporan_penjualan/v_lap_penjualan', $data);
    }

    function get_data()
    {
        $post   = $this->input->post(NULL, TRUE);

        $show_result = $this->Laporan_penjualan_m->get_result($post)->result();
        $grand_total = $this->Laporan_penjualan_m->grand_total_penjualan($post)->result();

        $start  = $post['start'];
        $end    = $post['end'];
        $tgl    = date('Y-m-d');

        $data = [
            'start'         => $start,
            'end'           => $end,
            'result'        => $show_result,
            'grand_total'   => $grand_total
        ];


        $html = $this->load->view('laporan/laporan_penjualan/v_result_lap_penjualan', $data, true);
        $this->fungsi->PdfGenerator($html, 'Lap_penjualan_' . $tgl, 'A4', 'landscape');
    }
}
