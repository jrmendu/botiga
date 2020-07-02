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
                    <a class="nav-link" href="bdd_modificarpreu_fruita.php">ModPreuFruita</a>
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
                    <a class="nav-link" href="bdd_usuaris_mostrataula.php">Taula Usuaris</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="session_destroy.php">Tanca</a>
                </li>
            </ul>
        </div>  
    </nav>
    <!-- /Barra de menú i enllaços -->
    
    <!--alertes -->
    <?php
            if (isset($_GET['m'])){
                switch($_GET['m']){
                    case 1:?>
                        <div class="alert alert-ligth" role="alert">
                            <p><strong>Dades entrades correctament</strong></p>
                        </div> 
            <?php   break; 
                    case 2:?>
                        <div class="alert alert-ligth" role="alert">
                            <p><strong>ERROR a l'entrar les dades </strong></p>
                        </div> 
            <?php   break; }
                } ?>
    <!--alertes -->
    
    <!-- container -->
    <div class="container" style="margin-top:30px">  
        <div class="row">
            <div class="col-2"> </div>
            <div class="col-8">
                <form action='bdd_fruita_modificastock.php' method='GET'>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputnom">Nom</label>
                            <input type="text" name="nom" class="form-control" id="inputnom" autofocus>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputstock">Stock</label>
                            <input type="number" step="any" name="stock" class="form-control" id="inputstock">
                        </div>
                    </div>
                    <div class="row mx-md-n5">
                        <div class="col px-md-5"><input type="hidden" name="m" value="1"></div>
                        <div class="col px-md-5"><button type="submit" class="btn btn-light">Envia</button></div>
                    </div> 
                </form>
            </div>
            <div class="col-2"> </div>
        </div>   
    </div>
    <!-- /container -->

    <!-- footer -->
    <div class="footer bg-light" style="margin-bottom:0">
        <p>Modifiques STOCK fruita</p>
    </div>
    <!-- /footer -->
</body>
</html>