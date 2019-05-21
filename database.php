<?php
    include('controller.php');

        $uRut = $_POST['txtRut'];
        $uEmail = $_POST['txtEmail'];
        $uFullName = $_POST['txtNombre'];
        $uPhone = $_POST['txtFono'];
        $uAddress = $_POST['cboComuna'];
        $uPassword = $_POST['txtPassword'];

        $exQuery = "Insert into usuario(email,password) values ('$uEmail','$uPassword')";
        $query = $ConexionBD->query($exQuery);
        $exQuery = "Insert into persona(rut,nombreCompleto,fono,comuna,Usuario_email) values ('$uRut','$uFullName','$uPhone','$uAddress','$uEmail')";
        $query = $ConexionBD->query($exQuery);
        if($query)
        {
            header("Location:index.php");
        }
?>