<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_adm extends CI_Model
{
    private $_table = "user";
   
    public function getwhere($field, $where, $table)
    {
        $this->db->where($field, $where);
        $query = $this->db->get($table);
        return $query;
    }
    public function save()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'nik' => $this->input->post('nik'),
            'password' => $this->input->post('password'),
            'ttd' => $this->upload->data('file_name'), 
            'role_id' => $this->input->post('role_id'),
            'aktif' => $this->input->post('aktif'),
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