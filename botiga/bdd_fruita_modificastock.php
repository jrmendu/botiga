<?php
session_start();
// la $m ens indica d'on ve la modificació: si d'una comanda o del superusuari
$m=$_GET["m"];
// recollim les variables del formulari 'bdd_modificarstock_fruita.php' (superusuari)
if($m==1){
    $nom=$_GET["nom"];
    $stock=$_GET["stock"];

    // creem objecte per conectar a la base de dades i error si no ho fa
    $conector=new mysqli ('localhost', 'root', '', 'botiga');
    if ($conector->connect_error){
        echo "error al conectar a la base de dades: ".$conector->connect_error;
    } 

    // afagem de la base el producte que ens demana
    $sql="SELECT * FROM productes ";
    $resultats=$conector->query($sql);

    // utilitzem el contingut mitjançant la funció de cridar per files 'fetch_assoc()'
    // busquem el producte i a l'stock que té li sumem el nou
    if ($resultats){
        $registre=$resultats->fetch_assoc();
        $bandera = True;
        $stock_nou=0;
        while($registre and $bandera){
            if($registre["nom"]==$nom){
                $bandera= False;
                $stock_nou=$registre["stock"]+$stock;
            }
            $registre=$resultats->fetch_assoc();
        } 
    }   

    // només si s'ha modificat l'estoc nou entrem dades
    // això ens evita que si el producte no està ben entrat o no existeix, no modifiqui res
    if($stock_nou!=0){
        // variable per modificar stock a la taula productes
        $sql="UPDATE `productes` SET `stock` = '$stock_nou' WHERE `productes`.`nom` = '$nom'";

        // modifica i redirigeix a la pàgina corresponent
        $resultats=$conector->query($sql);

        if ($resultats){
            header('location:bdd_modificarstock_fruita.php?m=1');
        } else {
            header('location:bdd_modificarstock_fruita.php?m=2');
        }
    } else {
        header('location:bdd_modificarstock_fruita.php?m=2');
    }
// recollim les dades arribades de 'cistella.php'
} else {
    if (isset($_SESSION['cistella'])){
        foreach($_SESSION['cistella'] as $key => $producto){
            $nom=$producto['producto'];
            $stock=-$producto['quantitat'];

            // conectem a la base de dades
            $conector=new mysqli ('localhost', 'root', '', 'botiga');
            if ($conector->connect_error){
                echo "error al conectar a la base de dades: ".$conector->connect_error;
            } 
        
            // afagem de la base el producte que ens demana
            $sql="SELECT * FROM productes ";
            $resultats=$conector->query($sql);
        
            // utilitzem el contingut mitjançant la funció de cridar per files 'fetch_assoc()'
            // busquem el producte i a l'stock que té li sumem el nou
            if ($resultats){
                $registre=$resultats->fetch_assoc();
                $bandera = True;
                $stock_nou=0;
                while($registre and $bandera){
                    if($registre["nom"]==$nom){
                        $bandera= False;
                        $stock_nou=$registre["stock"]+$stock;
                    }
                    $registre=$resultats->fetch_assoc();
                } 
            }   
        
            // variable per modificar stock a la taula productes
            $sql="UPDATE `productes` SET `stock` = '$stock_nou' WHERE `productes`.`nom` = '$nom'";
        
            // modifica
            $resultats=$conector->query($sql);
        }
        if ($resultats){
            unset($_SESSION['cistella']);
            header('location:main.php?m=4');
        } else {
            header('location:main.php?m=5');
        }                          
    }
}
?>