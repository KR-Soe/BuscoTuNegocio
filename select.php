<?php
include("controller.php");
    $comuna = $_POST['opradio'];
    $category = $_POST['cat-rad'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Negocios ENcontrados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/designs.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>Negocios Encontrados:</h1>
    <div class="module-images">
        <section class="container__module">
            <?php
                $exQuery = "SELECT * FROM negocio where comuna_negocio_id='".$comuna."' and rubro_negocio_id='".$category."'";
                $result = $mysqli->query($exQuery);    
                foreach($result as $item) { 
            ?>
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
</body>
</html>