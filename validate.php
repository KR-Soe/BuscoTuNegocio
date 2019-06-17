<?php
    ob_start();
	include('controller.php');
	error_reporting(0);
	$username = $_POST['email'];
	$password =$_POST['password'];

	$query = "SELECT * FROM usuario WHERE email='".$username."' AND clave='".$password."'";
	$result = $mysqli->query($query);

	if($result->num_rows == 1) {
		session_start();
		$_SESSION['user'] = $_POST['email'];
		$testo = $result->fetch_object();
		//print_r($result);
		//print_r($testo->id);
		$_SESSION['id'] = $testo->id;
		$_SESSION['tipo_id'] = $testo->id_tipo_usuario;
		echo($_SESSION['id']);
		header("Location:profile.php");
		die();
	} else {
		echo '<center><h1><font color="red">Usuario o pw incorrecto</font></h1></center>';
		session_destroy();
		header("Refresh: 2; url=index.php");
		die();
	}

	$mysqli->close();
	ob_end_flush();
?>