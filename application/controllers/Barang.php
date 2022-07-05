<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {


	public function DataBarang()
	{
		$this->load->view('Barang/Data-Barang');
	}

	public function KategoriBarang()
	{
		$this->load->view('Barang/Kategori-Barang');
	}

	public function BarangMasuk()
	{
		$this->load->view('Barang/Barang-Masuk');
	}

	public function BarangKeluar()
	{
		$this->load->view('Barang/Barang-Keluar');
	}

}

