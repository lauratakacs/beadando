<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rottweiler fajtamentés honlapja - Galéria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include_once 'config.php'; ?>
<?php include 'menu.php'; ?>

<div class="container my-4">
    <h2 class="mb-4 text-danger">Gazdára váró Rottweiler-ek</h2>
    <div class="row">
        <div class="col-md-4">
            <figure>
                <img src="Images/lilith.jpg" class="img-fluid gallery-image" alt="Lilith">
                <figcaption class="text-center">
                <p><strong>Lilith</strong><br>
                4 hónapos szuka<br>
                Barátságos, játékos kutya, szereti az embereket.<br>
                A macskákkal nem jön ki jól.</p>
            </figcaption>
            </figure>
        </div>
        <div class="col-md-4">
            <figure>
                <img src="Images/ashley.jpg" class="img-fluid gallery-image" alt="Ashley">
                <figcaption class="text-center">
                <p><strong>Ashley</strong><br>
                1 éves szuka<br>
                Barátságos, játékos kutya, de gyerekek mellé nem ajánlott.<br>
                Szeret futni, sportolni.</p>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-4">
            <figure>
                <img src="Images/astor.jpg" class="img-fluid gallery-image" alt="Astor">
                <figcaption class="text-center">
                <p><strong>Astor</strong><br>
                1 éves kan<br>
                Erős házörző ösztönei vannak, csak kertes lakásba ajánlott.<br>
                Más kutyákat nem fogad el.</p>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-4">
            <figure>
                <img src="Images/bosco.jpg" class="img-fluid gallery-image" alt="Bosco">
                <figcaption class="text-center">
                <p><strong>Bosco</strong><br>
                5 éves kan<br>
                Barátságos, emberekkel jól kijön.<br>
                Alap engedelmes parancsokat tudja.</p>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-4">
            <figure>
                <img src="Images/brown.jpg" class="img-fluid gallery-image" alt="Brown">
                <figcaption class="text-center">
                <p><strong>Brown</strong><br>
                7 éves kan<br>
                Barátságos, de félelme miatt sokszor agresszívan reagál.<br>
                Tapasztalt, tudatos gazdának ajánlott.</p>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-4">
            <figure>
                <img src="Images/frank.jpg" class="img-fluid gallery-image" alt="Frank">
                <figcaption class="text-center">
                <p><strong>Frank</strong><br>
                2 éves kan<br>
                Kiváló aktív sportot űző embereknek.<br>
                Szeret dolgozni, apportírozásban kiemelkedő.</p>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-4">
            <figure>
                <img src="Images/gaia.jpg" class="img-fluid gallery-image" alt="Gaia">
                <figcaption class="text-center">
                <p><strong>Gaia</strong><br>
                4 éves szuka<br>
                Magas képzettségű kutya, őrző-védő ágazatban kiemelkedő.<br>
                Csak tapasztalt, aktív gazdáknak adjuk örökbe.</p>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-4">
            <figure>
                <img src="Images/layla.jpg" class="img-fluid gallery-image" alt="Layla">
                <figcaption class="text-center">
                <p><strong>Layla</strong><br>
                2 hónapos szuka<br>
                Félszobatiszta, akaratok kölyök.<br>
                Formálható még, de az embereket, állatokat kedveli.</p>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-4">
            <figure>
                <img src="Images/stylo.jpg" class="img-fluid gallery-image" alt="Stylo">
                <figcaption class="text-center">
                <p><strong>Stylo</strong><br>
                5 hónapos kan<br>
                Barátságos, de rossz kutya.<br>
                Szeret rágni, ásni, könnyen tanítható.</p>
                </figcaption>
            </figure>
        </div>
    </div>

    <?php if (isset($_SESSION['user'])): ?>
    <div class="my-4">
        <h4>Új kép feltöltése</h4>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="fileUpload" class="form-label">Válassz képet a feltöltéshez:</label>
                <input type="file" class="form-control" id="fileUpload" name="fileToUpload">
            </div>
            <button type="submit" class="btn btn-primary">Feltöltés</button>
        </form>
    </div>
    <?php else: ?>
        <p class="text-warning text-danger">Képfeltöltéshez kérjük jelentkezzen be!</p>
    <?php endif; ?>
</div>

</body>
</html>
