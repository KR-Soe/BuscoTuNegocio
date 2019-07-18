<?php
ob_start();
include("controller.php");
include_once 'vendor/autoload.php';
use PagoFacil\lib\Request;
use PagoFacil\lib\Transaction;

$transaction = new Transaction();
$transaction->setToken('033676f45f66d848b3e2e8a4b23e86be0d374d238c97dd9e019272aa6a336a70'); // Se debe colocar el Token Secret entregado por Pago Fácil

//RECUPERAR DEL POST

$monto = $_POST['x_amount'];
$reference = $_POST['x_reference'];
$tiempo = $_POST['x_timestamp'];

if($transaction->validate($_POST)){
  
//TRANSACCION CORRECTA    
$exQuery = "UPDATE negocio SET estado = 3 where rut='$reference'";
$mysqli -> query($exQuery);
header("Location:premium.php");
die();
 
  
}else{
  //ERROR EN FIRMAN, INCORRECTO
  
}

ob_end_flush();
?>