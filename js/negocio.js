function valNegCha() {
	var name = document.getElementById("txtname").value;
	var rut = document.getElementById("rut").value;
	var email = document.getElementById("email").value;
    var total = document.getElementById("total").value
    if(!name.trim() || !rut.trim() || !email.trim()){
    	alert("No deben haber campos vacios");
        return false
    }
    if(total == 3290 || total == 9870 || total == 19740 || total == 23030 || total == 38480){
       return true;       
    }else{
        alert("Ocurrio un Problema Inesperado");
        return false;    
    }
}