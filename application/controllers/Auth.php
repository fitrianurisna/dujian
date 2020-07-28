<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent:: __construct();
		// $this->load->model('M_login');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('email','Email','required|trim');
		$this->form_validation->set_rules('password','Passwod','required|trim');

		if ($this->form_validation->run()==false){
			$this->template->load('v_static','v_home');
		}else{
			$this->do_login();	
		}
 		
	}
	public function in(){
		$this->template->load('v_static','v_home');
	}
	
	function do_login(){

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user',['email'=> $email],['password'=> $password])->row_array();
		// $cek = $this->M_login->cek_user($email,$password);
		if($user){
			if ($user['aktif']==1) {
				if ($user['password']) {
		$this->session->set_userdata($user);
						if($user['role_id'] == 1){
								redirect("C_admin/uts");
								// $this->template->load('admin/va_static','admin/va_uts');
						}else{
							
							redirect("C_package");
						}
				}else{
					$this->session->set_flashdata('message','Maaf password yang anda masukkan salah!');
					$this->template->load('v_static','v_home');
					}
			}else{
				$this->session->set_flashdata('message','email belum terdaftar!');
				$this->template->load('v_static','v_home');
				}
		}
	}

	public function daftar(){
		$this->template->load('v_static','v_dakun');
	}

	public function dakun(){
		$this->form_validation->set_rules('nama','nama','required|trim|is_unique[user.nama]', [
				'required' => 'Nama Lengkap harus diisi!',
				'is_unique' => 'Nama sudah ada!',
		]);

		$this->form_validation->set_rules('npm','npm','required|trim|min_length[12]|is_unique[user.npm]', [

				'required' => 'NPM harus diisi!',
				'is_unique' => 'NPM sudah ada!',
				'min_length' => 'NPM harus 12 digit!'
		]);
		
		$this->form_validation->set_rules('email','email','required|trim', [

				'required' => 'Email harus diisi!',
				'is_unique' => 'Email sudah ada!'
		]);

		$this->form_validation->set_rules('prodi','prodi','required|trim|is_unique[user.prodi]', [

				'required' => 'Program Studi harus diisi!'
		]);

		$this->form_validation->set_rules('no_hp','no_hp','required|trim|is_unique[user.no_hp]', [

				'required' => 'Nomer Handphone harus diisi!',
				'is_unique' => 'Nomer sudah ada!'
		]);

		$this->form_validation->set_rules('kelas','kelas','required|trim|is_unique[user.kelas]', [

				'required' => 'Kelas harus diisi!',
				'is_unique' => 'Nomer sudah ada!'
		]);

		$this->form_validation->set_rules('password','password1','required|trim|min_length[3]|matches[password1]',[

				'required'   => 'Kata sandi harus diisi!',
				'matches'    => 'Kata sani tidak cocok!',
				'min_length' => 'Kata sandi terlalu pendek!'
		]);

		$this->form_validation->set_rules('password1','password','required|trim|matches[password]');


		if($this->form_validation->run() == false) {
			$this->template->load('v_static','v_dakun');

		} else {
			$email = $this->input->post('email',true);
			$data = [
			'nama' => htmlspecialchars($this->input->post('nama',true)),
			'email' => htmlspecialchars($email),
			'npm' => htmlspecialchars($this->input->post('npm',true)),
			'no_hp' => htmlspecialchars($this->input->post('no_hp',true)),
			'prodi' => htmlspecialchars($this->input->post('prodi',true)),
			'kelas' => htmlspecialchars($this->input->post('kelas',true)),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'role_id' => 2,
			'aktif' => 0
			];

			// siapkan token

			$token = base64_encode(random_bytes(32));
			$user_token = [
					'email' =>  $email,
					'token' => $token,
					'dibuat' => time()
			];

			$this->db->insert('user', $data);
			$this->db->insert('user_token', $user_token);


			$this->_sendEmail($token, 'verify');

			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">selamat akun anda telah terdaftar. silahkan aktivasi</div>');
			redirect('auth');
		}

	}
	//blm ada send email naa//

		public function logout(){
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('role_id');

			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">anda telah keluar!</div>');
				redirect('Auth');
		}
}