<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ca_adm extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('M_adm');
		
	}
	public function index()
        {
            $data["user"] = $this->M_adm->getwhere('role_id',1,'user')->result();
			$this->template->load('admin/va_static','admin/va_adm',$data);	
        }
    public function add()
    {
    	$dujian = $this->M_adm->save();
        redirect('Ca_adm');
    }
    public function delete($id_user)
        {
            $where = array('id_user' => $id_user);
            $this->M_adm->delete($where, 'user');
            $this->session->set_flashdata('message', '<div class="alert-danger" role="alert">Data berhasil dihapus</div>');
            redirect('Ca_adm');
        }
		
}