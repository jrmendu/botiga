<?php
session_start();
// recuperem variables del formulari 'main.php'
$producto=$_GET['producto'];
$precio=$_GET['precio'];
$quantitat=$_GET['quantitat'];

// generem una array de sessió que ens afegirà el producte que ha seleccionat, el preu, i la quantitat
// cada vegada que cliki a 'main.php'
$_SESSION['cistella'][]=array('producto'=>$producto, 'precio'=>$precio, 'quantitat'=> $quantitat);

//el retornem al mateix 'main.php' advertint que ha seleccionat un producte
header('location:main.php?m=1');

?>