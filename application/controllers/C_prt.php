<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_prt extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("M_rt");
    }

	public function index()
	{
		$data["ta"] = $this->M_rt->ta();
		$this->template->load('v_staticl','v_drt',$data);
	}
	public function prt()
	{
		$data["rt"] = $this->M_rt->getwhere('verivikasi',0,'rt')->result();
		$this->template->load('admin/va_static','admin/va_rt',$data);
	}
	public function brt()
	{
		$data["rt"] = $this->M_rt->getwhere('verivikasi',1,'rt')->result();
		$this->template->load('admin/va_static','admin/va_prt',$data);
	}
	public function add()
    {
        $dujian = $this->M_rt->save();
        redirect('C_prt');
    }
    public function update()
    {
        $npm = $this->input->post('npm');
        $where = array('npm' => $npm); 
        $data = $this->input->post();
        unset($data['npm']);

        // print_r($where);

        $this->M_rt->update($where,$data,'rt');
        redirect('C_prt/prt');
    }
    // PDF inivoice Pembayaran
    public function invoice_rt($npm = ''){

    $data["rt"] = $this->M_rt->Get($npm); 

    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "invoicert.pdf";
    $this->pdf->load_view('admin/invoice_rt', $data);
    }
    // PDF inivoice Pembayaran
    public function kwitansi_rtpdf($npm = ''){

    $data["rt"] = $this->M_rt->Get($npm); 

    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "kwitansi_rt.pdf";
    $this->pdf->load_view('admin/kwitansi_rtpdf', $data);
    }
    // PDF inivoice Pembayaran
    public function form_rt_pdf($npm = ''){

    $data["rt"] = $this->M_rt->Get($npm); 

    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "kwitansi_rt.pdf";
    $this->pdf->load_view('admin/form_rt_pdf', $data);
    }

}
