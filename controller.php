<?php
    $server="localhost";
	$user="root";
	$passwd="";
	$bdName= "buscotunegocio";
    
    $ConexionBD = mysqli_connect($server,$user,$passwd,$bdName);
    
    echo 'Conexion Establecida';
?>