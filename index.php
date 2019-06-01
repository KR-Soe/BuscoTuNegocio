<!DOCTYPE html>
<?php include('controller.php');
    session_start();
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Busco Tu Negocio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/designs.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./js/actions.js"></script>
    <script src="http://codeorigin.jquery.com/jquery-1.10.2.min.js"></script>
</head>
<body onload="next(current + 1)">
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '442847286518472',
      cookie     : true,
      xfbml      : true,
      version    : 'v3.3'
    });

    FB.AppEvents.logPageView();

  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/es_LA/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

   FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
   });

   function checkLoginState() {
     FB.getLoginStatus(function(response) {
    validarUsuario();
     statusChangeCallback(response);
   });
   }

    function validarUsuario() {
        FB.getLoginStatus(function(response) {
           if(response.status == 'connected') {
              FB.api('/me', function(response) {
                  alert('Hola ' + response.name);
              });
        }
        else if(response.status == 'not_authorized') {
            alert('Debes autorizar la app!');
        }
        else {
            alert('Debes ingresar a tu cuenta de Facebook!');
        }
        });
    }
</script>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Busco Tu Negocio</a>
            </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Inicio</a></li>
                    <li><a href="profile.php">Perfil</a></li>
                    <li><a href="premium.php">Negocios Vip</a></li>
                    <li><a href="contact.php">Contactanos</a></li>
		            <li><a href="politicaPrivacidad.html">Politica de Privacidad</a></li>
                </ul>
        </div>
    </nav>
    <header>
        <div class="container">
            <img class="logoBtnImg" src="images/BTNLogo.png">
            <h1>Busco Tu Negocio</h1>
            <h4>La comodidad a tu alcance</h4>
        </div>
    </header>
    <div class="container">
        <section class="main row">
            <article class="col-xs-12 col-sm-8 col-md-9 col-lg-9"> <!-- Se puede borrar el ultimo col-lg porque toma la propiedad del anterior col-->
                <p>
                    <h2>Impulsa tu negocio de manera sencilla</h2>
                    Si buscas la manera de promocionar tu negocio dentro de tu comuna o sector, este es tu sitio, ingresa ya a Busco tu Negocio, Registrate y envia todo tus datos de tu negocio para aumentar tu popularidad de manera 100% gratuita.
                </p>
            </article>
            <aside class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <h3>Bienvenido</h3>
                <p>
                    Si usted es dueño de algun negocio puede registrarlo
                    con tal solo tener una cuenta e iniciando sesión.
                    <form action="validate.php" method="POST">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="text" class="form-control" name="email" placeholder="Coreo Electronico" style="max-width: 150px;" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" style="max-width: 150px;" required>
                        </div>
                        <input type="submit" class="btn btn-default" value="Ingresar">
                        <fb:login-button scope="public_profile,email" size="medium" data-button-type="continue_with" data-auto-logout-link="true" data-use-continue-as="false" onlogin="checkLoginState();"></fb:login-button>

                    </form>
                    ¿No tiene una cuenta? <br>
                    Registrese de forma gratuita haciendo click
                    <a id="modal-btn">aqui.</a>

                    <!--        MODAL        -->
                    <div id="reg-modal" class="content-modal">
                        <div class="body-modal">
                            <div class="header-modal">
                                <span id="close-modal-btn" class="close-modal">&times;</span>
                                <h2>Registrate En Busco Tu Negocio</h2>
                            </div>

                            <form name="reg-form" class="reg-form" method="POST" action="database.php">
                                <table class="reg-table">
                                    <tr>
                                        <td>
                                            <label>Correo Electronico</label>
                                        </td>
                                        <td>
                                            <input class="reg-data" type="email" name="txtEmail" placeholder="Ejemplo@gmail.com" maxlength="50" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Nombre</label>
                                        </td>
                                        <td>
                                            <input class="reg-data" type="text" name="txtNombre" maxlength="55" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Apellido</label>
                                        </td>
                                        <td>
                                            <input class="reg-data" type="text" name="txtApellido" maxlength="55" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Telefono Movil</label>
                                        </td>
                                        <td>
                                            <input class="reg-data" type="text" name="txtFono" maxlength="9" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Comuna</label>
                                        </td>
                                        <td>
                                            <select class="form-control" name="cboComuna">
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Contraseña</label>
                                        </td>
                                        <td>
                                            <input class="reg-data" type="password" name="txtPassword" maxlength="15" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div>
                                                <!-- <button id="reg-done" type="button" class="btn btn-success btn-lg" name="save-reg" href="database.php">Registrarse</button> -->
                                                <input type="submit" value="Registrarse">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </p>
            </aside>
        </section>
        <br>
        <div class="row">
            <article class="col-xs-12 col-sm-8 col-md-9 col-lg-9 buscar">
                <div class="screens_container">
                    <div class="embed-responsive-item disabled">
                       <form>
                            <h2>Seleccione Su Comuna</h2>
                            <table class="comunas" border="1px">
                                <tr>
                                    <td><label><input type="radio" class="radio" name="opradio">Macul</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">Cerrillos</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">Cerro Navia</label></td>
                                </tr>
                                <tr>
                                    <td><label><input type="radio" class="radio" name="opradio">Conchalí</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">El Bosque</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">Estación central</label></td>
                                </tr>
                                <tr>
                                    <td><label><input type="radio" class="radio" name="opradio">Huechuraba</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">Independencia</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">La Cisterna</label></td>
                                </tr>
                                <tr>
                                    <td><label><input type="radio" class="radio" name="opradio">La Florida</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">La Granja</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">La Pintana</label></td>
                                </tr>
                                <tr>
                                    <td><label><input type="radio" class="radio" name="opradio">La Reina</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">Las Condes</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">Lo Barnechea</label></td>
                                </tr>
                                <tr>
                                    <td><label><input type="radio" class="radio" name="opradio">Lo Espejo</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">Lo Prado</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">Maipú</label></td>
                                </tr>
                                <tr>
                                    <td><label><input type="radio" class="radio" name="opradio">Ñuñoa</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">Pedro Aguirres Cerda</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">Peñalolén</label></td>
                                </tr>
                                <tr>
                                    <td><label><input type="radio" class="radio" name="opradio">Providencia</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">Quilicura</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">Quinta Normal</label></td>
                                </tr>
                                <tr>
                                    <td><label><input type="radio" class="radio" name="opradio">Recoleta</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">Renca</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">San Joaquín</label></td>
                                </tr>
                                <tr>
                                    <td><label><input type="radio" class="radio" name="opradio">San Miguel</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">San Ramón</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">Santiago</label></td>
                                </tr>
                                <tr>
                                    <td><label><input type="radio" class="radio" name="opradio">Pudahuel</label></td>
                                    <td><label><input type="radio" class="radio" name="opradio">Vitacura</label></td>
                                    <td></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <div class="embed-responsive-item disabled">
                        <form>
                            <h2>¿Qué Busca?</h2>
                            <table class="comunas categorias" border="1px"> <!-- IMAGENES EN 100px -->
                                <tr>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="verduras">
                                            <img src="https://img.icons8.com/ios/100/000000/salad-bowl.png">
                                        </label>
                                        <p>Verduras</p>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="herramientas">
                                            <img src="https://img.icons8.com/ios/100/000000/maintenance.png">
                                        </label>
                                        <p>Herramientas</p>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="almacen">
                                            <img src="https://img.icons8.com/ios/100/000000/small-business.png">
                                        </label>
                                        <p>Almacén</p>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="ropa">
                                            <img src="https://img.icons8.com/ios/100/000000/clothes.png">
                                        </label>
                                        <p>Ropa</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="arte">
                                            <img src="https://img.icons8.com/ios/100/000000/easel.png">
                                        </label>
                                        <p>Arte</p>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="libros">
                                            <img src="https://img.icons8.com/ios/100/000000/literature.png">
                                        </label>
                                        <p>Libros</p>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="infantil">
                                            <img src="https://img.icons8.com/ios/100/000000/babys-room.png">
                                        </label>
                                        <p>Infantíl</p>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="mascota">
                                            <img src="https://img.icons8.com/ios/100/000000/pet-commands-summon.png">
                                        </label>
                                        <p>Mascota</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="hogar">
                                            <img src="https://img.icons8.com/ios/100/000000/sofa-with-buttons.png">
                                        </label>
                                        <p>Hogar</p>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="tecnologia">
                                            <img src="https://img.icons8.com/ios/100/000000/multiple-devices.png">
                                        </label>
                                        <p>Tecnología</p>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="peluqueria">
                                            <img src="https://img.icons8.com/ios/100/000000/barbershop.png">
                                        </label>
                                        <p>Look</p>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="otros">
                                            <img src="https://img.icons8.com/ios/100/000000/circled-o.png">
                                        </label>
                                        <p>Otros</p>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <div class="embed-responsive-item disabled">
                    <h1>Negocios Encontrados:</h1>
                        <div class="module-images">
                                <section class="container__module">
                                <?php
                                    $exQuery = "SELECT * FROM negocio";
                                    $result = $mysqli->query($exQuery);
                                    
                                    foreach($result as $item) { ?>
                                        <div>
                                            <div class="container__img">
                                                <img src="<?php echo($item["foto"]); ?>" alt="" />
                                            </div>

                                            <div>
                                                <div><?php echo($item["nombre"]); ?></div>
                                                <div><?php echo($item["direccion"]); ?></div>
                                            </div>
                                        </div>
                                    <?php } ?>
                            </section>
                        </div>
                    </div>
                    <div class="button__container">
                        <button class="btn btn-success" onclick="back(current - 1)">Atras</button>
                        <button class="btn btn-success" onclick="next(current + 1)">Siguiente</button>
                    </div>
                </div>
            </article>
            <aside class="aside-destacados col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <h2>Destacados</h2>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner" role="listbox">
                            <div class="item active">
                              <img src="images/neg1.jpg">
                            </div>
                            <div class="item">
                              <img src="images/neg2.jpg">
                            </div>
                            <div class="item">
                              <img src="images/neg3.jpg">
                            </div>
                          </div>
                          <!-- Flechas Controladoras -->
                          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
            </aside>
        </div>
    </div>
    <br>
    <br>
    <footer class="footer">
        <p>&copy; Derechos Reservador 2019
            <a href="http://portales.inacap.cl">Inacap</a>
        </p>
        <p>
            Contacto: +569 1111 2222 <br>
            Desarrolladores: Manosalva Lukas. Vera Sergio
        </p>
    </footer>
    <script src="./js/modal.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>