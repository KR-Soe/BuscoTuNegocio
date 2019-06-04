<?php
include("controller.php");
    $comuna = $_POST['opradio'];
    $category = $_POST['cat-rad'];
?>
<!DOCTYPE html>
<html>
<?php
    include './includes/importsHead.php';
?>
<head><title>Negocios Encontrados</title></head>
<body>
    <?php 
        include './includes/nav.php';
        include './includes/header.php';
        $exQuery = "SELECT * FROM negocio where comuna_negocio_id='".$comuna."' and rubro_negocio_id='".$category."'";
        $result = $mysqli->query($exQuery);
        $total = $result->num_rows;
    ?>
    <h1>Negocios Encontrados(<?php echo($total);?>):</h1>
    <div class="module-images">
        <section class="container__module">
            <?php    
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
    <?php 
        include './includes/footer.php';
    ?>
</body>
</html>