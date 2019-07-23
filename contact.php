<!DOCTYPE html>
<?php
    session_start();
    $varsesion = $_SESSION['user'];
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contacto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/designs.css">
    <link rel="stylesheet" href="css/styles.css">
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
                    <li><a href="premium.php">Negocios Vip</a></li>
                    <li class="active"><a href="contact.php">Contactanos</a></li>
		            <li><a href="politicaPrivacidad.php">Politica de Privacidad</a></li>
                </ul>
        </div>
    </nav>
    <?php 
        include './includes/header.php';
    ?>
    <br>
    <div class="container">
        <section class="row from">
            <form id="comment-section" method="POST" action="./sendmail.php" name="comment-section">
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label>Ingrese su Correo</label>
                        <input type="email" class="form-control" name="mailC" placeholder="ejemplo@gmail.com" maxlength="50" required="required">
                    </div>
                </div> 
                <div class="form-group col-md-6">
                    <label>Comentario</label>
                    <textarea class="form-control" name="commentC" form="comment-section" cols="90" rows="6" required="required"></textarea>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </section>  
    </div>
    <?php
        include './includes/footer.php';
    ?>                  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</body>
</html>