<!DOCTYPE html>
<?php include('controller.php'); 
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
                <a class="navbar-brand" href="#">Busco Tu Negocio</a>
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
                                            <label>Nombre Completo</label>
                                        </td>
                                        <td>
                                            <input class="reg-data" type="text" name="txtNombre" maxlength="55" required>
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
                            <table class="comunas categorias" border="1px">
                                <tr>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="verduras">
                                            <img src="images/Icons/. (1).jpg">
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="vehiculos">
                                            <img src="images/Icons/. (1).png">
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="almacen">
                                            <img src="images/Icons/. (2).jpg">
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="ropa">
                                            <img src="images/Icons/. (2).png">
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="arte">
                                            <img src="images/Icons/. (3).png">
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="libros">
                                            <img src="images/Icons/. (4).png">
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="maternidad">
                                            <img src="images/Icons/. (5).png">
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="mascota">
                                            <img src="images/Icons/. (6).png">
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="hogar">
                                            <img src="images/Icons/. (7).png">
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="tecnologia">
                                            <img src="images/Icons/. (10).png">
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="peluqueria">
                                            <img src="images/Icons/. (9).png">
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" class="cat-rad" name="otros">
                                            <img src="images/Icons/. (8).png">
                                        </label>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <div class="embed-responsive-item disabled">
                        <div>
                            <h1>Negocios Encontrados:</h1>
                                <?php
                                    $conn = mysql_connect("localhost","root",""); 
                                    mysql_select_db("buscotunegocio",$conn);
                                    $exQuery = "SELECT * FROM negocio";
                                    $result = mysql_query($exQuery);
                                    while ($fila = mysql_fetch_object($result)){ 
                                        $img = $fila->foto;
                                        echo $fila->nombre . "<br>"; 
                                        echo $fila->rubro . "<br>"; 
                                        echo $fila->comuna . "<br>"; 
                                        echo $fila->direccion . "<br>"; 
                                        ?><img src="data:image/jpeg;base64,<?php echo base64_encode($img); ?>"/>
                                        <?php
                                        echo $fila->tags . "<br>"; 
                                    } 
                                    
                                ?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</body>
</html>