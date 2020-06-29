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
                    <a class="nav-link" href="index.php">Inici</a>
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
                            <p><strong>Resgistre correcte. Pots entrar. </strong></p>
                        </div> 
            <?php   
                    break;
                }
            } ?>
    <!--/alertes -->   

    <!-- container -->
    <div class="container" style="margin-top:30px">  
        <div class="row">
            <div class="col-2"> </div>
            <div class="col-8">
                <form action="login.php" method="GET">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Usuari</label>
                        <input type="email" class="form-control" name="email" maxlenght="40" autofocus id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">correu electrònic</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="row mx-md-n5">
                        <div class="col px-md-5"></div>
                        <div class="col px-md-5"><button type="submit" class="btn btn-light px-md-5";>Envia</button></div>
                    </div> 
                </form>
            </div>
            <div class="col-2"> </div>
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
    

