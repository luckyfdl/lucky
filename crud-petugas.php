<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION["status"]))
   { header("location: login.php"); exit(); }
if ($_SESSION["role"] != "administrator")
   { header("location: index.php"); exit(); }
if (isset($_POST['simpan'])) {
    mysqli_query($koneksi, "INSERT INTO user (username, password, role) VALUES ('$_POST[username]','$_POST[password]','petugas')");
    header("location: crud-petugas.php");
    exit();
}
$data = mysqli_query($koneksi, "SELECT * FROM user WHERE role='petugas'");
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
    <a href="index.php">Menu</a>
    <h2>Data Petugas</h2>
    <form method="POST">
        Username <input type="text" name="username" required><br>
        Password <input type="text" name="password" required><br>
        <button name="simpan">Simpan</button>
    </form>
    <table border="1">
        <tr>
        <th>Username</th>
        <th>Aksi</th>
    </tr>
        <?php while ($d = mysqli_fetch_array($data)) { ?>
        <tr>
            <td><?php echo $d['username']; ?></td>
            <td><a href="delete.php?username=<?php echo $d['username']; ?>" onclick="return confirm('Hapus?')">Hapus</a></td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
