<!DOCTYPE html>
<?php
    include("controller.php");
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['user'];
    $user_type = $_SESSION['tipo_id'];
    $user_id = $_SESSION['id'];
    if($varsesion == null || $varsesion = ''){
        echo '<center><h1><font color="red">Inicie sesion para continuar</font></h1></center>';
        header("Refresh: 2; url=index.php");
        die();
    }
    $query = "SELECT comuna.comuna FROM comuna INNER JOIN negocio ON comuna.id = id_comuna";
    $result = $mysqli->query($query);
    $comuna_name = $result->fetch_object();
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
    <script src="http://codeorigin.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./js/actions.js"></script>
</head>
<body>
<style>
  #map {
    height: 100%;
  }
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
</style>
<!-- <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
</script> -->
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
		            <li><a href="politicaPrivacidad.php">Politica de Privacidad</a></li>
                </ul>
        </div>
    </nav>
    <?php 
        include './includes/header.php';
    ?>
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
                    <div class="form-group col-md-6">
                        <label>Nombre del Negocio</label>
                        <input type="text" class="form-control" name="name" placeholder="Nombre de Ejemplo" required="requiered" maxlength="45">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Rut del Negocio</label>
                        <input type="text" class="form-control" name="rut" placeholder="11.111.111-1" required="requiered" maxlength="12">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Tags</label>
                        <select class="form-control" name="tag" required="requiered">
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
                    <div class="form-group col-md-3">
                        <label>Rubro</label>
                        <select class="form-control" name="rubro" required="requiered">
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
                            <option value="11">Herramientas</option>
                            <option value="12">Otros</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Comuna</label>
                        <select class="form-control" name="comune" required="requiered">
                            <option value="1">Cerrillos</option>
                            <option value="2">Cerro Navia</option>
                            <option value="3">Conchalí</option>
                            <option value="4">El Bosque</option>
                            <option value="5">Estacion Central</option>
                            <option value="6">Huechuraba</option>
                            <option value="7">Independencia</option>
                            <option value="8">La Cisterna</option>
                            <option value="9">La Florida</option>
                            <option value="10">La Granja</option>
                            <option value="11">La Pintana</option>
                            <option value="12">La Reina</option>
                            <option value="13">Las Condes</option>
                            <option value="14">Lo Barnechea</option>
                            <option value="15">Lo Espejo</option>
                            <option value="16">Lo Prado</option>
                            <option value="17">Macúl</option>
                            <option value="18">Maipú</option>
                            <option value="19">Pedro Aguirres Cerda</option>
                            <option value="20">Peñalolen</option>
                            <option value="21">Providencia</option>
                            <option value="22">Pudahuel</option>
                            <option value="23">Puente Alto</option>
                            <option value="24">Quilicura</option>
                            <option value="25">Quinta Normal</option>
                            <option value="26">Recoleta</option>
                            <option value="27">Renca</option>
                            <option value="28">San Joaquín</option>
                            <option value="29">San Miguel</option>
                            <option value="30">San Ramón</option>
                            <option value="31">Santiago</option>
                            <option value="32">Vitacura</option>
                            <option value="33">Ñuñoa</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Direccion</label>
                        <input type="text" class="form-control" name="address" placeholder="Calle y Numero" required="requiered" maxlength="50">
                    </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Foto del Negocio</label>
                        <input type="file" class="form-control-file" name="image" required="requiered">
                    </div>
                <div class="form-group col-md-4">
                    <input type="submit" value="Agregar Negocio">
                </div>
            </form>
        </section>
        <div class="row">
        <?php 
            if($user_type == 2){
                $exQuery = "SELECT * FROM negocio where estado='0' AND id_usuario='".$user_id."'";
                $result = $mysqli->query($exQuery);
                $total = $result->num_rows;

        ?>
                <h2>Sus Negocios por Aprobar: (<?php echo($total); ?>)</h2>
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
                                <div>Rut: <?php echo($item["rut"]); ?></div>
                                <div>Nombre: <?php echo($item["nombre"]); ?></div>
                                <div>Direccion: <?php echo($item["direccion"]); ?></div>
                                <div>Rubro: <?php echo($item["id_rubro"]); ?></div>
                                <div>Comuna: <?php echo($item["id_comuna"]); ?></div>
                            </div>
                        </div>
                        <?php } ?>
                    </section>
                </div>
          <?php }
          else  if($user_type == 1){
                $exQuery = "SELECT * FROM negocio where estado='0'";
                $result = $mysqli->query($exQuery);
                $total = $result->num_rows;
            ?> 
            <h2>Negocios Por Aprobar: (<?php echo($total); ?>)</h2>
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
                                <div>Rut: <?php echo($item["rut"]); ?></div>
                                <div>Propietario: <?php echo($item["email_usuario"]); ?></div>
                                <div>Nombre: <?php echo($item["nombre"]); ?></div>
                                <div id="address_value"><?php echo($item["direccion"]); $map_address = $item['direccion']; ?></div>
                                
                                <script type="text/javascript">var map_address = "<?= $map_address ?>";
                                    all_address.push(map_address);
                                </script>
                                <div>Rubro: <?php echo($item["id_rubro"]); ?></div>
                                <div>Comuna: <?php echo($item["id_comuna"]); ?></div>
                                <div><button onclick="test_address()">Aceptar</button></div>
                                <div><button>Rechazar</button></div>
                                <div><button id="buscar">Ubicacion</button></div>
                            </div>
                        </div>
                        <?php }} ?>
                    </section>
                </div>   
        </div>
    </div>
    <div id="elemento" class="mapa" style="width:100%;display:block;position:absolute;background:#f2777a;">xddddd</div>
    <!-- <div id="map">ASDADAD</div> -->
    <script>
    $(document).ready(function() {
        $(window).on("load resize", function() {
            var alturaBuscador = $(".buscador").outerHeight(true),
                alturaVentana = $(window).height(),
                alturaMapa = alturaVentana - alturaBuscador;
            
            $("#elemento").css("height", alturaMapa+"px");
        });
    });
    </script>
    <?php
        include './includes/footer.php';
    ?>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQdS6rOXdWzhjIvqjwxP0cQ60Nw4pUnW0&callback=initMap" async defer>
        map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
        });
    </script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>