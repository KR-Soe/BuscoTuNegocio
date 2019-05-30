<?php
    include('controller.php');
        $uEmail = $_POST['txtEmail'];
        $uName = $_POST['txtNombre'];
        $uLastN = $_POST['txtApellido'];
        $uPhone = $_POST['txtFono'];
        $uAddress = $_POST['cboComuna'];
        $uPassword = $_POST['txtPassword'];
	    $tipouser = 2;

        $stmt = $mysqli->prepare("INSERT INTO usuario VALUES('', ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('ssssiii', $uEmail, $uPassword, $uName, $uLastN, $uPhone, $tipouser,$uAddress);
        $stmt->execute();
        
        if($mysqli)
        {
            header("Location:index.php");
        }else{

        }
?>