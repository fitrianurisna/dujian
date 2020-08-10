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
		$data['jadwalk'] = $this->M_jadwal->get_jadwal()->result();
        $this->db->select('*')->from('jadwal');
        // $this->db->join('tb_durt', 'tb_durt.id_durt=jadwal.tipe', 'left');
        // $this->db->join('ta', 'ta.id_ta=jadwal.ta_id', 'left');
        // $this->db->join('matkul', 'matkul.id_matkul=jadwal.matkul', 'left');
        // $this->db->join('dosen', 'dosen.id_dosen=jadwal.dosen', 'left');
        $this->db->where('id', $id);
        // $data = $this->db->get();
        // return $query;
        $data['jadwal'] = $this->db->get()->row_array();
  //       echo "<pre>";

		// print_r($data['jadwalk']);
		// echo "</pre>";
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
	 public function delete($id)
        {
            $where = array('id' => $id);
            $this->M_jadwal->delete($where, 'jadwal');
            $this->session->set_flashdata('message', '<div class="alert-danger" role="alert">Data berhasil dihapus</div>');
            redirect('Ca_jadwal');
        }
}
