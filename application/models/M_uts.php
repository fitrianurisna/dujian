 <?php defined('BASEPATH') or exit('No direct script access allowed');

class M_uts extends CI_Model
{
    private $_table = "susulan_uts";

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
        return $this->db->get('susulan_uts')->result();
    }
    public function Get($id = '')
    {
        // $this->db->where('id', $id);
        // return $this->db->get('susulan_uts')->row_array();
        $this->db->select('matkul.harga_susulan')->from('d_package');
        $this->db->join('matkul', 'matkul.id_matkul=d_package.matkul_id', ' left');
        $this->db->where('susulan_id', $id);
        $this->db->where('tipe', 1);

        $this->db->group_by('matkul_id');
        return $this->db->get('susulan_uts')->result();
    }

    public function getById($id)
    {
        $npm = '';
        return $this->db->get_where($this->_table, ["npm" => $npm])->row();
    }

    public function getnpm($field, $where, $table)
    {
        $this->db->where($field, $where);
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
            'semester' => $this->input->post('semester'),
            'tanggal_uts' => $this->input->post('tanggal_uts'),
            'pukul' => $this->input->post('pukul'),
            'verivikasi' => $this->input->post('verivikasi'),
            'createdAt' => date("Y-m-d")
        ];
        $inputan = $this->db->insert($this->_table, $data);
        return $inputan;
    }
    public function getwhere()
    {
        $this->db->select('*')->from('susulan_uts');
        $this->db->join('ta', 'ta.id_ta=susulan_uts.tahun_ajaran', 'left');
        $this->db->where('verivikasi', 1);
        $query = $this->db->get();
        return $query;
    }
    public function getwh()
    {
        $this->db->select('*')->from('susulan_uts');
        $this->db->join('ta', 'ta.id_ta=susulan_uts.tahun_ajaran', 'left');
        $this->db->where('verivikasi', 0);
        // $this->db->where($field, $where);
        $query = $this->db->get();
        return $query;
    }

    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
