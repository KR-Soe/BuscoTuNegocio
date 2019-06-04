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
    <script src="http://codeorigin.jquery.com/jquery-1.10.2.min.js"></script>
</head>
<body onload="next(current + 1)">
<div id="fb-root"></div>
<script type="text/javascript">
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
    <?php 
        include './includes/nav.php';
        include './includes/header.php';
    ?>
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
                    <?php 
                        include './includes/modalReg.php';
                    ?>
                </p>
            </aside>
        </section>
        <br>
        <div class="row">
            <article class="col-xs-12 col-sm-8 col-md-9 col-lg-9 buscar">
                <div class="screens_container">
                    <?php 
                        include './includes/sComune.php';
                        include './includes/sCategory.php';
                    ?>
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
    <?php
        include './includes/footer.php';
    ?>
    <script src="./js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="./js/modal.js"></script>
    <script src="./js/actions.js"></script>
</body>
</html>