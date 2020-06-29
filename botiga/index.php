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
                    <a class="nav-link" href="entra.php">Entra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registre.php">Registra't</a>
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
                            <p><strong>Email o password incorrecte </strong></p>
                        </div> 
            <?php   break; 
                    case 2:?>
                        <div class="alert alert-ligth" role="alert">
                            <p><strong>Sessió tancada </strong></p>
                        </div> 
            <?php   break; 
                }
            } ?>
    <!--alertes -->

    <!-- Preus producte. Canviar el preus aqui -->
    <?php 
        $poma = 2.5;
        $pera = 2;
        $platan = 1.75;
        $mandarina = 1.80;
        $taronja = 2.5;
        $pressec = 2.75;
        $albercoc = 2.25;
        $iogurt = 2;
    ?>
    <!-- /Preus producte. Canviar el preus aqui -->

    <!-- container -->
    <div class="container" style="margin-top:30px">            
        <div class="row" style="margin-top:30px">
            <!-- Pomes -->
            <div class="col-sm-6 col-lg-3" >
                <h2>Pomes</h2>
                <img src="img/poma2.jpg" alt="poma" class="rounded-circle rounded mx-auto d-block">
                <p> <span class="preu"><?=$poma?> €/kg </span></p> 
                <hr class="d-sm-none">
            </div>
            <!-- Peres -->
            <div class="col-sm-6 col-lg-3" >
                <h2>Peres</h2>
                <img src="img/peres2.jpg" alt="peres" class="rounded-circle rounded mx-auto d-block">
                <p> <span class="preu"><?=$pera?> €/kg </span></p>
                <hr class="d-sm-none">
            </div>
            <!-- Platan -->
            <div class="col-sm-6 col-lg-3" >
                <h2>Platans</h2>
                <img src="img/platans2.jpg" alt="platan" class="rounded-circle rounded mx-auto d-block">
                <p> <span class="preu"><?=$platan?> €/kg </span></p>
                <hr class="d-sm-none">
            </div>
            <!-- Mandarina -->
            <div class="col-sm-6 col-lg-3" >
                <h2>Mandarines</h2>
                <img src="img/mandarina2.jpg" alt="mandarina" class="rounded-circle rounded mx-auto d-block">
                <p> <span class="preu"><?=$mandarina?> €/kg </span></p>
                <hr class="d-sm-none">
            </div>
        </div> 
        <!-- segona fruita -->
        <div class="row" style="margin-top:30px">
            <!-- Taronja -->
            <div class="col-sm-6 col-lg-3" >
                <h2>Taronges</h2>
                <img src="img/taronja2.jpg" alt="taronja" class="rounded-circle rounded mx-auto d-block">
                <p> <span class="preu"><?=$taronja?> €/kg </span></p> 
                <hr class="d-sm-none">
            </div>
            <!-- Préssec -->
            <div class="col-sm-6 col-lg-3" >
                <h2>Préssecs</h2>
                <img src="img/pressec2.jpg" alt="préssec" class="rounded-circle rounded mx-auto d-block">
                <p> <span class="preu"><?=$pressec?> €/kg </span></p>
                <hr class="d-sm-none">
            </div>
            <!-- Albercocs -->
            <div class="col-sm-6 col-lg-3" >
                <h2>Albercocs</h2>
                <img src="img/albercoc2.jpg" alt="albercoc" class="rounded-circle rounded mx-auto d-block">
                <p> <span class="preu"><?=$albercoc?> €/kg </span></p>
                <hr class="d-sm-none">
            </div>
            <!-- Iogurts -->
            <div class="col-sm-6 col-lg-3" >
                <h2>Iogurts</h2>
                <img src="img/iogurt2.jpg" alt="iogurt" class="rounded-circle rounded mx-auto d-block">
                <p> <span class="preu"><?=$iogurt?> €/u </span></p>
                <hr class="d-sm-none">
            </div>
        </div> 
    </div>
    <!-- /container -->

    <!-- footer -->
    <div class="footer bg-light" style="margin-bottom:0">
        <p>Comunitat Hort de Sant Pau</p>
    </div>
    <!-- /footer -->
</body>
</html>
    

