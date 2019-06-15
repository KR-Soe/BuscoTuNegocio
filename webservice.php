<?php 

  include('controller.php');
  $id = $_GET["id"];
  $type = $_GET["type"];

  if($type == 'true'){
    $exQuery = "UPDATE negocio SET estado = 1 where id='$id'";
    $mysqli -> query($exQuery);
  }else{
    $exQuery = "DELETE FROM negocio where id='$id'";
    $mysqli -> query($exQuery);
  }
  
?>
