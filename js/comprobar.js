function campoVacio(campo) {
    "use strict";
    document.getElementById(campo).className = "red-text";
    document.getElementById(campo).innerHTML = "Campo vacio";
}

function mensajeError(campo, mensaje) {
    "use strict";
    document.getElementById(campo).className = "red-text";
    document.getElementById(campo).innerHTML = mensaje;
}

function vaciarError(campo){
    "use strict";
    document.getElementById(campo).className = "green-text";
    document.getElementById(campo).innerHTML = "Correcto";
}

function comprobarNombre() {
    "use strict";

    var nombre = document.getElementById("id_nombre").value;

    if (nombre.trim() === "") {
        campoVacio("error_nombre");
        return false;
    }
    else if (nombre.length > 20) {
        mensajeError("error_nombre", "El nombre tiene que ocupar maximo 20 caracteres");
        return false;
    }
    else {
        vaciarError("error_nombre");
        return true;
    }
}

function comprobarApellidos(){
    "use strict";

    var apellidos = document.getElementById("id_apellidos").value;

    if (apellidos.trim() === "") {
        campoVacio("error_apellidos");
        return false;
    }
    else if (apellidos.length > 20) {
        mensajeError("error_apellidos", "Los apellidos tienen que ocupar maximo 20 caracteres");
        return false;
    }
    else {
        vaciarError("error_apellidos");
        return true;
    }
}

function comprobarUsuario(){
    "use strict";

    var usuario = document.getElementById("id_usuario").value;

    if (usuario.trim() === "") {
        campoVacio("error_usuario");
        return false;
    }
    else if (usuario.length > 10) {
        mensajeError("error_usuario", "El nombre de usuario tiene que ocupar como maximo 10 caracteres");
        return false;
    }
    else {
        vaciarError("error_usuario");
        return true;
    }
}

function comprobarContrasenia(){
    "use strict";

    var pass1 = document.getElementById("id_password").value;
    var pass2 = document.getElementById("id_password_repetir").value;

    if (pass1.trim() === "") {
        campoVacio("error_contrasenia");
        if(pass2.trim() === ""){
            campoVacio("error_contrasenia2");
        }
        return false;
    }
    else{
        if(pass1.length > 10){
            mensajeError("error_contrasenia", "La contraseña debe tener como maximo 10 caracteres");
            return false;
        }
        else if(pass2.length > 10){
            mensajeError("error_contrasenia2", "La contraseña debe tener como maximo 10 caracteres");
            return false;
        }
        else{
            if(pass1 == pass2){
                vaciarError("error_contrasenia");
                vaciarError("error_contrasenia2");
                return true;
            }
            else{
                mensajeError("error_contrasenia", "Las contraseñas no coinciden");
                mensajeError("error_contrasenia2", "Las contraseñas no coinciden");
                return false;
            }
        }
    }
}

function comprobarFecha(){
    "use strict";

    var fecha = document.getElementById("id_fecha").value;

    if (fecha.trim() === "") {
        campoVacio("error_fecha");
        return false;
    }
    else {
        vaciarError("error_fecha");
        return true;
    }
}

function comprobarDatos(){
    "use strict";
    var ok = (comprobarNombre() & comprobarApellidos() & comprobarUsuario() & comprobarContrasenia() & comprobarFecha());

    if(ok == 1){
        return true;
    }
    else{
        return false;
    }

}
