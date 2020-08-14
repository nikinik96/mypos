<?php defined('BASEPATH') or exit('No direct script access allowed');

class Lap_report_penjualan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('Laporan_report_penjualan_m');
    }

    public function index()
    {

        $data['row'] = $this->Laporan_report_penjualan_m->get_row()->result();
        $this->template->load('v_template', 'laporan/laporan_report_penjualan/v_lap_report_penjualan', $data);
    }

    public function result($id)
    {
        $row            = $this->Laporan_report_penjualan_m->get_row($id)->result();
        $result         = $this->Laporan_report_penjualan_m->get_result($id)->result();
        $grand_total    = $this->Laporan_report_penjualan_m->grand_total_penjualan($id)->result();

        $data = [
            'row'       => $row,
            'result'    => $result,
            'grand_tot' => $grand_total
        ];

        $this->template->load('v_template', 'laporan/laporan_report_penjualan/v_lap_report_penjualan_result', $data);
    }
}
