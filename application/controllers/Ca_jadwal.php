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
		$data['jadwal'] = $this->M_jadwal->get_jadwal('tipe',1,'jadwal')->result();
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
		$data["jadwalt"] = $this->M_jadwal->Get($id);
		$data['jadwalk'] = $this->M_jadwal->get_jadwal_where($id)->row_array();
		$data['jadwalq'] = $this->M_jadwal->getmahasiswa($data['jadwalk']['matkul'])->result_array();
        $this->db->select('*')->from('jadwal');
     
		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Daftar Hadir Susulan UTS.pdf";
		$this->pdf->load_view('admin/dh_uts_pdf', $data);
	}
	public function rekap_uts_pdf($ta_id = '')
	{
		$ta_id = $this->input->post('ta_id');
		$data['c'] = $this->M_jadwal->coba($ta_id)->row_array();
		$data['a'] = $this->M_jadwal->getu($ta_id)->row_array();
		$data['d'] = $this->M_jadwal->getu($ta_id)->result_array();
	
		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "Rekap Pendaftar Susulan UTS.pdf";
		$this->pdf->load_view('admin/rekap_uts_pdf', $data);
	}
	public function jadwal_uts_pdf($ta_id = '',$tipe = '')
	{
		$ta_id = $this->input->post('ta_id');
		$tipe = $this->input->post('tipe');
		$data['c'] = $this->M_jadwal->jadwaluts($ta_id,$tipe)->result();
		$data['e'] = $this->M_jadwal->jadwaluts($ta_id,$tipe)->row_array();
		// $data['jadwal'] = $this->M_jadwal->get_jadwal('tipe',1,'jadwal')->result();
		//  echo "<pre>";
		// print_r($data['c']);
		// // print_r($data['jadwal']);
		// echo "<pre>";
		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Jadwal Susulan UTS.pdf";
		$this->pdf->load_view('admin/jadwal_uts_pdf', $data);
	}
	 public function delete($id)
        {
            $where = array('id' => $id);
            $this->M_jadwal->delete($where, 'jadwal');
            $this->session->set_flashdata('message', '<div class="alert-danger" role="alert">Data berhasil dihapus</div>');
            redirect('Ca_jadwal');
        }
}
