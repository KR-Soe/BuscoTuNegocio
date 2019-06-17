<?php
    ob_start();
    session_start();
    $varsesion = $_SESSION['user'];
    if($varsesion == null || $varsesion = ''){
        echo '<center><h1><font color="red">Inicie sesion para continuar</font></h1></center>';
        header("Refresh: 2; url=index.php");
        die();
    }
    session_destroy();
    header("Location:index.php");
    ob_end_flush();
?>