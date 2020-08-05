<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ca_jadwal extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_jadwal');
	}
	public function index()
	{
		$data['tb_durt'] = $this->M_jadwal->get_durt()->result();
		$data['ta'] = $this->M_jadwal->get_ta()->result();
		$data['matkul'] = $this->M_jadwal->get_matkul()->result();
		$data['dosen'] = $this->M_jadwal->get_dosen()->result();
		$data['jadwal'] = $this->M_jadwal->get_jadwal()->result();
		// echo "<pre>";

		// print_r($data['jadwal']);
		// echo "</pre>";
		$this->template->load('admin/va_static', 'admin/va_jadwal', $data);
	}
	public function add()
	{
		$dujian = $this->M_jadwal->save();
		redirect('Ca_jadwal');
	}
	public function dh_uts_pdf($id = '')
	{

		$data["jadwal"] = $this->M_jadwal->Get($id);

		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Daftar Hadir Susulan UTS.pdf";
		$this->pdf->load_view('admin/dh_uts_pdf', $data);
	}
	public function rekap_uts_pdf()
	{

		$data["jadwal"] = $this->M_jadwal->Get();

		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "Rekap Pendaftar Susulan UTS.pdf";
		$this->pdf->load_view('admin/rekap_uts_pdf', $data);
	}
}
