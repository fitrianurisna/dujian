<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_uts');
        // $this->load->library('form_validation');
    }
    public function uts()
    {
        $data["susulan_uts"] = $this->M_uts->getwhere('verivikasi', 0, 'susulan_uts')->result();
        $this->template->load('admin/va_static', 'admin/va_uts', $data);
    }
    public function update()
    {
        $npm = $this->input->post('npm');
        $where = array('npm' => $npm);
        $data = $this->input->post();
        unset($data['npm']);

        // print_r($where);

        $this->M_uts->update($where, $data, 'susulan_uts');
        redirect('C_admin/uts');
    }
    public function puts()
    {
        // print_r($this->session->userdata());
        $data["susulan_uts"] = $this->M_uts->getwhere('verivikasi', 1, 'susulan_uts')->result();
        $this->template->load('admin/va_static', 'admin/va_puts', $data);
    }


    // PDF inivoice Pembayaran
    public function invoice_pdf($id = '')
    {

        $data["susulan_uts"] = $this->M_uts->Get($id);

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "invoice.pdf";
        $this->pdf->load_view('admin/invoice_pdf', $data);
    }

    // PDF Kwitansi Pembayaran
    public function kwitansi_pdf($id = '')
    {

        $data["susulan_uts"] = $this->M_uts->Get($id);
        // $data['file'] = $this->db->get('user'); 

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "kwitansi.pdf";
        $this->pdf->load_view('admin/kwitansi_pdf', $data);
    }
    // PDF form_uts
    public function form_uts_pdf($id = '')
    {

        $data["susulan_uts"] = $this->M_uts->Get($id);

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Futs.pdf";
        $this->pdf->load_view('admin/form_UTS', $data);
    }
}
