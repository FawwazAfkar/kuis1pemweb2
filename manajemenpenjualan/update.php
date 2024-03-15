<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Penjualan</title>
</head>
<?php
require 'class/penjualan.php';
$penjualan = new Penjualan();
$id = $_GET['id'];
$ambil = $penjualan->AmbilPenjualan($id);
$value = $ambil->fetch(PDO::FETCH_OBJ); ?>

<body>
    <h1>Edit Data Penjualan</h1>
    <form action='proses.php' method="post">
        <input type='hidden' name="id" value="<?= $value->id ?>" required>
        ID Barang <br>
        <input type='text' name="id_barang" value="<?= $value->id_barang ?>" maxlength="5" required>
        <br>ID Pelanggan <br>
        <input type='text' name="id_pelanggan" value="<?= $value->id_pelanggan ?>" maxlength="5" required>
        <br>Jumlah <br>
        <input type='text' name="jumlah" value="<?= $value->jumlah ?>" required>
        <br>Tanggal Penjualan <br>
        <input type='date' name="tanggal_penjualan" value="<?= $value->tanggal_penjualan ?>" required>
        <br>
        <br>
        <input type="submit" name="edit_penjualan" value="edit">
    </form>
</body>

</html>