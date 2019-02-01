
<head>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<img src="CG.jpg" alt="Trulli" width="1300" height="200">

</head>


<div class="bs-component">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
         <a class="navbar-brand" href="indexfietsen.php"><h1>Fietsenshop</h1></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                  <ul 
                        class="navbar-nav mr-auto">
                                
                              <li class="nav-item">
                                  <a class="nav-link" href="toonbestellingen.php"><h4>Bestellingen</h4></a>
                            </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="inschrijving.html"><h4>Account aanmaken</h4></a>
                          </li>
                  </ul> 
               </div>
  </nav>
</div>
<body>
<div class="container-fluid">
            <h2>Bestellingen ;</h2>
            <?php
                    try {
                        $conn = new PDO("mysql:host=127.0.0.1;dbname=fietsenshopdb", 'root', '');
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $stmt = $conn->query("SELECT * FROM bestelling");
                        while ($row = $stmt->fetch()) {
                        echo "<LI>" . $row['id'] . " - ";
                        echo $row['Email'] . " - ";
                        echo $row['fietsId'] . " - ";
                        echo $row['prijs'] . " - ";
                        echo "</LI>";
                        }			
                    }
                    catch(PDOException $e) {
                            echo "Connection failed: " . $e->getMessage();
                        }
            $conn = null;			
            ?>
</div>
</body>