<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Login');	
	}
	public function index()
	{
		$this->load->view('auth/auth-login');
	}

	public function CheckingAuth()
	{
		$DataPostForm=[
		'username'=>$this->input->post('username'),
		'password'=>md5($this->input->post('password')),
		];

		$AuthCheckLogin= $this->Login->CheckLoginUser($DataPostForm);

		//$this->output->set_content_type('application/json')->set_output(json_encode($DataPostForm));
		if ($AuthCheckLogin->num_rows()>0){
			// echo "Berhasil Login";
			redirect('Dashboard','refresh');
		}
		else{
			// echo 'Gagal Login (Username dan Password tidak valid)';
			redirect('Auth','refresh');
	}
	}

}

