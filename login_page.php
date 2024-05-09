<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rottweiler fajtamentés honlapja - Bejelentkezés</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

<?php include_once 'config.php'; ?>
<?php include 'menu.php'; ?>

<div class="login-container">
    <h1>Bejelentkezés</h1>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="username">Felhasználónév:</label>
            <input type="text" id="username" name="username" class="form-control btn btn-outline-danger" required>
        </div>
        <div class="form-group">
            <label for="password">Jelszó:</label>
            <input type="password" id="password" name="password" class="form-control btn btn-outline-danger" required>
        </div>
        <button type="submit" class="btn btn-outline-danger">Bejelentkezés</button>
    </form>
</div>

<div class="registration-link">
    <p>Még nincs fiókod? <a href="registration_page.php" class="btn btn-regisztralj">Regisztrálj itt!</a></p>
</div>

</body>

</html>
