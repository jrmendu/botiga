<?php
    session_start();

    // acaba sessió i retorna a 'index.php'
    session_destroy();
    header('Location:index.php?m=2');
?>
