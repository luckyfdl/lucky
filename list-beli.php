<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION["status"])) { header("location: login.php"); exit(); }
$data = mysqli_query($koneksi, "SELECT * FROM penjualan
    LEFT JOIN pelanggan ON penjualan.PelangganID = pelanggan.PelangganID
    JOIN detailpenjualan ON penjualan.PenjualanID = detailpenjualan.PenjualanID
    JOIN produk ON detailpenjualan.ProdukID = produk.ProdukID");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="style.css">
    <div>
    <a href="index.php">Kembali</a>
    <a href="beli.php">Beli Lagi</a>
    <h2>List Pembelian</h2>
    <table border="1">
        <tr>
            <th>Tanggal</th>
            <th>Pelanggan</th>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Total</th>
        </tr>
        <?php while ($d = mysqli_fetch_array($data)) { ?>
        <tr>
            <td><?php echo $d['TanggalPenjualan']; ?></td>
            <td><?php echo $d['NamaPelanggan']; ?></td>
            <td><?php echo $d['NamaProduk']; ?></td>
            <td><?php echo $d['JumlahProduk']; ?></td>
            <td><?php echo $d['Subtotal']; ?></td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
