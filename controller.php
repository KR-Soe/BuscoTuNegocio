<?php

  $server="localhost";
	$user="root";
	$password="123";
	$bdName= "buscotunegocio";

	$mysqli = new mysqli($server, $user, $password, $bdName);

	/* comprobar la conexión */
	if ($mysqli->connect_errno) {
		printf("Error: %s\n", $mysqli->connect_error);
		exit();
	}

?>