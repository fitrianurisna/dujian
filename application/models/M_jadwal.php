<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_jadwal extends CI_Model
{
    private $_table = "jadwal";

    public function get_durt()
    {
        $query = $this->db->get('tb_durt');
        return $query;
    }
    public function get_ta()
    {
        $query = $this->db->get('ta');
        return $query;
    }
    public function get_matkul()
    {
        $query = $this->db->get('matkul');
        return $query;
    }
    public function get_dosen()
    {
        $query = $this->db->get('dosen');
        return $query;
    }
    public function get_jadwal()
    {
        $query = $this->db->get('jadwal');
        return $query;
    }
    public function save()
    {
        $data = [
            'tipe' => $this->input->post('tipe'),
            'ta_id' => $this->input->post('ta_id'),
            'matkul' => $this->input->post('matkul'),
            'dosen' => $this->input->post('dosen')
            // 'password' => $this->input->post('password'),
            // 'ttd' => $this->upload->data('file_name'),
            // 'tipe_file'=> $this->upload->data('file_ext'),
            // 'ukuran_file'=> $this->upload->data('file_size'), 
            // 'role_id' => $this->input->post('role_id'),
            // 'aktif' => $this->input->post('aktif'),
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