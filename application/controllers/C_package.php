 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_package extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_package');
	}
	public function index()
	{
		$data['daftar'] = $this->M_package->get_daftar();
		$data['package'] = $this->M_package->get_packages();
		$data['ta'] = $this->M_package->get_ta();
		$data['matkul'] = $this->M_package->get_matkul();
		$data['dosen'] = $this->M_package->get_dosen();
		$data['tb_durt'] = $this->M_package->get_durt();
		$data['susulan_uts'] = $this->M_package->Get();	
		$this->template->load('v_staticl','v_rpendaftaran',$data);
	}


	// create
	public function create()
	{
		$d_package = $this->input->post('d_package',TRUE);
		$daftar = $this->input->post('daftar',TRUE);
		$this->M_package->p_create($d_package,$daftar);
		redirect('C_package');
	}
}