<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rottweiler fajtamentés honlapja - Kapcsolat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php include_once 'config.php'; ?>
<?php include 'menu.php'; ?>

<div class="container text-center">
  <div class="row">
    <div class="col">
      Nyitvatartás: <br>
                Hétfő: ZÁRVA! (Menhely takarítás miatt.*) <br>
                Kedd-Péntek: 8:00-18:00 <br>
                Szombat-Vasárnap: 8:00-20:00
    </div>
    <div class="col order-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d711.2345872222658!2d18.92975087796237!3d47.383638779360695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1shu!2shu!4v1715027120625!5m2!1shu!2shu" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col order-1">
    A menhely címe: <br>
      2030 Érd, <br>
      Sió utca 16.
    </div>
  </div>
</div>

<div class="container text-center">
  <div class="row">
    <div class="col">
        Kérlek támogasd menhelyünket az adód 1%-ával! <br>
        Számodra csak 1%, nekünk és a Rottweiler-ekenek azonban sok étel, játék és gyógyszert jelent! <br>
        Adószámunk: <br>
        74629487-3-77
    </div>
    <div class="col order-5">
        Elérhetőek vagyunk még telefonon is, amennyiben éppen nem a kutyusokkal játszunk. <br>
        Telefonszámunk: <br>
        +3630/465-2431
    </div>
    <div class="col order-1">
        Ha kérdésed van fordulj hozzánk az alábbi e-mail címen: <br>
        dog-weiler@menhely.hu
    </div>
  </div>
</div>

<div class="container text-center mt-4">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form id="contactForm" action="message_handler.php" method="post">
        <h3>Küldj üzenetet nekünk!</h3>
        <div class="mb-3">
            <label for="name" class="form-label">Név:</label>
            <input type="text" class="form-control btn btn-outline-danger" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail cím:</label>
            <input type="email" class="form-control btn btn-outline-danger" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Üzenet:</label>
            <textarea class="form-control btn btn-outline-danger" id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-outline-danger">Küldés</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>