<?php
    session_start(); //generem la variable
         
?>
<!DOCTYPE html>
<html>
<title>Cistella</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/estils_botiga.css">
<style>
  h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
  body {font-family: "Open Sans"}
</style>

<body class="w3-light-grey">

<!-- barra de menús -->
<div class="w3-content" style="max-width:1600px">
  <nav class="navbar navbar-expand-sm bg-light navbar-light">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="main.php">Comanda</a>
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
<!-- /barra de menús -->

<!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b> La teva Comanda </b></h1>
    <h6> Fruita <span class="w3-tag">Ecològica</span></h6>
  </header>
<!-- /Header -->

<!-- Factura -->
  <div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-sm-11"></div>
      <!-- botó per enviar la cistella i modificar l'stock -->
      <div class="col-sm-1">
        <form action="bdd_fruita_modificastock.php" method="GET">
          <input type="hidden" name="m" value="2">
          <button type="submit" class="btn btn-dark">Envia</button>
        </form>
      </div>
      <!-- /botó per enviar la cistella i modificar l'stock -->
    </div>
    <div class="row">
      <div class="col-sm-12">
        <!-- taula per crear la factura -->
        <table class="table table-striped">
          <thead>
            <tr>
            <th scope="col"> </th>
            <th scope="col">Producte</th>
            <th scope="col">Preu</th>
            <th scope="col">Kg/u</th>
            <th scope="col"> </th>
            <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $num=0;
              $total=0;
              if (isset($_SESSION['cistella'])){
                foreach($_SESSION['cistella'] as $key => $producto){
                  $num++;
                  $total=$total+$producto['precio']*$producto['quantitat'];
                ?>
                  <tr>
                    <td><?=$num?></th>
                    <td><?=$producto['producto']?></td>
                    <td><?=$producto['precio']." €/kg"?></td>
                    <td> <?=$producto['quantitat']?> </td>
                    <td><a href="borrar.php?key=<?=$key?>" class="btn btn-light">borrar</button></td>
                    <td><?=$producto['precio']*$producto['quantitat']." €"?> </td>
                  </tr>
                  
              <?php
                } 
              } 
              ?>
                <tr>
                  <td></th>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> <?= $total?> € </td>
                </tr>
          </tbody>
        </table>
        <!-- /taula per crear la factura -->
      </div>
    </div>
  </div>
<!-- /Factura -->
  
<!-- Footer -->
  <footer class="footer bg-light" style="margin-bottom:0">
        <p>Comunitat Hort de Sant Pau</p>
  </footer>
<!-- /Footer -->

</body>
</html>
