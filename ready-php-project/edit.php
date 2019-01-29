<html>
<body>

<head>	
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<h1><center>Klantengegevens wijzigen</center></h1>

<?php
		session_start();
		// including the database connection file
		include_once("config.php");

	if($_SERVER['REQUEST_METHOD']=='POST')
	{	
	$id = $_POST['id'];
	$naam=$_POST["naam"];
	$woonplaats=$_POST['woonplaats'];
	$aantalkopjes=$_POST['aantalkopjes'];	
	
	// controle op lege invoervelden
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
	} else {	
		//updaten van de tabel
		$sql = "UPDATE deelnemers SET naam=:naam, woonplaats=:woonplaats, aantalkopjes=:aantalkopjes WHERE id=:id";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':id', $id);
		$query->bindparam(':naam', $naam);
		$query->bindparam(':woonplaats', $woonplaats);
		$query->bindparam(':aantalkopjes', $aantalkopjes);
		$query->execute();
				
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
		}
		}
		else
		{
				$id = $_GET['id'];
				//selecteren van gegevens die bij de persoonlijke ID horenr
				$sql = "SELECT * FROM deelnemers WHERE id=:id";
				$query = $dbConn->prepare($sql);
				$query->execute(array(':id' => $id));

				while($row = $query->fetch(PDO::FETCH_ASSOC))
				{
					$naam = $row['naam'];
					$woonplaats = $row['woonplaats'];
					$aantalkopjes = $row['aantalkopjes'];
				}
		}
?>

<a href="index.php"><h1><center><input type="submit" value="Terug naar het hoofdscherm Klantenbestand"></center></h1></a><br/><br/>

	<br/><br/>
	<div class="container">
			<form name="form1" method="POST" action="<?php echo ($_SERVER['PHP_SELF']);?>">
				<table border="0">
					<tr> 
						<td>Naam</td>
						<td><input type="text" name="naam" value="<?php echo $naam;?>"></td>
					</tr>
					<tr> 
						<td>Woonplaats</td>
						<td><input type="text" name="woonplaats" value="<?php echo $woonplaats;?>"></td>
					</tr>
					<tr> 
						<td>Aantal kopjes</td>
						<td><input type="text" name="aantalkopjes" value="<?php echo $aantalkopjes;?>"></td>
					</tr>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="submit" value="Update"></td>
					</tr>
				</table>
			</form>
	</div>		
</body>
</html>