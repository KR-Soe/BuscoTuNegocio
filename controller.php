<?php

    $uEmail = "";
    $uFullName = "";
    $uPhone = "";
    $uAddress = "";
    $uPassword = "";

    $server="localhost";
	$user="root";
	$passwd="";
	$bdName= "buscotunegocio";
    
    $ConexionBD = mysqli_connect($server,$user,$passwd,$bdName);

    
    if(isset($_POST['save-reg'])){
        $uEmail = $_POST['txtEmail'];
        $uFullName = $_POST['txtNombre'];
        $uPhone = $_POST['txtFono'];
        $uAddress = $_POST['txtComuna'];
        $uPassword = $_POST['txtPassword'];

        $queryUsuario = "INSERT INTO usuario (email, 'password') VALUES ('$uEmail', '$uPassword')";
        $queryPersona = "INSERT INTO persona ("

    }
?>