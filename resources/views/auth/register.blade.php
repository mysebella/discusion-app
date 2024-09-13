<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register dulu</title>
    <link rel="stylesheet" href="{{ asset('') }}style.css">
</head>

<body>
    <div class="container">
        <div class="register-box">
            <h2>Daftar sek</h2>
            <form action="/auth/register" method="POST">
                @csrf
                <div class="input-box">
                    <label for="reg-username">Username :</label>
                    <input type="text" id="reg-username" name="username" required>
                </div>
                <div class="input-box">
                    <label for="reg-email">Email :</label>
                    <input type="email" id="reg-email" name="email" required>
                </div>
                <div class="input-box">
                    <label for="reg-password">Password :</label>
                    <input type="password" id="reg-password" name="password" required>
                </div>
                <button type="submit">REGISTER</button>
            </form>
            <p class="toggle-text">udh ada akun? ya login cok <a href="login.html">Login</a></p>
        </div>
    </div>
</body>

</html>
