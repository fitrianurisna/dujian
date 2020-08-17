<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ca_jrt extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_jrt');
	}
	public function index()
	{
		$data['tb_durt'] = $this->M_jrt->get_durt()->result();
		$data['ta'] = $this->M_jrt->get_ta()->result();
		$data['matkul'] = $this->M_jrt->get_matkul()->result();
		$data['dosen'] = $this->M_jrt->get_dosen()->result();
		$data['jadwal'] = $this->M_jrt->get_jadwal('tipe',3,'jadwal')->result();
		// echo "<pre>";

		// print_r($data['jadwal']);
		// echo "</pre>";
		$this->template->load('admin/va_static', 'admin/va_jrt', $data);
	}
	public function add()
	{
		$dujian = $this->M_jrt->save();
		redirect('Ca_jrt');
	}
	public function dh_rt_pdf($id = '')
	{
		$data["jadwalt"] = $this->M_jrt->Get($id);
		$data['jadwalk'] = $this->M_jrt->get_jadwal_where($id)->row_array();
		$data['jadwalq'] = $this->M_jrt->getmahasiswa($data['jadwalk']['matkul'])->result_array();
		// $data['jadwalk'] = $this->M_jrt->get_jadwal()->result();
        // $this->db->select('*')->from('jadwal');
        // $this->db->join('tb_durt', 'tb_durt.id_durt=jadwal.tipe', 'left');
        // $this->db->join('ta', 'ta.id_ta=jadwal.ta_id', 'left');
        // $this->db->join('matkul', 'matkul.id_matkul=jadwal.matkul', 'left');
        // $this->db->join('dosen', 'dosen.id_dosen=jadwal.dosen', 'left');
        // $this->db->where('id', $id);
        // $data = $this->db->get();
        // return $query;
        // $data['jadwal'] = $this->db->get()->row_array();
  //       echo "<pre>";

		// print_r($data['jadwalk']);
		// echo "</pre>";
		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Daftar Hadir remedial teaching.pdf";
		$this->pdf->load_view('admin/dh_rt_pdf', $data);
	}
	public function rekap_rt_pdf($ta_id = '')
	{
		$ta_id = $this->input->post('ta_id');
		$data['c'] = $this->M_jrt->coba($ta_id)->row_array();
		$data['a'] = $this->M_jrt->getu($ta_id)->row_array();
		$data['d'] = $this->M_jrt->getu($ta_id)->result_array();


		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "Rekap Pendaftar remedial teaching.pdf";
		$this->pdf->load_view('admin/rekap_rt_pdf', $data);
	}
	 public function delete($id)
        {
            $where = array('id' => $id);
            $this->M_jrt->delete($where, 'jadwal');
            $this->session->set_flashdata('message', '<div class="alert-danger" role="alert">Data berhasil dihapus</div>');
            redirect('Ca_juas');
        }
}
