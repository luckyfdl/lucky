<?php
session_start();
include "koneksi.php";
if (!isset($_SESSION["status"])) { header("location: login.php"); exit; }
$data = mysqli_query($koneksi, "SELECT * FROM produk");
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
    <a href="index.php">kembali</a>
    <h2>List Item</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php while ($d = mysqli_fetch_assoc($data)) { ?>
    <tr>
        <td><?= $d['ProdukID']; ?></td>
        <td><?= $d['NamaProduk']; ?></td>
        <td><?= $d['Harga']; ?></td>
        <td><?= $d['Stok']; ?></td>
        <td>
            <a href="beli.php?id=<?= $d['ProdukID']; ?>">Beli</a>
            <a href="edit-item.php?id=<?= $d['ProdukID']; ?>">Edit</a>
            <a href="hapus-item.php?id=<?= $d['ProdukID']; ?>">Hapus</a>
        </td>
    </tr>
<?php } ?>
    </table>
</div>
</body>
</html>
