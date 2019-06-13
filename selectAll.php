<?php
   include("controller.php");
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
         $exQuery = "SELECT * FROM negocio";
         $result = $mysqli->query($exQuery);
         $total = $result->num_rows;
      ?>
      <h1>Negocios Encontrados(<?php echo($total);?>):</h1>
      <div class="module-images">
         <section class="container__module all">
               <?php    
                  foreach($result as $item) { 
               ?>
               <div>
                  <div class="container__img">
                     <img src="<?php echo($item["foto"]); ?>" alt="" />
                  </div>
                  <div>
                     <div>Nombre: <?php echo($item["nombre"]); ?></div>
                     <div>Direccion: <?php echo($item["direccion"]); ?></div>
                     <div>Rubro: <?php echo($item["rubro"]); ?></div>
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