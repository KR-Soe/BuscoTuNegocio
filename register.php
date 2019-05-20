<?php
    include("Conexion.php");
    $uEmail = "";
    $uFullName = "";
    $uPhone = "";
    $uAddress = "";
    $uPassword = "";
 

    
    if(isset($_POST['save-reg'])){

	
        $uEmail = $_POST["txtEmail"];
        $uFullName = $_POST["txtNombre"];
        $uPhone = $_POST["txtFono"];
        $uAddress = $_POST["txtComuna"];
        $uPassword = $_POST["txtPassword"];
	
	
    	$Consulta = "Insert into Usuario(email,password) values ('$uEmail', '$uPassword')";
    	$Buscar = $ConexionBD->query($Consulta); 

        $queryPersona = "INSERT INTO persona(nombreCompleto,fono,comuna,usuario_email) values('$uFullName', '$uPhone', '$uAddress', '$uEmail')
	$Buscar = $ConexionBD->query($queryPersona);
    }
?>