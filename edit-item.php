<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION["status"]) || $_SESSION["role"] != "administrator")
   { header("location: login.php"); exit(); }
$id = $_GET['id'];
if (isset($_POST['update'])) {
    mysqli_query($koneksi, "UPDATE produk SET NamaProduk='$_POST[NamaProduk]', Harga='$_POST[Harga]', Stok='$_POST[Stok]' WHERE ProdukID='$id'");
    header("location: list-item.php");
}
$d = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM produk WHERE ProdukID='$id'"));
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
    <a href="list-item.php">Kembali</a>
<h2>Edit Item</h2>
<form method="POST">
    Nama <input type="text" name="NamaProduk" value="<?= $d['NamaProduk']; ?>"><br>
    Harga <input type="number" name="Harga" value="<?= $d['Harga']; ?>"><br>
    Stok <input type="number" name="Stok" value="<?= $d['Stok']; ?>"><br>
    <button name="update">Update</button>
</form>
</body>
</html>
