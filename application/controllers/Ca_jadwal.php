<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ca_jadwal extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('M_jadwal');
		
	}
	public function index()
	{
		$data['tb_durt'] = $this->M_jadwal->get_durt()->result();
		$data['ta'] = $this->M_jadwal->get_ta()->result();
		$data['matkul'] = $this->M_jadwal->get_matkul()->result();
		$data['dosen'] = $this->M_jadwal->get_dosen()->result();
		$data['jadwal'] = $this->M_jadwal->get_jadwal()->result();
		$this->template->load('admin/va_static','admin/va_jadwal',$data);		
	}
	public function add()
	{
    	$dujian = $this->M_jadwal->save();
        redirect('Ca_jadwal');
	}
		
}