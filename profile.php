<!DOCTYPE html>
<?php 
    session_start();
    $varsesion = $_SESSION['user'];

    if($varsesion == null || $varsesion = ''){
        echo 'Inicie sesion para continuar';
        die();
    }
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Busco Tu Negocio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/designs.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="./js/actions.js"></script>
    <script src="http://codeorigin.jquery.com/jquery-1.10.2.min.js"></script>    
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Busco Tu Negocio</a>
            </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Inicio</a></li>
                    <li class="active"><a href="#">Publicar</a></li>
                    <li><a href="#">Negocios Vip</a></li>
                    <li><a href="#">Contactanos</a></li>
		            <li><a href="politicaPrivacidad.html">Politica de Privacidad</a></li>
                </ul>
        </div>
    </nav>
    <header>
        <div class="container">
            <h1>Busco Tu Negocio</h1>
            <h4>La comodidad a tu alcance</h4>
        </div>
    </header>
    <div class="container">
        <section class="main row">
            <article class="col-xs-10 col-sm-6 col-md-6 col-lg-6">
                <h1>
                    Bienvenido <?php echo 'Swordeath';//$_SESSION['user'] ?>
                </h1>
                <p>Para publicar su negocio rellene los siguientes campos:</p>
            </article>
        </section>
        <br>
        <section class="row from">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Nombre del Negocio</label>
                        <input type="text" class="form-control" id="nameN" placeholder="Nombre de Ejemplo">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Rubro</label>
                        <input type="text" class="form-control" id="rubroN" placeholder="Ejemplo: Peliqueria">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Comuna</label>
                        <input type="text" class="form-control" id="comunaN" placeholder="Recoleta">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Direccion</label>
                        <input type="text" class="form-control" id="direccionN" placeholder="Calle y Numero">
                    </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Foto del Negocio</label>
                        <input type="file" class="form-control-file" id="fotoN">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Tags</label>
                        <input type="text" class="form-control" id="direccionN" placeholder="Ejemplo: unisex, teñidas, alisado">
                </div>
                <input type="submit" value="Agregar Negocio">
            </form>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</body>
</html>