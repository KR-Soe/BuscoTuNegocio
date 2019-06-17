<?php

  $server="localhost";
	$user="root"; //PARA EL HOSTING lukas
	$password="123"; // Lukas1995
	$bdName= "buscotunegocio";

	$mysqli = new mysqli($server, $user, $password, $bdName);

	/* comprobar la conexión */
	if ($mysqli->connect_errno) {
		printf("Error: %s\n", $mysqli->connect_error);
		exit();
	}

?>