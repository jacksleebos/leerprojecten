<?php
    include_once("dblib.php");

    $productid = $_GET['productid'];
    $productnaam = dblookup("fietsen", "omschrijving", $productid);
    $productprijs = dblookup("fietsen", "prijs", $productid);

?>

<form action="fietsupdate.php" method="POST">

    <input name="productid" placeholder="Product id" value="<?php echo $productid ?>">
    <input name="productnaam" placeholder="Product omschrijving" value="<?php echo $productnaam ?>">
    <input name="productprijs" placeholder="Product prijs" value="<?php echo $productprijs ?>"> 
    <button type="submit">Update</button>

</form>