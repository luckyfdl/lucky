<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$sql = mysqli_query($koneksi, "INSERT INTO pengguna (username, password) VALUES ('$username', '$password')");

if ($sql) {
    echo "<script>
            alert('Registrasi berhasil'); 
            window.location='login.php';
          </script>";
} else {
    echo "<script>
            alert('Registrasi gagal'); 
            window.location='register.php';
          </script>";
}
?>