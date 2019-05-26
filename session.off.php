<?php
    session_start();
    $varsesion = $_SESSION['user'];
    if($varsesion == null || $varsesion = ''){
        echo 'Inicie sesion para continuar';
        echo $varsesion;
        die();
    }
    session_destroy();
    header("Location:index.php");
?>