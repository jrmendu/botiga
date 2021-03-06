<?php
    session_start(); //generem la variable
         
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Horta Santpau</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estils_botiga.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Banner portada -->
    <div class="jumbotron text-center banner" style="margin-bottom:0">
        <h1>Hort de Sant Pau</h1>
        <p>Cooperativa Fruita Ecològica</p> 
    </div>
    <!-- /Banner portada -->

    <!-- Barra de menú i enllaços -->
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="bdd_entrarproducte_fruita.php">Addfrut</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bdd_borrarlinia_fruita.php">Delfrut</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bdd_modificarpreu_fruita.php">ModPreuFrut</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bdd_modificarstock_fruita.php">ModStockFrut</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bdd_entrarlinia_usuaris.php">Adduser</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bdd_borrarusuaris_usuaris.php">Deluser</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bdd_fruita_mostrataula.php">Taula Fruita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bdd_ventes_mostrataula.php">Ventes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="session_destroy.php">Tanca</a>
                </li>
            </ul>
        </div>  
    </nav>
    <!-- /Barra de menú i enllaços -->
    
    <!-- container -->
    <div class="container" style="margin-top:30px">  
        <div class="row">
            <div class="col-2"> </div>
            <div class="col-8">
                <?php
                    $conector=new mysqli ('localhost', 'root', '', 'botiga');
                    if ($conector->connect_error){
                        echo "error al conectar a la base de dades: ".$conector->connect_error;
                    } 

                    $sql="SELECT * FROM `usuaris`";
                    $resultats=$conector->query($sql);
                    echo "<table class='table'>";
                    echo "<thead>";                  
                    echo "<tr>";   
                    echo "<th scope='col'> Nom </th>"; 
                    echo "<th scope='col'> Cognom </th>"; 
                    echo "<th scope='col'> Email </th>";  
                    echo "<th scope='col'> Passw </th>"; 
                    echo "<th scope='col'> Telefon </th>"; 
                    echo "<th scope='col'> Poblacio </th>"; 
                    echo "</tr>"; 
                    echo "</thead>";
                    if ($resultats){
                        $registre=$resultats->fetch_assoc();
                        echo "<tr>";
                        while($registre){
                            echo "<td>".$registre["nom"]."</td><td> ".$registre["cognom"]."</td><td> "
                            .$registre["email"]."</td><td> ".$registre["passw"]."</td><td> "
                            .$registre["telefon"]."</td><td> ".$registre["poblacio"]."</td>";
                            $registre=$resultats->fetch_assoc();
                            echo "</tr>";
                        }
                    }else { 
                        echo "no hay registros para mostrar <br>";
                    }
                    echo "</table>";
                ?>
            </div>
            <div class="col-2"> </div>
        </div>   
    </div>
    <!-- /container -->

    <!-- footer -->
    <div class="footer bg-light" style="margin-bottom:0">
        <p>Taula Usuaris</p>
    </div>
    <!-- /footer -->
</body>
</html>
    
    
    