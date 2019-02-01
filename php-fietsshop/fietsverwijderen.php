
<?php
$productid = $_GET['productid'];
try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=fietsenshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conn->prepare("DELETE FROM fietsen WHERE id = :id");

    $statement->execute([ ':id' => $productid ]);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}	
$conn = NULL;
header("Location: indexfietsen.php");
?>