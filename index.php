<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rottweiler fajtamentés honlapja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include_once 'config.php'; ?>
<?php include 'menu.php'; ?>



<?php
// Front Controller
$page = isset($_GET['page']) ? $_GET['page'] : 'Kezdőlap';
$page = ucfirst($page); // Az oldal neve legyen nagy kezdőbetűvel

// Ellenőrizzük, hogy a megadott oldal létezik-e a menüben
if (array_key_exists($page, $menu)) {
    include_once $menu[$page];
} else {
    // Ha az oldal nem létezik, betöltjük a kezdőlapot
    include_once 'index.php';
}
?>

<!--Showcase-->
<section class="bg-dark text-light pt-0 text-center">
        <div class="container">
            <div class="d-sm-flex align-item-center justify-content-between">
                <div>
                    <h1>Csakúgy mint méretük, ölelésük is óriási <span class="text-danger">
                    boldogságot
                    </span> hoz!</h1>
                    <p class="lead my-4">Az oldalon csak és kizárólag Rottweiler kutyafajta mentésével foglalkozunk.
                        Amennyiben szeretnéd, hogy egy nagy mackó bújjon hozzád a kanapén, úgy válaszd ezt a hűséges fajtát!
                    </p>
                    <button class="btn btn-outline-danger btn-sm"><a href="galleria.php">Ide kattintva megnézheted a gazdára váró Rottweiler-eket!</a></button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="Images/rottweiler.jpg" alt="">
            </div>
        </div>
    </section>

<?php include("footer.php"); ?>


</body>
</html>