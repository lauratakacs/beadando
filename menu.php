<!DOCTYPE html>
<html lang="hun">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menü</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <a href="#" class="navbar-brand text-danger fst-italic text-decoration-underline">Dog-weiler</a>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                foreach ($menu as $label => $link) {
                    echo "<li class='nav-item'><a class='nav-link' href=\"$link\">$label</a></li>";
                }
                ?>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                <?php
                // Ha be van jelentkezve a felhasználó
                if (isset($_SESSION['user'])) {
                    echo "<li class='nav-item'><a class='nav-link btn btn-outline-danger' href='#'>Kilépés</a></li>";
                } else { // Ha nincs bejelentkezve
                    echo "<li class='nav-item'><a class='nav-link btn btn-outline-danger' href='login_page.php'>Belépés</a></li>";
                }
                ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

</body>
</html>