<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class M_Dash extends CI_Model
{

    public function ShowCategories()
    {
        // // baca Id tertinggi
        // $sql_ID = $this->db->query("SELECT MAX(ID) FROM tb_sensor");
        // // tangkap data 
        // $data_ID = mysqli_fetch_array($sql_ID);
        // // ambil ID terakhir/terbesar
        // $ID_Akhir = $data_ID['MAX(ID)'];
        // $ID_Awal = $ID_Akhir - 6;

        $data_barang = [
            'tanggal' => $this->db->query("SELECT tanggal_keluar FROM tb_transaksi ORDER BY Id_transaksi ASC"),
            'jminuman' => $this->db->query("SELECT jumlah_barang FROM tb_transaksi WHERE kategori_barang='minuman' ORDER BY Id_transaksi ASC"),
            'jmakanan' => $this->db->query("SELECT jumlah_barang FROM tb_transaksi WHERE kategori_barang='makanan' ORDER BY Id_transaksi ASC"),
            'jpersabunan' => $this->db->query("SELECT jumlah_barang FROM tb_transaksi WHERE kategori_barang='persabunan' ORDER BY Id_transaksi ASC"),
            'jsembako' => $this->db->query("SELECT jumlah_barang FROM tb_transaksi WHERE kategori_barang='sembako' ORDER BY Id_transaksi ASC"),
            'jperalatan' => $this->db->query("SELECT jumlah_barang FROM tb_transaksi WHERE kategori_barang='peralatan' ORDER BY Id_transaksi ASC"),
            'jobat' => $this->db->query("SELECT jumlah_barang FROM tb_transaksi WHERE kategori_barang='obat' ORDER BY Id_transaksi ASC"),
            'jelektronik' => $this->db->query("SELECT jumlah_barang FROM tb_transaksi WHERE kategori_barang='elektronik' ORDER BY Id_transaksi ASC"),
            'jalatbangunan' => $this->db->query("SELECT jumlah_barang FROM tb_transaksi WHERE kategori_barang='alatbangunan' ORDER BY Id_transaksi ASC"),
            'jpupuk' => $this->db->query("SELECT jumlah_barang FROM tb_transaksi WHERE kategori_barang='pupuk' ORDER BY Id_transaksi ASC"),
            'minuman' =>  $this->db->query("SELECT  jumlah_barang * 100/(SELECT SUM(jumlah_barang) FROM tb_transaksi) as 'persen' From tb_transaksi WHERE kategori_barang='minuman'")->row(),
            'makanan' =>  $this->db->query("SELECT  jumlah_barang * 100/(SELECT SUM(jumlah_barang) FROM tb_transaksi) as 'persen' From tb_transaksi WHERE kategori_barang='makanan'")->row(),
            'persabunan' =>  $this->db->query("SELECT  jumlah_barang * 100/(SELECT SUM(jumlah_barang) FROM tb_transaksi) as 'persen' From tb_transaksi WHERE kategori_barang='persabunan'")->row(),
            'sembako' =>  $this->db->query("SELECT  jumlah_barang * 100/(SELECT SUM(jumlah_barang) FROM tb_transaksi) as 'persen' From tb_transaksi WHERE kategori_barang='sembako'")->row(),
            'peralatan' =>  $this->db->query("SELECT  jumlah_barang * 100/(SELECT SUM(jumlah_barang) FROM tb_transaksi) as 'persen' From tb_transaksi WHERE kategori_barang='peralatan'")->row(),
            'obat' =>  $this->db->query("SELECT  jumlah_barang * 100/(SELECT SUM(jumlah_barang) FROM tb_transaksi) as 'persen' From tb_transaksi WHERE kategori_barang='obat'")->row(),
            'elektronik' =>  $this->db->query("SELECT  jumlah_barang * 100/(SELECT SUM(jumlah_barang) FROM tb_transaksi) as 'persen' From tb_transaksi WHERE kategori_barang='elektronik'")->row(),
            'alatbangunan' =>  $this->db->query("SELECT  jumlah_barang * 100/(SELECT SUM(jumlah_barang) FROM tb_transaksi) as 'persen' From tb_transaksi WHERE kategori_barang='alatbangunan'")->row(),
            'pupuk' =>  $this->db->query("SELECT  jumlah_barang * 100/(SELECT SUM(jumlah_barang) FROM tb_transaksi) as 'persen' From tb_transaksi WHERE kategori_barang='pupuk'")->row()
        ];

        return $data_barang;
    }
}
