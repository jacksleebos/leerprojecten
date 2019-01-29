<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<div class="container">
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit']))
 	{	$naam = $_POST['naam'];
		$woonplaats = $_POST['woonplaats'];
		$aantalkopjes = $_POST['aantalkopjes'];
		
	// controle lege velden
		if(empty($naam) || empty($woonplaats) || empty($aantalkopjes)) {
				
		if(empty($naam)) {
			echo "<font color='red'>Naam field is empty.</font><br/>";
		}
		
		if(empty($woonplaats)) {
			echo "<font color='red'>Woonplaats field is empty.</font><br/>";
		}
		
		if(empty($aantalkopjes)) {
			echo "<font color='red'>Aantalkopjes field is empty.</font><br/>";
		}
		
		//link naar de vorige pagina
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} 
	
	else { 
		// als alle velden zijn ingevuld dan invoeren in de database 
		$sql = "INSERT INTO deelnemers(naam, woonplaats, aantalkopjes) VALUES(:naam, :woonplaats, :aantalkopjes)";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':naam', $naam);
		$query->bindparam(':woonplaats', $woonplaats);
		$query->bindparam(':aantalkopjes', $aantalkopjes);
		$query->execute();
		//geef de melding 'Data added successfully' geef mogelijkheid om de nieuwe lijst te zien
		echo "<font color='green'><h1><center>Data added successfully.</center></h1>";
		echo "<br/><a href='index.php'><h1><center>Weergeven actuele klantenbestand</center></h1></a>";
		}
	}
?>
</div>
</body>
</html>
