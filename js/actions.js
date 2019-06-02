let current = -1

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