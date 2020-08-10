<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ca_dosen extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('M_dosen');
		
	}
	public function index()
	{
		$data['dosen'] = $this->M_dosen->dosen()->result();
		// print_r($data);
		$this->template->load('admin/va_static','admin/va_dosen',$data);		
	}
	public function add()
    {
    	$dujian = $this->M_dosen->save();
        redirect('Ca_dosen');
    }
    public function delete($id_dosen)
        {
            $where = array('id_dosen' => $id_dosen);
            $this->M_dosen->delete($where, 'dosen');
            $this->session->set_flashdata('message', '<div class="alert-danger" role="alert">Data berhasil dihapus</div>');
            redirect('Ca_dosen');
        }
		
}