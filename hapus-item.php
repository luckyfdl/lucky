<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION["status"])) 
   { header("location: login.php"); exit(); }
if ($_SESSION["role"] != "administrator")
   { header("location: index.php"); exit(); }
mysqli_query($koneksi, "DELETE FROM produk WHERE ProdukID='$_GET[id]'");
header("location: list-item.php");