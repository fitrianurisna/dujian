<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function cek_user($email="",$password="")
	{
		// $user = $this->db->get('user')->row_array();
		$query = $this->db->get_where('user',array('email'=> $email, 'password'=>$password));
		$query = $query->row_array();
		return $query;
	}

}
