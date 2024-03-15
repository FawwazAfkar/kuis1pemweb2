<?php
class Penjualan
{
    protected $db;
    public function __construct()
    {
        require 'koneksi.php';
    }

    public function TampilPenjualan()
    {
        $query = $this->db->query("select * from penjualan");
        $query->execute();
        return $query;
    }

    public function TambahPenjualan($id_barang,$id_pelanggan,$jumlah,$tanggal_penjualan)
    {
        $query = $this->db->prepare("insert into penjualan (id_barang,id_pelanggan,jumlah,tanggal_penjualan)values(:id_barang,:id_pelanggan,:jumlah,:tanggal_penjualan)");
        $query->bindParam('id_barang', $id_barang);
        $query->bindParam('id_pelanggan', $id_pelanggan);
        $query->bindParam('jumlah', $jumlah);
        $query->bindParam('tanggal_penjualan', $tanggal_penjualan);
        $query->execute();
        if ($query) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }

    public function EditPenjualan($id,$id_barang,$id_pelanggan,$jumlah,$tanggal_penjualan)
    {
        $query = $this->db->prepare("update penjualan set id_barang=:id_barang, id_pelanggan =:id_pelanggan, jumlah=:jumlah, tanggal_penjualan=:tanggal_penjualan where id=:id");
        $query->bindParam('id', $id);
        $query->bindParam('id_barang', $id_barang);
        $query->bindParam('id_pelanggan', $id_pelanggan);
        $query->bindParam('jumlah', $jumlah);
        $query->bindParam('tanggal_penjualan', $tanggal_penjualan);
        $query->execute();
        if ($query) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }


    public function AmbilPenjualan($id)
    {
        $query = $this->db->prepare("select * from penjualan where id = :id");
        $query->bindParam('id', $id);
        $query->execute();
        if ($query) {
            return $query;
        } else {
            return 'gagal';
        }
    }

    public function HapusPenjualan($id)
    {
        $query = $this->db->prepare("delete from penjualan where id =:id");
        $query->bindParam('id', $id);
        $query->execute();
        if ($query) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }
}
