<?php

require('modelo.php');

//TESTEAR DATOS
function testear($dato){
    return testearDato($dato);
}
//FIN TESTEAR DATOS

//FUNCIONES PARA LA BASE DE DATOS

//NO HAY PORQUE CADA FUNCION SE CONECTA Y SE DESCONECTA CUANDO LO NECESITA

//FIN DE FUNCIONES PARA LA BASE DE DATOS

//SELECT
//para registro
function buscar($usuario){
    return buscarUsuario($usuario);
}
//para inicio de sesion
function autenticar($usuario, $pass){
    return autenticarUsuario($usuario, $pass);
}
//FIN SELECT

//INSERT

function insertar($usuario, $nombre, $apellidos, $pass, $fecha){
    return insertarUsuario($usuario, $nombre, $apellidos, $pass, $fecha);
}

//FIN INSERT

//SESIONES DE USUARIO
//FIN SESIONES DE USUARIO
?>
