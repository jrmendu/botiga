<?php
session_start();
// recuperem variables formulari 'entra.php'
$user_entrat=$_GET["email"];
$password_entrat=$_GET["password"];



// creem la conexió a la base de dades i demanem error si no ho pot fer
$conector=new mysqli ('localhost', 'root', '', 'botiga');
if ($conector->connect_error){
    echo "error al conectar a la base de dades: ".$conector->connect_error;
} 

// que és el que volem fer i que ens ho tregui en algu que poguem manipular
$sql="SELECT * FROM usuaris ";
$resultats=$conector->query($sql);

// utilitzem el contingut mitjançant la funció de cridar per files 'fetch_assoc()'
// en aquest cas comprovem quin usuari ha entrat comparant les variables del formulari amb la taula de Bdd
if ($resultats){
    $registre=$resultats->fetch_assoc();
    $bandera = True;
    while($registre and $bandera){
        if($registre["email"]==$user_entrat and $registre["passw"]==$password_entrat){
            $bandera= False;
            $login=True;
            $_SESSION["username"]=ucfirst($registre["nom"]);
        }
        $registre=$resultats->fetch_assoc();
    } 
}   

// redirigim l'usuari en funció si l'entrada és correcte o no
if ($login){
    header('location:main.php?m=3');
} else {
    if($user_entrat=='roman@gmail.com' and $password_entrat=='zonaprivada'){
        header('location:bdd_entrarproducte_fruita.php');
    }
    else {
    header('location:index.php?m=1');
    }
}
?>