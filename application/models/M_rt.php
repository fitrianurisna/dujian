<?php defined('BASEPATH') or exit('No direct script access allowed');

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
            'program_studi' => $this->input->post('program_studi'),
            'n_hp' => $this->input->post('n_hp'),
            'ta' => $this->input->post('ta'),
            'kls' => $this->input->post('kls'),
            // 'matkul' => $this->input->post('matkul'),
            'semester' => $this->input->post('semester'),
            // 'matkul' => $this->input->post('matkul'),
            // 'sks' => $this->input->post('sks'),
            // 'dosen' => $this->input->post('dosen'),
            // 'nilai' => $this->input->post('nilai'),
            'khs' => $this->upload->data('file_name'),
            'pukul' => $this->input->post('pukul'),
            'verivikasi' => $this->input->post('verivikasi'),
        ];
        $inputan = $this->db->insert($this->_table, $data);
        return $inputan;
    }
    public function getwhere($field, $where, $table)
    {
        $this->db->where($field, $where);
        $query = $this->db->get($table);
        return $query;
    }
    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    // public function Get($id = '')
    // {
    //     $this->db->where('id', $id);
    //     return $this->db->get('rt')->row_array();
    // }
    public function Get($id = '')
    {
        // $this->db->where('id', $id);
        // return $this->db->get('susulan_uts')->row_array();
        $this->db->select('matkul.harga_susulan')->from('d_package');
        $this->db->join('matkul', 'matkul.id_matkul=d_package.matkul_id', ' left');
        $this->db->where('susulan_id', $id);
        $this->db->where('tipe', 3);

        $this->db->group_by('matkul_id');
        return $this->db->get('rt')->result();
    }
    function get_packages()
    {
        // $this->db->select('d_package.*,COUNT(daftar_id) AS item_product');
        // $this->db->from('d_package');
        // $this->db->join('detail', 'package_id=detail_package_id');
        // $this->db->join('daftar', 'detail_daftar_id=daftar_id');
        // $this->db->group_by('package_id');
        // $query = $this->db->get();
        // return $query;
        // tadi isna coba yg ini 
        // $this->db->select('d_package.*,COUNT(matkul_id) AS item_product');
        // $this->db->from('d_package');
        // $this->db->join('susulan_uts', 'susulan_id=id');
        // // $this->db->join('daftar', 'detail_daftar_id=daftar_id');
        // $this->db->group_by('susulan_id');
        // $query = $this->db->get();
        // return $query;
        $this->db->select('*');
        $this->db->from('d_package');
        $this->db->INNERJOIN('rt');
        $this->db->ON('rt.id=d_package.susulan_id');
        // $this->db->join('daftar', 'detail_daftar_id=daftar_id');
        $this->db->order_by('d_package.susulan_id');
        $query = $this->db->get();
        return $query;
    }
}
