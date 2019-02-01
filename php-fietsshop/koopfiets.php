
<?php
    include_once("dblib.php");
$productid = $_GET['productid'];
$besteller = 'JackSleebos@hotmail.com';
$tebetalen = 0.00;
$tebetalen = dblookup("fietsen", "prijs", $productid);
try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=fietsenshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // $statement = $conn->prepare('INSERT INTO bestelling (email, productid, tebetalen) VALUES (:femail, :fproductid, :ftebetalen)');
    $statement = $conn->prepare("INSERT INTO bestelling (fietsId,prijs,aantal,Email) VALUES (:ffietsId,:ftebetalen,'1','sleebos@kpn.com')");
    $statement->execute([
  
'ffietsId' => $productid,
    'ftebetalen' => $tebetalen
    ]);	
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}	
$conn = NULL;
header("Location: klantsite.php");
?>