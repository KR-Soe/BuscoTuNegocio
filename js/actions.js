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




function test_address(){
    var address = document.getElementById("address_value").innerHTML;
    console.log(all_address);
}

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

$.getScript("https://maps.googleapis.com/maps/api/js?key=AIzaSyCQdS6rOXdWzhjIvqjwxP0cQ60Nw4pUnW0", function() {
    $("#buscar").click(function() {
        console.log("test")
        var direccion = $("#address_value").val();
        if (direccion !== "") {
            localizar("mapa-geocoder", direccion);
        }
    });
});

/*
function getCat(){
    var radioComu;
    radioComu = document.querySelector('input[name="cat-rad"]:checked').value;
    console.log(radioComu);
}
*/

/*var limit = 2;
let arr = [];

function addValue(value){
    arr.push(value);
    console.log(arr)
}

$(".cat-rad").on("change", function(evt) {
    console.log("como avion")
    if($("input[name='cat-rad']:checked").length > limit) {
        this.checked = false;
        arr = [];
        console.log("ME PASE")
        document.querySelectorAll('.cat-rad').forEach(element => element.addEventListener('click', evt => (evt.target.value)))
        console.log(arr)
    }
});*/

/*window.onload = () => {
    document.querySelectorAll('.cat-rad').forEach(element => element.addEventListener('click', evt => addValue(evt.target.value)))
}*/