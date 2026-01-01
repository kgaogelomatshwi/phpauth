<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="auth-box">
    <h2>Login</h2>

    <form action="../process/login_process.php" method="POST">
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <div class="link">
        Don’t have an account? <a href="register.php">Register</a>
    </div>
</div>

</body>
</html>
