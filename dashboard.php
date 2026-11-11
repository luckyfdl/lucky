<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location: login.php?pesan=belum_login");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <hr>
    <h2>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Anda berhasil</p>
    
    <hr>
    
    <h3>Menu</h3>
    <ul>
        <li><h4><a href="index.php">Mulai sekarang</a></h4></li>
        <li><h4><a href="logout.php">Logout</a></h4></li>
    </ul>
</body>
</html>