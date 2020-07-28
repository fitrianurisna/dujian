 <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_uts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_uts");
    }

    public function index()
    {
        $data["susulan_uts"] = $this->M_uts->getAll();
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
        $dujian = $this->M_uts->save();
        redirect('C_package');
    }
    public function edit($npm)
    {
        $where = array ('npm'=> $npm);
        $data['tb'] = $this->d_uts->edit($where,'susulan_uts')->row_array();
        $this->template->load('static','edit_sdmprofile',$data);
        // print_r($data['tb_sdm_profile']);
    }
    public function delete($npm)
    {
        $where = array ('npm'=> $npm);
        $this->d_uts->delete($where,'susulan_uts');
          $this->session->set_flashdata('message','<div class="alert-danger" role="alert">Data berhasil dihapus</div>');
          redirect('daftar_berhasil');
    }
  public function update()
    {
        $where = $this->uri->segment(4);
        $ini = $this->d_uts->GetID();
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