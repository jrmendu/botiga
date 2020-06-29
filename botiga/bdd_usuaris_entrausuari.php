<?php
session_start();
// recollim les variables del formulari 'bdd_entrarlinia_usuaris.php'
$nom=$_GET["nom"];
$cognom=$_GET["cognom"];
$email=$_GET["email"];
$password=$_GET["password"];
$telefon=$_GET["telefon"];
$poblacio=$_GET["poblacio"];
// generem variable $m per distingir si el formulari bé de zona privada o publica
// $m=0 és el superusuari qui dóna l'alta, $m=1 és un registre nou fet per un usuari
if(isset($_GET['m'])){
    $m=$_GET['m'];
} else {
    $m=0;
}

// creem objecte per conectar a la base de dades i error si no ho fa
$conector=new mysqli ('localhost', 'root', '', 'botiga');
if ($conector->connect_error){
    echo "error al conectar a la base de dades: ".$conector->connect_error;
} 

// variable per insertar usuaris a la taula usuaris
$sql="INSERT INTO `usuaris` (`id`, `nom`, `cognom`, `email`, `passw`, `telefon`, `poblacio`) 
VALUES (NULL, '$nom', '$cognom', '$email', '$password', '$telefon', '$poblacio');";

// inserta i redirigeix a la pàgina corresponent
$resultats=$conector->query($sql);
if ($resultats){
    if($m==1){
        header('location:entra.php?m=1');
    } else { 
        header('location:bdd_entrarlinia_usuaris.php?m=1');
    }    
} else {
    if($m==1){
        header('location:registre.php?m=1');
    } else { 
        header('location:bdd_entrarlinia_usuaris.php?m=2');;
    } 
}
?>