<?php
include("navbar.php");
$productid   = $_POST['productid'];
$productnaam = $_POST['productnaam'];
$productprijs = $_POST['productprijs'];
try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=fietsenshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conn->prepare('UPDATE fietsen SET omschrijving=:fomschrijving, prijs=:fprijs WHERE id = :fproductid');
    
    $statement->execute([
    'fomschrijving' => $productnaam,
    'fprijs' => $productprijs,
    'fproductid' => $productid
    ]);	
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}	
$conn = NULL;
header("Location: indexfietsen.php");
?>