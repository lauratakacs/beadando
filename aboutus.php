<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rottweiler fajtamentés honlapja - Rólunk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            padding-top: 25px;
            height: 0;
        }
        .video-wrapper video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%; /* Teljes szélesség az alapértelmezett, változtassuk meg */
            height: 100%; /* Teljes magasság az alapértelmezett, változtassuk meg */
        }
        /* Új stílusosztály a videó méretének csökkentésére */
        .smaller-video {
            width: 70%; /* Csökkenti a videó szélességét a konténer 70%-ára */
            height: auto; /* Megtartja a videó eredeti arányait */
            margin-left: auto; /* Középre igazítja a videót */
            margin-right: auto; /* Középre igazítja a videót */
        }
    </style>
</head>
<body>

<?php include_once 'config.php'; ?>
<?php include 'menu.php'; ?>

<div class="container">
        <h1>Rólunk</h1>
        <div class="row mb-4">
            <div class="col-md-6">
                <img src="Images/us.jpg" alt="Laura és a Rottweilerek" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p>Kedves Rottweiler-barátok!</p>
                <p>Laura vagyok, egy őrülten Rottweiler rajongó. Gyerekkorom óta rajongok az állatokért, bármilyen állatról legyen is szó. Évekig lovagoltam, kutyákkal foglalkoztam.</p>
                <p>2014-ben megszereztem az első szakképesítésem kutyakiképzésből, ekkor még nem specializálódtam kifejezetten fajtára. Az első Rottweileremet 2016-ban kaptam születésnapomra.</p>
                <p>Nagyon megszenvedtem a tanításával, ugyanis rá kellett jönnöm, hogy ez a fajta nem olyan mint a többi, az iskolában tanult tanulási módszerek nem működnek, egyedi módon kell megoldani az ő tanításukat. Újabb és újabb módszerekkel próbálkoztam és egy idő után rájöttem, hogy a Rottweiler-tanítás kreativitást igényel, amelyet jobban élveztem, mint bármi mást. Így elkezdtem a fajtával foglalkozni, majd 2021-ben megnyitottam az első Rottweiler menhelyet, a Dog-weiler-t. Azóta elhivatottan próbálom menteni őket, és megtörni az emberek fejében a fajtáról alkotott előítéletet.</p>
                <p>Ha felkeltettem az érdeklődésedet, keress fel és bármiben segítek!</p>
                <p>Laura</p>
                <p>(és okos Rottweilere, Zeph.)</p>
            </div>
        </div>
        <h2>Videók</h2>
        <div class="row">
            <div class="col-md-6">
            <p>A fajta bemutatása</p>
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/WK3zlnMvpJc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
               
            </div>
            <div class="col-md-6">
            <p>Kutyatréning a gyakorlatban</p>
                <div class="video-wrapper">
                    <video controls>
                        <source src="Images/goodboy.mp4" type="video/mp4">
                    </video>
                </div>  
            </div>
        </div>
    </div>
    
</body>
</html>