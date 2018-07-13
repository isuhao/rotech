<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROTECH - Panel admina</title>
    <meta name="robots" content="nofollow" />
    <link rel="stylesheet" href="style_admin.css">
    <link rel="icon" type="image/png" href="img/favicon.png">
</head>

<body>

    <form class="form-login" action="zaloguj.php" method="post">

        <div class="form-container">
            <label for="login"><b>Login</b></label>
            <input type="text" placeholder="Login" name="login" required>

            <label for="password"><b>Hasło</b></label>
            <input type="password" placeholder="Hasło" name="password" required>

            <button type="submit">Zaloguj się</button>
        </div>
        
    </form>

</body>

</html>