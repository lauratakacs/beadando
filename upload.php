<?php
session_start();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "A következő fájl ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " sikeresen fel lett töltve.";
        } else {
            echo "Hiba történt a képfeltöltés során.";
        }
    } else {
        echo "A fájl nem egy kép. Kérem, töltse fel a képet!";
    }
}
?>