<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION["status"]))
   { header("location: login.php"); exit(); }
if ($_SESSION["role"] != "administrator")
   { header("location: index.php"); exit(); }
mysqli_query($koneksi, "DELETE FROM user WHERE username='$_GET[username]' AND role='petugas'");
header("location: crud-petugas.php");