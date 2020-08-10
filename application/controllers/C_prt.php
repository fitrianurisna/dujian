<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_prt extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_rt");
    }

    public function index()
    {
        $data["ta"] = $this->M_rt->ta();
        $this->template->load('v_staticl', 'v_drt', $data);
    }
    public function prt()
    {
        $data["rt"] = $this->M_rt->getwhere('verivikasi', 0, 'rt')->result();
        $this->template->load('admin/va_static', 'admin/va_rt', $data);
    }
    public function brt()
    {
        $data["rt"] = $this->M_rt->getwhere('verivikasi', 1, 'rt')->result();
        $this->template->load('admin/va_static', 'admin/va_prt', $data);
    }
    public function add()
    {
        $config['upload_path']          = './upload_khs/';
        $config['allowed_types']        = 'pdf';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('khs')) {
            $error = array('error' => $this->upload->display_errors());
            $this->template->load('v_staticl', 'v_drt', $error);
        } else {
        $this->db->select('MAX(id) as id_terakhir')->from('rt');
           $get_id = $this->db->get()->row_array();

           $matkul = $this->input->post('matkul');
           $dosen = $this->input->post('dosen');
           $sks = $this->input->post('sks');
           $nilai = $this->input->post('nilai');
           if (count($matkul) == count($dosen)) {
               for ($i = 0; $i < count($matkul); $i++) {
                   $data = [
                       'susulan_id' => $get_id['id_terakhir'] + 1,
                       'matkul_id' => $matkul[$i],
                       'dosen_id' => $dosen[$i],
                       'sks_id' => $sks[$i],
                       'nilai' => $nilai[$i],
                       'tipe' => '3'
                   ];
                   $this->db->insert('d_package', $data);
               }
           } else {
               echo "
                   <script>
                       alert('Gagal')
                       location.href = " . base_url('C_package') . "
                   </script>
               ";
           }
            $dujian = $this->M_rt->save();
            redirect('C_prt');
        }
    }
    public function update()
    {
        $id = $this->input->post('id');
        $where = array('id' => $id);
        $data = $this->input->post();
        unset($data['id']);

        // print_r($where);

        $this->M_rt->update($where, $data, 'rt');
        redirect('C_prt/prt');
    }
    // PDF inivoice Pembayaran
    public function invoice_rt($id = '')
    {

       $data["remedialt"] = $this->M_rt->Get($id);
        $this->db->select('*')->from('rt');
        $this->db->where('id', $id);
        $data['rt'] = $this->db->get()->row_array();

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "invoicert.pdf";
        $this->pdf->load_view('admin/invoice_rt', $data);
    }
    // PDF inivoice Pembayaran
    public function kwitansi_rtpdf($id = '')
    {
        $data["remedialt"] = $this->M_rt->Get($id);
        $this->db->select('*')->from('rt');
        $this->db->where('id', $id);
        $data['rt'] = $this->db->get()->row_array();

        // $data["rt"] = $this->M_rt->Get($id);

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "kwitansi_rt.pdf";
        $this->pdf->load_view('admin/kwitansi_rtpdf', $data);
    }
    // PDF inivoice Pembayaran
    public function form_rt_pdf($id = '')
    {

        $data["rt"] = $this->M_rt->Get($id);

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "kwitansi_rt.pdf";
        $this->pdf->load_view('admin/form_rt_pdf', $data);
    }
}
