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
            <form action="databaseNegocios.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Nombre del Negocio</label>
                        <input type="text" class="form-control" name="nameN" placeholder="Nombre de Ejemplo">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Rubro</label>
                        <input type="text" class="form-control" name="rubroN" placeholder="Ejemplo: Peliqueria">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Comuna</label>
                        <select class="form-control" name="cboComuna">
                            <option value="">Seleccione</option>
                            <option value="Macul">Macúl</option>
                            <option value="Cerrillos">Cerrillos</option>
                            <option value="Cerro Navia">Cerro Navia</option>
                            <option value="Conchali">Conchalí</option>
                            <option value="El Bosque">El Bosque</option>
                            <option value="Estacion Central">Estacion Central</option>
                            <option value="Huechuraba">Huechuraba</option>
                            <option value="Independencia">Independencia</option>
                            <option value="La Cisterna">La Cisterna</option>
                            <option value="La Florida">La Florida</option>
                            <option value="La Granja">La Granja</option>
                            <option value="La Pintana">La Pintana</option>
                            <option value="La Reina">La Reina</option>
                            <option value="Las Condes">Las Condes</option>
                            <option value="Lo Barnechea">Lo Barnechea</option>
                            <option value="Lo Espejo">Lo Espejo</option>
                            <option value="Lo Prado">Lo Prado</option>
                            <option value="Maipu">Maipú</option>
                            <option value="Nunoa">Ñuñoa</option>
                            <option value="Pedro Aguirres Cerda">Pedro Aguirres Cerda</option>
                            <option value="Penalolen">Peñalolen</option>
                            <option value="Providencia">Providencia</option>
                            <option value="Quilicura">Quilicura</option>
                            <option value="Quinta Normal">Quinta Normal</option>
                            <option value="Recoleta">Recoleta</option>
                            <option value="Renca">Renca</option>
                            <option value="San Joaquin">San Joaquín</option>
                            <option value="San Miguel">San Miguel</option>
                            <option value="San Ramón">San Ramón</option>
                            <option value="Santiago">Santiago</option>
                            <option value="Pudahuel">Pudahuel</option>
                            <option value="Vitacura">Vitacura</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Direccion</label>
                        <input type="text" class="form-control" name="direccionN" placeholder="Calle y Numero">
                    </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Foto del Negocio</label>
                        <input type="file" class="form-control-file" name="fotoN">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Tags</label>
                        <input type="text" class="form-control" name="tagN" placeholder="Ejemplo: unisex, teñidas, alisado">
                </div>
                <input type="submit" name="" value="Agregar Negocio">
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