<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ca_matkul extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('M_matkul');
		
	}
	public function index()
	{
		// $data['matkul'] = $this->M_matkul->Tmatkul();
		// $data['matkul1'] = $this->M_matkul->Get();
		$this->template->load('admin/va_static','admin/va_matkul');	
		
	}
		
}