<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ca_matkul extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('M_matkul');
		
	}
	public function index()
	{
		$data['matkul'] = $this->M_matkul->Tmatkul()->result();
		$data['dosen'] = $this->M_matkul->dosen()->result();
		// print_r($data);
		$this->template->load('admin/va_static','admin/va_matkul',$data);	
		
	}
	public function add()
    {
    	$dujian = $this->M_matkul->save();
        redirect('Ca_matkul');
    }
    public function delete($id_matkul)
        {
            $where = array('id_matkul' => $id_matkul);
            $this->M_matkul->delete($where, 'matkul');
            $this->session->set_flashdata('message', '<div class="alert-danger" role="alert">Data berhasil dihapus</div>');
            redirect('Ca_matkul');
        }	
}