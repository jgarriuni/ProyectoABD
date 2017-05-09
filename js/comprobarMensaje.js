function campoVacio(campo){
    "use strict";
    document.getElementById(campo).className = "red-text";
    document.getElementById(campo).innerHTML = "Campo vacio";
}

function mensajeError(campo, mensaje) {
    "use strict";
    document.getElementById(campo).className = "red-text";
    document.getElementById(campo).innerHTML = mensaje;
}

function vaciarError(campo) {
    "use strict";
    document.getElementById(campo).className = "green-text";
    document.getElementById(campo).innerHTML = "Correcto";
}

function comprobarMensaje() {
    "use strict";

    var mensaje = document.getElementById("id_mensaje").value;

    if (mensaje.trim() === "") {
        campoVacio("error_mensaje");
        return false;
    }
    else if (mensaje.length > 130) {
        mensajeError("error_mensaje", "El mensaje solo puede tener 130 caracteres como maximo");
        return false;
    }
    else {
        vaciarError("error_mensaje");
        return true;
    }
}

function comprobarDestinatario(){
	
	var todos = document.getElementById("id_todos");
	var grupo = document.getElementById("id_grupo");
	var privado = document.getElementById("id_usuario");
	
	if(!todos.checked && !grupo.checked && !privado.checked){
		campoVacio("error_destinatario");
		return false;
	}
	else{
		vaciarError("error_destinatario");
		return true;
	}
}

function mandarMensaje(){
    
    var ok = (comprobarMensaje() & comprobarDestinatario());
    
    if(ok == 1){
        return true;
    }
    else{
        return false;
    }

}