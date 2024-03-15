<?php

require 'class/penjualan.php';
$penjualan = new Penjualan();

//insert
if (isset($_POST['tambah_penjualan'])) {
    $id_barang = $_POST['id_barang'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $jumlah = $_POST['jumlah'];
    $tanggal_penjualan = $_POST['tanggal_penjualan'];
    $tambah = $penjualan->TambahPenjualan($id_barang,$id_pelanggan,$jumlah,$tanggal_penjualan);
    if ($tambah == 'berhasil') {
        header('location:index.php');
    }
}

//update
if (isset($_POST['edit_penjualan'])) {
    $id = $_POST['id'];
    $id_barang = $_POST['id_barang'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $jumlah = $_POST['jumlah'];
    $tanggal_penjualan = $_POST['tanggal_penjualan'];
    $tambah = $penjualan->EditPenjualan($id,$id_barang,$id_pelanggan,$jumlah,$tanggal_penjualan);
    if ($tambah == 'berhasil') {
        header('location:index.php');
    }
}

//delete
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hapus = $penjualan->HapusPenjualan($id);
    if ($hapus == 'berhasil') {
        header('location:index.php');
    }
}