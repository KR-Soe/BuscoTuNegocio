<?php
    $varsesion = $_SESSION['user'];
?>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Busco Tu Negocio</a>
            </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Inicio</a></li>
                    <?php if($varsesion !=null){?>
                    <li><a href="profile.php">Perfil</a></li><?php }?>
                    <li><a href="premium.php">Negocios Vip</a></li>
                    <li><a href="contact.php">Contactanos</a></li>
		            <li><a href="politicaPrivacidad.php">Politica de Privacidad</a></li>
                </ul>
        </div>
</nav>