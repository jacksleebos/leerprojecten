
<?php
//including the database connection file
include("config.php");

//fetching data in descending order (lastest entry first)
$result = $dbConn->query("SELECT * FROM deelnemers ORDER BY id ASC");
?>

<html>
	
<head>	
	<title>Homepage</title>
	

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
  text-align:center;
}
th,td {
  padding: 5px;
  width: auto;
}
</style>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
				<div class="navbar-header">
				<a class="navbar-brand" ><h1><center>Hoofdscherm Klantenbestand</center></h1></a>
				</div>
   
    	<form class="navbar-form navbar-right" action="/add.html">
				<div>
				<a href="add.html"><center><input type="submit" value="klant toevoegen"></center></a><br/><br/>
				</div>
    	</form>
  </div>
</nav>



<div class="container">
	<table width='100%' border=0>
	
	<tr bgcolor='#696969'>
		<td>id</td>
		<td>Naam</td>
		<td>Woonplaats</td>
		<td>aantal kopjes koffie</td>
		<td>Wijzigen</td>
		<td>Verwijderen</td>
	</tr>

	<?php 
		
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 
		 // en het weergeven als pagina als html		
	echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['naam']."</td>";
	echo "<td>".$row['woonplaats']."</td>";
	echo "<td>".$row['aantalkopjes']."</td>";	
	
	echo "<td><a href=\"edit.php?id=$row[id]\"><img src='pencil.png' width='10%' height='10%'></img></a></td>";
	
	echo "<td><a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><img src='trash.png' width='10%' height='10%'></img></a></td>";		
	}
	
	?>
	</table>
	</div>

</body>
</html>
