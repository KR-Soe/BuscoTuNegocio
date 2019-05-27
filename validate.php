<?php 
	session_start();
	error_reporting(0);
	include('controller.php');
	$username = $_POST['email']; 
	$password =$_POST['password'];
	$_SESSION['user'] = $_POST['email'];

	function connectionBD(){
		if (!($link=mysql_connect("localhost","root"))){
			echo "Error al conectarse a la BD";
			exit();
		}
		if (!mysql_select_db("buscotunegocio",$link)){
			echo "Error en el nombre de la BD";
			exit();
		}
		return $link;
	}
	
	$connection = connectionBD();
	$query = "SELECT * FROM usuario WHERE email='".$username."' AND password='".$password."'";
	$q = mysql_query($query,$connection);
	try{
		if(mysql_result($q,0)){
			$result = mysql_result($q,0);
			echo 'Usuario Validado';
			header("Location:profile.php");
		}else{
			echo '<center><h1><font color="red">Usuario o pw incorrecto</font></h1></center>';
			header("Refresh: 2; url=index.php");
			session_destroy();
		}
	}catch(Excepcion $ex){

	}
	mysql_close($connection);
?>