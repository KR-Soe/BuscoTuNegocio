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
    document.getElementById("total").value = total;
}

function getAddress(address){
    // console.log('xd'+address)
    // return address;
}


///////////// Funciones para la visibilidad del mapa /////////////

function displayMap(){
    var switcher = document.getElementById("map");
    switcher.classList.remove("disabled");
    switcher.classList.add("enabled");
    var switcher = document.getElementById("hide_container");
    switcher.classList.remove("disabled");
    switcher.classList.add("enabled");
    var switcher = document.getElementById("display_container");
    switcher.classList.add("disabled");
    switcher.classList.remove("enabled");
}

function hideMap(){
    var switcher = document.getElementById("map");
    switcher.classList.remove("enabled");
    switcher.classList.add("disabled");
    var switcher = document.getElementById("hide_container");
    switcher.classList.remove("enabled");
    switcher.classList.add("disabled");
    var switcher = document.getElementById("display_container");
    switcher.classList.remove("disabled");
    switcher.classList.add("enabled");
}

function mapSwitcher(){
    var switchh = document.getElementById("map");
    switchh.classList.remove("disabled");
    switchh.classList.add("enabled");
    var switchh = document.getElementById("display_container");
    switchh.classList.remove("enabled");
    switchh.classList.add("disabled");
    var switchh = document.getElementById("hide_container");
    switchh.classList.remove("disabled");
    switchh.classList.add("enabled");
}