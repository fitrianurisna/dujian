<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_uas extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('M_uas');
		// $this->load->library('form_validation');
	}
	public function index()
	{
		$data["susulan_uas"] = $this->M_uas->getwhere('verivikasi',0,'susulan_uas')->result();
		$this->template->load('admin/va_static','admin/va_uas',$data);
	}
	public function update()
    {
        $npm = $this->input->post('npm');
        $where = array('npm' => $npm); 
        $data = $this->input->post();
        unset($data['npm']);

        // print_r($where);

        $this->M_uas->update($where,$data,'susulan_uas');
        redirect('C_uas');
    }
    public function add()
    {
        $dujian = $this->M_uas->save();
        redirect('C_package');
    }
    public function puas()
	{
		$data["susulan_uas"] = $this->M_uas->getwhere('verivikasi',1,'susulan_uas')->result();
		$this->template->load('admin/va_static','admin/va_puas',$data);
	}
}