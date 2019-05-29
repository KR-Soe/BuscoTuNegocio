<?php
	include('controller.php');
	$username = $_POST['email'];
	$password =$_POST['password'];

	$query = "SELECT * FROM usuario WHERE email='".$username."' AND password='".$password."'";
	$result = $mysqli->query($query);

	if($result->num_rows == 1) {
		session_start();
		$_SESSION['user'] = $_POST['email'];
		header("Location:profile.php");
	} else {
		session_destroy();
		echo '<center><h1><font color="red">Usuario o pw incorrecto</font></h1></center>';
		header("Refresh: 2; url=index.php");
	}

	$mysqli->close();
?>