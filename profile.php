<!DOCTYPE html>
<?php
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['user'];
    if($varsesion == null || $varsesion = ''){
        echo '<center><h1><font color="red">Inicie sesion para continuar</font></h1></center>';
        header("Refresh: 2; url=index.php");
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
                    <li class="active"><a href="#">Perfil</a></li>
                    <li><a href="premium.php">Negocios Vip</a></li>
                    <li><a href="contact.php">Contactanos</a></li>
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
                    Bienvenido <?php echo $_SESSION['user'] ?>
                </h1>
                <p><a href="session.off.php">Cerrar Sesion</a></p>

                <p>Para publicar su negocio rellene los siguientes campos:</p>
            </article>
        </section>
        <br>
        <section class="row from">
            <form action="databaseNegocios.php" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Nombre del Negocio</label>
                        <input type="text" class="form-control" name="name" placeholder="Nombre de Ejemplo">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Rubro</label>
                        <select class="form-control" name="rubro">
                            <option value="">Seleccione</option>
                            <option value="1">Peluqueria</option>
                            <option value="2">Hogar</option>
                            <option value="3">Verdureria</option>
                            <option value="4">Electronica</option>
                            <option value="5">Almacen</option>
                            <option value="6">Ropa</option>
                            <option value="7">Arte</option>
                            <option value="8">Mascota</option>
                            <option value="9">Bebes</option>
                            <option value="10">Biblioteca</option>
                            <option value="11">Servicios</option>
                            <option value="12">Otros</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Comuna</label>
                        <select class="form-control" name="comune">
                            <option value="">Seleccione</option>
                            <option value="1">Macúl</option>
                            <option value="2">Cerrillos</option>
                            <option value="3">Cerro Navia</option>
                            <option value="4">Conchalí</option>
                            <option value="5">El Bosque</option>
                            <option value="6">Estacion Central</option>
                            <option value="7">Huechuraba</option>
                            <option value="8">Independencia</option>
                            <option value="9">La Cisterna</option>
                            <option value="10">La Florida</option>
                            <option value="11">La Granja</option>
                            <option value="12">La Pintana</option>
                            <option value="13">La Reina</option>
                            <option value="14">Las Condes</option>
                            <option value="15">Lo Barnechea</option>
                            <option value="16">Lo Espejo</option>
                            <option value="17">Lo Prado</option>
                            <option value="18">Maipú</option>
                            <option value="19">Ñuñoa</option>
                            <option value="20">Pedro Aguirres Cerda</option>
                            <option value="21">Peñalolen</option>
                            <option value="22">Providencia</option>
                            <option value="23">Quilicura</option>
                            <option value="24">Quinta Normal</option>
                            <option value="25">Recoleta</option>
                            <option value="26">Renca</option>
                            <option value="27">San Joaquín</option>
                            <option value="28">San Miguel</option>
                            <option value="29">San Ramón</option>
                            <option value="30">Santiago</option>
                            <option value="31">Pudahuel</option>
                            <option value="32">Vitacura</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Direccion</label>
                        <input type="text" class="form-control" name="address" placeholder="Calle y Numero">
                    </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Foto del Negocio</label>
                        <input type="file" class="form-control-file" name="image">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Tags</label>
                        <select class="form-control" name="tag">
                            <option value="">Seleccione</option>
                            <option value="1">Nocturnas</option>
                            <option value="2">Delivery</option>
                            <option value="3">A Domicilio</option>
                            <option value="4">Amor</option>
                            <option value="5">Comodidad</option>
                            <option value="6">Buen Tiempo</option>
                            <option value="7">Exótico</option>
                            <option value="8">Cercano</option>
                            <option value="9">Compromiso</option>
                            <option value="10">Orden</option>
                            <option value="11">Respeto</option>
                            <option value="12">Hombres</option>
                            <option value="13">Mujeres</option>
                        </select>
                </div>
                <input type="submit" value="Agregar Negocio">
            </form>
        </section>
        <div class="row">
            <h2>Lista de Solicitudes (<?php ?>0)</h2>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>