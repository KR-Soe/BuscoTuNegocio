let current = -1
var all_address = [];

function next(number) {
    if(number === 3) {
        return
    }

    const listIframes = document.querySelectorAll(".embed-responsive-item");
    const item =  listIframes[number]

    for(i = 0; i < listIframes.length; i++) {
        listIframes[i].classList.remove("enabled");  
    }
    
    item.classList.add("enabled")
    current = current + 1;
}

function back(number) {
    if(number === -1) {
        return
    }

    const listIframes = document.querySelectorAll(".embed-responsive-item");
    const item =  listIframes[number]

    for(i = 0; i < listIframes.length; i++) {
        listIframes[i].classList.remove("enabled");  
    }
    
    item.classList.add("enabled")
    current = current - 1;
}

function calculoPremium(){
    var meses = document.getElementById("duracion").value
    var total = meses * 3290;
    document.getElementById("total").value = '$'+total;
}



/* ----------------------------------------------------------*/ 
/* ----------------------------------------------------------*/ 
/* ----------------------------------------------------------*/ 
/* ----------------------------------------------------------*/ 

/*++++++++++++++++++ACA SE PROGRAMA LO DEL MAPA+++++++++++++++*/
/* ----------------------------------------------------------*/ 
/* ----------------------------------------------------------*/ 
/* ----------------------------------------------------------*/ 
/* ----------------------------------------------------------*/ 


function localizar(elemento,direccion) {
    var geocoder = new google.maps.Geocoder();
    var map = new google.maps.Map(document.getElementById(elemento), {
      zoom: 16,
      scrollwheel: true,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    
    geocoder.geocode({'address': direccion}, function(results, status) {
        if (status === 'OK') {
            var resultados = results[0].geometry.location,
                resultados_lat = resultados.lat(),
                resultados_long = resultados.lng();
            
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });
        } else {
            var mensajeError = "";
            if (status === "ZERO_RESULTS") {
                mensajeError = "No hubo resultados para la dirección ingresada.";
            } else if (status === "OVER_QUERY_LIMIT" || status === "REQUEST_DENIED" || status === "UNKNOWN_ERROR") {
                mensajeError = "Error general del mapa.";
            } else if (status === "INVALID_REQUEST") {
                mensajeError = "Error de la web. Contacte con Name Agency.";
            }
            alert(mensajeError);
        }
    });
}