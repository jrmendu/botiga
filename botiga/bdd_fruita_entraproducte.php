<?php
session_start();
// recuperem variables del formulari 'bdd_entrarproducte_fruita.php'
$nom=$_GET["nom"];
$origen=$_GET["origen"];
$stock=$_GET["stock"];
$preu=$_GET["preu"];
$preu_dte=$_GET["preu_dte"];

// creem objecte per conectar a la base de dades i error si no ho fa
$conector=new mysqli ('localhost', 'root', '', 'botiga');
if ($conector->connect_error){
    echo "error al conectar a la base de dades: ".$conector->connect_error;
} 
// variable per insertar fruita a la taula productes
$sql="INSERT INTO `productes` (`id`, `nom`, `origen`, `stock`, `preu`, `preudte`) 
VALUES (NULL, '$nom', '$origen', '$stock', '$preu', '$preu_dte');";

// inserta i redirigeix a la pàgina corresponent
$resultats=$conector->query($sql);
if ($resultats){
    header('location:bdd_entrarproducte_fruita.php?m=1');
} else {
    header('location:bdd_entrarproducte_fruita.php?m=2');
}

?>