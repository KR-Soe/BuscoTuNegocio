<!DOCTYPE html>
<?php
    session_start();
    $varsesion = $_SESSION['user'];
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Negocios Premium</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/designs.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/actions.js"></script>
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
    <div class="container">
        <section class="main row">
            <article class="col-xs-12 col-sm-8 col-md-9 col-lg-9"> <!-- Se puede borrar el ultimo col-lg porque toma la propiedad del anterior col-->
                <h2>Bienvenido a la Seccion VIP</h2>
                <p>En busco tu negocio buscamos otorgarle la oportunidad a todos ustedes.</p>
                <p>Para formar parte de la comunidad beneficiada usted solo debera completar el registro con los correspondientes datos del negocio al cual busca promover</p>
            </article>
        </section>
        <br>
        <h3>Formulario de Promocion para su Negocio</h3>
        <details>
            <summary>Click Aqui</summary>
            <section class="row from">
                <form method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nombre de su Negocio:</label>
                            <input type="text" class="form-control" name="name" placeholder="Nombre de Ejemplo" required="requiered" maxlength="45">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Rut del Negocio:</label>
                            <input type="text" class="form-control" name="rut" placeholder="11.111.111-1" required="requiered" maxlength="12">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Su Correo Electronico</label>
                            <input type="email" class="form-control" name="email" placeholder="ejemplo@gmail.com" required="requiered" maxlength="70">
                        </div>
                        <div class="form-group col-md-9">
                            <h3>Tabla de Precios</h3>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Precio Mensual de Busco tu Negocio:</label>
                            <input type="text" class="form-control" name="price" disabled="disabled" value="$1.000">
                        </div>
                        <div class="form-group col-md-2">
                            <label>Cantidad de Meses</label>
                            <select class="form-control" id="duracion" name="duracion" required="requiered" onchange="calculoPremium()">
                                <option value="">Seleccione</option>
                                <option value="1">1 Mes</option>
                                <option value="3">3 Meses</option>
                                <option value="6">6 Meses</option>
                                <option value="7">7 Meses</option>
                                <option value="12">1 Año</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Total a Pagar</label>
                            <input type="text" class="form-control" id="total" name="total" disabled="disabled" value="$">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" value="Promocionar">
                        </div>
                    </div>
                </form>
            </section>
        </details>
    </div>      
    <?php
        include './includes/footer.php';
    ?>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</body>
</html>