<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

	public function index()
	{
		$this->template->load('v_static','v_home');
	}
}
