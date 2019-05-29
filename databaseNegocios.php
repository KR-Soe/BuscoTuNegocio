<?php
    session_start();
    include("controller.php");
    if($varsesion == null || $varsesion = ''){
        echo '<center><h1><font color="red">Inicie sesion para continuar</font></h1></center>';
        header("Refresh: 2; url=index.php");
        die();
    }
    $nName = $_POST('nameN');
    $nRubro = $_POST('rubroN');
    $nComuna = $_POST('cboComuna');
    $nDireccion =$_POST('diraccionN');
    $nFoto = $_POST('fotoN');
    $nTag = $_POST('tagN');
    $varsesion = $_SESSION['user'];

    $exQuery = "Insert into negocio(nombre,rubro,comuna,direccion,foto,tags,Usuario_email) values ('$nName','$nRubro','$nComuna','$nDireccion','$nFoto','$nTag','$varsesion')";
    $conn = $ConexionBD->query($exQuery);

?>