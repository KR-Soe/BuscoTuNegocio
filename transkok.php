<?php

$transaction = new Transaction();
$transaction->setToken('df074244a3f759bcad68af66cf1d67b828676612123e050ea3f48c5af0e32ed3'); // Se debe colocar el Token Secret entregado por Pago Fácil

if($transaction->validate($_POST)){
  error_log('TRANSACCION CORRECTA');
}else{
  error_log('ERROR FIRMA');
}


?>