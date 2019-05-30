<?php/*
    include("Conexion.php");
    $uEmail = "";
    $uName = "";
    $uLastName = "";
    $uPhone = "";
    $uAddress = "";
    $uPassword = "";
 
    if(isset($_POST['save-reg'])){

        $uEmail = $_POST["txtEmail"];
        $uName = $_POST["txtNombre"];
        $uLastName = $_POST["txtApellido"];
        $uPhone = $_POST["txtFono"];
        $uAddress = $_POST["txtComuna"];
        $uPassword = $_POST["txtPassword"];
	
    	$Consulta = "Insert into Usuario(email,password) values ('$uEmail', '$uPassword')";
    	$Buscar = $ConexionBD->query($Consulta); 

        $queryPersona = "INSERT INTO persona(nombreCompleto,fono,comuna,usuario_email) values('$uName', '$uPhone', '$uAddress', '$uEmail')";
	    $Buscar = $ConexionBD->query($queryPersona);
    }
    */
?>