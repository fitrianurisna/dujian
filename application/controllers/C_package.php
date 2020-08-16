 <?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class C_package extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('M_package');
		}
		public function index($npm = '')
		{
			$data['daftar'] = $this->M_package->get_daftar()->result();
			// $data['package'] = $this->M_package->get_packages()->result();
			$data['ta'] = $this->M_package->get_ta()->result();
			$data['matkul'] = $this->M_package->get_matkul()->result();
			$data['dosen'] = $this->M_package->get_dosen()->result();
			$data['tb_durt'] = $this->M_package->get_durt()->result();
			// $data['jadwal'] = $this->M_jadwal->get_jadwal('tipe',1,'jadwal')->result();
			// $data['susulan_uts'] = $this->M_package->Get();
			// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			// $data['susulan_uts'] = $this->M_package->getbynpm($npm);
			// echo "<pre>";

			// print_r($data['matkul']);
			// echo "</pre>";
			$this->template->load('v_staticl', 'v_rpendaftaran', $data);
		}
		// public function invoice_pdf($id = '')
  //   	{

  //      $data["susulan_utst"] = $this->M_package->Get($id);
  //       $this->db->select('*')->from('susulan_uts');
  //       $this->db->where('id', $id);
  //       $data['susulan_uts'] = $this->db->get()->row_array();

  //       $this->load->library('pdf');

  //       $this->pdf->setPaper('A4', 'potrait');
  //       $this->pdf->filename = "invoice.pdf";
		// 	$this->pdf->load_view('admin/invoice_pdf', $data);
  //       // $this->pdf->filename = "invoicert.pdf";
  //       // $this->pdf->load_view('admin/invoice_rt', $data);
  //  	 	}
		public function invoice_pdf($id = '', $tipe)
		{


			switch ($tipe) {
				case 'uts':
					$tabel = 'susulan_uts';
					break;
				case 'uas':
					$tabel = 'susulan_uas';
					break;
				case 'remedial':
					$tabel = 'rt';
					break;
				default:
			}
			$data["susulan_uts"] = $this->M_package->Get_invoices($id, $tabel);

			// var_dump($data);
			// die();

			$this->load->library('pdf');

			$this->pdf->setPaper('A4', 'potrait');
			$this->pdf->filename = "invoice.pdf";
			$this->pdf->load_view('admin/invoice_pdf', $data);
		}
		public function invoice_rt_pdf($npm = '')
		{

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
			$d_package = $this->input->post('d_package', TRUE);
			$daftar = $this->input->post('daftar', TRUE);
			$this->M_package->p_create($d_package, $daftar);
			redirect('C_package');
		}
	}
