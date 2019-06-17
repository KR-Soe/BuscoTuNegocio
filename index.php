<!DOCTYPE html>
<!--         Desarrolladores: Manosalva Lukas. Vera Sergio -->
<?php include('controller.php');
    $varsesion = $_SESSION['user'];
    session_start();
?>
<html>
<?php 
    include './includes/importsHead.php';
?>
<script src="./js/facebook.js"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.3"></script>    
<body onload="next(current + 1)">
    <?php 
        include './includes/nav.php';
        include './includes/header.php';
    ?>
    <br>
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
                        <fb:login-button scope="public_profile,email" size="medium" data-button-type="continue_with" onlogin="checkLoginState();"></fb:login-button>
                        <div id="status">
                        </div>

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
            <a href="premium.php">
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
            </a>
        </div>
        <br>
        <div class="row">
            <article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                <section class="main row">
                    <h3>Busqueda Completa</h3>  
                    <p>Si lo desea, usted tambien podra realizar una busqueda avanzada seleccionando la comuna y buscando todos los negocios independiente de su rubro</p>
                    <p>Para Continuar Haga Click en el siguiente Boton y sera enviado al sitio donde se encuentran todos los negocios</p>
                    <a href="selectAll.php"><button>Buscar Todos</button></a>
                </section>
            </article>
        </div>
        <br>
        <br>
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