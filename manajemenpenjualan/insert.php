<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penjualan</title>
</head>

<body>
<h1>Tambah Data Penjualan</h1>
    <form action='proses.php' method="post">
        ID Barang <br>
        <input type='text' name="id_barang" maxlength="5" required>
        <br>ID Pelanggan <br>
        <input type='text' name="id_pelanggan" maxlength="5" required>
        <br>Jumlah <br>
        <input type='text' name="jumlah" required>
        <br>Tanggal Penjualan <br>
        <input type='date' name="tanggal_penjualan" required>
        <br>
        <br>
        <input type="submit" name="tambah_penjualan" value="tambah">
    </form>
</body>

</html>