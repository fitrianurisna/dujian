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
    public function get_package()
    {
        $query = $this->db->get('d_package');
        return $query;
    }
    public function get_jadwal()
    {
        $this->db->select('*')->from('jadwal');
        $this->db->join('tb_durt', 'tb_durt.id_durt=jadwal.tipe', 'left');
        $this->db->join('ta', 'ta.id_ta=jadwal.ta_id', 'left');
        $this->db->join('matkul', 'matkul.id_matkul=jadwal.matkul', 'left');
        $this->db->join('dosen', 'dosen.id_dosen=jadwal.dosen', 'left');
        // $this->db->join('d_package', 'd_package.matkul_id=matkul.id_matkul', 'left');
        // $this->db->join('susulan_uts', 'susulan_uts.id=d_package.susulan_id', 'left');
        // $this->db->join('jadwal', 'jadwal.matkul=d_package.matkul_id', 'left');
        // $this->db->where('id', $id);
        $query = $this->db->get();
        // $query = $this->db->get();
        return $query;
    }

    public function get_jadwal_where($id = '')
    {
        $this->db->select('*')->from('jadwal');
        $this->db->join('tb_durt', 'tb_durt.id_durt=jadwal.tipe', 'left');
        $this->db->join('ta', 'ta.id_ta=jadwal.ta_id', 'left');
        $this->db->join('matkul', 'matkul.id_matkul=jadwal.matkul', 'left');
        $this->db->join('dosen', 'dosen.id_dosen=jadwal.dosen', 'left');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query;
    }
    
    public function getmahasiswa($where)
    {
        $this->db->select('*')->from('d_package');
        $this->db->join('susulan_uts', 'susulan_uts.id=d_package.susulan_id');
        $this->db->where('d_package.matkul_id', $where);
        $query = $this->db->get();
        return $query;
    }
    public function getu($where)
    {
        $this->db->select('*')->from('d_package');
        $this->db->join('susulan_uts', 'susulan_uts.id=d_package.susulan_id');
        // $this->db->join('ta', 'ta.id_ta=jadwal.ta_id', 'left');
        $this->db->join('matkul', 'matkul.id_matkul=d_package.matkul_id', 'left');
        $this->db->join('dosen', 'dosen.id_dosen=d_package.dosen_id', 'left');
        $this->db->where('susulan_uts.tahun_ajaran', $where);
        $this->db->where('d_package.tipe', 1);
        $query = $this->db->get();
        return $query;
    }
    function hitCountYear($year){
            // $this->db->select('*');
            $this->db->from('tb_statistik');
            $this->db->where('year(tanggal)',$year);
            $this->db->select_sum('hits');
            return $this->db->get()->result();
        }
    public function Get($id = '')
    {
        $this->db->where('id', $id);
        return $this->db->get('jadwal')->row_array();
    }

    public function coba($ta){
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('tb_durt', 'tb_durt.id_durt=jadwal.tipe', 'left');
        $this->db->join('ta', 'ta.id_ta=jadwal.ta_id', 'left');
        $this->db->join('matkul', 'matkul.id_matkul=jadwal.matkul', 'left');
        $this->db->join('dosen', 'dosen.id_dosen=jadwal.dosen', 'left');
        $this->db->join('susulan_uts', 'susulan_uts.tahun_ajaran=jadwal.ta_id');
        $this->db->where('ta_id',$ta);
        // $this->db->where('year(Tanggal) BETWEEN '.$tahun1.' AND '.$tahun2);
        $q = $this->db->get();
        return $q;
    }
    public function get_ma_where($ta_id = '')
    {
        $this->db->select('*')->from('jadwal');
        $this->db->join('tb_durt', 'tb_durt.id_durt=jadwal.tipe', 'left');
        $this->db->join('ta', 'ta.id_ta=jadwal.ta_id', 'left');
        $this->db->join('matkul', 'matkul.id_matkul=jadwal.matkul', 'left');
        $this->db->join('dosen', 'dosen.id_dosen=jadwal.dosen', 'left');
        $this->db->join('susulan_uts', 'susulan_uts.tahun_ajaran=jadwal.ta_id', 'left');
        $this->db->where('ta_id', $ta_id);
        $query = $this->db->get();
        return $query;
    }
    public function save()
    {
        $data = [
            'tipe' => $this->input->post('tipe'),
            'ta_id' => $this->input->post('ta_id'),
            'matkul' => $this->input->post('matkul'),
            'dosen' => $this->input->post('dosen'),
            // 'dosen_penguji' => $this->input->post('dosen_penguji'),
            'Hari' => $this->input->post('Hari'),
            'tanggal' => $this->input->post('tanggal'),
            'pukul' => $this->input->post('pukul'),
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
