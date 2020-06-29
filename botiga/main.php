<?php
    session_start(); //generem la variable
    // si no ha registrat usuari l'envia a 'index.php'
    if(!isset($_SESSION["username"])){
        header('location: index.php');
    }
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
                    <a class="nav-link" href="cistella.php">Cistella</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?= $_SESSION["username"]?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="session_destroy.php">Tanca</a>
                </li>
            </ul>
        </div>  
    </nav>
    <!-- /Barra de menú i enllaços -->

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

    <!--alertes -->
        <!-- 1 afegit un producte -->
        <?php
            if (isset($_GET['m'])){
                switch($_GET['m']){
                    case 1:?>
                    <div class="alert alert-light" role="alert">
                            <p><strong>Has afegit un producte a la cistella</strong></p>
                    </div> <?php
                    break;
                    case 2:?>
                        <div class="alert alert-light" role="alert">
                            <p><strong>Clica els kgs que vols</strong></p>
                        </div> <?php
                    break;
                    case 3:?>
                        <div class="alert alert-light" role="alert">
                            <p><strong>Benvingut/da <?=$_SESSION["username"]?> !!</strong> <br> Pots començar la teva comanda</p>
                        </div> <?php
                    break;
                    case 4:?>
                        <div class="alert alert-light" role="alert">
                            <p><strong>Comanda feta. </strong> <br> Moltes Gràcies <?=$_SESSION["username"]?> !!</p>
                        </div> <?php
                    break;
                    case 45:?>
                        <div class="alert alert-light" role="alert">
                            <p><strong>NO s'ha registrat la comanda </strong> <br> Torna a provar.</p>
                        </div> <?php
                    break;
                }
            } ?>                 
    <!--/alertes -->

    <!-- container -->
    <div class="container" style="margin-top:30px">           
            <div class="row" style="margin-top:30px">
                <!-- poma -->
                <div class="col-sm-6 col-lg-3" >
                    <h2>Pomes</h2>
                    <img src="img/poma2.jpg" alt="poma" class="rounded-circle rounded mx-auto d-block">
                    <p> <span class="preu"><?=$poma?> €/kg </span></p> 
                    <a href="agregar.php?producto=pomes&precio=<?=$poma?>&quantitat=1" class="btn btn-light">1</a>
                    <a href="agregar.php?producto=pomes&precio=<?=$poma?>&quantitat=2" class="btn btn-light">2</a>
                    <a href="agregar.php?producto=pomes&precio=<?=$poma?>&quantitat=3" class="btn btn-light">3</a>
                    <a href="agregar.php?producto=pomes&precio=<?=$poma?>&quantitat=4" class="btn btn-light">4</a>
                    <a href="agregar.php?producto=pomes&precio=<?=$poma?>&quantitat=5" class="btn btn-light">5</a> 
                    <a href="main.php?m=2" class="btn btn-dark"> kgs? </a>  
                    <hr class="d-sm-none">
                </div>
                <!-- Peres -->
                <div class="col-sm-6 col-lg-3" >
                    <h2>Peres</h2>
                    <img src="img/peres2.jpg" alt="$pera" class="rounded-circle rounded mx-auto d-block">
                    <p> <span class="preu"><?=$pera?> €/kg </span></p>
                    <a href="agregar.php?producto=peres&precio=<?=$pera?>&quantitat=1" class="btn btn-light">1</a>
                    <a href="agregar.php?producto=peres&precio=<?=$pera?>&quantitat=2" class="btn btn-light">2</a>
                    <a href="agregar.php?producto=peres&precio=<?=$pera?>&quantitat=3" class="btn btn-light">3</a>
                    <a href="agregar.php?producto=peres&precio=<?=$pera?>&quantitat=4" class="btn btn-light">4</a>
                    <a href="agregar.php?producto=peres&precio=<?=$pera?>&quantitat=5" class="btn btn-light">5</a>
                    <a href="main.php?m=2" class="btn btn-dark"> kgs? </a>
                    <hr class="d-sm-none">
                </div>
                <!-- platan -->
                <div class="col-sm-6 col-lg-3" >
                    <h2>Platans</h2>
                    <img src="img/platans2.jpg" alt="platan" class="rounded-circle rounded mx-auto d-block">
                    <p> <span class="preu"><?=$platan?> €/kg  </span></p>
                    <a href="agregar.php?producto=platans&precio=<?=$platan?>&quantitat=1" class="btn btn-light">1</a>
                    <a href="agregar.php?producto=platans&precio=<?=$platan?>&quantitat=2" class="btn btn-light">2</a>
                    <a href="agregar.php?producto=platans&precio=<?=$platan?>&quantitat=3" class="btn btn-light">3</a>
                    <a href="agregar.php?producto=platans&precio=<?=$platan?>&quantitat=4" class="btn btn-light">4</a>
                    <a href="agregar.php?producto=platans&precio=<?=$platan?>&quantitat=5" class="btn btn-light">5</a>
                    <a href="main.php?m=2" class="btn btn-dark"> kgs? </a>
                    <hr class="d-sm-none">
                </div>
                <!-- mandarina -->
                <div class="col-sm-6 col-lg-3" >
                    <h2>Mandarines</h2>
                    <img src="img/mandarina2.jpg" alt="mandarina" class="rounded-circle rounded mx-auto d-block">
                    <p> <span class="preu"><?=$mandarina?> €/kg </span></p>
                    <a href="agregar.php?producto=mandarines&precio=<?=$mandarina?>&quantitat=1" class="btn btn-light">1</a>
                    <a href="agregar.php?producto=mandarines&precio=<?=$mandarina?>&quantitat=2" class="btn btn-light">2</a>
                    <a href="agregar.php?producto=mandarines&precio=<?=$mandarina?>&quantitat=3" class="btn btn-light">3</a>
                    <a href="agregar.php?producto=mandarines&precio=<?=$mandarina?>&quantitat=4" class="btn btn-light">4</a>
                    <a href="agregar.php?producto=mandarines&precio=<?=$mandarina?>&quantitat=5" class="btn btn-light">5</a>
                    <a href="main.php?m=2" class="btn btn-dark"> kgs? </a>
                    <hr class="d-sm-none">
                </div>
            </div> 
                
            <div class="row" style="margin-top:30px">
                <!-- taronja -->
                <div class="col-sm-6 col-lg-3" >
                    <h2>Taronges</h2>
                    <img src="img/taronja2.jpg" alt="taronja" class="rounded-circle rounded mx-auto d-block">
                    <p> <span class="preu"><?=$taronja?> €/kg </span></p> 
                    <a href="agregar.php?producto=taronges&precio=<?=$taronja?>&quantitat=1" class="btn btn-light">1</a>
                    <a href="agregar.php?producto=taronges&precio=<?=$taronja?>&quantitat=2" class="btn btn-light">2</a>
                    <a href="agregar.php?producto=taronges&precio=<?=$taronja?>&quantitat=3" class="btn btn-light">3</a>
                    <a href="agregar.php?producto=taronges&precio=<?=$taronja?>&quantitat=4" class="btn btn-light">4</a>
                    <a href="agregar.php?producto=taronges&precio=<?=$taronja?>&quantitat=5" class="btn btn-light">5</a>
                    <a href="main.php?m=2" class="btn btn-dark"> kgs? </a>
                    <hr class="d-sm-none">
                </div>
                <!-- pressec -->
                <div class="col-sm-6 col-lg-3" >
                    <h2>Préssecs</h2>
                    <img src="img/pressec2.jpg" alt="préssec" class="rounded-circle rounded mx-auto d-block">
                    <p> <span class="preu"><?=$pressec?> €/kg </span></p>
                    <a href="agregar.php?producto=pressecs&precio=<?=$pressec?>&quantitat=1" class="btn btn-light">1</a>
                    <a href="agregar.php?producto=pressecs&precio=<?=$pressec?>&quantitat=2" class="btn btn-light">2</a>
                    <a href="agregar.php?producto=pressecs&precio=<?=$pressec?>&quantitat=3" class="btn btn-light">3</a>
                    <a href="agregar.php?producto=pressecs&precio=<?=$pressec?>&quantitat=4" class="btn btn-light">4</a>
                    <a href="agregar.php?producto=pressecs&precio=<?=$pressec?>&quantitat=5" class="btn btn-light">5</a>
                    <a href="main.php?m=2" class="btn btn-dark"> kgs? </a>
                    <hr class="d-sm-none">
                </div>
                <!-- albercoc -->
                <div class="col-sm-6 col-lg-3" >
                    <h2>Albercocs</h2>
                    <img src="img/albercoc2.jpg" alt="albercoc" class="rounded-circle rounded mx-auto d-block">
                    <p> <span class="preu"><?=$albercoc?> €/kg </span></p>
                    <a href="agregar.php?producto=albercocs&precio=<?=$albercoc?>&quantitat=1" class="btn btn-light">1</a>
                    <a href="agregar.php?producto=albercocs&precio=<?=$albercoc?>&quantitat=2" class="btn btn-light">2</a>
                    <a href="agregar.php?producto=albercocs&precio=<?=$albercoc?>&quantitat=3" class="btn btn-light">3</a>
                    <a href="agregar.php?producto=albercocs&precio=<?=$albercoc?>&quantitat=4" class="btn btn-light">4</a>
                    <a href="agregar.php?producto=albercocs&precio=<?=$albercoc?>&quantitat=5" class="btn btn-light">5</a>
                    <a href="main.php?m=2" class="btn btn-dark"> kgs? </a>
                    <hr class="d-sm-none">
                </div>
                <!-- iogurt -->
                <div class="col-sm-6 col-lg-3" >
                    <h2>Iogurts</h2>
                    <img src="img/iogurt2.jpg" alt="iogurt" class="rounded-circle rounded mx-auto d-block">
                    <p> <span class="preu"><?=$iogurt?> €/u </span></p>
                    <a href="agregar.php?producto=iogurts&precio=<?=$iogurt?>&quantitat=1" class="btn btn-light">1</a>
                    <a href="agregar.php?producto=iogurts&precio=<?=$iogurt?>&quantitat=2" class="btn btn-light">2</a>
                    <a href="agregar.php?producto=iogurts&precio=<?=$iogurt?>&quantitat=3" class="btn btn-light">3</a>
                    <a href="agregar.php?producto=iogurts&precio=<?=$iogurt?>&quantitat=4" class="btn btn-light">4</a>
                    <a href="agregar.php?producto=iogurts&precio=<?=$iogurt?>&quantitat=5" class="btn btn-light">5</a>
                    <a href="main.php?m=2" class="btn btn-dark"> uni? </a>
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
    

