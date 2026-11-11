<!DOCTYPE html>
<html>
<head>
    <title>Register Admin Baru</title>
</head>
<body>
    <h2>Register</h2>
    
    <form action="proses-register.php" method="POST">
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit" name="register">Register</button>
    </form>
    
    <br>
    <a href="login.php">Login jika sudah memiliki akun</a>
</body>
</html>