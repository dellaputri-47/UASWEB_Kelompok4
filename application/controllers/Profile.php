<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function Profil()
	{
		$this->load->view('Pengguna/Profil');
	}

	public function ResetPassword()
	{
		$this->load->view('Pengguna/ResetPassword');
	}
	
	public function TambahPengguna()
	{
		$this->load->view('Pengguna/TambahPengguna');
	}


}

