<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rottweiler fajtamentés honlapja - Bejelentkezés</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php include_once 'config.php'; ?>
<?php include 'menu.php'; ?>

<?php
session_start();

// Ellenőrzi, hogy a felhasználó megpróbált-e bejelentkezni
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ellenőrizze a felhasználónevet és a jelszót
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Itt kellene ellenőrizni az adatbázisban a felhasználónevet és a jelszót
    // Ha a bejelentkezés sikeres
    if ($username === 'valodi_felhasznalonev' && $password === 'valodi_jelszo') {
        // Beállítjuk a bejelentkezett felhasználót a session változók segítségével
        $_SESSION['user'] = $username;
        header("Location: index.php"); // Átirányítjuk a felhasználót a főoldalra
        exit();
    } else {
        // Ha a felhasználónév vagy jelszó nem megfelelő, hibaüzenetet jelenítünk meg
        echo "Hibás felhasználónév vagy jelszó!";
    }
}

?>


</body>
</html>