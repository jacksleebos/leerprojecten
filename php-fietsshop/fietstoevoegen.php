<?php
include("navbar.php");
$productnaam = $_POST['productnaam'];
$productprijs = $_POST['productprijs'];
try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=fietsenshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conn->prepare('INSERT INTO fietsen (omschrijving, prijs) VALUES (:fnaam, :fprijs)');

    $statement->execute([
    'fnaam' => $productnaam,
    'fprijs' => $productprijs
    ]);	
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}	
$conn = NULL;
header("Location: indexfietsen.php");
?>