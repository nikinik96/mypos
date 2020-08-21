<?php defined('BASEPATH') or exit('No direct script access allowed');

class Lap_keuntungan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('Laporan_keuntungan_m');
	}

	public function index()
	{

		$result		 = $this->Laporan_keuntungan_m->show_all_data()->result();
		$grand_total = $this->Laporan_keuntungan_m->grand_total_keuntungan()->result();

		$data = [
			'row' 			=> $result,
			'grand_total' 	=> $grand_total
		];

		$this->template->load('v_template', 'laporan/laporan_keuntungan/v_lap_keuntungan', $data);
	}

	function get_data()
	{
		$post   = $this->input->post(NULL, TRUE);

		$result		 = $this->Laporan_keuntungan_m->show_all_data($post)->result();
		$grand_total = $this->Laporan_keuntungan_m->grand_total_keuntungan($post)->result();

		$start  = $post['start'];
		$end    = $post['end'];
		$tgl    = date('Y-m-d');

		$data = [
			'start'         => $start,
			'end'           => $end,
			'row'        => $result,
			'grand_total'   => $grand_total
		];


		$html = $this->load->view('laporan/laporan_keuntungan/v_result_lap_keuntungan', $data, true);
		$this->fungsi->PdfGenerator($html, 'Lap_penjualan_' . $tgl, 'A4', 'landscape');
	}
}
