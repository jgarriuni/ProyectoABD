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

function comprobarUsuario() {
    "use strict";

    var usuario = document.getElementById("id_usuario").value;

    if (usuario.trim() === "") {
        campoVacio("error_usuario");
        return false;
    }
    else if (usuario.length > 10) {
        mensajeError("error_usuario", "El usuario tiene que ocupar maximo 10 caracteres");
        return false;
    }
    else {
        vaciarError("error_usuario");
        return true;
    }
}

function comprobarContrasenia(){
    "use strict";

    var pass = document.getElementById("id_password").value;

    if (pass.trim() === ""){
        campoVacio("error_pass");
        return false;
    }
    else if(pass.length > 10){
        mensajeError("error_pass", "La contraseña debe tener como maximo 10 caracteres");
        return false;
    }
    else{
        vaciarError("error_pass");
        return true;
    }
}

function comprobarDatos(){
    "use strict";
    var ok = (comprobarUsuario() & comprobarContrasenia());

    if(ok == 1){
        return true;
    }
    else{
        return false;
    }

}
