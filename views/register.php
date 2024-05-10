<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registrasi</title>
    <link rel="stylesheet" href="views/css/login.css">
</head>
<body>
    <div class="container">
        <div class="form-container" id ="register-container">
            <h2>Registrasi</h2>
            <form id="register-form" action='/TUGAS-CRUD-PWEBPR-C-3032/dashboard' method="post">
                <div class="form-group">
                    <label for="reg-username">Username:</label>
                    <input type="text" id="reg-username" name="username">
                </div>
                <div class="form-group">
                    <label for="reg-nama_lengkap">Nama Lengkap:</label>
                    <input type="text" id="reg-nama_lengkap" name="nama_lengkap">
                </div>
                <div class="form-group">
                    <label for="reg-password">Password:</label>
                    <input type="password" id="reg-password" name="password">
                </div>
                <button type="submit">Register</button>
            </form>
            <a href="login">
                <button id="login-button">Ganti Ke Login</button>
            </a>
        </div>
    </div>
    <!-- <script src="js/login.js"></script> -->
</body>
</html>
