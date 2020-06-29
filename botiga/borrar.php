<?php
session_start();
// agafem variable del boto borrar del formularii 'cistella.php'
$key=$_GET['key'];

// borra la linia a l'array sessió
unset($_SESSION['cistella'][$key]);

// redirigeix a 'cistella.php' 
header('location:cistella.php');

?>