<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_uas extends CI_Model
{ 
    private $_table = "susulan_uas";
 
    public $nama_mahasiswa;
    public $npm;
    public $program_studi;
    public $kelas;
    public $no_tlp;
    public $matkul;
    public $tahun_ajaran;
    public $semester;
    public $dosen;
    public $tanggal_uas;
    public $pukul;
    public $verivikasi;
 
    public function Getall()
    {
        return $this->db->get('susulan_uas')->result();
    }
    public function Get($npm = '')
    {
        $this->db->where('npm', $npm);
        return $this->db->get('susulan_uas')->row_array();   
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["npm" => $npm])->row();
    }

    public function getnpm($field,$where,$table){
        $this->db->where($field,$where);
        $q = $this->db->get($table);
        return $q->result();
    }

    public function save()
    {
        $data = [
            'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
            'npm' => $this->input->post('npm'),
            'program_studi' => $this->input->post('program_studi'),
            'tahun_ajaran' => $this->input->post('tahun_ajaran'),
            'kelas' => $this->input->post('kelas'),
            'no_tlp' => $this->input->post('no_tlp'),
            'matkul' => $this->input->post('matkul'),
            'semester' => $this->input->post('semester'),
            'dosen' => $this->input->post('dosen'),
            'tanggal_uas' => $this->input->post('tanggal_uas'),
            'pukul' => $this->input->post('pukul'),
            'verivikasi' => $this->input->post('verivikasi'),
        ];
        $inputan = $this->db->insert($this->_table, $data);
        return $inputan;
    }
    public function getwhere($field,$where,$table)
    {
      $this->db->where($field,$where);
      $query = $this->db->get($table);
      return $query;
    }
 
   public function update($where,$data,$table)
    {
      $this->db->where($where);
      $this->db->update($table,$data);
    }

    public function delete($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit($where,$table)
    {
      return $this->db->get_where($table,$where);
    }
}
