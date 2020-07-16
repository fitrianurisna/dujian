<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	function __construct(){
		parent:: __construct();
		// $this->load->model('M_login');
		// $this->load->library('form_validation');
	}
	public function uts()
	{
		$this->template->load('admin/va_static','admin/va_uts');
	}
	public function uas()
	{
		$this->template->load('admin/va_static','admin/va_uas');
	}
	public function rt()
	{
		$this->template->load('admin/va_static','admin/va_rt');
	}
	public function puts()
	{
		$this->template->load('admin/va_static','admin/va_puts');
	}
	public function puas()
	{
		$this->template->load('admin/va_static','admin/va_puas');
	}
	public function prt()
	{
		$this->template->load('admin/va_static','admin/va_prt');
	}
}
