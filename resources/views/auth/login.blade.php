<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('') }}style.css">
</head>

<body>
    <div class="container">
        <div class="login-box">
            <h2>Masuk</h2>
            <form action="/auth/login" method="POST">
                @csrf
                <div class="input-box">
                    <label for="username">Username / Email :</label>
                    <input type="text" id="username" name="email" required>
                </div>
                <div class="input-box">
                    <label for="password">Password :</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">LOGIN</button>
            </form>
            <p class="toggle-text">Blom punya akun kannnn... bikin dulu coeg <a href="register.html">Register</a></p>
        </div>
    </div>
</body>

</html>
