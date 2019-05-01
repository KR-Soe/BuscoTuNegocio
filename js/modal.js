/* FUNCION QUE ACTIVARÁ EL MODAL */
//obtenemos el modal
var modal = document.getElementById("reg-modal");
//obtenemos el boton
var modalBtn = document.getElementById("modal-btn");
//obtenemos el boton cerrar
var closeBtn = document.getElementById("close-modal-btn");
var done = document.getElementById("reg-done");
//funcion que abrira el modal

modalBtn.addEventListener("click", openModal);
closeBtn.addEventListener("click", closeModal);
window.addEventListener("click", outsideClick);
done.addEventListener("click", closeModal);
function openModal(){
    console.log('test modal')
    modal.style.display = "block";
}

function closeModal(){
    modal.style.display = "none";
}

function outsideClick(e){
    if(e.target == modal){
        modal.style.display = "none";
    }
}