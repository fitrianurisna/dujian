<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_rt extends CI_Model
{
    private $_table = "rt";

    public $nama;
    public $npm;
    public $program_studi;
    public $n_hp;
    public $ta;
    public $kls;
    public $semester;
    public $matkul;
    public $sks;
    public $dosen;
    public $nilai;
    public $khs;
    public $tanggal_rt;
    public $pukul;
    public $verivikasi;
 

    public function ta()
    {
        $query = $this->db->get('ta')->result();
        return $query;
    }
    public function save()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'npm' => $this->input->post('npm'),
            'program_studi'=> $this->input->post('program_studi'),
            'n_hp' => $this->input->post('n_hp'),
            'ta' => $this->input->post('ta'),
            'kls' => $this->input->post('kls'),
            'matkul' => $this->input->post('matkul'),
            'semester' => $this->input->post('semester'),
            'matkul' => $this->input->post('matkul'),
            'sks' => $this->input->post('sks'),
            'dosen' => $this->input->post('dosen'),
            'nilai' => $this->input->post('nilai'),
            'khs' => $this->input->post('khs'),
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
    public function Get($npm = '')
    {
        $this->db->where('npm', $npm);
        return $this->db->get('susulan_uas')->row_array();
    }
}