<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h2>Login</h2>
    <form action="proses-login.php" method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"> <br><br>

        <button>Login</button>
    </form>
     <br>
    <a href="register.php">register jika belum memiliki akun</a>
</body>
</html>