<?php defined('BASEPATH') or exit('No direct script access allowed');

class Lap_pengeluaran extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan_pengeluaran_m');
    }

    public function index()
    {
        $this->template->load('v_template', 'laporan/laporan_pengeluaran/v_lap_pengeluaran');
    }

    function get_data()
    {
        $post  = $this->input->post(NULL, TRUE);

        $row         = $this->Laporan_pengeluaran_m->get($post)->result();
        $row_total   = $this->Laporan_pengeluaran_m->get_total($post)->row();

        $data = [
            'row'           => $row,
            'row_total'     => $row_total,
        ];

        $html = $this->load->view('laporan/laporan_pengeluaran/v_result_lap_pengeluaran', $data, true);
        $this->fungsi->PdfGenerator($html, 'Lap_pengeluaran', 'A4', 'landscape');
    }
}
