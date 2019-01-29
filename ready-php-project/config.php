<?php

$databaseHost = "127.0.0.1";
$databaseName = "project1";
$databaseUsername = "root";
$databasePassword = "";
// we gaan werken met PDO en niet met MYSQL we zijn flexibel en van deze tijd
// connectie met de database maken
try {
	
	$dbConn = new PDO("mysql:host={$databaseHost};dbname={$databaseName}", $databaseUsername, $databasePassword);
	
	$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	// Setting Error Mode as Exception
} catch(PDOException $e) {
	echo $e->getMessage();
}
 
?>
