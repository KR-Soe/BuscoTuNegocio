<?php
   include("controller.php");
?>
<!DOCTYPE html>
<html>
   <?php
      include './includes/importsHead.php';
   ?>
   <head><title>Negocios Encontrados</title>
      <script src="./js/gmaps.min.js"></script>
      <script src="./js/actions.js"></script>
   </head>
   <body>
   <style>
      #submit{
         border: 0.7px solid white;
         border-radius: 10px;
         background: #2ED67F;
         width: 100%;
         color: black;
      }
      #address{
         width: 100%;
         background: #1F2020;
         color; white;
         border: 0px;
      }
      #map{
         margin: 0px auto;
         border-radius: 5px;
         border: 2px solid green;
         width: 50%;
         height: 50%;
      }
      html, body {
         height: 100%;
         margin: 0;
         padding: 0;
      }
      .enabled{
         display: block;
      }
      .disabled{
         display: none;
      }
   </style>
      <?php 
         include './includes/nav.php';
         include './includes/header.php';
         $exQuery = "SELECT * FROM negocio where estado=1";
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
                     <input type="text" id="address" value="<?php echo($item["direccion"]);?>" disabled/>
                  </div>
                  <div class="profile_button_container">
                     <input type="button" id="submit" value="Ubicar" onclick="console.log('xddd');" />
                  </div>
               </div>
               <?php } ?>
         </section>
      </div>
      <div id="hide_map">
         <div id="display_container" class="enabled" onclick="displayMap()">
            Mostrar Mapa
         </div>
         <div id="hide_container" class="disabled" onclick="hideMap()">
            Ocultar Mapa
         </div>
      </div>
      <div id="map" class="disabled"></div>

      <script>
         initMap=() => {
            var map = new google.maps.Map(document.getElementById('map'), {
               zoom: 11.9,
               center: {lat: -33.447487, lng: -70.673676}
            });
            var geocoder = new google.maps.Geocoder();
            var btnGeo = document.getElementById('submit');
            btnGeo.addEventListener('click', () => {
               geocodeAddress(geocoder, map);
            });
            }
            function geocodeAddress(geocoder, resultsMap) {
            var address = document.getElementById('address').value;
            geocoder.geocode({'address': address}, function(results, status) {
               if (status === 'OK') {
                  
                  ////// MAP SWITCH /////
                  mapSwitcher();
                  ////// MAP SWITCH /////

                  resultsMap.setCenter(results[0].geometry.location);
                  var marker = new google.maps.Marker({
                  map: resultsMap,
                  position: results[0].geometry.location,
                  });
               } else {
                  alert('Algo salio mal: ' + status);
               }
            });
            }
      </script>
      <br>
      <br>
      <br>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCM8jg6rTajbqw1at8SvtogjNn1Jzxzpxo&callback=initMap" ></script>
      <?php 
         include './includes/footer.php';
      ?>
   </body>
</html>