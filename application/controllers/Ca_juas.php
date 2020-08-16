<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ca_juas extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_juas');
	}
	public function index()
	{
		$data['tb_durt'] = $this->M_juas->get_durt()->result();
		$data['ta'] = $this->M_juas->get_ta()->result();
		$data['matkul'] = $this->M_juas->get_matkul()->result();
		$data['dosen'] = $this->M_juas->get_dosen()->result();
		$data['jadwal'] = $this->M_juas->get_jadwal('tipe',2,'jadwal')->result();
		// echo "<pre>";

		// print_r($data['jadwal']);
		// echo "</pre>";
		$this->template->load('admin/va_static', 'admin/va_juas', $data);
	}
	public function add()
	{
		$dujian = $this->M_juas->save();
		redirect('Ca_juas');
	}
	public function dh_uts_pdf($id = '')
	{
		$data["jadwalt"] = $this->M_juas->Get($id);
		// $data['jadwalk'] = $this->M_juas->get_jadwal()->result();
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
	public function rekap_uas_pdf($ta_id = '')
	{

		
		$ta_id = $this->input->post('ta_id');
		$data['c'] = $this->M_juas->coba($ta_id)->row_array();
		$data['a'] = $this->M_juas->getu($ta_id)->row_array();
		$data['d'] = $this->M_juas->getu($ta_id)->result_array();
		// $data['d'] = $this->M_jadwal->get_ma_where($ta_id)->rroway();
		// $data['b'] = $this->M_jadwal->getmahasiswa($data['d']['ta_id'])->result_array();
		// $data['jadwalk'] = $this->M_jadwal->get_jadwal_where($id)->row_array();
		// $data['a'] = $this->M_jadwal->getma($data['d']['matkul'])->result_array();
		// $data["jadwal"] = $this->M_jadwal->Get();

		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "Rekap Pendaftar Susulan UAS.pdf";
		$this->pdf->load_view('admin/rekap_uas_pdf', $data);
		echo "<pre>";
		print_r($data['d']);
		echo "<pre>";
		print_r($data['a']);
		print_r($data['c']);
		echo "</pre>";
	}
	
	 public function delete($id)
        {
            $where = array('id' => $id);
            $this->M_juas->delete($where, 'jadwal');
            $this->session->set_flashdata('message', '<div class="alert-danger" role="alert">Data berhasil dihapus</div>');
            redirect('Ca_juas');
        }
}
