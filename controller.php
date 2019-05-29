<?php
    $server="localhost";
	$user="root";
	$password="12345";
	$bdName= "buscotunegocio";

	// $connection = mysql_connect($server, $user, $password);

	$mysqli = new mysqli($server, $user, $password, $bdName);

	/* comprobar la conexión */
	if ($mysqli->connect_errno) {
		printf("Falló la conexión: %s\n", $mysqli->connect_error);
		exit();
	}

    // $ConexionBD = mysqli_connect($server, $user, $password, $bdName);
?>