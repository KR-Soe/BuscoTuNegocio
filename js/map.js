///////////// FUNCION PARA GUARDAR LA UBICACION DE LOS NEGOCIOS
/////// Y GEOREFERENCIAR EL INPUT 
var input = document.getElementById('pac-input');
var autocomplete = new google.maps.places.Autocomplete(input);

autocomplete.addListener('place_changed', function() {
  var place = autocomplete.getPlace();
  if (!place.geometry) {
    window.alert("No existen datos: '" + place.name + "'");
    return;
  }

  var lat = place.geometry.location.lat(),
      lng = place.geometry.location.lng();

  if (place.address_components) {
    address = [
      (place.address_components[0] && place.address_components[0].short_name || ''),
      (place.address_components[1] && place.address_components[1].short_name || ''),
      (place.address_components[2] && place.address_components[2].short_name || '')
    ].join(' ');
  }

    parseFloat(lat);
    parseFloat(lng);
    document.getElementById("lat").value = lat;
    document.getElementById("lng").value = lng;
});

function setupClickListener(id, types) {
  var radioButton = document.getElementById(id);
  radioButton.addEventListener('click', function() {
    autocomplete.setTypes(types);
  });
}