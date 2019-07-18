<?php
ob_start();
include("controller.php");
session_start();
$varsesion = $_SESSION['user'];

include_once 'vendor/autoload.php';
use PagoFacil\lib\Request;
use PagoFacil\lib\Transaction;

$negocio = $_POST['txtnegocio'];
$rut = $_POST['txtrut'];
$email = $_POST['txtemail'];
$meses = $_POST['txtmeses'];
$total = $_POST['total'];

$request = new Request(); // Se crea el objeto Request

$request->account_id = '8b619d5cb861d7e508a09b142deef67317b9e1cc7393f669e4f5faec7db8cda2'; // Token Service entregado por Pago Facil
$request->amount = $total; // Monto de la transaccion
$request->currency = 'CLP'; // Moneda de la transaccion
$request->reference = $rut; // Numero de orden de la tienda
$request->customer_email = $email; // Email del cliente

$request->url_complete = 'https://buscotunegociochln.cu.ma/tranksfinish.php'; // URL a la cual se redirecciona el sistema
$request->url_cancel = 'https://buscotunegociochln.cu.ma/premium.php'; // URL de cancelacion
$request->url_callback = 'https://buscotunegociochln.cu.ma/transkok.php'; // URL de response 
$request->shop_country = 'CL'; // ISO Code de pais
$request->session_id = date('Ymdhis').rand(0,9).rand(0,9).rand(0,9); // ID de Session, Max 61 caracteres. Se recominda que sea un valor dificil de replicar

$transaction = new Transaction($request); // Se crea la transaccion
$transaction->environment = 'DESARROLLO'; // Se especifica el ambiente en el cual se va a trabajar, puede ser DESSARROLLO, BETA o PRODUCCION

$transaction->setToken('033676f45f66d848b3e2e8a4b23e86be0d374d238c97dd9e019272aa6a336a70'); // Se debe colocar el Token Secret entregado por Pago Facil

$transaction->initTransaction($request); // Se inicia la transaccion enviando por parametros el request creado




?>