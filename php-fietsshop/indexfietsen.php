

<head>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<img src="CG.jpg" alt="Trulli" width="1300" height="200">

</head>
<div class="bs-component">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
         <a class="navbar-brand" href="indexfietsen.php"><h1>Beheersysteem Fietsshop</h1></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                  <ul 
                    class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="toonbestellingen.php"><h4>Bestellingen</h4></a>
                    </li>
                  </ul> 
               </div>
  </nav>
</div>
<body>
<div class="container-fluid">
<form class="bs-component">
    <div class="input-group">
      <input class="form-control" name="naamfilter" placeholder="Naam bevat..." style="max-width:280px">
      <input class="btn btn-warning" type="submit" value="Filter">
      <a href="fietstoevoegen.html" class="btn btn-info">Fiets toevoegen</a>
      </div><!-- /input-group -->
 </form>
<?php

 if (isset($_GET['naamfilter']))
  {
    $naamfilter = $_GET['naamfilter'];
  }
 else
   {
 	  $naamfilter = '';
   }
 try {
  $conn = new PDO("mysql:host=127.0.0.1;dbname=fietsenshopdb", 'root', '');
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $stmt = $conn->query("SELECT * FROM fietsen WHERE omschrijving LIKE '%$naamfilter%'");

   echo "<table border=0 cellpadding=5>";
 	while ($row = $stmt->fetch()) {
     echo "<tr>"; 
     echo "<td>" . $row['omschrijving'] . "</td><td>" . $row['prijs'] . "</td>";
 		//echo "<td><a  href='fietsverwijderen.php?productid=" . $row['id'] . "'> <button type='button' class='btn btn-primary  btn-sm'>Verwijder</button></a></td> ";
   
     echo "<td><a href=\"fietsverwijderen.php?productid=$row[id]\" onClick=\"return confirm('Je kan alleen verwijderen als het product niet in de bestellijst staat')\" class='btn btn-primary  btn-sm'>Verwijder</a></td>";		
     echo "<td><a href='fietsbewerken.php?productid=" . $row['id'] . "'> <button type='button' class='btn btn-primary  btn-sm'>Wijzigen</button></a></td>";
     echo "<td><a href='koopfiets.php?productid=" . $row['id'] . "'><button type='button' class='btn btn-success  btn-sm'>Kopen</button></a></td>";
     echo "</tr>";
   }	
   echo "</table>";
 	$conn = null;	
 }
 catch(PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
 }	
?>
</div>
</body>