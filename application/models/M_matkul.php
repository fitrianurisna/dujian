<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_matkul extends CI_Model
{ 
    private $_table = "matkul";
    public function Tmatkul()
    {
        $query = $this->db->get('matkul');
        return $query;
    }
    public function dosen()
    {
        $query = $this->db->get('dosen');
        return $query;
    }
    public function save()
    {
        $data = [
            'kode_matkul' => $this->input->post('kode_matkul'),
            'nama_matkul' => $this->input->post('nama_matkul'),
            'semester' => $this->input->post('semester'),
            'sks' => $this->input->post('sks'),
            // 'createdAt' => date("Y-m-d")
        ];
        $inputan = $this->db->insert($this->_table, $data);
        return $inputan;
    }
    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
