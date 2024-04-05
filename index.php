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
            <form id="login-form">
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
            <button id="register-button">Ganti Ke Register</button>
        </div>
        <div class="form-container" id ="register-container">
            <h2>Registrasi</h2>
            <form id="register-form" style="display: none;">
                <div class="form-group">
                    <label for="reg-username">Username:</label>
                    <input type="text" id="reg-username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="reg-password">Password:</label>
                    <input type="password" id="reg-password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="reg-phone">No Hp:</label>
                    <input type="text" id="reg-phone" name="phone" required>
                </div>
                <button type="submit">Register</button>
            </form>
            <button id="login-button">Ganti Ke Login</button>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>
</html>
