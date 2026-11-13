<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $u = mysqli_real_escape_string($koneksi, $_POST['username']);
    $p = mysqli_real_escape_string($koneksi, $_POST['password']);
    $r = $_POST['role'];

    if (mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user WHERE username='$u'")) > 0) {
        echo "<script>alert('Username sudah digunakan'); window.location='register.php';</script>";
    } else {
        mysqli_query($koneksi, "INSERT INTO user (username, password, role) VALUES ('$u', '$p', '$r')");
        echo "<script>alert('Registrasi berhasil'); window.location='login.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Aplikasi Kasir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="login-box">
        <h2>Register Akun</h2>
        <form action="" method="POST">
            <label>Username:</label>
            <input type="text" name="username" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <label>Daftar Sebagai:</label>
            <div class="role-group">
                <label>
                    <input type="radio" name="role" value="petugas" required> Petugas
                </label>
                <label>
                    <input type="radio" name="role" value="administrator" required> Administrator
                </label>
            </div>

            <button type="submit" name="register">REGISTER</button>
        </form>
        <div class="link">
            <a href="login.php">Sudah punya akun? Login disini</a>
        </div>
    </div>

</body>
</html>