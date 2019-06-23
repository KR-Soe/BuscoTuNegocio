<?php
ob_start();
include("controller.php");
session_start();
$varsesion = $_SESSION['user'];

include_once 'vendor/autoload.php';
use PagoFacil\lib\Request;
use PagoFacil\lib\Transaction;

$orderid = $_POST['txtorden'];
$negocio = $_POST['txtnegocio'];
$rut = $_POST['txtrut'];
$email = $_POST['txtemail'];
$meses = $_POST['txtmeses'];
$total = $_POST['total'];

$request = new Request(); // Se crea el objeto Request

$request->account_id = '8bcacb7316121f34528d06debac586d11598960b38a6675922d4659a252232d8'; // Token Service entregado por Pago Facil
$request->amount = $total; // Monto de la transaccion
$request->currency = 'CLP'; // Moneda de la transaccion
$request->reference = $orderid; // Numero de orden de la tienda
$request->customer_email = $email; // Email del cliente

$request->url_complete = 'https://buscotunegociochln.cu.ma/premium.php'; // URL a la cual se redirecciona el sistema
$request->url_cancel = 'https://buscotunegociochln.cu.ma/premium.php'; // URL de cancelacion
$request->url_callback = 'https://buscotunegociochln.cu.ma/transkok.php'; // URL de response 
$request->shop_country = 'CL'; // ISO Code de pais
$request->session_id = date('Ymdhis').rand(0,9).rand(0,9).rand(0,9); // ID de Session, Max 61 caracteres. Se recominda que sea un valor dificil de replicar

$transaction = new Transaction($request); // Se crea la transaccion
$transaction->environment = 'PRODUCCION'; // Se especifica el ambiente en el cual se va a trabajar, puede ser DESSARROLLO, BETA o PRODUCCION

$transaction->setToken('df074244a3f759bcad68af66cf1d67b828676612123e050ea3f48c5af0e32ed3'); // Se debe colocar el Token Secret entregado por Pago Facil

$transaction->initTransaction($request); // Se inicia la transaccion enviando por parametros el request creado




?>