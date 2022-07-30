<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Transaksi');
		$this->load->library('cart');
	}

	public function index()
	{
		$data['barang'] = $this->M_Transaksi->getName();
		$data['invoice'] = $this->M_Transaksi->invoice_no();
		$data['temp'] = $this->M_Transaksi->getDataTemp();

		$this->load->view('Transaksi/Transaksi', $data);
	}

	public function add()
	{
		if ($this->input->post('product_id') && $this->input->post('qty')) {
			$data = [
				'id' => $this->input->post('product_id'),
				'qty' => $this->input->post('qty')
			];
			$this->M_Transaksi->kirim($data);
			redirect("Transaksi");
		} else {
			echo "gagal";
			redirect("Transaksi");
		}
	}
	public function hapusCart()
	{
		$this->M_Transaksi->hapus();
		redirect('Transaksi');
	}
	public function hapusId($id)
	{
		$this->M_Transaksi->deleteById($id);
		redirect('Transaksi');
	}
	public function editId($idEdit)
	{
		$dataUpdate = [
			'id' => $idEdit,
			'jumlah' => $this->input->post('jumlah'),
		];
		$this->M_Transaksi->updateById($dataUpdate);
		redirect('Transaksi');
	}

	public function bayar()
	{
		$dataBayar = [
			'invoice' => $this->input->post('invoice'),
			'total' => $this->input->post('total'),
			'bayar' => $this->input->post('bayar'),
			'kembalian' => $this->input->post('kembalian')
		];
		if ($dataBayar['total'] <= 0) {
			redirect('Transaksi');
		} else {
			$this->M_Transaksi->Bayarr($dataBayar);
			$this->M_Transaksi->Upload();
			$this->hapusCart();
			redirect("Transaksi");
		}
	}
}
