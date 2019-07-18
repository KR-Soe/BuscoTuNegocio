<?php
ob_start();
include("controller.php");
session_start();
$varsesion = $_SESSION['user'];


$negocio = $_POST['txtname'];
$rut = $_POST['txtrut'];
$email = $_POST['txtemail'];
$unitario = $_POST['txtprecio'];//irrelevante
$meses = $_POST['duracion'];
$monto = $_POST['total'];
$estado = 1;
$query = "SELECT * FROM negocio WHERE rut='".$rut."' AND nombre='".$negocio."' AND estado='".$estado."'";
$result = $mysqli->query($query);

if($result->num_rows == 1){
    
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Negocios Premium</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/designs.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Busco Tu Negocio</a>
            </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Inicio</a></li>
                    <?php if($varsesion !=null){?>
                    <li><a href="profile.php">Perfil</a></li><?php }?>
                    <li class="active"><a href="">Negocios Vip</a></li>
                    <li><a href="contact.php">Contactanos</a></li>
		            <li><a href="politicaPrivacidad.php">Politica de Privacidad</a></li>
                </ul>
        </div>
    </nav>
     <?php
        include './includes/header.php';
    ?>
    <h2>Revisión de Datos</h2>
    <div class="module-images">
            <section class="container__module">
                <?php    
                    foreach($result as $item) { 
                ?>
                <div>
                    <div class="container__img">
                        <img src="<?php echo($item["foto"]); ?>" alt="" />
                    </div>
                    <div>
                        <div><?php echo"Negocio: "; echo($item["nombre"]); ?></div>
                        <div><?php echo "Direccion: "; echo($item["direccion"]); ?></div>
                        <div><?php echo($item["rubro"]); ?></div>
                    </div>
                </div>
                <?php } ?>
            </section>
    </div>
        <h3>Detalles de su Compra</h3>
            <section class="row from">
                <form method="post" action="./ProcesoPay.php">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Rut del Negocio:</label>
                            <input type="text" class="form-control" name="txtrut" value="<?php echo $rut?>" readonly="">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Nombre Negocio:</label>
                            <input type="text" class="form-control" name="txtnegocio" value="<?php echo $negocio?>" readonly="">
                        </div>
                         
                        <div class="form-group col-md-4">
                            <label>Su Correo Electronico</label>
                            <input type="email" class="form-control" name="txtemail" value="<?php echo $email ?>" readonly="">
                        </div>
                        <div class="form-group col-md-2">
                            <label>Cantidad de Meses:</label>
                            <input type="text" class="form-control" name="txtmeses" value="<?php echo $meses ?>" readonly="">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Total a Pagar</label>
                            <input type="text" class="form-control" id="total" name="total" value="<?php echo $monto ?>" readonly="">
                        </div>
                        
                        <div class="form-group col-md-12">
                            <input type="submit" value="Pagar con PagoFacil" style="color: #fff;background-color: #337ab7;border-color: #2e6da4;padding: 10px;border: 1px solid transparent;border-radius: 4px;">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="button" value="Cancelar" onclick="location.href='premium.php'">
                        </div>

                    </div>
                </form>
                <br>
                
            </section>
    <br>
    <?php
        include './includes/footer.php';
    ?>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</body>
</html>
<?php
}else if($result->num_rows == 0) {
    ?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Negocios Premium</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/designs.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Busco Tu Negocio</a>
            </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Inicio</a></li>
                    <?php if($varsesion !=null){?>
                    <li><a href="profile.php">Perfil</a></li><?php }?>
                    <li class="active"><a href="">Negocios Vip</a></li>
                    <li><a href="contact.php">Contactanos</a></li>
		            <li><a href="politicaPrivacidad.php">Politica de Privacidad</a></li>
                </ul>
        </div>
    </nav>
     <?php
        include './includes/header.php';
    ?>
     <br>
    <div class="container">
        <section class="main row">
            <article class="col-xs-12 col-sm-8 col-md-9 col-lg-9"> <!-- Se puede borrar el ultimo col-lg porque toma la propiedad del anterior col-->
                <h2>NEGOCOCIO NO ENCONTRADO, SERA REDIRECCIONADO AUTOMATICAMENTE</h2>
            </article>
        </section>
    </div>    
        <?php
        header('refresh:3;url=https://buscotunegociochln.cu.ma/premium.php');
        die();?>
<?php
    include './includes/footer.php';
?>  
</body>
</html>
<?php   
}
ob_end_flush();
?>