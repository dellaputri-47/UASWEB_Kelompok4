<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class M_Transaksi extends CI_Model
{

    private $table = 'tb_barang';
    public function getName()
    {
        $query = $this->db->get('tb_barang');
        return $query->result();
    }
    public function invoice_no()
    {
        date_default_timezone_set('Asia/jakarta');
        $sql = "SELECT MAX(MID(invoice,9,4)) AS invoice_no 
                FROM tb_penjualan 
                WHERE MID(invoice,3,6)=DATE_FORMAT(CURDATE(),'%y%m%d')";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $n = (int)$row->invoice_no + 1;
            $no = sprintf("%'.04d", $n);
        } else {
            $no = "0001";
        }
        $invoice = "KH" . date('ymd') . $no;
        return $invoice;
    }

    public function kirim($data)
    {
        $id = $data['id'];
        $jumlah = $data['qty'];
        $invoice = $this->invoice_no();
        $this->db->select('harga_barang, nama_barang, kategori_barang');
        $this->db->where("id_barang ", $id);
        $this->db->limit(1);
        $query = $this->db->get('tb_barang');
        $nama = $query->row()->nama_barang;
        $harga = $query->row()->harga_barang;
        $kategori_barang = $query->row()->kategori_barang;
        $total = $jumlah * $harga;
        $query2 = $this->db->get_where('tb_temp_penjualan', array('id_barang' => $id));
        if ($query2->num_rows() > 0) {
            $this->db->select('jumlah_barang, total');
            $this->db->where("id_barang ", $id);
            $this->db->limit(1);
            $query = $this->db->get('tb_temp_penjualan');
            $jumlahskr = $query->row()->jumlah_barang;
            $totalskr = $query->row()->total;

            $jumlah += $jumlahskr;
            $total += $totalskr;
            return $this->db->query("UPDATE `tb_temp_penjualan` SET `jumlah_barang`='$jumlah',`total`='$total' WHERE id_barang='$id'");
            redirect("Transaksi");
        } else {
            return $this->db->query("INSERT INTO `tb_temp_penjualan` VALUES ('','$invoice','$id','$nama','$kategori_barang','$harga','$jumlah','$total')");
            redirect("Transaksi");
        }
    }

    public function getDataTemp()
    {
        return $this->db->get('tb_temp_penjualan');
    }

    public function hapus()
    {
        return $this->db->truncate('tb_temp_penjualan');
    }

    public function deleteById($id)
    {
        return $this->db->where('id_barang', $id)->delete('tb_temp_penjualan');
    }

    public function updateById($dataUpdate)
    {
        $id = $dataUpdate['id'];
        $jumlah = $dataUpdate['jumlah'];

        $this->db->select('harga_barang');
        $this->db->where("id_barang ", $id);
        $this->db->limit(1);
        $query = $this->db->get('tb_temp_penjualan');
        $harga = $query->row()->harga_barang;
        $total = $jumlah * $harga;
        return $this->db->query("UPDATE `tb_temp_penjualan` SET `jumlah_barang`='$jumlah',`total`='$total' WHERE id_barang='$id'");
    }

    public function Bayarr($dataBayar)
    {
        $struk = $dataBayar['invoice'];
        $totalBayar = $dataBayar['total'];
        $bayar  = $dataBayar['bayar'];
        $kembalian  = $dataBayar['kembalian'];

        date_default_timezone_set('Asia/jakarta');
        $tanggal1 = date('Y-m-d');
        $tanggal2 = date('Y-m-d H:i:s');


        return $this->db->query("INSERT INTO `tb_penjualan` VALUES('','$struk','$totalBayar','$bayar','$kembalian','$tanggal1','$tanggal2')");
    }

    public function Upload()
    {
        return $this->db->query("INSERT INTO tb_transaksi (invoice, nama_barang, kategori_barang, jumlah_barang)
        SELECT invoice, nama_barang, kategori_barang, jumlah_barang FROM tb_temp_penjualan");
    }
}
