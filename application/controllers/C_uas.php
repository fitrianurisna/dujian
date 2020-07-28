 <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_uas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_uas");
    }

    public function index()
    {
        $data["susulan_uas"] = $this->M_uas->getAll();
        $this->template->load("static2", "daftar_uts");
    }

    public function getData($table)
    {
        $data = $this->db->get($table)->result();
        // $matkul = $this->db->get('matkul')->result();
        echo json_encode($data);
        // print_r($data);
    }
 
    public function add()
    {
        $dujian = $this->M_uas->save();
        redirect('C_package');
    }
    public function edit($npm)
    {
        $where = array ('npm'=> $npm);
        $data['tb'] = $this->M_uas->edit($where,'susulan_uas')->row_array();
        $this->template->load('static','edit_sdmprofile',$data);
        // print_r($data['tb_sdm_profile']);
    }
    public function delete($npm)
    {
        $where = array ('npm'=> $npm);
        $this->M_uas->delete($where,'susulan_uas');
          $this->session->set_flashdata('message','<div class="alert-danger" role="alert">Data berhasil dihapus</div>');
          redirect('daftar_berhasil');
    }
  public function update()
    {
        $where = $this->uri->segment(4);
        $ini = $this->d_uas->GetID();
        // $data = [
        //        'npm' => $this->input->post('npm'),
        //     'nama_mahasiswa' => $ini->,
        //     'program_studi' => $this->input->post('program_studi'),
        //     'tahun_ajaran' => $this->input->post('tahun_ajaran'),
        //     'kelas' => $this->input->post('kelas'),
        //     'no_tlp' => $this->input->post('no_tlp'),
        //     'matkul' => $this->input->post('matkul'),
        //     'semester' => $this->input->post('semester'),
        //     'dosen' => $this->input->post('dosen'),
        //     'tanggal_uts' => $this->input->post('tanggal_uts'),
        //     'pukul' => $this->input->post('pukul'),
        //     'verivikasi' => 1
        // ];
        // $where = $data['npm'];
        // $this->d_uts->update($where,$data,'susulan_uts');
        print_r($where);
        // redirect('ctk_uts');
    }
}