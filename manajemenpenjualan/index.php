<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan</title>
</head>

<body>
<h1>Manajemen Penjualan</h1>
<h3>Data Penjualan</h3>
    <?php
    require 'class/penjualan.php';
    $penjualan = new Penjualan();
    $data = $penjualan->TampilPenjualan();
    $no = 1;
    ?>
    <table border="1">
        <thead>
            <th>No</th>
            <th>ID Penjualan</th>
            <th>ID Barang</th>
            <th>ID Pelanggan</th>
            <th>Jumlah</th>
            <th>Tanggal Penjualan</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            foreach ($data as $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['id_barang'] ?></td>
                    <td><?= $value['id_pelanggan'] ?></td>
                    <td><?= $value['jumlah'] ?></td>
                    <td><?= $value['tanggal_penjualan'] ?></td>
                    <td>
                        <a href="update.php?id=<?= $value['id'] ?>">Edit</a> |
                        <a href="proses.php?id=<?= $value['id'] ?>">Hapus</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
    <br/>
    <button> <a href="insert.php">Tambah Data Penjualan</a></button>
</body>

</html>