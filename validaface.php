<?php
include('controller.php');
ob_start();
$name = $_GET['name'];
$email = $_GET['email'];
$uLastN = "ulast";
$uPhone = 00000;
$uAddress = "add";
$uPassword = 0;
$tipouser = 2;
//echo $name.$email;

$query = "SELECT * FROM usuario WHERE email='".$email."'";
$result = $mysqli->query($query);
    if($result->num_rows == 1) {
        //SI ENCUENTRA EL EMAIL DEL USUARIO DE FACE, ENTRA
		session_start();
		$_SESSION['user'] = $email;
		$testo = $result->fetch_object();
		//print_r($result);
		//print_r($testo->id);
		$_SESSION['id'] = $testo->id;
		$_SESSION['tipo_id'] = $testo->id_tipo_usuario;
		header("Location:profile.php");
		//die();
    }
     else {
        //SI NO ENCUENTRA EL EMAIL DEL USUARIO, REGISTRATE Y ENTRA
		$stmt = $mysqli->prepare("INSERT INTO usuario VALUES('', ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('ssssiii', $email, $uPassword, $name, $uLastN, $uPhone, $uAddress, $tipouser);
        $stmt->execute();
        if($mysqli)
        {
            session_start();
            $query = "SELECT * FROM usuario WHERE email='".$email."'";
            $result = $mysqli->query($query);
            $testo = $result->fetch_object();
		    $_SESSION['user'] = $email;
		    $_SESSION['id'] = $testo->id;
		    $_SESSION['tipo_id'] = $testo->id_tipo_usuario;
            header("Location:profile.php");
            //die();
        }else{

        }
    }
ob_end_flush();    
?>