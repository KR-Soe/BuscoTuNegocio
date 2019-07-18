<?php

  $server="localhost";
	$user="lukas"; //PARA EL HOSTING lukas
	$password="Lukas1995"; // Lukas1995
	$bdName= "buscotunegocio";

	$mysqli = new mysqli($server, $user, $password, $bdName);

	/* comprobar la conexión */
	if ($mysqli->connect_errno) {
		printf("Error: %s\n", $mysqli->connect_error);
		exit();
	}

?>