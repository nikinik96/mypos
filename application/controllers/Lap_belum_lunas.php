<?php defined('BASEPATH') or exit('No direct script access allowed');

class Lap_belum_lunas extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('Laporan_belum_lunas_m');
	}

	public function index()
	{

		$data['row'] = $this->Laporan_belum_lunas_m->get_row()->result();
		$this->template->load('v_template', 'laporan/laporan_item_belum_lunas/v_lap_belum_lunas', $data);
	}

	public function result($id)
	{
		$row            = $this->Laporan_belum_lunas_m->get_row($id)->result();
		$result         = $this->Laporan_belum_lunas_m->get_result($id)->result();
		$grand_total    = $this->Laporan_belum_lunas_m->grand_total_penjualan($id)->result();

		$data = [
			'row'       => $row,
			'result'    => $result,
			'grand_tot' => $grand_total
		];

		$this->template->load('v_template', 'laporan/laporan_item_belum_lunas/v_lap_report_belum_lunas', $data);
	}

	public function edit()
	{
		$id = $this->uri->segment(3);

		$this->Laporan_belum_lunas_m->edit($id);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
			redirect('Lap_belum_lunas');
		}
	}
}
