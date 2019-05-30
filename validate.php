<?php
	include('controller.php');
	error_reporting(0);
	$username = $_POST['email'];
	$password =$_POST['password'];

	$query = "SELECT * FROM usuario WHERE email='".$username."' AND password='".$password."'";
	$result = $mysqli->query($query);

	if($result->num_rows == 1) {
		session_start();
		$_SESSION['user'] = $_POST['email'];
		$testo = $result->fetch_object();
		//print_r($result);
		//print_r($testo->id);
		$_SESSION['id'] = $testo->id;
		echo($_SESSION['id']);
		header("Location:profile.php");
	} else {
		echo '<center><h1><font color="red">Usuario o pw incorrecto</font></h1></center>';
		session_destroy();
		header("Refresh: 2; url=index.php");
	}

	$mysqli->close();
?>