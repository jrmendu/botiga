<?php
session_start();
// recollim les variables del formulari 'bdd_modificarpreu_fruita.php'
$nom=$_GET["nom"];
$preu=$_GET["preu"];
$preu_dte=$_GET["preudte"];


// creem objecte per conectar a la base de dades i error si no ho fa
$conector=new mysqli ('localhost', 'root', '', 'botiga');
if ($conector->connect_error){
    echo "error al conectar a la base de dades: ".$conector->connect_error;
} 

// variable per modificar preu i predte a la taula productes
$sql="UPDATE `productes` SET `preu` = '$preu', `preudte` = '$preu_dte' WHERE `productes`.`nom` = '$nom'";

// modifica i redirigeix a la pàgina corresponent
$resultats=$conector->query($sql);
if ($resultats){
    header('location:bdd_modificarpreu_fruita.php?m=1');
}else {
    header('location:bdd_modificarpreu_fruita.php?m=2');
}
?>