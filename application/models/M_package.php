<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_package extends CI_Model
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


	public function Get($id = '')
	{
		$this->db->where('id', $id);
		return $this->db->get('susulan_uts')->row_array();
	}
	public function Getrt($npm = '')
	{
		$this->db->where('npm', $npm);
		return $this->db->get('rt')->row_array();
	}
	public function getBynpm($npm)
	{
		return $this->db->get_where($this->_table, ['npm', $npm])->row();
	}

	// get all daftar
	public function get_daftar()
	{
		$query = $this->db->get('daftar');
		return $query;
	}
	// get all matkul
	public function get_matkul()
	{
		$query = $this->db->get('matkul');
		return $query;
	}
	// get all dosen
	public function get_dosen()
	{
		$query = $this->db->get('dosen');
		return $query;
	}
	// get all ta
	public function get_ta()
	{
		$query = $this->db->get('ta');
		return $query;
	}
	// get all durt
	public function get_durt()
	{
		$query = $this->db->get('tb_durt');
		return $query;
	}
	// READ
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
		$this->db->INNERJOIN('susulan_uts');
		$this->db->ON('susulan_uts.id=d_package.susulan_id');
		// $this->db->join('daftar', 'detail_daftar_id=daftar_id');
		$this->db->order_by('d_package.susulan_id');
		$query = $this->db->get();
		return $query;
	}


	//GET daftar BY PACKAGE ID
	public function get_daftar_by_package($package_id)
	{
		$this->db->select('*');
		$this->db->from('daftar');
		$this->db->join('detail', 'detail_daftar_id=daftar_id');
		$this->db->join('d_package', 'package_id=detail_package_id');
		$this->db->where('package_id', $package_id);
		$query = $this->db->get();
		return $query;
	}

	//GET matkul by daftar
	// public function get_matkul_by_daftar($daftar_id){
	// 	$this->db->select('*');
	// 	$this->db->from('matkul');
	// 	$this->db->join('daftar', 'matkul_kode=kode_matkul');
	// 	$this->db->where('package_id',$package_id);
	// 	$query = $this->db->get();
	// 	return $query;
	// }
	// GET Dosen by daftar
	// GET ta by daftar
	// GET Durt by daftar
	public function p_create($d_package, $daftar)
	{
		$this->db->trans_start();
		//INSERT TO d_PACKAGE
		date_default_timezone_set("Asia/Bangkok");
		$data  = array(
			'package_created_at' => date('Y-m-d H:i:s')
		);
		$this->db->insert('d_package', $data);
		// insert to daftar
		$data = array(
			'semester' =>  $this->input->post('semester'),
			'ta_id' =>  $this->input->post('ta_id'),
			'matkul_id' =>  $this->input->post('matkul_id'),
			'dosen_id' =>  $this->input->post('dosen_id'),
			'durt_id' =>  $this->input->post('durt_id')
		);
		$this->db->insert('daftar', $data);
		// insert to detail

		//GET ID PACKAGE
		$package_id = $this->db->insert_id();
		$daftar_id = $this->db->insert_id();
		$result = array();
		foreach ($daftar as $key => $val) {
			$result[] = array(
				'detail_package_id'  	=> $package_id,
				'detail_daftar_id'  	=> $daftar_id
			);
		}
		//MULTIPLE INSERT TO DETAIL TABLE
		$this->db->insert_batch('detail', $result);
		$this->db->trans_complete();
	}
}
