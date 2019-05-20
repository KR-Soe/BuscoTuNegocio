<?php
    $server="localhost";
	$user="root";
	$passwd="";
	$bdName= "buscotunegocio";
    
    $ConexionBD = mysqli_connect($server,$user,$passwd,$bdName);
    if($ConexionBD){
        echo 'Conexion Establecida';
    }
    else{
        echo 'BD NO conectada';
    }
    
?>