<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registrasi</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="form-container" id ="login-container">
            <h2>Login</h2>
            <form id="login-form" action='pages/dashboard.php'>
                <div class="form-group">
                    <label for="login-username">Username:</label>
                    <input type="text" id="login-username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="login-password">Password:</label>
                    <input type="password" id="login-password" name="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
            <a href="register.php">
                <button id="register-button">Ganti Ke Register</button>
            </a>
        </div>
    </div>
    <!-- <script src="js/login.js"></script> -->
</body>
</html>
