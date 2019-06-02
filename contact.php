<!DOCTYPE html>
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
                    <li><a href="profile.php">Perfil</a></li>
                    <li><a href="premium.php">Negocios Vip</a></li>
                    <li class="active"><a href="contacto.php">Contactanos</a></li>
		            <li><a href="politicaPrivacidad.html">Politica de Privacidad</a></li>
                </ul>
        </div>
    </nav>
    <header>
        <div class="container">
            <img class="logoBtnImg" src="images/BTNLogo.png">
            <h1>Contactanos</h1>
            <h4>Busco Tu Negocio</h4>
        </div>
    </header>
    <div class="container">
        <section class="row from">
            <form id="comment-section">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Ingrese su Correo</label>
                        <input type="email" class="form-control" id="mailC" placeholder="ejemplo@gmail.com" maxlength="50">
                    </div>
                </div> 
            </form>
            <div class="form-group col-md-4">
                <label>Comentario</label>
                <textarea class="form-control" name="commentC" form="comment-section" cols="90" rows="6"></textarea>
            </div>
        </section>  
    </div>                  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</body>
</html>