<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Dash');
	}
	public function index()
	{
		$barang = $this->M_Dash->ShowCategories();

		$data['barang'] = array(
			'minuman' => $barang['minuman'],
			'makanan' => $barang['makanan'],
			'persabunan' => $barang['persabunan'],
			'sembako' => $barang['sembako'],
			'peralatan' => $barang['peralatan'],
			'elektronik' => $barang['elektronik'],
			'pupuk' => $barang['pupuk'],
			'alatbangunan' => $barang['alatbangunan'],
			'obat' => $barang['obat'],
			'jminuman' => $barang['jminuman'],
			'jmakanan' => $barang['jmakanan'],
			'jpersabunan' => $barang['jpersabunan'],
			'jsembako' => $barang['jsembako'],
			'jperalatan' => $barang['jperalatan'],
			'jelektronik' => $barang['jelektronik'],
			'jpupuk' => $barang['jpupuk'],
			'jalatbangunan' => $barang['jalatbangunan'],
			'jobat' => $barang['jobat']
		);

		$this->load->view('Dashboard/dashboard', $data);
	}
}
