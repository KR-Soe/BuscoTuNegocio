<?php
    $server="localhost";
	$user="root";
	$password="";
	$bdName= "buscotunegocio";

	$mysqli = new mysqli($server, $user, $password, $bdName);

	/* comprobar la conexión */
	if ($mysqli->connect_errno) {
		printf("Falló la conexión: %s\n", $mysqli->connect_error);
		exit();
	}

?>