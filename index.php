<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION["status"])) { header("location: login.php"); exit(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <div>
    <h1>APLIKASI KASIR</h1>
    <hr>
    <ul>
        <li><a href="beli.php">Transaksi Pembelian</a></li>
        <li><a href="list-beli.php">List Pembelian</a></li>
        <li><a href="list-item.php">List Item</a></li>
            <li><a href="produk.php">Tambah Item</a></li>
            <li><a href="crud-petugas.php">Data Petugas</a></li>
            <li><a href="register.php">Register User Baru</a></li>
    </ul>
    <a href="login.php">Logout</a>
</div>
</body>
</html>
