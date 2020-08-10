<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_dosen extends CI_Model
{ 
    private $_table = "dosen";
    public function dosen()
    {
        $query = $this->db->get('dosen');
        return $query;
    }
     public function save()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'nama_dosen' => $this->input->post('nama_dosen'),
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
