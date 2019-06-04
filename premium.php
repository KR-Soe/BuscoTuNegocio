<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Negocios Premium</title>
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
                    <li><a href="profile.php">Perfil</a></li>
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
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, dolorum unde! Ab voluptatem quos dignissimos beatae quam quidem non? Modi adipisci voluptas quod saepe dicta ducimus labore deserunt illum totam.</p>
            </article>
        </section>
    </div>      
    <?php
        include './includes/footer.php';
    ?>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</body>
</html>