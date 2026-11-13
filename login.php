<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = $_POST['password'];
    $role     = $_POST['role']; 

    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password' AND role='$role'");
    $data = mysqli_fetch_assoc($sql);
    $cek = mysqli_num_rows($sql); 

    if ($cek > 0) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['role']     = $data['role']; 
        $_SESSION['status']   = "login";
        
        header("location: index.php");
        exit(); 
    } else {
        echo "<script>
                alert('Username, Password, atau Role salah!'); 
                window.location='login.php'; 
              </script>"; 
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aplikasi Kasir</title>
    
</head>
<body>
    <link rel="stylesheet" href="style.css">
    <div class="login-box">
        <h2>Login Kasir</h2>
        <form action="" method="POST">
            <label>Username:</label>
            <input type="text" name="username" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <label>Login Sebagai:</label>
            <div class="role-group">
                <label>
                    <input type="radio" name="role" value="petugas" required> Petugas
                </label>
                <label>
                    <input type="radio" name="role" value="administrator" required> Administrator
                </label>
            </div>

            <button type="submit" name="login">LOGIN</button>
        </form>
        <div class="link">
            <a href="register.php">Register jika belum memiliki akun</a>
        </div>
    </div>

</body>
</html>