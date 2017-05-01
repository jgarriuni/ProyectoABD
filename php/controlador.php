<?php

require('modelo.php');

//FUNCIONES PARA LA BASE DE DATOS
function conectar(){
    return conectarBBDD();
}

function desconectar(){
    desconectarBBDD();
}

//FIN DE FUNCIONES PARA LA BASE DE DATOS

//SELECT

function buscar($usuario){
    return buscarUsuario($usuario);
}

//FIN SELECT

//INSERT

function insertar($usuario, $nombre, $apellidos, $pass, $fecha){
    return insertarUsuario($usuario, $nombre, $apellidos, $pass, $fecha);
}

//FIN INSERT

//SESIONES DE USUARIO

function cerrarSesion(){
    cerrarSesionUsuario();
}

//FIN SESIONES DE USUARIO
?>
