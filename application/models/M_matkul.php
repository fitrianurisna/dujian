<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_matkul extends CI_Model
{ 
 
    // public function Getall()
    // {
    //     return $this->db->get('matkul')->result();
    // }
    public function Tmatkul()
    {
        $query = $this->db->get('matkul');
        return $query;
    }
    public function Get()
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->join('matkul','matkul.kode_matkul=dosen.matkul_kode');
        $this->db->order_by('id_matkul','DESC');
        $query = $this->db->get();
        return $query;
    }
}
