<?php
session_start();
// recuperem variables del formulari 'bdd_borrarusuaris_usuaris.php'
$nom=$_GET["nom"];

// creem objecte per conectar a la base de dades i error si no ho fa
$conector=new mysqli ('localhost', 'root', '', 'botiga');
if ($conector->connect_error){
    echo "error al conectar a la base de dades: ".$conector->connect_error;
} 
// variable per borrar usuaris a la taula usuaris
$sql="DELETE FROM `usuaris` WHERE `usuaris`.`nom` = '$nom'";

// inserta i redirigeix a la pàgina corresponent
$resultats=$conector->query($sql);
if ($resultats){
    header('location:bdd_borrarusuaris_usuaris.php?m=1');
}else {
    header('location:bdd_borrarusuaris_usuaris.php?m=2');
}

?>