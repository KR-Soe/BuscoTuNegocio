var input = document.getElementById('pac-input');
var autocomplete = new google.maps.places.Autocomplete(input);

autocomplete.addListener('place_changed', function() {
  // infowindow.close();
  
  var place = autocomplete.getPlace();
  // marker.setVisible(false);
  if (!place.geometry) {
    // User entered the name of a Place that was not suggested and
    // pressed the Enter key, or the Place Details request failed.
    window.alert("No details available for input: '" + place.name + "'");
    return;
  }

  // If the place has a geometry, then present it on a map.
  // if (place.geometry.viewport) {
  //   map.fitBounds(place.geometry.viewport);
  // } else {
  //   map.setCenter(place.geometry.location);
  //   map.setZoom(17);  // Why 17? Because it looks good.
  // }
  // marker.setPosition(place.geometry.location);
  // marker.setVisible(true);

  var address = '';
  var lat = place.geometry.location.lat(),
      lng = place.geometry.location.lng();

  if (place.address_components) {
    address = [
      (place.address_components[0] && place.address_components[0].short_name || ''),
      (place.address_components[1] && place.address_components[1].short_name || ''),
      (place.address_components[2] && place.address_components[2].short_name || '')
    ].join(' ');
  }
  // infowindowContent.children['place-icon'].src = place.icon;
  // infowindowContent.children['place-name'].textContent = place.name;
  // infowindowContent.children['place-address'].textContent = address;
  // infowindow.open(map, marker);
    console.log(lat)
    console.log(lng)
    parseFloat(lat);
    parseFloat(lng);
    document.getElementById("lat").value = lat;
    document.getElementById("lng").value = lng;
});
// Sets a listener on a radio button to change the filter type on Places
// Autocomplete.
function setupClickListener(id, types) {
  var radioButton = document.getElementById(id);
  radioButton.addEventListener('click', function() {
    autocomplete.setTypes(types);
  });
}