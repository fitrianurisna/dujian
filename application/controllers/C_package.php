 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_package extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_package');
	}
	public function index($npm = '')
	{
		$data['daftar'] = $this->M_package->get_daftar();
		$data['package'] = $this->M_package->get_packages();
		$data['ta'] = $this->M_package->get_ta();
		$data['matkul'] = $this->M_package->get_matkul();
		$data['dosen'] = $this->M_package->get_dosen();
		$data['tb_durt'] = $this->M_package->get_durt();
		// $data['susulan_uts'] = $this->M_package->Get();
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// $data['susulan_uts'] = $this->M_package->getbynpm($npm);
		$this->template->load('v_staticl','v_rpendaftaran',$data);
	}
	public function invoice_pdf($npm = ''){

    $data["susulan_uts"] = $this->M_package->Get($npm); 

    // var_dump($data);
    // die();

    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "invoice.pdf";
    $this->pdf->load_view('admin/invoice_pdf', $data);
	}
	public function invoice_rt_pdf($npm = ''){

    $data["rt"] = $this->M_package->Getrt($npm); 

    // var_dump($data);
    // die();

    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "invoice.pdf";
    $this->pdf->load_view('admin/invoice_pdf', $data);
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