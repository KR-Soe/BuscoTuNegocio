<?php 
	
	session_start();  
	$username = $_POST['email']; 
	$_SESSION['user'] = $username;

	header("Location:profile.php");
?>