<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_prt extends CI_Controller {

	public function index()
	{
		$this->template->load('v_staticl','v_drt');
	}
}
