<?php
include 'config.php'; // Adatbázis kapcsolat

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Szerveroldali validáció
if (empty($name) || empty($email) || empty($message)) {
    die("Minden mező kitöltése kötelező!");
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Érvénytelen email cím!");
} else {
    // Adatok mentése az adatbázisba
    $query = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
    $query->bind_param("sss", $name, $email, $message);
    $query->execute();

    if ($query->affected_rows === 1) {
        echo "Köszönjük az üzeneted! Hamarosan válaszolunk.";
    } else {
        echo "Hiba történt az üzenet mentése során.";
    }
}
?>