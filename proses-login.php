<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username='$username' AND password='$password'");
$sql_cek = mysqli_num_rows($sql); 

if ($sql_cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location: dashboard.php");
} else {
    echo "<script>
            alert('Username atau Password salah!'); 
            window.location='index.php'; 
          </script>"; 
}
?>