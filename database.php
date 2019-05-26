<?php
    include('controller.php');
        $uEmail = $_POST['txtEmail'];
        $uFullName = $_POST['txtNombre'];
        $uPhone = $_POST['txtFono'];
        $uAddress = $_POST['cboComuna'];
        $uPassword = $_POST['txtPassword'];
	    $tipouser = "normal";

        $exQuery = "Insert into usuario(email,tipouser,password) values ('$uEmail','$tipouser','$uPassword')";
        $conn = $ConexionBD->query($exQuery);
        $exQuery = "Insert into persona(nombreCompleto,fono,comuna,Usuario_email) values ('$uFullName','$uPhone','$uAddress','$uEmail')";
        $conn = $ConexionBD->query($exQuery);
        if($conn)
        {
            header("Location:index.php");
        }else{

        }
?>